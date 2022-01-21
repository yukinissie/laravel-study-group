<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Movie;
use App\Services\MovieServiceInterface;

class MovieController extends Controller
{
    private MovieServiceInterface $movie_service;

    public function __construct(MovieServiceInterface $movie_service)
    {
        $this->movie_service = $movie_service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $movies = $this->movie_service->getAllMovies();

        return view('admin.movies.index')->with('movies', $movies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        return view('admin.movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateMovieRequest $request): RedirectResponse
    {
        $this->movie_service->createNewMovie($request);

        return redirect(route('admin.movies.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Int $id): View
    {
        $movie = $this->movie_service->getMovie($id);

        return view('admin.movies.show')->with('movie', $movie);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Int $id): View
    {
        $movie = $this->movie_service->getMovie($id);

        return view('admin.movies.edit')->with('movie', $movie);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMovieRequest $request, Int $id): RedirectResponse
    {
        $this->movie_service->updateMovie($request, $id);

        return redirect(route('admin.movies.show', ['movie' => $id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Int $id): RedirectResponse
    {
        $this->movie_service->deleteMovie($id);

        return redirect(route('admin.movies.index'));
    }
}

