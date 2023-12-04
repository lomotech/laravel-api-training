<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::count();

        if ($users == 0) {
            User::factory()
                ->create([
                    'name' => 'System Admin',
                    'email' => 'root@example.com'
                ]);

            User::factory(10)->create();
        }
    }
}
