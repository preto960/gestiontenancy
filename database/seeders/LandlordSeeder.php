<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use App\Models\Profile;
use App\Models\Tenant;
use Illuminate\Support\Facades\Hash;

class LandlordSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $guard = 'web';
        $landlord = Role::create(['guard_name' => $guard,'name' => 'landlord']);
        $collaborator = Role::create(['guard_name' => $guard,'name' => 'collaborator']);
        $user = Role::create(['guard_name' => $guard,'name' => 'user']);

        Permission::create(['guard_name' => $guard,'name' => 'landlord'])->syncRoles([$landlord]);
        Permission::create(['guard_name' => $guard,'name' => 'collaborator'])->syncRoles([$collaborator]);

        Tenant::create(['name' => 'prueba', 'domain' => 'gestiontenancy1.test', 'database' => 'multigeekos_prueba', 'status' => 1]);

        $system = User::create([
            'username' => 'system',
            'email' => 'system@gmail.com',
            'password' => Hash::make('123456'),
            'status' => 1,
        ])->assignRole('landlord');

        $profile = Profile::create([
            'user_id' => $system->id,
            'first_name' => 'System',
            'last_name' => 'System',
            'phone' => '123456789',
            'street' => 'chile',
        ]);

        /* $system = User::create([
            'name' => 'Juan',
            'username' => 'juan',
            'email' => 'preto.orellana@gmail.com',
            'password' => Hash::make('19960372'),
            'status' => 1,
            'hidden' => 0,
            'online' => 0
        ])->assignRole('collaborator');

        $menuadmin1 = MenuGenerate::create([
                'title' => 'Admin',
                'icon' => 'settings',
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
                'position' => 2
            ]
        );
        $menuadmin1_2 = MenuGenerate::create([
                'title' => 'Customers',
                'icon' => 'factory',
                'route_name' => 'customers',
                'params' => json_encode([
                    'layout' => 'top-menu',
                ]),
                'type' => '2',
                'belongs_to_id' => $menuadmin1->id,
                'item_by_menu' => 2,
                'position' => 1
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
            ]
        );
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
            ]
        ); */
    }
}
