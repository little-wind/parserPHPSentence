<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>自定义模板</title>
</head>
<body>
  <!-- 我是静态注释 -->

  {#}我是php注释{#}
  我将被index.php导入
  {$name}这个标签必须经过Parser.class.php这个解析类来解析
  <br>
  {if $condition}<p>我是界面1</p>
    {else}<p>我是界面2</p>
  {/if}
  <br>
  {foreach $array(key, value)}
    {@key}...{@value}<br>
  {/foreach}
</body>
</html>