<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Charge;
use Stripe\Stripe;
use Stripe\Checkout\Session;


class StripePaymentController extends Controller
{
    
    public function checkout(Request $request)
    {
        if (!session()->has('payer')) {
            return redirect()->back()->with('error', 'No payment data found');
        }
    
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $data = session('payer');
    
        if (!isset($data['total']) || $data['total'] <= 0) {
            return redirect()->back()->with('error', 'Invalid payment amount');
        }
    
        try {
            $session = \Stripe\Checkout\Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [
                    [
                        'quantity' => 1,
                        'price_data' => [
                            'currency' => 'mad',
                            'product_data' => [
                                'name' => 'Produits Mahsoul',
                            ],
                            'unit_amount' => (int) round($data['total'] * 100), // Ensure integer value
                        ],
                    ],
                ],
                'mode' => 'payment',
                'success_url' => route('payment.success').'?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => route('payment.cancel'),
            ]);
    
            return redirect()->away($session->url);
    
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Payment error: '.$e->getMessage());
        }
    }

    public function checkoutRendezVous(Request $request)
    {
        // dd($request);
        if (!session()->has('payerRendezVous')) {
            return redirect()->back()->with('error', 'No payment data found');
        }
    
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $data = session('payerRendezVous');
    
        if (!isset($data['total']) || $data['total'] <= 0) {
            return redirect()->back()->with('error', 'Invalid payment amount');
        }
        $nom = $data['nom'];
        $prenom = $data['prenom'];
    
        try {
            $session = \Stripe\Checkout\Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [
                    [
                        'quantity' => 1,
                        'price_data' => [
                            'currency' => 'mad',
                            'product_data' => [
                                'name' => "Reservation De Rendez Vous Chez Mr. $prenom $nom",
                            ],
                            'unit_amount' => (int) round($data['total'] * 100), // Ensure integer value
                        ],
                    ],
                ],
                'mode' => 'payment',
                'success_url' => route('payment.success').'?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => route('payment.cancel'),
            ]);
    
            return redirect()->away($session->url);
    
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Payment error: '.$e->getMessage());
        }
    }
}
