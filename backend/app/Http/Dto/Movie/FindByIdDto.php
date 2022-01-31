<?php

namespace App\Http\Dto\Movie;

use App\Http\Dto\BaseDto;

class FindByIdDto extends BaseDto
{
    public string $id;

    public function __construct(array $array)
    {
        parent::__construct($array);
    }
}
