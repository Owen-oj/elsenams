<?php

use App\Repositories\Models\Category;
use App\Repositories\Models\Role;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        factory(User::class,1)->create();
        factory(Category::class,3)->create();
        factory(Role::class,2)->create();
    }
}
