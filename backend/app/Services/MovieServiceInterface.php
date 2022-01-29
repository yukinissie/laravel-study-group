<?php

namespace App\Services;

use App\Http\Dto\Movie\CreateDto;
use App\Http\Dto\Movie\FindByIdDto;
use App\Http\Dto\Movie\UpdateDto;

interface MovieServiceInterface
{
    public function getAllMovies();
    public function createNewMovie(CreateDto $createDto);
    public function getMovie(FindByIdDto $findByIdDto);
    public function updateMovie(UpdateDto $updateDto);
    public function deleteMovie(FindByIdDto $findByIdDto);
}
