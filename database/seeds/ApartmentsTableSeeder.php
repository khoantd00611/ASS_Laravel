<?php

use Illuminate\Database\Seeder;

class ApartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('apartments')->truncate();
        \Illuminate\Support\Facades\DB::table('apartments')->insert([
        [
          'name'=>'Chung cư 1',
            'address'=>'Hà nội',
            'price'=>'40000000',
            'general_Information'=>'Chung cư rất đẹp',
            'description'=>'Rộng rãi',
            'image'=>'http://noithattinhte.vn/a/Thi-cong-noi-that-chung-cu-dep-o-Park-Hill-P08.JPG',
        ],
            [
                'name'=>'Chung cư 2',
                'address'=>'Hà nội',
                'price'=>'40000000',
                'general_Information'=>'Chung cư rất đẹp',
                'description'=>'Rộng rãi',
                'image'=>'http://noithattinhte.vn/a/Thi-cong-noi-that-chung-cu-dep-o-Park-Hill-P08.JPG',
            ],
            [
                'name'=>'Chung cư 3',
                'address'=>'Hà nội',
                'price'=>'40000000',
                'general_Information'=>'Chung cư rất đẹp',
                'description'=>'Rộng rãi',
                'image'=>'http://noithattinhte.vn/a/Thi-cong-noi-that-chung-cu-dep-o-Park-Hill-P08.JPG',
            ],
            [
                'name'=>'Chung cư 4',
                'address'=>'Hà nội',
                'price'=>'40000000',
                'general_Information'=>'Chung cư rất đẹp',
                'description'=>'Rộng rãi',
                'image'=>'http://noithattinhte.vn/a/Thi-cong-noi-that-chung-cu-dep-o-Park-Hill-P08.JPG',
            ],
            [
                'name'=>'Chung cư 5',
                'address'=>'Hà nội',
                'price'=>'40000000',
                'general_Information'=>'Chung cư rất đẹp',
                'description'=>'Rộng rãi',
                'image'=>'http://noithattinhte.vn/a/Thi-cong-noi-that-chung-cu-dep-o-Park-Hill-P08.JPG',
            ],
            [
                'name'=>'Chung cư 6',
                'address'=>'Hà nội',
                'price'=>'40000000',
                'general_Information'=>'Chung cư rất đẹp',
                'description'=>'Rộng rãi',
                'image'=>'http://noithattinhte.vn/a/Thi-cong-noi-that-chung-cu-dep-o-Park-Hill-P08.JPG',
            ],
            [
                'name'=>'Chung cư 7',
                'address'=>'Hà nội',
                'price'=>'40000000',
                'general_Information'=>'Chung cư rất đẹp',
                'description'=>'Rộng rãi',
                'image'=>'http://noithattinhte.vn/a/Thi-cong-noi-that-chung-cu-dep-o-Park-Hill-P08.JPG',
            ],
            [
                'name'=>'Chung cư 8',
                'address'=>'Hà nội',
                'price'=>'40000000',
                'general_Information'=>'Chung cư rất đẹp',
                'description'=>'Rộng rãi',
                'image'=>'http://noithattinhte.vn/a/Thi-cong-noi-that-chung-cu-dep-o-Park-Hill-P08.JPG',
            ],
            [
                'name'=>'Chung cư 9',
                'address'=>'Hà nội',
                'price'=>'40000000',
                'general_Information'=>'Chung cư rất đẹp',
                'description'=>'Rộng rãi',
                'image'=>'http://noithattinhte.vn/a/Thi-cong-noi-that-chung-cu-dep-o-Park-Hill-P08.JPG',
            ],
            [
                'name'=>'Chung cư 10',
                'address'=>'Hà nội',
                'price'=>'40000000',
                'general_Information'=>'Chung cư rất đẹp',
                'description'=>'Rộng rãi',
                'image'=>'http://noithattinhte.vn/a/Thi-cong-noi-that-chung-cu-dep-o-Park-Hill-P08.JPG',
            ],
            [
                'name'=>'Chung cư 11',
                'address'=>'Hà nội',
                'price'=>'40000000',
                'general_Information'=>'Chung cư rất đẹp',
                'description'=>'Rộng rãi',
                'image'=>'http://noithattinhte.vn/a/Thi-cong-noi-that-chung-cu-dep-o-Park-Hill-P08.JPG',
            ],
            [
                'name'=>'Chung cư 12',
                'address'=>'Hà nội',
                'price'=>'40000000',
                'general_Information'=>'Chung cư rất đẹp',
                'description'=>'Rộng rãi',
                'image'=>'http://noithattinhte.vn/a/Thi-cong-noi-that-chung-cu-dep-o-Park-Hill-P08.JPG',
            ],
            [
                'name'=>'Chung cư 13',
                'address'=>'Hà nội',
                'price'=>'40000000',
                'general_Information'=>'Chung cư rất đẹp',
                'description'=>'Rộng rãi',
                'image'=>'http://noithattinhte.vn/a/Thi-cong-noi-that-chung-cu-dep-o-Park-Hill-P08.JPG',
            ],
            [
                'name'=>'Chung cư 14',
                'address'=>'Hà nội',
                'price'=>'40000000',
                'general_Information'=>'Chung cư rất đẹp',
                'description'=>'Rộng rãi',
                'image'=>'http://noithattinhte.vn/a/Thi-cong-noi-that-chung-cu-dep-o-Park-Hill-P08.JPG',
            ],
            [
                'name'=>'Chung cư 15',
                'address'=>'Hà nội',
                'price'=>'40000000',
                'general_Information'=>'Chung cư rất đẹp',
                'description'=>'Rộng rãi',
                'image'=>'http://noithattinhte.vn/a/Thi-cong-noi-that-chung-cu-dep-o-Park-Hill-P08.JPG',
            ],
            [
                'name'=>'Chung cư 16',
                'address'=>'Hà nội',
                'price'=>'40000000',
                'general_Information'=>'Chung cư rất đẹp',
                'description'=>'Rộng rãi',
                'image'=>'http://noithattinhte.vn/a/Thi-cong-noi-that-chung-cu-dep-o-Park-Hill-P08.JPG',
            ],
            [
                'name'=>'Chung cư 17',
                'address'=>'Hà nội',
                'price'=>'40000000',
                'general_Information'=>'Chung cư rất đẹp',
                'description'=>'Rộng rãi',
                'image'=>'http://noithattinhte.vn/a/Thi-cong-noi-that-chung-cu-dep-o-Park-Hill-P08.JPG',
            ],
            [
                'name'=>'Chung cư 18',
                'address'=>'Hà nội',
                'price'=>'40000000',
                'general_Information'=>'Chung cư rất đẹp',
                'description'=>'Rộng rãi',
                'image'=>'http://noithattinhte.vn/a/Thi-cong-noi-that-chung-cu-dep-o-Park-Hill-P08.JPG',
            ],
            [
                'name'=>'Chung cư 19',
                'address'=>'Hà nội',
                'price'=>'40000000',
                'general_Information'=>'Chung cư rất đẹp',
                'description'=>'Rộng rãi',
                'image'=>'http://noithattinhte.vn/a/Thi-cong-noi-that-chung-cu-dep-o-Park-Hill-P08.JPG',
            ],
            [
                'name'=>'Chung cư 20',
                'address'=>'Hà nội',
                'price'=>'40000000',
                'general_Information'=>'Chung cư rất đẹp',
                'description'=>'Rộng rãi',
                'image'=>'http://noithattinhte.vn/a/Thi-cong-noi-that-chung-cu-dep-o-Park-Hill-P08.JPG',
            ],
        ]);
    }
}
