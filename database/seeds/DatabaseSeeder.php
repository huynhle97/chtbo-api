<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('sanphams')->insert([
            'tensp' => 'maytinh',
            'giatien' => 15000,
            'hinhanh' => 'img01',
        ]);
         DB::table('sanphams')->insert([
            'tensp' => 'dienthoai',
            'giatien' => 5000,
            'hinhanh' => 'img02',
        ]);
          DB::table('sanphams')->insert([
            'tensp' => 'iphone',
            'giatien' => 15000,
            'hinhanh' => 'img03',
        ]);
         DB::table('dondathang')->insert([
            'tennguoidat' => 'le',
            'tongtien' => 150000
        ]);
        DB::table('dondathang')->insert([
            'tennguoidat' => 'dat',
            'tongtien' => 100000
        ]);
        DB::table('chitietdondathang')->insert([
            'sanpham_id' => 2,
            'dondathang_id' => 1,
            'soluong' => 5,
            'tongtien' => 200000
        ]);
        DB::table('chitietdondathang')->insert([
            'sanpham_id' => 1,
            'dondathang_id' => 1,
            'soluong' => 1,
            'tongtien' => 200000
        ]);
        DB::table('chitietdondathang')->insert([
            'sanpham_id' => 3,
            'dondathang_id' => 2,
            'soluong' => 4,
            'tongtien' => 2000000
        ]);
    }
}
