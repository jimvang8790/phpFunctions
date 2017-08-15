<!-- Introducing PHP Functions -->
<?php
function hello () {
  echo 'Hello World!';
}

$current_user = 'jim';
function is_jim () {
  global $current_user ;
  if ($current_user == 'jim') {
    echo 'it is jim!';
  } else {
    echo 'Nope, it is not jim';
  }
}

is_jim();
?>
