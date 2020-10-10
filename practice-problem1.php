<?php
  // 問題１
  print 'How are you?';
  print "<br>";
  print 'I\'m fine.';
  print "<br>";
  print "<br>";
  print "<br>";
?>


<?php
  /*
   * 問題２
   * レストランでの食事の合計金額を計算するPHPプログラムを書きなさい。
   * 400円のハンバーガーを２つ、
   * 200円のミルクシェイクを１つ、
   * 100円のコーラを１つ、
   * 消費税が7.5%で、税抜き金額の16%のチップを払う。
   */
  $hamburger = 400;
  $shake = 200;
  $cola = 100;

  $tip_rate = 0.16;
  $tax_rate = 0.075;

  $food = (2 * $hamburger) + $shake + $cola;
  $tip = $food * $tip_rate;
  $tax = $food * $tax_rate;

  $total = $food + $tip + $tax;

  print 'The total cost of the meal is $' . $total;
  print "<br>";
  print "<br>";
  print "<br>";
?>

<?php
  /*
   * 問題３
   * 問題の２の解を修正して、フォーマットされた請求書を出力する。
   * 食事の各品目について、値段、数量、合計金額を出力する。
   * 食べ物と飲み物の税抜きの合計額、
   * 税込の合計額、
   * 税金とチップを含めた合計を出力する。
   * 金額は縦に並べて出力する。
   */ 
  $hamburger = 400;
  $shake = 200;
  $cola = 100;

  $tip_rate = 0.16;
  $tax_rate = 0.075;

  $food = (2 * $hamburger) + $shake + $cola;
  $tip = $food * $tip_rate;
  $tax = $food * $tax_rate;

  $total = $food + $tip + $tax;

  printf("%s %d 個で %.0f円 /各%.0f円\n", "ハンバーガー", 2, 2 * $hamburger, $hamburger);
  print "<br>";
  printf("%s %d 個で %.0f円 /各%.0f円\n", "シェイク", 1, 1 * $shake, $shake);
  print "<br>";
  printf("%s %d 個で %.0f円 /各%.0f円\n", "コーラ", 1, 1 * $cola, $cola);
  print "<br>";
  printf("%25s: %5.0f円\n", '合計金額', $food);
  print "<br>";
  printf("%25s: %5.0f円\n", '税込価格', round($food + $tax));
  print "<br>";
  printf("%25s: %5.0f円\n", 'チップを含めた税込価格', round($food + $tip + $tax));
  print "<br>";
  print "<br>";
  print "<br>";
  /**
   * d = 十進数
   * s = 文字列
   * f = 浮動小数点
   */
?>

<?php
  /**
   * 変数$first_nameに自分の名前、
   * $last_nameに自分の姓を設定するPHPプログラムを書く。
   * 名前と姓をスペースで区切った文字列を出力する。
   * また、その文字列の長さも出力する。
   */
  $first_name = 'Bunshi';
  $last_name = 'Funabiki';
  $name = "$first_name $last_name";
  print $name;
  print strlen($name);
  print "<br>";
  print "<br>";
  print "<br>";
  // printf("%s %s", $first_name, $last_name);
  // print strlen($first_name, $last_name);
?>

<?php
  /**
   * 増分演算子(++)と複合乗算演算子(*=)を使って、
   * １から５までの数値と２(２の１乗)から３２(２の５乗)までの２の乗数を出力するPHPプログラムを書く。
   */
  $n = 1; $p = 2;
  print "$n, $p";
  print "<br>";

  $n++; $p *= 2;
  print "$n, $p";
  print "<br>";

  $n++; $p *= 2;
  print "$n, $p";
  print "<br>";

  $n++; $p *= 2;
  print "$n, $p";
  print "<br>";

  $n++; $p *= 2;
  print "$n, $p\n";
  print "<br>";
?>
  