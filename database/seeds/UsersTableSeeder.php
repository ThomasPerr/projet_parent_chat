<?php
use Illuminate\Database\Seeder;
use App\Models\User;
class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Durand',
            'lastname' => 'Poulet',
            'email' => 'durand@chezlui.fr',
            'role' => 'admin',
            'password' => bcrypt('admin'),
        ]);
        User::create([
            'name' => 'Dupont',
            'lastname' => 'Poulette',
            'email' => 'dupont@chezlui.fr',
            'password' => bcrypt('user'),
        ]);
    }
}