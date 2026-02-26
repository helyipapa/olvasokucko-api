<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Loan;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Egri Csillagok',
            'author' => 'Gárdonyi Géza',
            'available_copies' => 5,
        ]);
    
        Book::create([
            'title' => 'Vuk',
            'author' => 'Fekete István',
            'available_copies' => 2,
        ]);

        Book::factory()->count(3)->create();
    }
}
