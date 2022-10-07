<?php

namespace App\Components;

use Illuminate\Support\Facades\Log;
use Stripe\StripeClient;

class StripeComponent
{
    public static function createCustomer($email, $name)
    {
        $stripe = new StripeClient(env('STRIPE_SECRET_KEY'));
        try {
            return $stripe->customers->create([
                'email' => $email,
                'name' => $name,
            ]);
        } catch (\Throwable $th) {
            Log::channel('log_stripe')->error($th->getMessage());

            return false;
        }
    }

    public static function getCustomer($customerId)
    {
        $stripe = new StripeClient(env('STRIPE_SECRET_KEY'));
        try {
            return $stripe->customers->retrieve($customerId);
        } catch (\Throwable $th) {
            Log::channel('log_stripe')->error($th->getMessage());

            return false;
        }
    }

    public static function createCharge($invoice)
    {
        $stripe = new StripeClient(env('STRIPE_SECRET_KEY'));
        try {
            $ret = $stripe->charges->create([
                'amount' => $invoice->total_price,
                'customer' => $invoice->user->customer_id,
                'currency' => 'jpy',
                'description' => 'Payment daily month ',
            ]);
            Log::channel('log_stripe')->info('Stripe return:'.$ret);
            if ($ret->status != 'succeeded') {
                return false;
            }

            return true;
        } catch (\Throwable $th) {
            Log::channel('log_stripe')->error($th->getMessage());

            return false;
        }
    }

    public static function getDefaultSourceCard($customerId)
    {
        $stripe = new StripeClient(env('STRIPE_SECRET_KEY'));

        return $stripe->customers->retrieve(
            $customerId,
            []
        )->default_source;
    }

    public static function getCustomerCard($customerId, $cardId)
    {
        $stripe = new StripeClient(env('STRIPE_SECRET_KEY'));
        try {
            return $stripe->customers->retrieveSource($customerId, $cardId);
        } catch (\Throwable $th) {
            Log::channel('log_stripe')->error($th->getMessage());

            return false;
        }
    }

    public static function addCustomerCard($customerId, $tokenCard)
    {
        $stripe = new StripeClient(env('STRIPE_SECRET_KEY'));
        try {
            return $stripe->customers->createSource(
                $customerId,
                ['source' => $tokenCard]
            );
        } catch (\Throwable $th) {
            Log::channel('log_stripe')->error($th->getMessage());

            return false;
        }
    }

    public static function deleteCustomer($customerId)
    {
        $stripe = new StripeClient(env('STRIPE_SECRET_KEY'));
        try {
            return $stripe->customers->delete(
                $customerId
            );
        } catch (\Throwable $th) {
            Log::channel('log_stripe')->error($th->getMessage());

            return false;
        }
    }

    public static function addCustomerCardDefault($customerId, $tokenCard)
    {
        $stripe = new StripeClient(env('STRIPE_SECRET_KEY'));
        try {
            return $stripe->customers->update(
                $customerId,
                ['default_source' => $tokenCard]
            );
        } catch (\Throwable $th) {
            Log::channel('log_stripe')->error($th->getMessage());

            return false;
        }
    }

    public static function createTokenCard($request)
    {
        $stripe = new StripeClient(env('STRIPE_SECRET_KEY'));
        try {
            return $stripe->tokens->create([
                'card' => [
                    'number' => $request->cardNumber,
                    'exp_month' => $request->cardExpireMonth,
                    'exp_year' => $request->cardExpireYear,
                    'cvc' => $request->cardCvc,
                    'name' => $request->name,
                ],
            ]);
        } catch (\Throwable $th) {
            Log::channel('log_stripe')->error($th->getMessage());

            return false;
        }
    }
}
