<?php
// 代入と加算の組み合わせ
// 普通のやり方で３を足す
$price = $price + 3;
// 複合演算子で３を足す
$price += 3;
?>

<?php
// 代入と結合の組み合わせ
$username = 'james';
$domain = '@example.com';

// 普通のやり方で$domainを$usernameの末尾に結合する
$username = $username . $domain;
// 複合演算子で結合する
$username .= $damain;
?>

<?php
// $birthdayに１を加える
$birthday = $birthday + 1;
// $birthdayにさらに１を加える
++$birthday;

// $years_leftからさらに１をひく
--$years_left;
?>
