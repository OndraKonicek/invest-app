<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // admin
        Permission::create(['name' => 'registration approval']);
        Permission::create(['name' => 'deposit/withdrawal approval']);
        Permission::create(['name' => 'manage accounts']);

        // investor
        Permission::create(['name' => 'deposit/withdrawal']);
        Permission::create(['name' => 'profile update']);

        //adding roles

        // role admin
        $roleAdmin = Role::create(['name' => 'admin'])
            ->givePermissionTo(['registration approval', 'deposit/withdrawal approval', 'manage accounts']);

        // role investor
        $roleInvestor = Role::create(['name' => 'investor'])
            ->givePermissionTo(['deposit/withdrawal', 'profile update']);

        // admin
        $admin = User::create(['first_name' => 'admin', 'last_name' => '', 'email' => 'admin@admin.com', 'password' => bcrypt('adminadmin')]);
        $admin->assignRole($roleAdmin);
        $investor = User::create(['first_name' => 'investor', 'last_name' => '', 'email' => 'investor@investor.com', 'password' => bcrypt('investorinvestor')]);
        $investor->assignRole($roleInvestor);

    }
}
