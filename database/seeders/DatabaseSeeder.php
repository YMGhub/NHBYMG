<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{

    /**
     * List of applications to add.
     */
    private $permissions = [
        'role-list',
        'role-create',
        'role-edit',
        'role-delete',
        'about-us-list',
        'about-us-create',
        'about-us-edit',
        'about-us-delete',
        'application-rental-list',
        'application-rental-create',
        'application-rental-edit',
        'application-rental-delete',
        'career-list',
        'career-create',
        'career-edit',
        'career-delete',
        'commercial-endeavors-list',
        'commercial-endeavors-create',
        'commercial-endeavors-edit',
        'commercial-endeavors-delete',
        'commercial-endeavors-information-list',
        'commercial-endeavors-information-create',
        'commercial-endeavors-information-edit',
        'commercial-endeavors-information-delete',
        'faqs-list',
        'faqs-create',
        'faqs-edit',
        'faqs-delete',
        'our-departments-list',
        'our-departments-create',
        'our-departments-edit',
        'our-departments-delete',
        'our-executives-list',
        'our-executives-create',
        'our-executives-edit',
        'our-executives-delete',
        'our-projects-list',
        'our-projects-create',
        'our-projects-edit',
        'our-projects-delete',
        'our-services-list',
        'our-services-create',
        'our-services-edit',
        'our-services-delete',
        'site-settings-list',
        'site-settings-update',
        'users-list',
        'users-create',
        'users-edit',
        'users-delete',
    ];
    /**
     * Seed the application's database.
     */
    /*public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }*/

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        foreach ($this->permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Create admin User and assign the role to him.
        $user = User::create([
            'name' => 'nhc',
            'email' => 'nhc@nhc.com',
            'password' => Hash::make('admin')
        ]);

        $role = Role::create(['name' => 'Admin']);

        $permissions = Permission::pluck('id', 'id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);
    }
}
