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
    private $movieService;

    public function __construct(MovieServiceInterface $movieService)
    {
        $this->movieService = $movieService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $movies = $this->movieService->getAllMovies();

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
        $createRequest = $request->validated();
        $this->movieService->createNewMovie($createRequest);

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
        $movie = $this->movieService->getMovie($id);

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
        $movie = $this->movieService->getMovie($id);

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
        $updateRequest = $request->validated();
        $this->movieService->updateMovie($request, $id);

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
        $this->movieService->deleteMovie($id);

        return redirect(route('admin.movies.index'));
    }
}

