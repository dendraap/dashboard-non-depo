
// Mendapatkan tanggal saat ini
const today = new Date();

// Mendapatkan bulan akhir saat ini
const lastMonth = new Date(today.getFullYear(), today.getMonth() + 1, 0);

// Mendapatkan tahun terakhir saat ini
const lastYear = new Date(today.getFullYear()+1,0,0);

// Format tanggal ke dalam bentuk "YYYY-MM-DD"
const formattedDate = lastMonth.toISOString().split('T')[0];

// Default value select month START
document.getElementById("lolo_month_select").value = formattedDate;
document.getElementById("trucking_month_select").value = formattedDate;
document.getElementById("pm_month_select").value = formattedDate;
document.getElementById("ss_month_select").value = formattedDate;
// Default value select month END

// Default option
$.extend( $.fn.dataTable.defaults, {
    searching: false,
    paging: false,
    responsive: true,
    scrollCollapse: true,
    fixedHeader:true,
    scrollX: true,
    scrollY: 220,
});

let pluggingMonitoringTable = new DataTable('#pluggingMonitoringeTableSort', {
    ordering: [],
});


function prepareChartData() {
    var syChartDataTotalStr = @json($syChartTotal);
    var syChartDataTotal = syChartDataTotalStr.map(function(str) {
        return parseInt(str, 10);
    });
    syChartDataTotal.unshift(@json($syRemains));

    var syChartLabel = @json($syChartLabel);
    syChartLabel.unshift('Remains');

    return {
        data: syChartDataTotal,
        labels: syChartLabel,
    };
}


// SY Chart Start
// var syChartDataTotalStr = @json($syChartTotal);
var syChartDataTotalStr = @json({{$syChartTotal}});
var syChartDataTotal = syChartDataTotalStr.map(function(str) {
    return parseInt(str, 10);
});
syChartDataTotal.unshift(@json($syRemains));
var syChartLabel = @json($syChartLabel);
syChartLabel.unshift('Remains');
var syOptions = {
    series: syChartDataTotal,
    labels: syChartLabel,
    plotOptions: {
        pie: {
            donut: {
                labels: {
                    show: true,
                    total: {
                        show: true,
                        label: 'Remains:',
                        formatter: () => (@json($syRemains)) + ' TEUs'
                    }
                }
            }
        }
    },
    chart: {
        type: 'donut',
        height: 'auto',
        width: '100%',
        toolbar: {
            show: true,
            offsetX: 0,
            offsetY: 0,
            tools: {
                download: `<svg xmlns="http://www.w3.org/2000/svg" height="1.25em" viewBox="0 0 128 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M64 360a56 56 0 1 0 0 112 56 56 0 1 0 0-112zm0-160a56 56 0 1 0 0 112 56 56 0 1 0 0-112zM120 96A56 56 0 1 0 8 96a56 56 0 1 0 112 0z"/></svg>`,
                selection: false,
                zoom: false,
                zoomin: false,
                zoomout: false,
                pan: false,
                reset: false,
                customIcons: []
            },
        },
    },
    responsive: [{
        breakpoint: 480,
    }],
    legend: {
        show: false,
        position: 'bottom'
    },
    tooltip: {
        shared: true,
        intersect: false,
        y: {
            formatter: function (y) {
            if (typeof y !== "undefined") {
                return y.toFixed(0) + " points";
            }
            return y;
            }
        }
    }
};
var syChart = new ApexCharts(document.querySelector("#LuasStorageYard"), syOptions);
syChart.render();
// SY Chart Ends

// Storage Yard Select Type Starts
var syTable = $("#storageYardTableSort")
var syData = @json($syData); // Mengambil return dari controller metode GET
syData.forEach(function (item) { // Gati NULL dengan 'Belum'
    if (item.keluar === null) {
        item.keluar = 'Belum';
    }
});
var syTable = $('#storageYardTableSort').DataTable({ // Perubahan di Storage Yard dari Select Option
    data: syData,
    columns: [
        { data: 'owner', className: 'text-center py-0' },
        { data: 'masuk', className: 'text-right py-0' },
        { data: 'keluar', className: 'text-center py-0' },
        { data: 'total', className: 'text-center py-0' }
    ]
});
$(document).ready(function(){
    $('#syCategory').change(function(event){
        var selectedType = $(this).val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            url: '{{ route('paymentJSON') }}',
            data: { sySelectedType: selectedType },
            dataType: 'json',
            success: function(response) {
                $('#syUsed').text(response.syUsed);
                $('.syType').text(response.syType);
                $('#syTotalCustomer').text(response.syTotalCustomer);
                $('#syMax').text(response.syMax);
                $('#syRemains').text(response.syRemains);
                $('#syRemainsPercent').text(response.syRemainsPercent+'%');
                $('#syUsedPercent').text(response.syUsedPercent+'%');
                $('#syH3').text('Total '+response.syStorageType);
                $('#syRemainsPercentCon').removeClass(function (index, className) {
                    return (className.match(/(^|\s)p\d+/g) || []).join(' ');
                }).addClass('p' + response.syRemainsPercent);
                $('#syUsedPercentCon').removeClass(function (index, className) {
                    return (className.match(/(^|\s)p\d+/g) || []).join(' ');
                }).addClass('p' + response.syUsedPercent);

                if (response.syRemainsPercent > 50){
                    $('#syRemainsPercentCon').addClass('over50');
                } else {
                    $('#syRemainsPercentCon').removeClass('over50');
                }
                if (response.syUsedPercent > 50){
                    $('#syUsedPercentCon').addClass('over50');
                } else {
                    $('#syUsedPercentCon').removeClass('over50');
                }


                // Table
                syTable.clear().draw();
                response.syData.forEach(function (syData) {
                    if (syData.keluar === null) {
                        syData.keluar = 'Belum';
                    }
                    syTable.row.add(syData).draw(false);
                });

                // Chart
                syChartDataTotal = response.syChartTotal.map(function(str) {
                    return parseInt(str, 10);
                });
                syChartDataTotal.unshift(response.syRemains);
                response.syChartLabel.unshift('Remains');
                syOptions.series = syChartDataTotal;
                syOptions.labels = response.syChartLabel;
                syOptions.plotOptions.pie.donut.labels.total.formatter = () => response.syRemains + ' ' + response.syType;
                syChart.updateOptions(syOptions);
            },
            error: function(error) {
                console.log("Kesalahan:", error);
                alert('Terjadi kesalahan');
            }
        })
    })
})
// Storage Yard Select Type Ends


// SW Chart Start
var swChartDataTotalStr = @json($swChartTotal);
var swChartDataTotal = swChartDataTotalStr.map(function(str) {
    return parseInt(str, 10);
});
swChartDataTotal.unshift(@json($swRemains));
var swChartLabel = @json($swChartLabel);
swChartLabel.unshift('Remains');
var swOptions = {
    series: swChartDataTotal,
    labels: swChartLabel,
    plotOptions: {
        pie: {
            donut: {
                labels: {
                    show: true,
                    total: {
                        show: true,
                        label: 'Remains:',
                        formatter: () => (@json($swRemains)) + ' m2'
                    }
                }
            }
        }
    },
    chart: {
        type: 'donut',
        height: 'auto',
        width: '100%',
        toolbar: {
            show: true,
            offsetX: 0,
            offsetY: 0,
            tools: {
                download: `<svg xmlns="http://www.w3.org/2000/svg" height="1.25em" viewBox="0 0 128 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M64 360a56 56 0 1 0 0 112 56 56 0 1 0 0-112zm0-160a56 56 0 1 0 0 112 56 56 0 1 0 0-112zM120 96A56 56 0 1 0 8 96a56 56 0 1 0 112 0z"/></svg>`,
                selection: false,
                zoom: false,
                zoomin: false,
                zoomout: false,
                pan: false,
                reset: false,
                customIcons: []
            },
        },
    },
    responsive: [{
        breakpoint: 480,
    }],
    legend: {
        show: false,
        position: 'bottom'
    },
    tooltip: {
        shared: true,
        intersect: false,
        y: {
            formatter: function (y) {
            if (typeof y !== "undefined") {
                return y.toFixed(0) + " points";
            }
            return y;
            }
        }
    }
};
var swChart = new ApexCharts(document.querySelector("#LuasStorageWarehouse"), swOptions);
swChart.render();
// SW Chart Ends

// Storage Warehouse Select Type Starts
var swTable = $("#storageWarehouseTableSort");
var swData = @json($swData); // Mengambil return dari controller metode GET
swData.forEach(function (item) { // Ganti NULL dengan 'Belum'
    if (item.keluar === null) {
        item.keluar = 'Belum';
    }
});
var swTable = $('#storageWarehouseTableSort').DataTable({ // Perubahan di Storage Yard dari Select Option
    data: swData,
    columns: [
        { data: 'owner', className: 'text-center py-0' },
        { data: 'masuk', className: 'text-right py-0' },
        { data: 'keluar', className: 'text-center py-0' },
        { data: 'total', className: 'text-center py-0' }
    ]
});
$(document).ready(function(){
    $('#swCategory').change(function(event){
        var selectedType = $(this).val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            url: '{{ route('paymentJSON') }}',
            data: { swSelectedType: selectedType },
            dataType: 'json',
            success: function(response) {
                $('#swUsed').text(response.swUsed);
                $('.swType').text(response.swType);
                $('#swTotalCustomer').text(response.swTotalCustomer);
                $('#swMax').text(response.swMax);
                $('#swRemains').text(response.swRemains);
                $('#swRemainsPercent').text(response.swRemainsPercent+'%');
                $('#swUsedPercent').text(response.swUsedPercent+'%');
                $('#swStorageType').text('Total '+response.swStorageType)
                $('#swRemainsPercentCon').removeClass(function (index, className) {
                    return (className.match(/(^|\s)p\d+/g) || []).join(' ');
                }).addClass('p' + response.swRemainsPercent);
                $('#swUsedPercentCon').removeClass(function (index, className) {
                        return (className.match(/(^|\s)p\d+/g) || []).join(' ');
                    }).addClass('p' + response.swUsedPercent);
                if (response.swRemainsPercent > 50){
                    $('#swRemainsPercentCon').addClass('over50');
                } else {
                    $('#swRemainsPercentCon').removeClass('over50');
                }
                if (response.swUsedPercent > 50){
                    $('#swUsedPercentCon').addClass('over50');
                } else {
                    $('#swUsedPercentCon').removeClass('over50');
                }

                // Table
                swTable.clear().draw();
                response.swData.forEach(function (swData) {
                    if (swData.keluar === null) {
                        swData.keluar = 'Belum';
                    }
                    swTable.row.add(swData).draw(false);
                });

                swChartDataTotal = response.swChartTotal.map(function(str) {
                    return parseInt(str, 10);
                });

                // Chart
                swChartDataTotal.unshift(response.swRemains);
                response.swChartLabel.unshift('Remains');
                swOptions.series = swChartDataTotal;
                swOptions.labels = response.swChartLabel;
                swOptions.plotOptions.pie.donut.labels.total.formatter = () => response.swRemains + ' ' + response.swType;
                swChart.updateOptions(swOptions);
            },
            error: function(error) {
                console.log("Kesalahan:", error);
                alert('Terjadi kesalahan');
            }
        })
    })
})
// Storage Warehouse Select Type Ends


// PM Select Month Starts

// PM Select Month Ends

// Lolo Chart Start
var loloTotalOrderChart = @json($loloTotalOrderChart);
var loloServiceTimeOrderChartStr = @json($loloServiceTimeOrderChart);
var loloServiceTimeOrderChart = loloServiceTimeOrderChartStr.map(function(str) {
    return parseInt(str, 10);
});
var loloOptions = {
    series: [
        {
            name: 'Total Order',
            type: 'column',
            data: loloTotalOrderChart
        },
        {
            name: 'Service Time',
            type: 'line',
            data: loloServiceTimeOrderChart
        }
    ],
    chart: {
        stacked: false,
        toolbar: {
            show: true,
            offsetX: 0,
            offsetY: 0,
            tools: {
                download: `<svg xmlns="http://www.w3.org/2000/svg" height="1.25em" viewBox="0 0 128 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M64 360a56 56 0 1 0 0 112 56 56 0 1 0 0-112zm0-160a56 56 0 1 0 0 112 56 56 0 1 0 0-112zM120 96A56 56 0 1 0 8 96a56 56 0 1 0 112 0z"/></svg>`,
                selection: false,
                zoom: false,
                zoomin: false,
                zoomout: false,
                pan: false,
                reset: false,
                customIcons: []
            },
        },
    },
    stroke: {
        width: [0, 5],
        curve: 'smooth'
    },
    plotOptions: {
        bar: {
            columnWidth: '75%',
            borderRadius: 3,
            borderRadiusApplication: 'end',
        }
    },
    fill: {
        opacity: [0.85, 1],
        type: ["gradient","solid"],
        gradient: {
            inverseColors: false,
            shade: 'light',
            type: "vertical",
            opacityFrom: 1,
            opacityTo: 0.3,
            stops: [0, 100, 100]
        },
    },
    markers: {
        size: 0
    },
    legend: {
        position: 'top',
        horizontalAlign: 'left'
    },
    xaxis: {
        categories:['Jan', 'Feb', 'March', 'Apr', 'May', 'June', 'July',
            'Aug', 'Sep', 'Okt', 'Nov', 'Des'
        ],
    },
    tooltip: {
        shared: true,
        intersect: false,
        y: {
            formatter: function (y) {
            if (typeof y !== "undefined") {
                return y.toFixed(0) + " points";
            }
            return y;
            }
        }
    }
};

var loloChart = new ApexCharts(document.querySelector("#totalOrderVsDowntime"), loloOptions);
loloChart.render();
// LoLo Chart Ends

// Datepicker untuk Lift On/Lift Off dengan plugin selectMonth
var loloMinDate = <?php echo json_encode($min_date_lolo[0]->year_and_month); ?>;
const loloMonthSelect = flatpickr("#lolo_month_select", {
    altInput: true,
    altFormat: "F Y",
    dateFormat: "Y-m",
    plugins: [new monthSelectPlugin({
        shorthand: true,
        dateFormat: "Y-m"
    })],
    minDate: loloMinDate,
    maxDate: lastMonth, // Membatasi bulan maksimal hingga bulan saat ini
    onValueUpdate: function(selectedDates, dateStr, instance) {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            url: '{{ route('paymentJSON') }}',
            data: { loloSelectMonth: dateStr },
            dataType: 'json',
            success: function(response) {
                // alert(response.loloPendingOrder);
                $('#loloTotalOrder').text(response.loloTotalOrder);
                $('#loloFinishOrder').text(response.loloFinishOrder);
                $('#loloPendingOrder').text(response.loloPendingOrder);
                $('#loloServiceTime').text(response.loloServiceTimeValue)
            },
            error: function(error) {
                console.log("Kesalahan:", error);
                alert('Terjadi kesalahan');
            }
        });
    },
});

// Yearpicker untuk Lift On/Lift Off
$(document).ready(function(){
    $('#lolo_year_select').change(function(event){
        var selectedType = $(this).val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            url: '{{ route('paymentJSON') }}',
            data: { loloSelectedYear: selectedType },
            dataType: 'json',
            success: function(response) {
                $('#loloAvgTotalOrder').text(response.loloAverageTotalOrder);
                $('#loloHighestTotalOrder').text(response.loloHighestTotalOrder);
                $('#loloLowestTotalOrder').text(response.loloLowestTotalOrder);
                $('#loloAvgServiceTime').text(response.loloAverageServiceTime);

                // Chart
                loloOptions.series[0].data = response.loloTotalOrderChart;
                loloOptions.series[1].data = response.loloServiceTimeOrderChart;
                loloChart.updateOptions(loloOptions);

            },
            error: function(error) {
                console.log("Kesalahan:", error);
                alert('Terjadi kesalahan');
            }
        })
    })
})



    // Trucking Chart Start
    var truckingTotalOrderChart = @json($truckingTotalOrderChart);
    var truckingOptions = {
    series: [
        {
            name: 'TEAM A',
            type: 'area',
            data: truckingTotalOrderChart
        },
    ],
    chart: {
        stacked: false,
        toolbar: {
            show: true,
            offsetX: 0,
            offsetY: 0,
            tools: {
                download: `<svg xmlns="http://www.w3.org/2000/svg" height="1.25em" viewBox="0 0 128 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M64 360a56 56 0 1 0 0 112 56 56 0 1 0 0-112zm0-160a56 56 0 1 0 0 112 56 56 0 1 0 0-112zM120 96A56 56 0 1 0 8 96a56 56 0 1 0 112 0z"/></svg>`,
                selection: false,
                zoom: false,
                zoomin: false,
                zoomout: false,
                pan: false,
                reset: false,
                customIcons: []
            },
        },
    },
    dataLabels: {
        enabled: false,
    },
    stroke: {
        width: 5,
        curve: 'smooth'
    },
    fill: {
        opacity: 1,
        type: "gradient",
        gradient: {
            inverseColors: true,
            shade: 'light',
            type: "vertical",
            opacityFrom: 1,
            opacityTo: 0.3,
            stops: 100,
        },
    },
    markers: {
        size: 5
    },
    legend: {
        position: 'top',
        horizontalAlign: 'left'
    },
    xaxis: {
        categories:['Jan', 'Feb', 'March', 'Apr', 'May', 'June', 'July',
            'Aug', 'Sep', 'Okt', 'Nov', 'Des'
        ],
    },
    tooltip: {
        shared: true,
        intersect: false,
        y: {
            formatter: function (y) {
            if (typeof y !== "undefined") {
                return y.toFixed(0) + " points";
            }
            return y;
            }
        }
    }
};

var truckingChart = new ApexCharts(document.querySelector("#totalOrderTrucking"), truckingOptions);
truckingChart.render();
// Trucking Chart Ends

// Datepicker untuk Trucking dengan plugin selectMonth
var truckingMinDate = <?php echo json_encode($min_date_trucking[0]->year_and_month); ?>;
const truckingMonthSelect = flatpickr("#trucking_month_select", {
    altInput: true,
    altFormat: "F Y",
    dateFormat: "Y-m",
    plugins: [new monthSelectPlugin({
        shorthand: true,
        dateFormat: "Y-m"
    })],
    minDate: truckingMinDate,
    maxDate: lastMonth,
    onValueUpdate: function(selectedDates, dateStr, instace){
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            url: '{{ route('paymentJSON') }}',
            data: { truckingSelectMonth: dateStr },
            dataType: 'json',
            success: function(response) {
                // alert(response.loloPendingOrder);
                $('#truckingTotalOrder').text(response.truckingTotalOrder);
                $('#truckingFinishOrder').text(response.truckingFinishOrder);
                $('#truckingPendingOrder').text(response.truckingPendingOrder);
                $('#truckingServiceTime').text(response.truckingServiceTime)
            },
            error: function(error) {
                console.log("Kesalahan:", error);
                alert('Terjadi kesalahan');
            }
        })
    }
});

// // Yearpicker untuk Trucking
$(document).ready(function(){
    $('#trucking_year_select').change(function(event){
        var selectedType = $(this).val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            url: '{{ route('paymentJSON') }}',
            data: { truckingSelectedYear: selectedType },
            dataType: 'json',
            success: function(response) {
                $('#truckingAvgTotalOrder').text(response.truckingAverageTotalOrder);
                $('#truckingHighestTotalOrder').text(response.truckingHighestTotalOrder);
                $('#truckingLowestTotalOrder').text(response.truckingLowestTotalOrder);
                $('#truckingAvgServiceTime').text(response.truckingAverageServiceTime);

                // Chart
                truckingOptions.series[0].data = response.truckingTotalOrderChart;
                truckingChart.updateOptions(truckingOptions);

            },
            error: function(error) {
                console.log("Kesalahan:", error);
                alert('Terjadi kesalahan');
            }
        })
    })
})

// Datepicker untuk Plugging & Monitoring dengan plugin selectMonth
var pmMinDate = <?php echo json_encode($min_date_pm[0]->year_and_month); ?>;
const pmMonthSelect = flatpickr("#pm_month_select", {
    altInput: true,
    altFormat: "F Y",
    dateFormat: "Y-m",
    plugins: [new monthSelectPlugin({
        shorthand: true,
        dateFormat: "Y-m"
    })],
    // selectedDate: lastMonth,
    minDate: pmMinDate,
    maxDate: lastMonth, // Membatasi bulan maksimal hingga bulan saat ini
    // onChange: function (selectedDates, dateStr, instance) {
    //     // Saat tanggal dipilih, simpan dalam variabel
    //     pm_selectedMonth = dateStr;
    // },
});


// SS Chart Start
var ssTotalOrderChart = @json($ssTotalOrderChart);
var ssOptions = {
    series: [
        {
            name: 'TEAM A',
            type: 'area',
            data: ssTotalOrderChart
        },
    ],
    chart: {
        stacked: false,
        height: "100%",
        toolbar: {
            show: true,
            offsetX: 0,
            offsetY: 0,
            tools: {
                download: `<svg xmlns="http://www.w3.org/2000/svg" height="1.25em" viewBox="0 0 128 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M64 360a56 56 0 1 0 0 112 56 56 0 1 0 0-112zm0-160a56 56 0 1 0 0 112 56 56 0 1 0 0-112zM120 96A56 56 0 1 0 8 96a56 56 0 1 0 112 0z"/></svg>`,
                selection: false,
                zoom: false,
                zoomin: false,
                zoomout: false,
                pan: false,
                reset: false,
                customIcons: []
            },
        },
    },
    dataLabels: {
        enabled: false,
    },
    stroke: {
        width: 5,
        curve: 'smooth'
    },
    fill: {
        opacity: 1,
        type: "gradient",
        gradient: {
            inverseColors: true,
            shade: 'light',
            type: "vertical",
            opacityFrom: 1,
            opacityTo: 0.3,
            stops: 100,
        },
    },
    markers: {
        size: 5
    },
    legend: {
        position: 'top',
        horizontalAlign: 'left'
    },
    xaxis: {
        categories:['Jan', 'Feb', 'March', 'Apr', 'May', 'June', 'July',
            'Aug', 'Sep', 'Okt', 'Nov', 'Des'
        ],
    },
    tooltip: {
        shared: true,
        intersect: false,
        y: {
            formatter: function (y) {
            if (typeof y !== "undefined") {
                return y.toFixed(0) + " points";
            }
            return y;
            }
        }
    }
};

var ssChart = new ApexCharts(document.querySelector("#totalOrderStuffingStripping"), ssOptions);
ssChart.render();
// SS Chart Ends

// Datepicker untuk Stuffing/Stripping dengan plugin selectMonth
var ssMinDate = <?php echo json_encode($min_date_ss[0]->year_and_month); ?>;
var ssTable = $('#stuffingStrippingTableSort');
var ssData = @json($ssData); // Mengambil return dari controller metode GET
var ssTable = $('#stuffingStrippingTableSort').DataTable({ // Perubahan di Stuffing Stripping dari Datepicker
    data: ssData,
    columns: [
        { data: 'id', className: 'text-center py-0' },
        { data: 'total', className: 'text-center py-0' },
        { data: 'finishOrder', className: 'text-center py-0' },
        { data: 'pendingOrder', className: 'text-center py-0' },
        {
            data: 'persen',
            className: 'text-center py-0',
            render: function (data, type, row) {
                if (type === 'display') {
                    return '<div class="d-flex flex-row align-items-center h-100 w-100">'+
                        '<div class="progress col-6" style="height: 19%" role="progressbar" aria-label="Success example" aria-valuenow="' + data + '" aria-valuemin="0" aria-valuemax="100">' +
                        '<div class="progress-bar h-100" style="width: ' + data + '%"></div>' +
                        '</div>' +
                        '<div class="col-6">' + data + '%' +
                        '</div>' +
                        '</div>';
                }
                return data;
            }
        },
        { data: 'start_date', className: 'text-center py-0'}
    ]
});
const ssMonthSelect = flatpickr("#ss_month_select", {
    altInput: true,
    altFormat: "F Y",
    dateFormat: "Y-m",
    plugins: [new monthSelectPlugin({
        shorthand: true,
        dateFormat: "Y-m"
    })],
    minDate: ssMinDate,
    maxDate: lastMonth,
    onValueUpdate: function(selectedDates, dateStr, instance){
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            url: '{{ route('paymentJSON') }}',
            data: { ssSelectMonth: dateStr },
            dataType: 'json',
            success: function(response) {
                $('#ssTotalOrder').text(response.ssTotalOrder);
                $('#ssFinishOrder').text(response.ssFinishOrder);
                $('#ssPendingOrder').text(response.ssPendingOrder);
                $('#ssServiceTime').text(response.ssServiceTime);
                ssTable.clear().draw();
                response.ssData.forEach(function (ssData) {
                    ssTable.row.add(ssData).draw(false);
                });
            },
            error: function(error) {
                console.log("Kesalahan:", error);
                alert('Terjadi kesalahan');
            }
        });
    }
});

// // Yearpicker untuk SS
$(document).ready(function(){
    $('#ss_year_select').change(function(event){
        var selectedType = $(this).val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            url: '{{ route('paymentJSON') }}',
            data: { ssSelectedYear: selectedType },
            dataType: 'json',
            success: function(response) {
                $('#ssAverageTotalOrder').text(response.ssAverageTotalOrder);
                $('#ssHighestTotalOrder').text(response.ssHighestTotalOrder);
                $('#ssLowestTotalOrder').text(response.ssLowestTotalOrder);
                $('#ssAvgServiceTime').text(response.ssAverageServiceTime);
                $('#ssTopPrincipal').text(response.ssTopPrincipal);
                $('#ssTopForwarder').text(response.ssTopForwarder);
                $('#ssTopShipper').text(response.ssTopShipper);
                $('#ssTopCargo').text(response.ssTopCargo);

                // Chart
                ssOptions.series[0].data = response.ssTotalOrderChart;
                ssChart.updateOptions(ssOptions);

            },
            error: function(error) {
                console.log("Kesalahan:", error);
                alert('Terjadi kesalahan');
            }
        })
    })
})



// PM Chart Start
var PmOptions = {
    series: [
        {
            name: 'TEAM A',
            data: [23, 11, 22]
        },
    ],
    chart: {
        type: 'bar',
        stacked: false,
        height: '95%',
        toolbar: {
            show: true,
            offsetX: 0,
            offsetY: 0,
            tools: {
                download: `<svg xmlns="http://www.w3.org/2000/svg" height="1.25em" viewBox="0 0 128 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M64 360a56 56 0 1 0 0 112 56 56 0 1 0 0-112zm0-160a56 56 0 1 0 0 112 56 56 0 1 0 0-112zM120 96A56 56 0 1 0 8 96a56 56 0 1 0 112 0z"/></svg>`,
                selection: false,
                zoom: false,
                zoomin: false,
                zoomout: false,
                pan: false,
                reset: false,
                customIcons: []
            },
        },
    },
    dataLabels: {
        enabled: false,
    },
    stroke: {
        width: 0,
        curve: 'smooth'
    },
    plotOptions: {
        bar: {
            columnWidth: '75%',
            borderRadius: 5,
            borderRadiusApplication: 'end',
            distributed: true
        }
    },
    fill: {
        opacity: 1,
        type: "gradient",
        gradient: {
            inverseColors: false,
            shade: 'light',
            type: "vertical",
            opacityFrom: 1,
            opacityTo: 0.3,
            stops: [0, 100],
        },
    },
    labels: ['Shift 1', 'Shift 2', 'Shift 3'],
    markers: {
        size: 0
    },
    legend: {
        show: false,
        position: 'top',
        horizontalAlign: 'left'
    },
    xaxis: {
        type: 'category',
        categories: [
            'Shift 1', 'Shift 2', 'Shift 3'
        ],
    },
    tooltip: {
        shared: true,
        intersect: false,
        y: {
            formatter: function (y) {
            if (typeof y !== "undefined") {
                return y.toFixed(0) + " points";
            }
            return y;
            }
        }
    }
};

var pmChart = new ApexCharts(document.querySelector("#totalMonitoringTiapShift"), PmOptions);
pmChart.render();
// PM Chart Ends
