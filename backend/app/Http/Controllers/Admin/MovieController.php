<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Services\MovieServiceInterface;
use App\Http\Dto\Movie\CreateDto;
use App\Http\Dto\Movie\FindByIdDto;
use App\Http\Dto\Movie\UpdateDto;
use App\Http\Presenters\Movie\IndexPresenter;
use App\Http\Presenters\Movie\FindByIdPresenter;
use Vinkla\Hashids\Facades\Hashids;

class MovieController extends Controller
{
    private MovieServiceInterface $movieService;

    public function __construct(MovieServiceInterface $movieService)
    {
        $this->movieService = $movieService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(IndexPresenter $presenter): View
    {
        $movieList = $this->movieService->getAllMovies();

        return view('admin.movies.index')->with('movies', $presenter->output($movieList));
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
        $createDto = new CreateDto([
            'title' => $request->title,
            'imageUrl' => $request->imageUrl
        ]);
        $this->movieService->createNewMovie($createDto);

        return redirect(route('admin.movies.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $id, FindByIdPresenter $presenter): View
    {
        $findByIdDto = new FindByIdDto([
            'id' => Hashids::decode($id)[0]
        ]);
        $movie = $this->movieService->getMovie($findByIdDto);

        return view('admin.movies.show')->with('movie', $presenter->output($movie));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id, FindByIdPresenter $presenter): View
    {
        $findByIdDto = new FindByIdDto([
            'id' => Hashids::decode($id)[0]
        ]);
        $movie = $this->movieService->getMovie($findByIdDto);

        return view('admin.movies.edit')->with('movie', $presenter->output($movie));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMovieRequest $request, string $id): RedirectResponse
    {
        $updateRequest = $request->validated();
        $updateDto = new UpdateDto([
            'id' => Hashids::decode($id)[0],
            'title' => $request->title,
            'imageUrl' => $request->imageUrl
        ]);
        $this->movieService->updateMovie($updateDto);

        return redirect(route('admin.movies.show', ['movie' => $id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id): RedirectResponse
    {
        $findByIdDto = new FindByIdDto([
            'id' => Hashids::decode($id)[0]
        ]);
        $this->movieService->deleteMovie($findByIdDto);

        return redirect(route('admin.movies.index'));
    }
}
