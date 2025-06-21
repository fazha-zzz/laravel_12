<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;
use App\Models\Product;
use App\Models\Category;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->delete();
        DB::table('categories')->delete();

        $Category1 =Category::create([
            'name'=>'Elektronik',
            'slug'=>'elekteronik',
        ]);

        $Category2 =Category::create([
            'name'=>'Perabotan rumah',
            'slug'=>'perabotan-rumah',
        ]);


        Product::create([
            'name'=>'Samsum S25 5G',
            'slug'=>'samsum-s25-5g',
            'category_id'=>$Category1->id,
            'description'=>'Lolem Input',
            'image'=>'image.png',
            'price'=>24000000,
            'stock'=>100,
        ]);

         Product::create([
            'name'=>'Samsum S25 5G',
            'slug'=>'samsum-s25-5g',
            'category_id'=>$Category2->id,
            'description'=>'Lolem Ipsum',
            'image'=>'image.png',
            'price'=>5000,
            'stock'=>1000,
        ]);
    }
}
