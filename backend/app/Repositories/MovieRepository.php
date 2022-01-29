<?php

namespace App\Repositories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use App\Http\Dto\Movie\CreateDto;
use App\Http\Dto\Movie\UpdateDto;

class MovieRepository implements MovieRepositoryInterface
{
    public function getAllMovies(): Collection
    {
        return Movie::all();
    }

    public function createNewMovie(CreateDto $createDto): Void
    {
        Movie::create([
            'title' => $createDto->title,
            'image_url' => $createDto->imageUrl
        ]);
    }

    public function getMovie(Int $id): Model
    {
        return Movie::findOrFail($id);
    }

    public function updateMovie(UpdateDto $updateDto): Void
    {
        Movie::where('id', $updateDto->id)->update([
            'title' => $updateDto->title,
            'image_url' => $updateDto->imageUrl
        ]);
    }

    public function deleteMovie(Int $id): Void
    {
        Movie::where('id', $id)->delete();
    }
}
