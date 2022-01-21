<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Roles::create([
            'name'=>'admin'
        ]);
        
        \App\Models\Roles::create([
            'name'=>'user'
        ]);
        
        \App\Models\Roles::create([
            'name'=>'seller'
        ]);

        \App\Models\Role_user::create([
            'user_id'=>1,
            'role_id' => 1,
        ]);
        
        \App\Models\Role_user::create([
            'user_id'=>2,
            'role_id' => 2,
        ]);
    }
}
