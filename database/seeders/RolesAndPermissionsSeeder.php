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
        $admin = User::create(['first_name' => 'admin', 'last_name' => 'admin', 'email' => 'admin@email.com', 'password' => bcrypt('adminadmin')]);
        $admin->assignRole($roleAdmin);
        $o = User::create(['first_name' => 'Ondrej', 'last_name' => 'Konicek', 'email' => 'konovina@gmail.com', 'password' => bcrypt('ondrejondrej')]);
        $o->assignRole($roleInvestor);
        $j = User::create(['first_name' => 'Julie', 'last_name' => 'Kuncarova', 'email' => 'julie@gmail.com', 'password' => bcrypt('juliejulie')]);
        $j->assignRole($roleInvestor);
        $f = User::create(['first_name' => 'Filip', 'last_name' => 'Trbusek', 'email' => 'ft@gmail.com', 'password' => bcrypt('filipfilip')]);
        $f->assignRole($roleInvestor);

    }
}
