<?php

use Illuminate\Database\Seeder;
use App\Restdata;
use App\Person;

class DatabaseSeeder extends Seeder
{
   public function run()
   {
    $param = [
        'name' => 'taro',
        'mail' => 'taro@yamada.jp',
        'age' => 12,
    ];
    DB::table('people')->insert($param);

    $param = [
        'name' => 'hanako',
        'mail' => 'hanako@flower.jp',
        'age' => 34,
    ];
    DB::table('people')->insert($param);

    $param = [
        'name' => 'sachiko',
        'mail' => 'sachiko@happy.jp',
        'age' => 56,
    ];
    DB::table('people')->insert($param);

    $param = [
        'message' => 'Google Japan',
        'url' => 'https://www.google.co.jp',
    ];
    $restdata = new Restdata;
    $restdata->fill($param)->save();
    $param = [
        'message' => 'Yahoo Japan',
        'url' => 'https://www.yahoo.co.jp'
    ];
    $restdata = new Restdata;
    $restdata->fill($param)->save();
    $param = [
        'message' =>'MSN Japan',
        'url' => 'http://www.msn.com/ja-jp',
    ];
    $restdata = new Restdata;
    $restdata->fill($param)->save();
   }
}