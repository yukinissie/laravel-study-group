<?php

namespace App\Services;

interface MovieServiceInterface
{
    public function getAllMovies();
    public function createNewMovie(Array $createRequest);
    public function getMovie(Int $id);
    public function updateMovie(Array $upadteRequest, Int $id);
    public function deleteMovie(Int $id);
}
