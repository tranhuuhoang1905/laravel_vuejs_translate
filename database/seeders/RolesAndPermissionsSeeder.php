<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'access_admin']);
        Permission::create(['name' => 'access_leader']);
        Permission::create(['name' => 'access_user']);
        $role = Role::create(['name' => 'admin'])
            ->givePermissionTo(['access_admin', 'access_leader','access_user']);
        $role = Role::create(['name' => 'leader'])
            ->givePermissionTo(['access_leader','access_user']);
        $role = Role::create(['name' => 'user'])
            ->givePermissionTo(['access_user']);
        
        $admin = User::create([
            'name' => "admin",
            'email' => "admin@gmail.com",
            'password' => Hash::make('123456'),
        ]);
        $admin->assignRole('admin');

        $leader = User::create([
            'name' => "leader",
            'email' => "leader@gmail.com",
            'password' => Hash::make('123456'),
        ]);
        $leader->assignRole('leader');

        $user = User::create([
            'name' => "user",
            'email' => "user@gmail.com",
            'password' => Hash::make('123456'),
        ]);
        $user->assignRole('user');

    }
}
