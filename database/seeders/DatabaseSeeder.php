<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create the first user with custom attributes
        User::factory()->create([
            'nama_lengkap' => 'Luqman Fattah Nadin',
            'username' => 'nadhiens',
            'email' => 'nadhiens@example.com',
            'password' => Hash::make('nadhiens'), // Set a custom password
            'nomor_telepon' => '081234567891',
            'tanggal_lahir' => '1992-12-30',
            'image' => 'path/to/bob_image.jpg', // Replace with actual image path or URL
            'role' => 1, // Example role
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        // Create the second user with custom attributes
        User::factory()->create([
            'nama_lengkap' => 'Alice Smith',
            'username' => 'alice',
            'email' => 'alice@example.com',
            'password' => Hash::make('password123'), // Set a custom password
            'nomor_telepon' => '081234567890',
            'tanggal_lahir' => '1995-06-15',
            'image' => 'path/to/alice_image.jpg', // Replace with actual image path or URL
            'role' => 2, // Example role
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Uncomment this line if you want to create 10 random users
        // User::factory(10)->create();
    }
}
