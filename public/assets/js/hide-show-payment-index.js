// LoLo Start
document.getElementById('loloHideShow').addEventListener('click', function() {
    var icon = this.querySelector('h3 span i.fa-chevron-down');
    icon.classList.toggle('fa-rotate-180');
    var x = document.getElementById("liftInLiftOff");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
});
// LoLo Ends


// SY Start
document.getElementById('syHideShow').addEventListener('click', function() {
    var icon = this.querySelector('h3 span i.fa-chevron-down');
    icon.classList.toggle('fa-rotate-180');
    var x = document.getElementById("storageYard");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
});
// SY Ends


// SW Start
document.getElementById('swHideShow').addEventListener('click', function() {
    var icon = this.querySelector('h3 span i.fa-chevron-down');
    icon.classList.toggle('fa-rotate-180');
    var x = document.getElementById("storageWarehouse");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
});
// SW Ends


// Trucking Start
document.getElementById('truckingHideShow').addEventListener('click', function() {
    var icon = this.querySelector('h3 span i.fa-chevron-down');
    icon.classList.toggle('fa-rotate-180');
    var x = document.getElementById("trucking");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
});
// Trucking Ends


// PM Start
document.getElementById('PMHideShow').addEventListener('click', function() {
    var icon = this.querySelector('h3 span i.fa-chevron-down');
    icon.classList.toggle('fa-rotate-180');
    var x = document.getElementById("pluggingMonitoring");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
});
// PM Ends


// SS Start
document.getElementById('SSHideShow').addEventListener('click', function() {
    var icon = this.querySelector('h3 span i.fa-chevron-down');
    icon.classList.toggle('fa-rotate-180');
    var x = document.getElementById("stuffingStripping");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
});
// SS Ends
