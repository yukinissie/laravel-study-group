<?php

namespace App\Http\Dto\Movie;

use App\Http\Dto\BaseDto;

class CreateDto extends BaseDto
{
    public string $title;
    public string $imageUrl;

    public function __construct(array $array)
    {
        parent::__construct($array);
    }
}