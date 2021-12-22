<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $permissions = [

            // admin panel permissions

            [
                'name' => 'admin_panel_access',
            ],

            // user permissions

            [
                'name' => 'users_access',
            ],

            [
                'name' => 'user_edit',
            ],

            [
                'name' => 'user_delete',
            ],

            [
                'name' => 'user_create',
            ],

            [
                'name' => 'user_show',
            ],

            [
                'name' => 'user_status',
            ],


            // role permissions

            [
                'name' => 'roles_access',
            ],

            [
                'name' => 'role_edit',
            ],

            [
                'name' => 'role_delete',
            ],

            [
                'name' => 'role_create',
            ],

            [
                'name' => 'role_show',
            ],


            // permission permissions

            [
                'name' => 'permissions_access',
            ],

            [
                'name' => 'permission_edit',
            ],

            [
                'name' => 'permission_delete',
            ],

            [
                'name' => 'permission_create',
            ],

            // Category permissions

            [
                'name' => 'categories_access',
            ],

            [
                'name' => 'category_edit',
            ],

            [
                'name' => 'category_delete',
            ],

            [
                'name' => 'category_create',
            ],

            // Sub Category permissions

            [
                'name' => 'subcategories_access',
            ],

            [
                'name' => 'subcategory_edit',
            ],

            [
                'name' => 'subcategory_delete',
            ],

            [
                'name' => 'subcategory_create',
            ],

            // Product permissions

            [
                'name' => 'products_access',
            ],

            [
                'name' => 'product_edit',
            ],

            [
                'name' => 'product_delete',
            ],

            [
                'name' => 'product_create',
            ],

            [
                'name' => 'export_pdf',
            ],




        ];

        foreach($permissions as $permission){
            Permission::create($permission);
        }

    }
}
