<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ConfigController extends Controller
{
    public function showConfigForm()
    {
        return view('config');
    }

    public function updateConfig(Request $request)
    {
        $request->validate([
            'stripe_key' => 'required|string',
            'stripe_secret' => 'required|string',
        ]);

        $path = base_path('.env');
        $env = file_get_contents($path);

        $env = preg_replace('/STRIPE_KEY=.*/', 'STRIPE_KEY=' . $request->stripe_key, $env);
        $env = preg_replace('/STRIPE_SECRET=.*/', 'STRIPE_SECRET=' . $request->stripe_secret, $env);

        file_put_contents($path, $env);

        // Reload the config
        Artisan::call('config:clear');

        return back()->with('success', 'Stripe API keys updated successfully.');
    }
}
