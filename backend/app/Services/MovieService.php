<?php

namespace App\Services;

use App\Repositories\MovieRepositoryInterface;
use App\Http\Requests\CreateMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Http\Dto\Movie\CreateDto;
use App\Http\Dto\Movie\FindByIdDto;
use App\Http\Dto\Movie\UpdateDto;

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

    public function createNewMovie(CreateDto $createDto): Void
    {
        $this->movieRepository->createNewMovie($createRequest);
    }

    public function getMovie(FindById $findByIdDto): Model
    {
        return $this->movieRepository->getMovie($findByIdDto->id);
    }

    public function updateMovie(UpdateDto $updateDto): Void
    {
        $this->movieRepository->updateMovie($updateDto);
    }

    public function deleteMovie(FindById $findByIdDto): Void
    {
        $this->movieRepository->deleteMovie($findByIdDto->id);
    }
}
