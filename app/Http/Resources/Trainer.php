<?php
/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 11/21/2018
 * Time: 12:05 AM
 */


namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Trainer extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}