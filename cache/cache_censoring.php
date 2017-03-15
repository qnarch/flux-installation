<?php

define('PUN_CENSOR_LOADED', 1);

$search_for = array (
  0 => '%(?<=[^\\p{L}\\p{N}])(neger)(?=[^\\p{L}\\p{N}])%iu',
  1 => '%(?<=[^\\p{L}\\p{N}])(heil hitler)(?=[^\\p{L}\\p{N}])%iu',
  2 => '%(?<=[^\\p{L}\\p{N}])(sieg heil)(?=[^\\p{L}\\p{N}])%iu',
  3 => '%(?<=[^\\p{L}\\p{N}])(Stefan Löfven)(?=[^\\p{L}\\p{N}])%iu',
);

$replace_with = array (
  0 => 'svart',
  1 => 'Yippee ki-yay, mf!',
  2 => 'Yippee ki-yay, mf!',
  3 => 'Anders Behring Breivik',
);

?>