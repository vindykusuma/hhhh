<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            ['title' => 'user_management_access',],
            ['title' => 'user_management_create',],
            ['title' => 'user_management_edit',],
            ['title' => 'user_management_view',],
            ['title' => 'user_management_delete',],
            ['title' => 'permission_access',],
            ['title' => 'permission_create',],
            ['title' => 'permission_edit',],
            ['title' => 'permission_view',],
            [ 'title' => 'permission_delete',],
            [ 'title' => 'role_access',],
            [ 'title' => 'role_create',],
            [ 'title' => 'role_edit',],
            [ 'title' => 'role_view',],
            [ 'title' => 'role_delete',],
            [ 'title' => 'user_access',],
            [ 'title' => 'user_create',],
            [ 'title' => 'user_edit',],
            [ 'title' => 'user_view',],
            [ 'title' => 'user_delete',],
            [ 'title' => 'country_access',],
            [ 'title' => 'country_create',],
            [ 'title' => 'country_edit',],
            [ 'title' => 'country_view',],
            [ 'title' => 'country_delete',],
            [ 'title' => 'jenisfoto_access',],
            [ 'title' => 'jenisfoto_create',],
            [ 'title' => 'jenisfoto_edit',],
            [ 'title' => 'jenisfoto_view',],
            [ 'title' => 'jenisfoto_delete',],
            [ 'title' => 'portofolio_access',],
            [ 'title' => 'portofolio_create',],
            [ 'title' => 'portofolio_edit',],
            [ 'title' => 'portofolio_view',],
            [ 'title' => 'portofolio_delete',],
            [ 'title' => 'pricelist_access',],
            [ 'title' => 'pricelist_create',],
            [ 'title' => 'pricelist_edit',],
            [ 'title' => 'pricelist_view',],
            [ 'title' => 'pricelist_delete',],
            [ 'title' => 'pelanggan_access',],
            [ 'title' => 'pelanggan_create',],
            [ 'title' => 'pelanggan_edit',],
            [ 'title' => 'pelanggan_view',],
            [ 'title' => 'pelanggan_delete',],
            [ 'title' => 'fotografer_access',],
            [ 'title' => 'fotografer_create',],
            [ 'title' => 'fotografer_edit',],
            [ 'title' => 'fotografer_view',],
            [ 'title' => 'fotografer_delete',],
            [ 'title' => 'pesanan_access',],
            [ 'title' => 'pesanan_create',],
            [ 'title' => 'pesanan_edit',],
            [ 'title' => 'pesanan_view',],
            [ 'title' => 'pesanan_delete',],
        ];

            Permission::insert($permissions);

    }
}
