<!DOCTYPE html>
<html>
  <head>
    <title>Weibo App - Laravel 新手教程</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  </head>
  <body>
    @include('layouts._header')
    <div class="container">
    <!-- 在父视图中指定子类视图内容插入的位置 -->
    @yield('content')
    @include('layouts._footer')
    </div>
  </body>
</html>
