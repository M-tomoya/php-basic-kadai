<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ソート関数の定義
        function sort_2way(array $array,  string $order) {
          if ($order === 'true') {
            sort($array);
            echo '昇順にソートします。<br>';
          } else {
            rsort($array);
            echo '降順にソートします。<br>';
          }
          foreach ($array as $num) {
            echo $num . '<br>';
          }
        }

        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];

        // ソートの実行と配列の出力
        sort_2way($nums, 'true');
        sort_2way($nums, 'false');

        ?>
    </p>
</body>

</html>
