<?php

namespace App\Services;

use App\Repositories\MovieRepositoryInterface;
use App\Http\Requests\CreateMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class MovieService implements MovieServiceInterface
{
    private $movieRepository;

    public function __construct(
        MovieRepositoryInterface $movieRepository
    ) {
        $this->movieRepository = $movieRepository;
    }


    public function getAllMovies(): Collection
    {
        return $this->movieRepository->getAllMovies();
    }

    public function createNewMovie(Array $createRequest): Void
    {
        $this->movieRepository->createNewMovie($createRequest);
    }

    public function getMovie(Int $id): Model
    {
        return $this->movieRepository->getMovie($id);
    }

    public function updateMovie(Array $updateRequest, Int $id): Void
    {
        $this->movieRepository->updateMovie($updateRequest, $id);
    }

    public function deleteMovie(Int $id): Void
    {
        $this->movieRepository->deleteMovie($id);
    }
}

