<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class TenantSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $guard = 'web';
        $tenant = Role::create(['guard_name' => $guard,'name' => 'tenant']);
        $user = Role::create(['guard_name' => $guard,'name' => 'user']);

        Permission::create(['guard_name' => $guard,'name' => 'tenant'])->syncRoles([$tenant]);

        $system = User::create([
            'name' => 'Test',
            'username' => 'test',
            'email' => 'test@gmail.com',
            'password' => Hash::make('123456'),
            'status' => 1
        ])->assignRole('tenant');

        /* $menuadmin1 = MenuGenerate::create([
                'title' => 'Admin',
                'icon' => 'box',
                'route_name' => 'admin',
                'params' => json_encode([
                    'layout' => 'top-menu',
                ]),
                'type' => '1',
                'belongs_to_id' => null,
                'item_by_menu' => 2,
                'position' => 2
            ]
        );
        $menuadmin2 = MenuGenerate::create([
                'title' => 'Dashboard',
                'icon' => 'home',
                'route_name' => 'dashboard',
                'params' => json_encode([
                    'layout' => 'top-menu',
                ]),
                'type' => '1',
                'belongs_to_id' => null,
                'item_by_menu' => 2,
                'position' => 1
            ]
        );
        $menuadmin1_1 = MenuGenerate::create([
                'title' => 'Users',
                'icon' => 'user',
                'route_name' => 'user',
                'params' => json_encode([
                    'layout' => 'top-menu',
                ]),
                'type' => '2',
                'belongs_to_id' => $menuadmin1->id,
                'item_by_menu' => 2,
                'position' => 1
            ]
        );

        $menuadmin1_2 = MenuGenerate::create([
                'title' => 'Roles',
                'icon' => 'git-fork',
                'route_name' => 'admin.cosa',
                'params' => json_encode([
                    'layout' => 'top-menu',
                ]),
                'type' => '2',
                'belongs_to_id' => $menuadmin1->id,
                'item_by_menu' => 2,
                'position' => 2
            ]
        );

        $menulanding1 = MenuGenerate::create([
            'title' => 'Home',
            'icon' => '#',
            'route_name' => 'landing',
            'params' => json_encode([
                'layout' => 'landing-menu',
            ]),
            'type' => '1',
            'belongs_to_id' => null,
            'item_by_menu' => 1,
            'position' => 1
        ]);

        $menulanding2 = MenuGenerate::create([
            'title' => 'Features',
            'icon' => '#features',
            'route_name' => 'landing',
            'params' => json_encode([
                'layout' => 'landing-menu',
            ]),
            'type' => '1',
            'belongs_to_id' => null,
            'item_by_menu' => 1,
            'position' => 2
        ]); */
    }
}
