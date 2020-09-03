<?php

use Illuminate\Database\Seeder;
use App\User;

class GenerateUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(App\User::class, 15)->create();

        $user = new User;
        $user->name = 'louis';
        $user->email = 'louis@gmail.com';
        $user->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
        $user->save();
    }
}
