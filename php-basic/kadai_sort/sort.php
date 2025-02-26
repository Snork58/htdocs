
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="description" content=""/>
  <title>Document</title>
</head>
<body>
  <?php
    $nums = [15, 4, 18, 23, 10];
    function sort_2way(array $array, bool $order = true) {
      if ($order) {
        echo '<p>昇順にソートします。</p>';
        sort($array);
      } else {
        echo '<p>降順にソートします。</p>';
        rsort($array);
      }
      foreach ($array as $value) {
        echo "<p>{$value}</p>";
      }
    }
    sort_2way($nums);
    sort_2way($nums, false);
  ?>
</body>
</html>