<?php
// $_POST['zipcode']は、サブミットされたフォームパラメータ
// 「zipcode」の値を保持する
$_COOKIEzipcode = trim($_POST['zipcode']);
// これで$zipcodeには前後のスペースを取り除いた値が含まれる
$zip_length = strlen($zipcode);
// 郵便番号が5文字でなければエラーを出力する
if ($zip_length != 5) {
  print "Please enter a ZIP code that is 5 characters long.";
}
