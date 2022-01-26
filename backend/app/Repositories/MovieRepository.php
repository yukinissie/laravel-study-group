<?php

namespace App\Repositories;

use App\Models\Movie AS MovieModal;
use App\Entities\Movie;
use Illuminate\Database\Eloquent\Collection;

class MovieRepository implements MovieRepositoryInterface
{
    public function getAllMovies(): Collection
    {
        return MovieModal::all();
    }

    public function createNewMovie(Array $createRequest): Void
    {
        MovieModal::create($createRequest);
    }

    public function getMovie(Int $id): Movie
    {
        $movie = MovieModal::findOrFail($id);
        return new Movie(
            $movie->id,
            $movie->title,
            $movie->image_url
        );
    }

    public function updateMovie(Array $updateRequest, Int $id): Void
    {
        MovieModal::where('id', $id)->update($updateRequest);
    }

    public function deleteMovie(Int $id): Void
    {
        MovieModal::where('id', $id)->delete();
    }
}

