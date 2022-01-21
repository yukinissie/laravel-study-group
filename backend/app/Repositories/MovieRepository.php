<?php

namespace App\Repositories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Collection;

class MovieRepository implements MovieRepositoryInterface
{
    public function getAllMovies(): Collection
    {
        return Movie::all();
    }

    public function createNewMovie(Array $createRequest): Void
    {
        Movie::create($createRequest);
    }

    public function getMovie(Int $id): Model
    {
        return Movie::find($id);
    }

    public function updateMovie(Array $updateRequest, Int $id): Void
    {
        Movie::where('id', $id)->update($updateRequest);
    }

    public function deleteMovie(Int $id): Void
    {
        Movie::where('id', $id)->delete();
    }
}

