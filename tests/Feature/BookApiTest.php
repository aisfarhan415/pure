<?php

namespace Tests\Feature;

use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BookApiTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_get_all_books()
    {
        $books = Book::factory()->count(3)->create();

        $response = $this->get('/api/books');

        $response->assertStatus(200)
                 ->assertJson($books->toArray());
    }

    /** @test */
    public function can_create_book()
    {
        $response = $this->post('/api/books', [
            'title' => 'New Book',
            'author' => 'Author Name',
            'published_year' => 2023,
        ]);

        $response->assertStatus(201)
                 ->assertJson([
                     'title' => 'New Book',
                     'author' => 'Author Name',
                     'published_year' => 2023,
                 ]);
    }

    /** @test */
    public function can_show_book()
    {
        $book = Book::factory()->create();

        $response = $this->get("/api/books/{$book->id}");

        $response->assertStatus(200)
                 ->assertJson($book->toArray());
    }

    /** @test */
    public function can_update_book()
    {
        $book = Book::factory()->create();

        $response = $this->put("/api/books/{$book->id}", [
            'title' => 'Updated Title',
            'author' => 'Updated Author',
            'published_year' => 2024,
        ]);

        $response->assertStatus(200)
                 ->assertJson([
                     'title' => 'Updated Title',
                     'author' => 'Updated Author',
                     'published_year' => 2024,
                 ]);
    }

    /** @test */
    public function can_delete_book()
    {
        $book = Book::factory()->create();

        $response = $this->delete("/api/books/{$book->id}");

        $response->assertStatus(204);
        $this->assertDatabaseMissing('books', ['id' => $book->id]);
    }
}
