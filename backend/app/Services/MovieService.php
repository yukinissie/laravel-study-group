<?php

namespace App\Services;

use App\Repositories\MovieRepositoryInterface;
use App\Http\Requests\CreateMovieRequest;
use App\Http\Requests\UpdateMovieRequest;

class MovieService implements MovieServiceInterface
{
    private $movie_repository;

    public function __construct(
        MovieRepositoryInterface $movie_repository
    ) {
        $this->movie_repository = $movie_repository;
    }


    public function getAllMovies(): Collection
    {
        return $this->movie_repository->getAllMovies();
    }

    public function createNewMovie(CreateMovieRequest $request): Void
    {
        $createRequest = $request->validated();
        $this->movie_repository->createNewMovie($createRequest);
    }

    public function getMovie(Int $id): Model
    {
        return $this->movie_repository->getMovie($id);
    }

    public function updateMovie(UpdateMovieRequest $request, Int $id): Void
    {
        $updateRequest = $request->validated();
        $this->movie_repository->updateMovie($updateRequest);
    }

    public function deleteMovie(Int $id): Void
    {
        $this->movie_repository->deleteMovie($id);
    }
}

