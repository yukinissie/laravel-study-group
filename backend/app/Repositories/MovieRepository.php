<?php

namespace App\Repositories;

use App\Models\Movie AS MovieModel;
use App\Http\Dto\Movie\CreateDto;
use App\Http\Dto\Movie\UpdateDto;
use App\Http\Entities\Movie\MovieList;
use App\Http\Entities\Movie\Movie;

class MovieRepository implements MovieRepositoryInterface
{
    public function getAllMovies(): MovieList
    {
        $movies = MovieModel::all();
        return new MovieList($movies->toArray());
    }

    public function createNewMovie(CreateDto $createDto): Void
    {
        MovieModel::create([
            'title' => $createDto->title,
            'image_url' => $createDto->imageUrl
        ]);
    }

    public function getMovie(Int $id): Movie
    {
        $movie = MovieModel::findOrFail($id);
        return new Movie($movie);
    }

    public function updateMovie(UpdateDto $updateDto): Void
    {
        MovieModel::where('id', $updateDto->id)->update([
            'title' => $updateDto->title,
            'image_url' => $updateDto->imageUrl
        ]);
    }

    public function deleteMovie(Int $id): Void
    {
        MovieModel::where('id', $id)->delete();
    }
}
