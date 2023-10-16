<?php

namespace App\Http\Controllers;

use App\Http\Services\CountDeliveryService;
use Illuminate\Support\Facades\Request;

class CountDeliveryController extends Controller
{

    private $countDeliveryService;

    public function check()
    {
        dd(321);
    }

    public function countFastDelivery(Request $request)
    {
        if (!$this->countDeliveryService) {
            $this->countDeliveryService = new CountDeliveryService();
        }
        try {
            if (!$request->sourceKladr or !$request->targetKladr or !$request->weight) {
                return response()->json(['ans' => 'not enough info'], 422);
            }
            return $this->countDeliveryService->calculateFastDelivery($request->sourceKladr, $request->targetKladr, $request->weight);
        } catch (\Exception $e) {
            return response()->json(['ans' => 'something went wrong'], 422);
        }
    }

    public function countSlowDelivery(Request $request)
    {
        if (!$this->countDeliveryService) {
            $this->countDeliveryService = new CountDeliveryService();
        }
        try {
            if (!$request->sourceKladr or !$request->targetKladr or !$request->weight) {
                return response()->json(['ans' => 'not enough info'], 422);
            }
            return $this->countDeliveryService->calculateSlowDelivery($request->sourceKladr, $request->targetKladr, $request->weight);
        } catch (\Exception $e) {
            return response()->json(['ans' => 'something went wrong'], 422);
        }
    }

}
