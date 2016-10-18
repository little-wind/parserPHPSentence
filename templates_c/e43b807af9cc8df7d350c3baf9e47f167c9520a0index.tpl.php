<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>自定义模板</title>
</head>
<body>
  <!-- 我是静态注释 -->

  <?php /* 我是php注释 */ ?>
  我将被index.php导入
  <?php echo $this->vars['name']; ?>这个标签必须经过Parser.class.php这个解析类来解析
  <br>
  <?php if($this->vars['condition']) { ?><p>我是界面1</p>
    <?php } else {?><p>我是界面2</p>
  <?php } ?>
  <br>
  <?php foreach($this->vars['array'] as $key => $value) { ?>
    <?php echo $key; ?>...<?php echo $value; ?><br>
  <?php } ?>
</body>
</html>