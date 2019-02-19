<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name'=>'Samsung Galaxy A8 Star',
            'image'=>'produts/wkEDB6XqmgC11xvjGieLm5uMo0P1kzKeAducyqAH.jpeg',
            'price'=>'8.990.000',
            'sale'=>0,
            'promotion'=>'Cơ hội trúng 61 xe Wave Alpha ',
            'screen'=>'Super AMOLED, 6.3", Full HD+',
            'operating_system'=>'Android 8.0 (Oreo)',
            'camera'=>'24 MP và 16 MP (2 camera)',
            'cpu'=>'Qualcomm Snapdragon 660 8 nhân',
            'ram'=>'4 GB',
            'memory'=>'64 GB',
            'memory_card'=>'MicroSD, hỗ trợ tối đa 400 GB',
            'pin'=>'3700 mAh, có sạc nhanh',
            'description'=>'Samsung Galaxy A8 Star là chiếc điện thoại thứ 2 của Samsung chạy trên nền tảng Android Go siêu nhẹ được tối ưu dành riêng cho những chiếc máy giá rẻ',
            'category_id'=>2,
        ]);
        factory(Product::class,100)->create();
    }
}
