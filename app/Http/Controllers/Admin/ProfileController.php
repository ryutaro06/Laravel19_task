<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// 以下を追記することでProfile Modelが扱えるようになる
use App\Profile;

class ProfileController extends Controller
{
  //
  public function add()
    {
        return view('admin.profile.create');
    }
    
        // 以下を追記
    public function create(Request $request)
    {
      // Varidationを行う
      $this->validate($request, Profile::$rules);
      
      $profile = new Profile;
      $form = $request->all();
      
      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // フォームから送信されてきたimageを削除する
      unset($form['image']);
      
      // データベースに保存する
      $profile->fill($form);
      $profile->save();
      
      // admin/news/createにリダイレクトする
      return redirect('admin/profile/create');
    }  
    
    public function edit(Request $request)
    {
      // News Modelからデータを取得する
      $profile = Profile::find($request->id);
      if (empty($profile)) {
        abort(404);    
      }
      return view('admin.profile.edit', ['profile_form' => $profile]);
    }
  
  
  public function update(Request $request)
  {
      // Validationをかける
      $this->validate($request, Profile::$rules);
      // News Modelからデータを取得する
      $news = Profile::find($request->id);
      
      unset($profile_form['remove']);
      unset($profile_form['_token']);
      
      // 該当するデータを上書きして保存する
      $profile->fill($profile_form)->save();
      return redirect('admin/profile');
  }
}
