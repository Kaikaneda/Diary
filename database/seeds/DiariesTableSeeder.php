<?php
//seederという機能を使えばデータベースにサンプルデータを登録することが可能

use Illuminate\Database\Seeder;

//追加
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DiariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()//連想配列を作った
    {
        $diaries = [
            [
                'title'=>'初めてのセブ',
                'body'=>'PC日本に忘れた'
            ],
            [
                'title'=>'週末オスロブ',
                'body'=>'ジンベイザメでか'
            ],
            [
                'title'=>'卒業',
                'body'=>'パスポート寮に忘れた'
            ]
        ];
        foreach($diaries as $diary){
            //データベースにデータを追加す
             DB::table('diaries')->insert([
                'title'=>$diary['title'],
                'body'=>$diary['body'],
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
             ]);
            
            }
    }
}
