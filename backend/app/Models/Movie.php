<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image_url'
    ];

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
