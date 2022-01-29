<?php

namespace App\Repositories;

use App\Http\Dto\Movie\CreateDto;
use App\Http\Dto\Movie\UpdateDto;

interface MovieRepositoryInterface
{
    public function getAllMovies();
    public function createNewMovie(CreateDto $createDto);
    public function getMovie(Int $id);
    public function updateMovie(UpdateDto $updateDto);
    public function deleteMovie(Int $id);
}

