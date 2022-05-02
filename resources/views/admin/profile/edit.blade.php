<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MyNews</title>
  </head>
  <body>
    
    {{-- layouts/admin.blade.phpを読み込む --}}
    @extends('layouts.profile')
    
    {{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
    @section('title', 'ニュース')

    {{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
    @section('content')
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <h2>Myプロフィール3</h2>
            <p>名前：越智龍太郎</p>
            <p>年齢：27歳</p>
          </div>
          </div>
      </div>
    @endsection
  </body>
</html>