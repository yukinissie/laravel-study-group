<?php

namespace App\Http\Dto\Movie;

use App\Http\Dto\BaseDto;
use Vinkla\Hashids\Facades\Hashids;

class UpdateDto extends BaseDto
{
    public string $id;
    public string $title;
    public string $imageUrl;

    public function __construct(array $array)
    {
        parent::__construct($array);

        $this->id = Hashids::decode($this->id)[0];
    }
}
