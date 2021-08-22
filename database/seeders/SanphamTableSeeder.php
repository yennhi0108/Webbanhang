<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use DB;

class SanphamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $list = [];
        $faker = \Faker\Factory::create();
        $photos = array('conan.jpg','doraemon.jpg','thuyhu.jpg');

        for ($i=1; $i <= 30; $i++) {
            $today = Carbon::now();
            array_push($list, [
                'sp_ten'                  => "sp_ten $i",
                'sp_giaGoc'               => $faker->randomFloat(2000000, 50000, 1999999),
                'sp_giaBan'               => $i,
                'sp_hinh'                 => "truyen-$i.jpg",
                'sp_thongTin'             => "sp_thong $i",
                'sp_danhGia'              => "sp_danhGia $i",
                'sp_taoMoi'               => $today->format('Y-m-d H:i:s'),
                'sp_capNhat'              => $today->format('Y-m-d H:i:s'),
                'sp_trangThai'            => $faker->numberBetween(1, 2),
                'l_ma'                    => $faker->numberBetween(1, 7) // Khoa ngoai
            ]);
        }
        DB::table('book_sanpham')->insert($list);
    }
}
