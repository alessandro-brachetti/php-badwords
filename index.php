<?php
  $paragrafo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
  echo $paragrafo . '<br>';
  echo 'La lunghezza del paragrafo è di: ' . strlen($paragrafo) . ' caratteri ' . '<br>';

  $badword = $_GET['badword'];
  // var_dump($_GET['badword']);

  echo str_replace($badword, '***', $paragrafo);
?>
