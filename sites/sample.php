<?php

echo "Its ok";

print_r($_SERVER['nokey']);

// daskhdkhsadkhakdhakhsdkahsdkhasdjaldmwqldmlmdlmasldmsalmdalsmdlaksmdlsamdlamsdlmasldmaldmalsmdlasmdlsamdlamsdlamsdlmasldmasldmalsdmalsmdlasmdlasmdlasmdlmasldmaldmad


$have_time = true;
$have_money = false;
$take_vacation = $have_time and $have_money;

function run() {
  prepare('action1');                              // Non-Compliant - 'action1' is duplicated 3 times
  execute('action1');
  release('action1');
}

?>
