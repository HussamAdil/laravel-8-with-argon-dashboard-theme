<?php

namespace App\Http\Resources;

use App\Models\Route;
use App\Models\Transaction;
use Illuminate\Http\Resources\Json\JsonResource;

class TransactionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        
        $transaction = (object) array(
            'route_id' => $this->id  ,
            'route_name' => $this->route_name,
            'route_no' => $this->route_no,
            'salesman_summary'=> array(
             
                "total_amount" => Transaction::where('route_id' , $this->id)->value('total_amount'),
                "total_hour" => []
            ),
            
          );

          return $transaction;
    }
}
