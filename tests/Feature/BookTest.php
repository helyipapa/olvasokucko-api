<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Book;
use Database\Seeders\DatabaseSeeder;

class BookTest extends TestCase
{
    use RefreshDatabase;

     public function seed($class = null, $silent = false): void
    {
        parent::seed(DatabaseSeeder::class, $silent);
    }
    public function test_index_show_all(): void
    {
       //arrange
       Book::factory()->count(3)->create();
       //$this->seed();
       //act
       $response = $this->get('/api/books');
       //assert
       $response->assertStatus(200);
       $response->assertJsonCount(3);
    }
}
