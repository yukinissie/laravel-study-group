<?php

namespace App\Http\Dto;

use Vinkla\Hashids\Facades\Hashids;

class BaseDto
{
    public function __construct(array $array)
    {
        foreach ($array as $key => $value) {
            if ($value) {
                if ($key == 'id' || substr($key, -3) == '_id') {
                    $this->$key =Hashids::decode($value)[0];
                } else {
                    $this->$key = $value;
                }
            }
        }
    }
}
