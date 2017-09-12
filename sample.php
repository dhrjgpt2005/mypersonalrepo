<?php

echo "Its ok";

print_r($_SERVER['nokey']);

// daskhdkhsadkhakdhakhsdkahsdkhasdjaldmwqldmlmdlmasldmsalmdalsmdlaksmdlsamdlamsdlmasldmaldmalsmdlasmdlsamdlamsdlamsdlmasldmasldmalsdmalsmdlasmdlasmdlasmdlmasldmaldmad

function run() {
  prepare('action1');                              // Non-Compliant - 'action1' is duplicated 3 times
  execute('action1');
  release('action1');
}

?>
