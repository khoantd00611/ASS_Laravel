<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('articles')->truncate();
        \Illuminate\Support\Facades\DB::table('articles')->insert([
            [
                'name'=>'Banh ngon ngay tet1',
                'author'=>'khoa',
                'content'=>'Banh ngon lam',
                'images'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJZGRGEZ6HWkjqaGi3mQRfCLN58dMrEZx3zR09p7nrRk_s7-JI'
            ],
            [
                'name'=>'Banh ngon ngay mua2',
                'author'=>'khoa',
                'content'=>'Banh ngon binh thuong',
                'images'=>'https://afamilycdn.com/L9AscbailKNM6qlDjYJqDI39UnIrac/Image/2016/03/xac-phat-them-voi-10-mon-banh-dan-da-ngon-lanh-cua-duong-pho-sai-gon_ab77e8b167.jpg'
            ],
            [
                'name'=>'Banh ngon ngay nang3',
                'author'=>'khoa',
                'content'=>'Banh rat ngon',
                'images'=>'https://c2.staticflickr.com/6/5825/22970996514_a721f12743.jpg'
            ],
            [
                'name'=>'Banh ngon ngay ram4',
                'author'=>'khoa',
                'content'=>'Banh kha ngon',
                'images'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJZGRGEZ6HWkjqaGi3mQRfCLN58dMrEZx3zR09p7nrRk_s7-JI'
            ],
            [
                'name'=>'Banh ngon ngay tet5',
                'author'=>'khoa',
                'content'=>'Banh ngon lam',
                'images'=>'https://baomoi-photo-1-td.zadn.vn/w700_r1/16/11/13/61/20818277/1_58205.jpg'
            ],
            [
                'name'=>'Banh ngon ngay mua6',
                'author'=>'khoa',
                'content'=>'Banh ngon binh thuong',
                'images'=>'https://afamilycdn.com/L9AscbailKNM6qlDjYJqDI39UnIrac/Image/2016/03/xac-phat-them-voi-10-mon-banh-dan-da-ngon-lanh-cua-duong-pho-sai-gon_ab77e8b167.jpg'
            ],
            [
                'name'=>'Banh ngon ngay nang7',
                'author'=>'khoa',
                'content'=>'Banh rat ngon',
                'images'=>'https://c2.staticflickr.com/6/5825/22970996514_a721f12743.jpg'
            ],
            [
                'name'=>'Banh ngon ngay tet8',
                'author'=>'khoa',
                'content'=>'Banh ngon lam',
                'images'=>'https://baomoi-photo-1-td.zadn.vn/w700_r1/16/11/13/61/20818277/1_58205.jpg'
            ],
            [
                'name'=>'Banh ngon ngay mua9',
                'author'=>'khoa',
                'content'=>'Banh ngon binh thuong',
                'images'=>'https://afamilycdn.com/L9AscbailKNM6qlDjYJqDI39UnIrac/Image/2016/03/xac-phat-them-voi-10-mon-banh-dan-da-ngon-lanh-cua-duong-pho-sai-gon_ab77e8b167.jpg'
            ],
            [
                'name'=>'Banh ngon ngay nang10',
                'author'=>'khoa',
                'content'=>'Banh rat ngon',
                'images'=>'https://c2.staticflickr.com/6/5825/22970996514_a721f12743.jpg'
            ],
            [
                'name'=>'Banh ngon ngay tet11',
                'author'=>'khoa',
                'content'=>'Banh ngon lam',
                'images'=>'https://baomoi-photo-1-td.zadn.vn/w700_r1/16/11/13/61/20818277/1_58205.jpg'
            ],
            [
                'name'=>'Banh ngon ngay mua12',
                'author'=>'khoa',
                'content'=>'Banh ngon binh thuong',
                'images'=>'https://afamilycdn.com/L9AscbailKNM6qlDjYJqDI39UnIrac/Image/2016/03/xac-phat-them-voi-10-mon-banh-dan-da-ngon-lanh-cua-duong-pho-sai-gon_ab77e8b167.jpg'
            ],
            [
                'name'=>'Banh ngon ngay nang13',
                'author'=>'khoa',
                'content'=>'Banh rat ngon',
                'images'=>'https://c2.staticflickr.com/6/5825/22970996514_a721f12743.jpg'
            ],
            [
                'name'=>'Banh ngon ngay tet14',
                'author'=>'khoa',
                'content'=>'Banh ngon lam',
                'images'=>'https://baomoi-photo-1-td.zadn.vn/w700_r1/16/11/13/61/20818277/1_58205.jpg'
            ],
            [
                'name'=>'Banh ngon ngay mua15',
                'author'=>'khoa',
                'content'=>'Banh ngon binh thuong',
                'images'=>'https://afamilycdn.com/L9AscbailKNM6qlDjYJqDI39UnIrac/Image/2016/03/xac-phat-them-voi-10-mon-banh-dan-da-ngon-lanh-cua-duong-pho-sai-gon_ab77e8b167.jpg'
            ],
            [
                'name'=>'Banh ngon ngay nang16',
                'author'=>'khoa',
                'content'=>'Banh rat ngon',
                'images'=>'https://c2.staticflickr.com/6/5825/22970996514_a721f12743.jpg'
            ],
            [
                'name'=>'Banh ngon ngay tet17',
                'author'=>'khoa',
                'content'=>'Banh ngon lam',
                'images'=>'https://baomoi-photo-1-td.zadn.vn/w700_r1/16/11/13/61/20818277/1_58205.jpg'
            ],
            [
                'name'=>'Banh ngon ngay mua18',
                'author'=>'khoa',
                'content'=>'Banh ngon binh thuong',
                'images'=>'https://afamilycdn.com/L9AscbailKNM6qlDjYJqDI39UnIrac/Image/2016/03/xac-phat-them-voi-10-mon-banh-dan-da-ngon-lanh-cua-duong-pho-sai-gon_ab77e8b167.jpg'
            ],
            [
                'name'=>'Banh ngon ngay nang19',
                'author'=>'khoa',
                'content'=>'Banh rat ngon',
                'images'=>'https://c2.staticflickr.com/6/5825/22970996514_a721f12743.jpg'
            ],
            [
                'name'=>'Banh ngon ngay tet20',
                'author'=>'khoa',
                'content'=>'Banh ngon lam',
                'images'=>'https://baomoi-photo-1-td.zadn.vn/w700_r1/16/11/13/61/20818277/1_58205.jpg'
            ],


        ]);
    }
}
