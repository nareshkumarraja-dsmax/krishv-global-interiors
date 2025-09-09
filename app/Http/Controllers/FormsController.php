<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class FormsController extends Controller
{
    public function submitEnquiryForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'required|string|max:20',
            'location' => 'required|string',
            'propertyType' => 'required|string',
        ]);

        try {
            $url = config('services.gas.webapp_url');

            $response = Http::timeout(10)->asJson()->post($url, $data);

            if ($response->successful() && ($response->json('status') === 'ok')) {
                if ($request->wantsJson()) {
                    return response()->json([
                        'ok' => true,
                        'message' => 'Thank you! We’ll confirm your visit shortly.',
                    ]);
                }
                return back()->with('success', 'Thank you! We’ll confirm your visit shortly.');
            }

            Log::warning('GAS error', ['body' => $response->body()]);
            $msg = 'Could not save your request right now. Please try again.';
            return $request->wantsJson()
                ? response()->json(['ok' => false, 'message' => $msg], 502)
                : back()->with('error', $msg);

        } catch (\Throwable $e) {
            Log::error('GAS exception', ['error' => $e->getMessage()]);
            $msg = 'Server error. Please try again in a moment.';
            return $request->wantsJson()
                ? response()->json(['ok' => false, 'message' => $msg], 500)
                : back()->with('error', $msg);
        }
    }
}
