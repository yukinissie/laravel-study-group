<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image_url'
    ];

    public function getAllMovies()
    {
        return Movie::all();
    }

    public function createNewMovie($createRequest)
    {
        Movie::create($createRequest);
    }

    public function getMovie($id)
    {
        return Movie::find($id);
    }

    public function updateMovie($updateRequest, $id)
    {
        Movie::where('id', $id)->update($updateRequest);
    }

    public function deleteMovie($id)
    {
        Movie::where('id', $id)->delete();
    }
}
