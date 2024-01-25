<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class PaymentControllers extends Controller
{
    public function payment(){
        $year = Carbon::now()->year;
        $month = Carbon::now()->month;
        $now = Carbon::now();

        // LoLo Starts
        $year_lolo = DB::table('lolo')
            ->select(DB::raw('YEAR(active_date) as year'))
            ->groupBy(DB::raw('YEAR(active_date)'))
            ->get();

        $min_date_lolo = DB::table('lolo')
            ->selectRaw("DATE_FORMAT(MIN(active_date), '%Y-%m') AS year_and_month")
            ->get();

        $loloTotalOrder = DB::table('lolo')
            ->whereRaw('YEAR(active_date) = ? AND MONTH(active_date) = ?', [$year, $month])
            ->count();

        $loloFinishOrder = DB::table('lolo')
            ->whereRaw('YEAR(active_date) = ? AND MONTH(active_date) = ? AND end_date IS NOT NULL', [$year, $month])
            ->count();

        $loloPendingOrder = DB::table('lolo')
            ->whereRaw('YEAR(active_date) = ? AND MONTH(active_date) = ? AND end_date IS NULL', [$year, $month])
            ->count();

        $loloServiceTime = DB::table('lolo')
            ->selectRaw('AVG(TIMESTAMPDIFF(HOUR, active_date, end_date)) as loloServiceTime')
            ->whereYear('active_date', $year)
            ->whereMonth('active_date', $month)
            ->first();

        $loloServiceTimeValue = number_format($loloServiceTime->loloServiceTime, 1);
        $lolosubquery = DB::table('lolo')
            ->selectRaw('COUNT(active_date) as total')
            ->selectRaw('MONTH(active_date) as month')
            ->whereYear('active_date', $year)
            ->groupBy(DB::raw('MONTH(active_date)'))
            ->get();
        $loloHighestTotalOrder = $lolosubquery->max('total');
        $loloLowestTotalOrder = $lolosubquery->min('total');
        $loloAverageTotalOrder = $lolosubquery->avg('total');
        $loloAverageTotalOrder = number_format($loloAverageTotalOrder, 2);

        $lolosubquery2 = DB::table('lolo')
            ->selectRaw('AVG(TIMESTAMPDIFF(HOUR, active_date, IFNULL(end_date, NOW()))) as average_hours')
            ->whereYear('active_date', $year)
            ->groupBy(DB::raw('MONTH(active_date)'))
            ->get();
        $loloAverageServiceTime = $lolosubquery2->avg('average_hours');
        $loloAverageServiceTime = number_format($loloAverageServiceTime, 2);

        // Chart
        $loloTotalOrderChart = DB::table('lolo')
            ->selectRaw('COUNT(active_date) as total')
            ->selectRaw('MONTH(active_date) as month')
            ->whereYear('active_date', $year)
            ->groupBy(DB::raw('MONTH(active_date)'))
            ->pluck('total')
            ->toArray();
        $loloServiceTimeOrderChart = DB::table('lolo')
            ->selectRaw('AVG(TIMESTAMPDIFF(HOUR, active_date, IFNULL(end_date, NOW()))) as average_hours')
            ->whereYear('active_date', $year)
            ->groupBy(DB::raw('MONTH(active_date)'))
            ->pluck('average_hours')
            ->toArray();
        // LoLo Ends

        // Storage Yard Starts
        $syType = DB::table('storageyard')
            ->select('storage_type')
            ->groupBy('storage_type')
            ->get();
        $syUsed = DB::table('storageYard')
            ->whereNotNull('active_date')
            ->whereNull('end_date')
            ->where('storage_type', 'TEUs')
            ->sum('used');
        $syTotalCustomer = DB::table('storageyard')
            ->selectRaw('count(owner) as totalOwner')
            ->whereNotNull('active_date')
            ->whereNull('end_date')
            ->where('storage_type', 'TEUs')
            ->groupBy('owner')
            ->get()
            ->count();
        $syMax = 330;
        $syRemains = $syMax - $syUsed;

        //Chart
        $syChartTotal = DB::table('storageyard')
            ->select('owner', DB::raw('SUM(used) as total'))
            ->where('storage_type', 'TEUs')
            ->whereNull('end_date')
            ->groupBy('owner')
            ->pluck('total')
            ->toArray();
        $syChartLabel = DB::table('storageyard')
            ->select('owner', DB::raw('SUM(used) as total'))
            ->where('storage_type', 'TEUs')
            ->whereNull('end_date')
            ->groupBy('owner')
            ->pluck('owner')
            ->toArray();
        $syRemainsPercent = number_format(($syRemains/$syMax)*100, 0);
        $syUsedPercent = number_format(($syUsed/$syMax)*100, 0);

        // Table
        $syData = DB::table('storageyard')
            ->select('owner', 'active_date as masuk', 'end_date as keluar')
            ->selectRaw('TIMESTAMPDIFF(DAY, active_date, IFNULL(end_date, ?)) as total', [$now])
            ->where('storage_type', 'TEUs')
            ->orderBy('keluar', 'asc')
            ->orderBy('total', 'desc')
            ->get();
        // Storage Yard Ends

        // Storage Warehouse Starts
        $swType = DB::table('storagewarehouse')
            ->select('storage_type')
            ->groupBy('storage_type')
            ->get();
        $swUsed = DB::table('storagewarehouse')
            ->whereNotNull('active_date')
            ->whereNull('end_date')
            ->where('storage_type', 'Dimension')
            ->sum('used');
        $swTotalCustomer = DB::table('storagewarehouse')
            ->selectRaw('count(owner) as totalOwner')
            ->whereNotNull('active_date')
            ->whereNull('end_date')
            ->where('storage_type', 'Dimension')
            ->groupBy('owner')
            ->get()
            ->count();
        $swMax = 1000;
        $swRemains = $swMax - $swUsed;

        //Chart
        $swChartTotal = DB::table('storagewarehouse')
            ->select('owner', DB::raw('SUM(used) as total'))
            ->where('storage_type', 'Dimension')
            ->whereNull('end_date')
            ->groupBy('owner')
            ->pluck('total')
            ->toArray();
        $swChartLabel = DB::table('storagewarehouse')
            ->select('owner', DB::raw('SUM(used) as total'))
            ->where('storage_type', 'Dimension')
            ->whereNull('end_date')
            ->groupBy('owner')
            ->pluck('owner')
            ->toArray();
        $swRemainsPercent = number_format(($swRemains/$swMax)*100, 0);
        $swUsedPercent = number_format(($swUsed/$swMax)*100, 0);

        // Table
        $swData = DB::table('storagewarehouse')
            ->select('owner', 'active_date as masuk', 'end_date as keluar')
            ->selectRaw('TIMESTAMPDIFF(DAY, active_date, IFNULL(end_date, ?)) as total', [$now])
            ->where('storage_type', 'Dimension')
            ->orderBy('keluar', 'asc')
            ->orderBy('total', 'desc')
            ->get();
        // Storage Warehouse Ends

        // Trucking Starts
        $year_trucking = DB::table('trucking')
            ->select(DB::raw('YEAR(active_date) as year'))
            ->groupBy(DB::raw('YEAR(active_date)'))
            ->get();

        $min_date_trucking = DB::table('trucking')
            ->selectRaw("DATE_FORMAT(MIN(active_date), '%Y-%m') AS year_and_month")
            ->get();

        $truckingTotalOrder = DB::table('trucking')
            ->whereRaw('YEAR(active_date) = ? AND MONTH(active_date) = ?', [$year, $month])
            ->count();

        $truckingFinishOrder = DB::table('trucking')
            ->whereRaw('YEAR(active_date) = ? AND MONTH(active_date) = ? AND end_date IS NOT NULL', [$year, $month])
            ->count();

        $truckingPendingOrder = DB::table('trucking')
            ->whereRaw('YEAR(active_date) = ? AND MONTH(active_date) = ? AND end_date IS NULL', [$year, $month])
            ->count();

        $truckingServiceTime = DB::table('trucking')
            ->selectRaw('AVG(TIMESTAMPDIFF(HOUR, active_date, end_date)) as truckingServiceTime')
            ->whereYear('active_date', $year)
            ->whereMonth('active_date', $month)
            ->first();

        $truckingServiceTimeValue = number_format($truckingServiceTime->truckingServiceTime, 1);

        $truckingsubquery = DB::table('trucking')
            ->selectRaw('COUNT(active_date) as total')
            ->selectRaw('MONTH(active_date) as month')
            ->whereYear('active_date', $year)
            ->groupBy(DB::raw('MONTH(active_date)'))
            ->get();
        $truckingHighestTotalOrder = $truckingsubquery->max('total');
        $truckingLowestTotalOrder = $truckingsubquery->min('total');
        $truckingAverageTotalOrder = $truckingsubquery->avg('total');
        $truckingAverageTotalOrder = number_format($truckingAverageTotalOrder, 2);

        $truckingsubquery2 = DB::table('trucking')
            ->selectRaw('AVG(TIMESTAMPDIFF(HOUR, active_date, IFNULL(end_date, NOW()))) as average_hours')
            ->whereYear('active_date', $year)
            ->groupBy(DB::raw('MONTH(active_date)'))
            ->get();
        $truckingAverageServiceTime = $truckingsubquery2->avg('average_hours');
        $truckingAverageServiceTime = number_format($truckingAverageServiceTime, 2);

        // Chart
        $truckingTotalOrderChart = DB::table('trucking')
            ->selectRaw('COUNT(active_date) as total')
            ->selectRaw('MONTH(active_date) as month')
            ->whereYear('active_date', $year)
            ->groupBy(DB::raw('MONTH(active_date)'))
            ->pluck('total')
            ->toArray();
        $truckingServiceTimeOrderChart = DB::table('trucking')
            ->selectRaw('AVG(TIMESTAMPDIFF(HOUR, active_date, IFNULL(end_date, NOW()))) as average_hours')
            ->whereYear('active_date', $year)
            ->groupBy(DB::raw('MONTH(active_date)'))
            ->pluck('average_hours')
            ->toArray();
        // Trucking Ends

        // Plugging Monitoring Starts
        $year_pm = DB::table('pluggings')
            ->select(DB::raw('YEAR(time) as year'))
            ->groupBy(DB::raw('YEAR(time)'))
            ->get();

        $min_date_pm = DB::table('pluggings')
            ->selectRaw("DATE_FORMAT(MIN(time), '%Y-%m') AS year_and_month")
            ->get();

        $totalPlug = DB::table('pluggings')
            ->where('status', "Plugging")
            ->count();
        $pmShift1 = DB::table('pluggings')
            ->where('shift', 'shift 1')
            ->whereYear('time', $year)
            ->whereMonth('time', $month)
            ->count();
        $pmShift2= DB::table('pluggings')
            ->where('shift', 'shift 2')
            ->whereYear('time', $year)
            ->whereMonth('time', $month)
            ->count();
        $pmShift3 = DB::table('pluggings')
            ->where('shift', 'shift 3')
            ->whereYear('time', $year)
            ->whereMonth('time', $month)
            ->count();
        // Plugging Monitoring Ends

        // SS Starts
        $year_ss = DB::table('cfs')
            ->select(DB::raw('YEAR(activity_date) as year'))
            ->groupBy(DB::raw('YEAR(activity_date)'))
            ->orderBy(DB::raw('YEAR(activity_date)'))
            ->get();

        $min_date_ss = DB::table('cfs')
            ->selectRaw("DATE_FORMAT(MIN(activity_date), '%Y-%m') AS year_and_month")
            ->get();

        $ssTotalOrder = DB::table('cfs')
            ->whereRaw('YEAR(activity_date) = ? AND MONTH(activity_date) = ?', [$year, $month])
            ->count();

        $ssFinishOrder = DB::table('cfs')
            ->whereRaw('YEAR(activity_date) = ? AND MONTH(activity_date) = ? AND clossing_date IS NOT NULL', [$year, $month])
            ->count();

        $ssPendingOrder = DB::table('cfs')
            ->whereRaw('YEAR(activity_date) = ? AND MONTH(activity_date) = ? AND clossing_date IS NULL', [$year, $month])
            ->count();

        $ssServiceTime = DB::table('cfs')
            ->selectRaw('AVG(TIMESTAMPDIFF(HOUR, activity_date, clossing_date)) as ssServiceTime')
            ->whereYear('activity_date', $year)
            ->whereMonth('activity_date', $month)
            ->first();

        $ssServiceTimeValue = number_format($ssServiceTime->ssServiceTime, 1);

        //Table
        $ssData = DB::table('stuffingstripping')
            ->select('cfs_id_job_order as id')
            ->selectRaw('IFNULL(COUNT(*), 0) as total')
            ->selectRaw('IFNULL(finishContainer.total, 0) as finishOrder')
            ->selectRaw('IFNULL(pendingContainer.total, 0) as pendingOrder')
            ->leftJoin(DB::raw('(SELECT cfs_id_job_order as id, COUNT(*) as total FROM stuffingstripping WHERE is_complete = 1 GROUP BY cfs_id_job_order) AS finishContainer'), 'finishContainer.id', '=', 'stuffingstripping.cfs_id_job_order')
            ->leftJoin(DB::raw('(SELECT cfs_id_job_order as id, COUNT(*) as total FROM stuffingstripping WHERE is_complete = 0 GROUP BY cfs_id_job_order) AS pendingContainer'), 'pendingContainer.id', '=', 'stuffingstripping.cfs_id_job_order')
            ->groupBy('cfs_id_job_order');
        $ssData = DB::table(DB::raw("({$ssData->toSql()}) as duration"))
            ->mergeBindings($ssData)
            ->leftJoin('cfs', 'cfs.id_job_order', '=', 'duration.id')
            ->whereYear('cfs.activity_date', $year)
            ->whereMonth('cfs.activity_date', $month)
            ->select('duration.id as id', 'duration.total as total', 'duration.finishOrder as finishOrder', 'duration.pendingOrder as pendingOrder', DB::raw('ROUND((finishOrder/total)*100,0) as persen'), 'cfs.activity_date as start_date')
            ->get();

        $ssubquery = DB::table('cfs')
            ->selectRaw('COUNT(activity_date) as total')
            ->selectRaw('MONTH(activity_date) as month')
            ->whereYear('activity_date', $year)
            ->groupBy(DB::raw('MONTH(activity_date)'))
            ->get();
        $ssHighestTotalOrder = $ssubquery->max('total');
        $ssLowestTotalOrder = $ssubquery->min('total');
        $ssAverageTotalOrder = $ssubquery->avg('total');
        $ssAverageTotalOrder = number_format($ssAverageTotalOrder, 2);

        $sssubquery2 = DB::table('cfs')
            ->selectRaw('AVG(TIMESTAMPDIFF(HOUR, activity_date, IFNULL(clossing_date, NOW()))) as average_hours')
            ->whereYear('activity_date', $year)
            ->groupBy(DB::raw('MONTH(activity_date)'))
            ->get();
        $ssAverageServiceTime = $sssubquery2->avg('average_hours');
        $ssAverageServiceTime = number_format($ssAverageServiceTime, 2);

        // Chart
        $ssTotalOrderChart = DB::table('cfs')
            ->selectRaw('COUNT(activity_date) as total')
            ->selectRaw('MONTH(activity_date) as month')
            ->whereYear('activity_date', $year)
            ->groupBy(DB::raw('MONTH(activity_date)'))
            ->pluck('total')
            ->toArray();

        $ssTopPrincipal = DB::table('cfs')
            ->select('principal')
            ->whereYear('activity_date', $year)
            ->groupBy('principal')
            ->orderByRaw('COUNT(principal) DESC')
            ->limit(1)
            ->value('principal');
        $ssTopForwarder = DB::table('cfs')
            ->select('forwarder')
            ->whereYear('activity_date', $year)
            ->groupBy('forwarder')
            ->orderByRaw('COUNT(forwarder) DESC')
            ->limit(1)
            ->value('forwarder');
        $ssTopShipper = DB::table('cfs')
            ->select('shipper')
            ->whereYear('activity_date', $year)
            ->groupBy('shipper')
            ->orderByRaw('COUNT(shipper) DESC')
            ->limit(1)
            ->value('shipper');
        $ssTopCargo = DB::table('cfs')
            ->select('cargo')
            ->whereYear('activity_date', $year)
            ->groupBy('cargo')
            ->orderByRaw('COUNT(cargo) DESC')
            ->limit(1)
            ->value('cargo');
        // SS Ends

        return view('payment.index', [
            // Lolo Starts
            'year_lolo' => $year_lolo,
            'min_date_lolo' => $min_date_lolo,
            'loloTotalOrder' => $loloTotalOrder,
            'loloFinishOrder' => $loloFinishOrder,
            'loloPendingOrder' => $loloPendingOrder,
            'loloServiceTimeValue' => $loloServiceTimeValue,
            'loloHighestTotalOrder' => $loloHighestTotalOrder,
            'loloLowestTotalOrder' => $loloLowestTotalOrder,
            'loloAverageTotalOrder' => $loloAverageTotalOrder,
            'loloAverageServiceTime' => $loloAverageServiceTime,
            'loloTotalOrderChart' => $loloTotalOrderChart,
            'loloServiceTimeOrderChart'=> $loloServiceTimeOrderChart,
            // Lolo Ends

            // Storage Yard Starts
            'syType' => $syType,
            'syUsed' => $syUsed,
            'syTotalCustomer' => $syTotalCustomer,
            'syMax' => $syMax,
            'syRemains' => $syRemains,
            'syData' => $syData,
            'syChartTotal' => $syChartTotal,
            'syChartLabel' => $syChartLabel,
            'syRemainsPercent' => $syRemainsPercent,
            'syUsedPercent' => $syUsedPercent,
            // Storage Yard Ends

            // Storage Warehouse Starts
            'swType' => $swType,
            'swUsed' => $swUsed,
            'swTotalCustomer' => $swTotalCustomer,
            'swMax' => $swMax,
            'swRemains' => $swRemains,
            'swData' => $swData,
            'swChartTotal' => $swChartTotal,
            'swChartLabel' => $swChartLabel,
            'swRemainsPercent' => $swRemainsPercent,
            'swUsedPercent' => $swUsedPercent,
            // Storage Warehouse Ends

            // Trucking Starts
            'year_trucking' => $year_trucking,
            'min_date_trucking' => $min_date_trucking,
            'truckingTotalOrder' => $truckingTotalOrder,
            'truckingFinishOrder' => $truckingFinishOrder,
            'truckingPendingOrder' => $truckingPendingOrder,
            'truckingServiceTimeValue' => $truckingServiceTimeValue,
            'truckingHighestTotalOrder' => $truckingHighestTotalOrder,
            'truckingLowestTotalOrder' => $truckingLowestTotalOrder,
            'truckingAverageTotalOrder' => $truckingAverageTotalOrder,
            'truckingAverageServiceTime' => $truckingAverageServiceTime,
            'truckingTotalOrderChart' => $truckingTotalOrderChart,
            'truckingServiceTimeOrderChart'=> $truckingServiceTimeOrderChart,
            // Trucking Ends

            // PM Starts
            'year_pm' => $year_pm,
            'min_date_pm' => $min_date_pm,
            'totalPlug' => $totalPlug,
            'pmShift1' => $pmShift1,
            'pmShift2' => $pmShift2,
            'pmShift3' => $pmShift3,
            // PM Ends

            // SS Starts
            'year_ss' => $year_ss,
            'min_date_ss' => $min_date_ss,
            'ssTotalOrder' => $ssTotalOrder,
            'ssFinishOrder' => $ssFinishOrder,
            'ssPendingOrder' => $ssPendingOrder,
            'ssServiceTimeValue' => $ssServiceTimeValue,
            'ssData' => $ssData,
            'ssHighestTotalOrder' => $ssHighestTotalOrder,
            'ssLowestTotalOrder' => $ssLowestTotalOrder,
            'ssAverageTotalOrder' => $ssAverageTotalOrder,
            'ssAverageServiceTime' => $ssAverageServiceTime,
            'ssTotalOrderChart' => $ssTotalOrderChart,
            'ssTopPrincipal' => $ssTopPrincipal,
            'ssTopForwarder' => $ssTopForwarder,
            'ssTopShipper' => $ssTopShipper,
            'ssTopCargo' => $ssTopCargo
            // SS Ends

        ]);
    }

    public function paymentJSON(Request $request){
        $now = Carbon::now();

        // Lolo Select Month Start
        if ($request->has('loloSelectMonth')){
            $date = $request->input('loloSelectMonth');
            $loloTotalOrder = DB::table('lolo')
                ->where('active_date', 'like', $date . '%')
                ->count();

            $loloFinishOrder = DB::table('lolo')
                ->where('active_date', 'like', $date . '%')
                ->whereNotNull('end_date')
                ->count();

            $loloPendingOrder = DB::table('lolo')
                ->where('active_date', 'like', $date . '%')
                ->whereNull('end_date')
                ->count();

            $loloServiceTime = DB::table('lolo')
                ->where('active_date', 'like', $date . '%')
                ->whereNotNull('end_date')
                ->avg(DB::raw('TIMESTAMPDIFF(hour, active_date, end_date)'));

            $loloServiceTimeValue = number_format($loloServiceTime, 1);

            $response = [
                'loloTotalOrder' => $loloTotalOrder,
                'loloFinishOrder' => $loloFinishOrder,
                'loloPendingOrder' => $loloPendingOrder,
                'loloServiceTimeValue' => $loloServiceTimeValue
            ];

            return response()->json($response);
        }
        // Lolo Select Month Ends

        // Lolo Select Year Start
        else if ($request->has('loloSelectedYear')){
            $loloYear = $request->input('loloSelectedYear');
            $subquery = DB::table('lolo')
                ->selectRaw('COUNT(active_date) as total')
                ->selectRaw('MONTH(active_date) as month')
                ->whereYear('active_date', $loloYear)
                ->groupBy(DB::raw('MONTH(active_date)'))
                ->get();
            $loloHighestTotalOrder = $subquery->max('total');
            $loloLowestTotalOrder = $subquery->min('total');
            $loloAverageTotalOrder = $subquery->avg('total');
            $loloAverageTotalOrder = number_format($loloAverageTotalOrder, 2);
            $subquery2 = DB::table('lolo')
                ->selectRaw('AVG(TIMESTAMPDIFF(HOUR, active_date, IFNULL(end_date, NOW()))) as average_hours')
                ->whereYear('active_date', $loloYear)
                ->groupBy(DB::raw('MONTH(active_date)'))
                ->get();
            $loloAverageServiceTime = $subquery2->avg('average_hours');
            $loloAverageServiceTime = number_format($loloAverageServiceTime, 2);

            // Chart
            $loloTotalOrderChart = DB::table('lolo')
                ->selectRaw('COUNT(active_date) as total')
                ->selectRaw('MONTH(active_date) as month')
                ->whereYear('active_date', $loloYear)
                ->groupBy(DB::raw('MONTH(active_date)'))
                ->pluck('total')
                ->toArray();
            $loloServiceTimeOrderChart = DB::table('lolo')
                ->selectRaw('AVG(TIMESTAMPDIFF(HOUR, active_date, IFNULL(end_date, NOW()))) as average_hours')
                ->whereYear('active_date', $loloYear)
                ->groupBy(DB::raw('MONTH(active_date)'))
                ->pluck('average_hours')
                ->toArray();

            $response = [
                'loloYear' => $loloYear,
                'loloHighestTotalOrder' => $loloHighestTotalOrder,
                'loloLowestTotalOrder' => $loloLowestTotalOrder,
                'loloAverageTotalOrder' => $loloAverageTotalOrder,
                'loloAverageServiceTime' => $loloAverageServiceTime,
                'loloTotalOrderChart' => $loloTotalOrderChart,
                'loloServiceTimeOrderChart' => $loloServiceTimeOrderChart
            ];

            return response()->json($response);
        }
        // Lolo Select Year Ends

        // Storage Yard Starts
        else if ($request->has('sySelectedType')){
            $syType = $request->input('sySelectedType');
            $syStorageType = $syType;
            $syUsed = DB::table('storageYard')
                ->whereNotNull('active_date')
                ->whereNull('end_date')
                ->where('storage_type', $syType)
                ->sum('used');
            $syTotalCustomer = DB::table('storageyard')
                ->selectRaw('count(owner) as totalOwner')
                ->whereNotNull('active_date')
                ->whereNull('end_date')
                ->where('storage_type', $syType)
                ->groupBy('owner')
                ->get()
                ->count();
            $syMax = 0;
            //Chart
            $syChartTotal = DB::table('storageyard')
                ->select('owner', DB::raw('SUM(used) as total'))
                ->where('storage_type', $syType)
                ->whereNull('end_date')
                ->groupBy('owner')
                ->pluck('total')
                ->toArray();
            $syChartLabel = DB::table('storageyard')
                ->select('owner', DB::raw('SUM(used) as total'))
                ->where('storage_type', $syType)
                ->whereNull('end_date')
                ->groupBy('owner')
                ->pluck('owner')
                ->toArray();

            // Table
            $syData = DB::table('storageyard')
                ->select('owner', 'active_date as masuk', 'end_date as keluar')
                ->selectRaw('TIMESTAMPDIFF(DAY, active_date, IFNULL(end_date, ?)) as total', [$now])
                ->where('storage_type', $syType)
                ->orderBy('keluar', 'asc')
                ->orderBy('total', 'desc')
                ->get();

            if ($syType == 'Volume') {
                $syType = 'm3';
                $syMax = 500;
            } else if ($syType == 'Dimension') {
                $syType = 'm2';
                $syMax = 2000;
            } else {
                $syType = 'TEUs';
                $syMax = 330;
            };

            $syRemains = $syMax - $syUsed;
            $syRemainsPercent = number_format(($syRemains/$syMax)*100, 0);
            $syUsedPercent = number_format(($syUsed/$syMax)*100, 0);


            $response = [
                'syType' => $syType,
                'syUsed' => $syUsed,
                'syTotalCustomer' => $syTotalCustomer,
                'syMax' => $syMax,
                'syRemains' => $syRemains,
                'syData' => $syData,
                'syChartTotal' => $syChartTotal,
                'syChartLabel' => $syChartLabel,
                'syRemainsPercent' => $syRemainsPercent,
                'syUsedPercent' => $syUsedPercent,
                'syStorageType' => $syStorageType
            ];

            return response()->json($response);
        }
        // Storage Yard Ends

         // Storage Warehouse Starts
         else if ($request->has('swSelectedType')){
            $swType = $request->input('swSelectedType');
            $swStorageType = $swType;
            $swUsed = DB::table('storageYard')
                ->whereNotNull('active_date')
                ->whereNull('end_date')
                ->where('storage_type', $swType)
                ->sum('used');
            $swTotalCustomer = DB::table('storageyard')
                ->selectRaw('count(owner) as totalOwner')
                ->whereNotNull('active_date')
                ->whereNull('end_date')
                ->where('storage_type', $swType)
                ->groupBy('owner')
                ->get()
                ->count();
            $swMax = 0;

            //Chart
            $swChartTotal = DB::table('storagewarehouse')
                ->select('owner', DB::raw('SUM(used) as total'))
                ->where('storage_type', $swType)
                ->whereNull('end_date')
                ->groupBy('owner')
                ->pluck('total')
                ->toArray();
            $swChartLabel = DB::table('storagewarehouse')
                ->select('owner', DB::raw('SUM(used) as total'))
                ->where('storage_type', $swType)
                ->whereNull('end_date')
                ->groupBy('owner')
                ->pluck('owner')
                ->toArray();

             // Table
            $swData = DB::table('storagewarehouse')
                ->select('owner', 'active_date as masuk', 'end_date as keluar')
                ->selectRaw('TIMESTAMPDIFF(DAY, active_date, IFNULL(end_date, ?)) as total', [$now])
                ->where('storage_type', $swType)
                ->orderBy('keluar', 'asc')
                ->orderBy('total', 'desc')
                ->get();
            if ($swType == 'Dimension') {
                $swType = 'm2';
                $swMax = 1000;
            } else {
                $swType = 'm3';
                $swMax = 500;
            }

            $swRemains = $swMax - $swUsed;
            $swRemainsPercent = number_format(($swRemains/$swMax)*100, 0);
            $swUsedPercent = number_format(($swUsed/$swMax)*100, 0);

            $response = [
                'swType' => $swType,
                'swUsed' => $swUsed,
                'swTotalCustomer' => $swTotalCustomer,
                'swMax' => $swMax,
                'swRemains' => $swRemains,
                'swData' => $swData,
                'swChartTotal' => $swChartTotal,
                'swChartLabel' => $swChartLabel,
                'swRemainsPercent' => $swRemainsPercent,
                'swUsedPercent' => $swUsedPercent,
                'swStorageType' => $swStorageType
            ];

            return response()->json($response);
        }
        // Storage Warehouse Ends

        // Trucking Select Month Start
        else if ($request->has('truckingSelectMonth')){
            $date = $request->input('truckingSelectMonth');
            $truckingTotalOrder = DB::table('trucking')
                ->where('active_date', 'like', $date . '%')
                ->count();

            $truckingFinishOrder = DB::table('trucking')
                ->where('active_date', 'like', $date . '%')
                ->whereNotNull('end_date')
                ->count();

            $truckingPendingOrder = DB::table('trucking')
                ->where('active_date', 'like', $date . '%')
                ->whereNull('end_date')
                ->count();

            $truckingServiceTime = DB::table('trucking')
                ->where('active_date', 'like', $date . '%')
                ->whereNotNull('end_date')
                ->avg(DB::raw('TIMESTAMPDIFF(hour, active_date, end_date)'));

            $truckingServiceTimeValue = number_format($truckingServiceTime, 1);

            $response = [
                'truckingTotalOrder' => $truckingTotalOrder,
                'truckingFinishOrder' => $truckingFinishOrder,
                'truckingPendingOrder' => $truckingPendingOrder,
                'truckingServiceTime' => $truckingServiceTimeValue
            ];

            return response()->json($response);
        }
        // Trucking Select Month Ends

         // Trucking Select Year Start
         else if ($request->has('truckingSelectedYear')){
            $trucklngYear = $request->input('truckingSelectedYear');
            $subquery = DB::table('trucking')
                ->selectRaw('COUNT(active_date) as total')
                ->selectRaw('MONTH(active_date) as month')
                ->whereYear('active_date', $trucklngYear)
                ->groupBy(DB::raw('MONTH(active_date)'))
                ->get();
            $truckingHighestTotalOrder = $subquery->max('total');
            $truckingLowestTotalOrder = $subquery->min('total');
            $truckingAverageTotalOrder = $subquery->avg('total');
            $truckingAverageTotalOrder = number_format($truckingAverageTotalOrder, 2);
            $subquery2 = DB::table('trucking')
                ->selectRaw('AVG(TIMESTAMPDIFF(HOUR, active_date, IFNULL(end_date, NOW()))) as average_hours')
                ->whereYear('active_date', $trucklngYear)
                ->groupBy(DB::raw('MONTH(active_date)'))
                ->get();
            $truckingAverageServiceTime = $subquery2->avg('average_hours');
            $truckingAverageServiceTime = number_format($truckingAverageServiceTime, 2);

            // Chart
            $truckingTotalOrderChart = DB::table('trucking')
                ->selectRaw('COUNT(active_date) as total')
                ->selectRaw('MONTH(active_date) as month')
                ->whereYear('active_date', $trucklngYear)
                ->groupBy(DB::raw('MONTH(active_date)'))
                ->pluck('total')
                ->toArray();

            $response = [
                'trucklngYear' => $trucklngYear,
                'truckingHighestTotalOrder' => $truckingHighestTotalOrder,
                'truckingLowestTotalOrder' => $truckingLowestTotalOrder,
                'truckingAverageTotalOrder' => $truckingAverageTotalOrder,
                'truckingAverageServiceTime' => $truckingAverageServiceTime,
                'truckingTotalOrderChart' => $truckingTotalOrderChart
            ];

            return response()->json($response);
        }
        // Lolo Select Year Ends

        // PM Select Month Start
        else if ($request->has('pmSelectMonth')){
            $date = $request->input('pmSelectMonth');
            $pmTotalPlug = DB::table('pluggings')
                ->where('status', '!=', 'End-plugging')
                ->where('time', 'like', $date . '%')
                ->count();

            $pmShift1 = DB::table('pluggings')
                ->where('shift1', 'shift 1')
                ->where('time', 'like', $date . '%')
                ->count();

            $pmShift2 = DB::table('trucking')
                ->where('active_date', 'like', $date . '%')
                ->whereNull('end_date')
                ->count();

            $pmShift3 = DB::table('trucking')
                ->where('active_date', 'like', $date . '%')
                ->whereNotNull('end_date')
                ->avg(DB::raw('TIMESTAMPDIFF(hour, active_date, end_date)'));

            $response = [
                'pmTotalPlug' => $pmTotalPlug,
                'pmShift1' => $pmShift1,
                'pmShift2' => $pmShift2,
                'pmShift3' => $pmShift3
            ];

            return response()->json($response);
        }
        // PM Select Month Ends

        // SS Select Month Starts
        else if ($request->has('ssSelectMonth')){
            $date = $request->input('ssSelectMonth');
            $ssTotalOrder = DB::table('cfs')
                ->where('activity_date', 'like', $date . '%')
                ->count();

            $ssFinishOrder = DB::table('cfs')
                ->where('activity_date', 'like', $date . '%')
                ->whereNotNull('clossing_date')
                ->count();

            $ssPendingOrder = DB::table('cfs')
                ->where('activity_date', 'like', $date . '%')
                ->whereNull('clossing_date')
                ->count();

            $ssServiceTime = DB::table('cfs')
                ->where('activity_date', 'like', $date . '%')
                ->whereNotNull('clossing_date')
                ->avg(DB::raw('TIMESTAMPDIFF(hour, activity_date, clossing_date)'));

            $ssServiceTimeValue = number_format($ssServiceTime, 1);
            $ssData = DB::table('stuffingstripping')
                ->select('cfs_id_job_order as id')
                ->selectRaw('IFNULL(COUNT(*), 0) as total')
                ->selectRaw('IFNULL(finishContainer.total, 0) as finishOrder')
                ->selectRaw('IFNULL(pendingContainer.total, 0) as pendingOrder')
                ->leftJoin(DB::raw('(SELECT cfs_id_job_order as id, COUNT(*) as total FROM stuffingstripping WHERE is_complete = 1 GROUP BY cfs_id_job_order) AS finishContainer'), 'finishContainer.id', '=', 'stuffingstripping.cfs_id_job_order')
                ->leftJoin(DB::raw('(SELECT cfs_id_job_order as id, COUNT(*) as total FROM stuffingstripping WHERE is_complete = 0 GROUP BY cfs_id_job_order) AS pendingContainer'), 'pendingContainer.id', '=', 'stuffingstripping.cfs_id_job_order')
                ->groupBy('cfs_id_job_order');
            $ssData = DB::table(DB::raw("({$ssData->toSql()}) as duration"))
                ->mergeBindings($ssData)
                ->leftJoin('cfs', 'cfs.id_job_order', '=', 'duration.id')
                ->where('cfs.activity_date', 'like', $date . '%')
                ->select('duration.id as id', 'duration.total as total', 'duration.finishOrder as finishOrder', 'duration.pendingOrder as pendingOrder', DB::raw('ROUND((finishOrder/total)*100,0) as persen'), 'cfs.activity_date as start_date')
                ->get();

            $response = [
                'ssTotalOrder' => $ssTotalOrder,
                'ssFinishOrder' => $ssFinishOrder,
                'ssPendingOrder' => $ssPendingOrder,
                'ssServiceTime' => $ssServiceTimeValue,
                'ssData' => $ssData
            ];

            return response()->json($response);
        }
        // SS Select Month Ends

        // SS Select Year Start
        else if ($request->has('ssSelectedYear')){
            $ssYear = $request->input('ssSelectedYear');
            $sssubquery = DB::table('cfs')
                ->selectRaw('COUNT(activity_date) as total')
                ->selectRaw('MONTH(activity_date) as month')
                ->whereYear('activity_date', $ssYear)
                ->groupBy(DB::raw('MONTH(activity_date)'))
                ->get();
            $ssHighestTotalOrder = $sssubquery->max('total');
            $ssLowestTotalOrder = $sssubquery->min('total');
            $ssAverageTotalOrder = $sssubquery->avg('total');
            $ssAverageTotalOrder = number_format($ssAverageTotalOrder, 2);

            $sssubquery2 = DB::table('cfs')
                ->selectRaw('AVG(TIMESTAMPDIFF(HOUR, activity_date, IFNULL(clossing_date, NOW()))) as average_hours')
                ->whereYear('activity_date', $ssYear)
                ->groupBy(DB::raw('MONTH(activity_date)'))
                ->get();
            $ssAverageServiceTime = $sssubquery2->avg('average_hours');
            $ssAverageServiceTime = number_format($ssAverageServiceTime, 2);

            // Chart
            $ssTotalOrderChart = DB::table('cfs')
                ->selectRaw('COUNT(activity_date) as total')
                ->selectRaw('MONTH(activity_date) as month')
                ->whereYear('activity_date', $ssYear)
                ->groupBy(DB::raw('MONTH(activity_date)'))
                ->pluck('total')
                ->toArray();

            $ssTopPrincipal = DB::table('cfs')
                ->select('principal')
                ->whereYear('activity_date', $ssYear)
                ->groupBy('principal')
                ->orderByRaw('COUNT(principal) DESC')
                ->limit(1)
                ->value('principal');
            $ssTopForwarder = DB::table('cfs')
                ->select('forwarder')
                ->whereYear('activity_date', $ssYear)
                ->groupBy('forwarder')
                ->orderByRaw('COUNT(forwarder) DESC')
                ->limit(1)
                ->value('forwarder');
            $ssTopShipper = DB::table('cfs')
                ->select('shipper')
                ->whereYear('activity_date', $ssYear)
                ->groupBy('shipper')
                ->orderByRaw('COUNT(shipper) DESC')
                ->limit(1)
                ->value('shipper');
            $ssTopCargo = DB::table('cfs')
                ->select('cargo')
                ->whereYear('activity_date', $ssYear)
                ->groupBy('cargo')
                ->orderByRaw('COUNT(cargo) DESC')
                ->limit(1)
                ->value('cargo');

            $response = [
                'ssYear' => $ssYear,
                'ssHighestTotalOrder' => $ssHighestTotalOrder,
                'ssLowestTotalOrder' => $ssLowestTotalOrder,
                'ssAverageTotalOrder' => $ssAverageTotalOrder,
                'ssAverageServiceTime' => $ssAverageServiceTime,
                'ssTotalOrderChart' => $ssTotalOrderChart,
                'ssTopPrincipal' => $ssTopPrincipal,
                'ssTopForwarder' => $ssTopForwarder,
                'ssTopShipper' => $ssTopShipper,
                'ssTopCargo' => $ssTopCargo
            ];

            return response()->json($response);
        }
        // Lolo Select Year Ends
        else {
            return null;
        }
    }
}
