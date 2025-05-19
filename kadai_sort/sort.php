<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    // Step2: 独自のソート関数を定義
    function sort_2way(&$array, $order)
    {
      if ($order) {
        // 昇順ソート
        sort($array);
      } else {
        // 降順ソート
        rsort($array);
      }
    }

    // Step4: ソートする配列を宣言
    $nums = [15, 4, 18, 23, 10];

    // Step5: 昇順ソートを実行
    echo "昇順にソートします。<br>";
    sort_2way($nums, true);
    print_r($nums);
    echo "<br><br>";

    // 降順ソートを実行
    echo "降順にソートします。<br>";
    sort_2way($nums, false);
    print_r($nums);
    ?>
  </p>
</body>

</html>