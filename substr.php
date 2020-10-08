<?php
$comment = "The Fresh Fish with Rice Noodle was delicious, but I didn\'t like the Beef Tripe.";
// $_POST['comments']の最初の30文字を抜き出す
print substr($_POST['comments'], 0, 30);
// 省略記号を追加する
print '...';
?>
