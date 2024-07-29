<?php

namespace App\Http\Controllers;

use App\Models\Transaction as ModelsTransaction;
use Illuminate\Http\Request;
use Stripe\Charge;
use Stripe\FinancialConnections\Transaction;
use Stripe\PaymentIntent;
use Stripe\Stripe;

class PaymentController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function checkout()
    {
        \Stripe\Stripe::setApiKey(config(key: 'stripe.sk'));
        $stripe = new \Stripe\StripeClient("sk_test_51Phnb5LzSeT5Kf06iOWmwpDJVPK2xL7wkTA0KcfDhydub9usDk04SUapn6qDa5tKqZqAtYSksAydrThHr2nzlAfI00S7WL358L");
        $session = \Stripe\Checkout\Session::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'gbp',
                        'product_data' => [
                            'name' => 'Product Purchase',
                        ],
                        'unit_amount' => 500,
                    ],
                    'quantity' => 1,
                ]
            ],
            'mode' => 'payment',
            'success_url' => route('success'),
            'cancel_url' => route('index'),
        ]);
        return redirect()->away($session->url);
    }

    public function success()
    {
        return view('index');
    }

    public function showTransactionHistory()
    {
        $stripe = new \Stripe\StripeClient('sk_test_51Phnb5LzSeT5Kf06iOWmwpDJVPK2xL7wkTA0KcfDhydub9usDk04SUapn6qDa5tKqZqAtYSksAydrThHr2nzlAfI00S7WL358L');
        $transactions = $stripe->balanceTransactions->all(['limit' => 3]);

        dd($transactions);
        return view('transactions', ['transactions' => $transactions->data]);
    }
}
