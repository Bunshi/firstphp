<?php
  print 'How are you?';
  print "<br>";
  print 'I\'m fine.';
  print "<br>";
  print "<br>";
  print "<br>";
?>


<?php
  /*
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
?>