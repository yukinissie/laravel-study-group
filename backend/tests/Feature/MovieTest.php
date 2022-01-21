<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Movie;

class MovieTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;

    public function testHaveListView()
    {
        Movie::factory()->count(12)->create();
        $movies = Movie::all();

        $response = $this->get('/admin/movies');
        $response->assertStatus(200);

        foreach ($movies as $movie) {
            $response->assertSeeText($movie->title);
            $response->assertSee($movie->image_url);
        }
    }

    public function testGetOneMovie()
    {
        $response = $this->get('/admin/movies');
        $response->assertStatus(200);
    }
}
