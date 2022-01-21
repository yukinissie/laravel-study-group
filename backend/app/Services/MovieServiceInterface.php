<?php

namespace App\Services;

use App\Http\Requests\CreateMovieRequest;
use App\Http\Requests\UpdateMovieRequest;

interface MovieServiceInterface
{
    public function getAllMovies();
    public function createNewMovie(CreateMovieRequest $request);
    public function getMovie(Int $id);
    public function updateMovie(UpdateMovieRequest $request, Int $id);
    public function deleteMovie(Int $id);
}

