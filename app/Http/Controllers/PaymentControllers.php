<?php

namespace App\Http\Controllers;
use App\Models\Payment;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PaymentControllers extends Controller
{
    public function index() {
        $payment = Payment::all();
        $customer = Customer::all();

        return view('payment.index', compact('payment', 'customer'));
    }

    public function payment(){
        $payment = DB::table('payment')
                                ->select(DB::raw('SUM(amount) as totalPayment'), DB::raw('month(payment_date) as bulan'))
                                ->whereYear('payment_date', '=', '2005')
                                ->groupBy(DB::raw('MONTH(payment_date)'))
                                ->get();

        $count = $payment->count();
        $months = $payment->pluck('bulan');
        $amount = $payment->pluck('totalPayment');

        return view('payment.index', ['payment' => $payment, 'count' => $count, 'months' => $months, 'amount' => $amount]);
    }

}
