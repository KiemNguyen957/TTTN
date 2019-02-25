<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->bothify('SamSung ##??'),
        'slug' => str_slug($faker->bothify('SamSung ##??'),'-'),
        'image'=> 'produts/wkEDB6XqmgC11xvjGieLm5uMo0P1kzKeAducyqAH.jpeg',
        'price'=> $faker->numberBetween($min = 1000000, $max = 2000000),
        'sale'=>$faker->numberBetween($min = 0, $max = 100),
        'promotion'=>'Cơ hội trúng 61 xe Wave Alpha ',
        'screen'=>'Super AMOLED, 6.3", Full HD+',
        'operating_system' => $faker->numerify('iOS ###'),
        'camera' => $faker->numberBetween($min = 5, $max = 16),
        'cpu' => $faker->bothify('Snapdragon ##??'),    
        'ram' => $faker->randomDigit(),
        'memory'=>$faker->numberBetween($min = 5, $max = 16),
        'memory_card'=>'MicroSD, hỗ trợ tối đa 400 GB',
        'pin'=>'3700 mAh, có sạc nhanh',
        'description'=>'Samsung Galaxy A8 Star là chiếc điện thoại thứ 2 của Samsung chạy trên nền tảng Android Go siêu nhẹ được tối ưu dành riêng cho những chiếc máy giá rẻ',
        'category_id'=>$faker->randomElement($array = array (1,2,3,4,5,6,7,8)),
        
    ];
});
