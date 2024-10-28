<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'create_ParishAdmin']);
        Permission::create(['name' => 'update_ParishAdmin']);
        Permission::create(['name' => 'delete_ParishAdmin']);

        Permission::create(['name' => 'create_Staff']);
        Permission::create(['name' => 'update_Staff']);
        Permission::create(['name' => 'delete_Staff']);

        Permission::create(['name' => 'create_Baptismal']);
        Permission::create(['name' => 'update_Baptismal']);
        Permission::create(['name' => 'delete_Baptismal']);

        Permission::create(['name' => 'create_Confirmation']);
        Permission::create(['name' => 'update_Confirmation']);
        Permission::create(['name' => 'delete_Confirmation']);

        Permission::create(['name' => 'create_Death']);
        Permission::create(['name' => 'update_Death']);
        Permission::create(['name' => 'delete_Death']);

        Permission::create(['name' => 'create_Marriage']);
        Permission::create(['name' => 'update_Marriage']);
        Permission::create(['name' => 'delete_Marriage']);

        Permission::create(['name' => 'create_Member']);
        Permission::create(['name' => 'update_Member']);
        Permission::create(['name' => 'delete_Member']);

        Permission::create(['name' => 'create_Donation']);
        Permission::create(['name' => 'update_Donation']);

        Permission::create(['name' => 'create_Receipt']);
        Permission::create(['name' => 'update_Receipt']);

        Permission::create(['name' => 'create_Schedule']);
        Permission::create(['name' => 'update_Schedule']);
        Permission::create(['name' => 'delete_Schedule']);

        Permission::create(['name' => 'create_Pamisa']);
        Permission::create(['name' => 'update_Pamisa']);
        Permission::create(['name' => 'delete_Pamisa']);

        Permission::create(['name' => 'create_PSS']);
        Permission::create(['name' => 'update_PSS']);
        Permission::create(['name' => 'delete_PSS']);
        // Permission::create(['name' => 'show_product']);
        // Permission::create(['name' => 'export_product']);

        Permission::create(['name' => 'view_routes_admin']);
        Permission::create(['name' => 'view_routes_DioceseAdmin']);

        $role = Role::create(['name' => 'DioceseAdmin']);
        $role->givePermissionTo(['create_ParishAdmin', 'update_ParishAdmin', 'delete_ParishAdmin',
                                 'create_Staff', 'update_Staff', 'delete_Staff' ,
                                 'create_Baptismal', 'update_Baptismal', 'delete_Baptismal',
                                 'create_Confirmation', 'update_Confirmation', 'delete_Confirmation',
                                 'create_Death', 'update_Death', 'delete_Death',
                                 'create_Marriage', 'update_Marriage', 'delete_Marriage', 'view_routes_DioceseAdmin']);

        $role1 = Role::create(['name' => 'ParishAdmin']);
        $role1->givePermissionTo(['create_Staff', 'update_Staff', 'delete_Staff' , 'create_Baptismal' , 'update_Staff',  'delete_Staff',
                                    'create_Baptismal', 'update_Baptismal', 'delete_Baptismal',
                                    'create_Confirmation', 'update_Confirmation', 'delete_Confirmation',
                                    'create_Death', 'update_Death', 'delete_Death',
                                    'create_Marriage', 'update_Marriage', 'delete_Marriage',
                                    'create_Member', 'update_Member', 'delete_Member',
                                    'create_Donation', 'update_Donation',
                                    'create_Receipt', 'update_Receipt',
                                    'create_Schedule', 'update_Schedule', 'delete_Schedule',
                                    'create_Pamisa', 'update_Pamisa', 'delete_Pamisa',
                                    'create_PSS', 'update_PSS', 'delete_PSS', 'view_routes_admin']);

        $role2 = Role::create(['name' => 'Staff']);
        $role2->givePermissionTo([  'create_Baptismal' , 'update_Staff',  'delete_Staff',
                                    'create_Baptismal', 'update_Baptismal', 'delete_Baptismal',
                                    'create_Confirmation', 'update_Confirmation', 'delete_Confirmation',
                                    'create_Death', 'update_Death', 'delete_Death',
                                    'create_Marriage', 'update_Marriage', 'delete_Marriage',
                                    'create_Member', 'update_Member', 'delete_Member',
                                    'create_Donation', 'update_Donation',
                                    'create_Receipt', 'update_Receipt',
                                    'create_Schedule', 'update_Schedule', 'delete_Schedule',
                                    'create_Pamisa', 'update_Pamisa', 'delete_Pamisa',
                                    'create_PSS', 'update_PSS', 'delete_PSS',]);
    }
}
