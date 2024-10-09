<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title') - Laravel 新手教程</title>
  </head>
<body>
  <!-- 在父视图中指定子类视图内容插入的位置 -->
  <h1>QQQ这是来自父类 layouts.default 的标签</h1>
  <h1>QQQ这个来自父类 layouts.default 的标签，因为 @@extends 关键字，被子类所继承</h1>
  @yield('content')
</body>
</html>
