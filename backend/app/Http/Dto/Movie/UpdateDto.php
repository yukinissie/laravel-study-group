<?php

namespace App\Http\Dto\Movie;

use App\Http\Dto\BaseDto;

class UpdateDto extends BaseDto
{
    public int $id;
    public string $title;
    public string $imageUrl;

    public function __construct(array $array)
    {
        parent::__construct($array);
    }
}
