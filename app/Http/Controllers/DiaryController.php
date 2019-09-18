<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Diary;//Appはnamespaceの中にある

//extends Controllerの中にDiaryContrllerを追加する
class DiaryController extends Controller
{
    public function index()
    {
        //diariesテーブルのデータを全件取得
        //ＯＬＬメソッド:全件データを取得するメソッド

        $diaries = Diary::all();

       // dd($diaries);//ddはver_dump + 処理をここで中断

       //view('フォルダ名'.ファイル名(blame.phpは除く)))
        return view('diaries.index',[
            'diaries'=>$diaries
        ]);
        
    }
//createは新規追加の画面を表示するメソッド
//viewは表示するメソッド
    public function create(){
        return view('diaries.create');
    }
    //新規追加の動画で投稿ボタンが押されたとき、
    //投稿処理をするメソッド

    //ポスト送信されたtitleを受け取る
    public function store(Request $request)
    {
        dd($request->title);
    }
}
