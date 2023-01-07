<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::create(['name' => 'Administrator']);
        $permission = Permission::create(['name' => 'manage tasks']);
        $permission->assignRole($adminRole);
 
        $adminUser = User::factory()->create([
            'email' => 'bayuxbca@gmail.com',
            'password' => bcrypt('bayu28022000')
        ]);
        $adminUser->assignRole('Administrator');
    }
}
