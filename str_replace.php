<?php
  $str = "文字列１<br />文字列２<br />文字列３<br />";
    echo $str;
  $str = str_replace("文字列", "置き換え後", $str,$n);
    echo $str;
    echo $n."回置き換えました";
?>