<?php

namespace App\Repositries;


interface MovieRepositryInterface
{
    public function getAllMovies();
    public function createNewMovie(Array $createRequest);
    public function getMovie(Int $id);
    public function updateMovie(Array $updateRequest, Int $id);
    public function deleteMovie(Int $id);
}

