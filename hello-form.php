<?php
print <<<_HTML_
<form method="post" action="$_SERBER[PHP_SELF]">
Your Name: <input type="text" name="user" />
<br/>
<button type="submit">Say Hello</button>
</form>
_HTML_;
?>  