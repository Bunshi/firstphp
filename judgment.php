<?php
  // 3-1
  if ($logged_in) {
  print "Welcome aboard, trusted user.";
  }
  print "<br>";
  print "<br>";
?>

<?php
  // 3-2
  print "This is always printed.";
  if ($logged_in) {
    print "Welcome aboard, trusted user.";
    print 'This is only printed if $logged_in is true.';
  }
  print "This is also always printed.";
  print "<br>";
  print "<br>";
?>

<?php
  // 3-3
  if ($logged_in) {
    print "Welcome aboard, trusted user.";
  } else {
    print "Howdy, stranger.";
    print "<br>";
    print "<br>";
  }
?>

<?php
// 3-4
if ($logged_in) {
  // $logged_inがtrueの時に実行する
  print "Welcome aboard, trusted user.";
} elseif (new_messages) {
  // $logged_inがfalseだが$new_messagesがtrueの時に実行する
  print "Dear stranger, there are new messages.";
  print "<br>";
  print "<br>";
} elseif (emergency) {
  // $logged_inと$new_messagesがfalseだが
  // $emergencyがtrueの時に実行する
  print "Stranger, there are no new messages, but there is an emergency.";

}
?>

<?php
  // 3-5
  if($logged_in) {
    // $logged_inがtrueの時に実行する
    print "Welcome aboard, trusted user.";
  } elseif ($new_messages) {
    // $logged_inがfalseだが$new_messagesがtrueの時に実行する。
    print "Dear stranger, there are new messages.";
  } elseif ($emergency) {
    // $logged_inと$new_messagesがfalseだが
    // $emergencyがtrueの時に実行する
    print "Stranger, there are no new messages, but there is an emergency.";
  } else {
    // $logged_in、$new_messages、$emergency
    // が全てfalseの時に実行する
    print "I don't know you, you have no messages, and there's no emergency.";
  }
?>