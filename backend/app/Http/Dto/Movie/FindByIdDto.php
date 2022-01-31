<?php

namespace App\Http\Dto\Movie;

use App\Http\Dto\BaseDto;
use Vinkla\Hashids\Facades\Hashids;

class FindByIdDto extends BaseDto
{
    public string $id;

    public function __construct(array $array)
    {
        parent::__construct($array);

        $this->id = Hashids::decode($this->id)[0];
    }
}
