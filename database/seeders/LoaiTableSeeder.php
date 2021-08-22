<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DateTime;
use DB;
class LoaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];

        $types = ["Truyện, tiểu thuyết", "Thiếu nhi", "Văn học nghệ thuật", "Văn hóa xã hội – Lịch sử", "Giáo trình", 
                       "Tâm lý, tâm linh, tôn giáo", "Chính trị – pháp luật"];
        sort($types);

        $today = new DateTime('2021-01-01 08:00:00');

        for ($i=1; $i <= count($types); $i++) {
            array_push($list, [
                'l_ma'      => $i,
                'l_ten'     => $types[$i-1],
                'l_taoMoi'  => $today->format('Y-m-d H:i:s'),
                'l_capNhat' => $today->format('Y-m-d H:i:s')
            ]);
        //
        }
        DB::table('book_loai')->insert($list);
    }
}