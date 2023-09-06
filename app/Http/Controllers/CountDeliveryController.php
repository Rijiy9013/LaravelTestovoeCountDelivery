<?php

namespace App\Http\Controllers;

use App\Http\Services\CountDeliveryService;
use Illuminate\Support\Facades\Request;

class CountDeliveryController extends Controller
{

    private $countDeliveryService;

    public function countFastDelivery(Request $request)
    {
        if (!$this->countDeliveryService) {
            $this->countDeliveryService = new CountDeliveryService();
        }
        try{
            if(!$request->sourceKladr or !$request->targetKladr or !$request->weight){
                return ['error' => 'not enough information'];
            }
            return $this->countDeliveryService->calculateFastDelivery($request->sourceKladr, $request->targetKladr, $request->weight);
        }catch(\Exception $e){
            return ['error' => 'something went wrong'];
        }
    }

    public function countSlowDelivery(Request $request)
    {
        if (!$this->countDeliveryService) {
            $this->countDeliveryService = new CountDeliveryService();
        }
        try{
            if(!$request->sourceKladr or !$request->targetKladr or !$request->weight){
                return ['error' => 'not enough information'];
            }
            return $this->countDeliveryService->calculateSlowDelivery($request->sourceKladr, $request->targetKladr, $request->weight);
        }catch(\Exception $e){
            return ['error' => 'something went wrong'];
        }
    }

}
