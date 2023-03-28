<?php

function draw_cross()
{
  echo "Cross:\n\n";
  for ($x = 0; $x < 5; $x++) {
    if ($x != 1) {
      echo "...*...";
    } else {
      echo ".*****.";
    }
    echo "\n";
  }
}

function draw_x()
{
  echo "X:\n\n";
  for ($x = 0; $x < 5; $x++) {
    if ($x == 0 || $x == 4) {
      echo "*...*";
    } else if ($x == 2) {
      echo "..*..";
    } else {
      echo ".*.*.";
    }
    echo "\n";
  }
}

function main()
{
  while (true) {
    $input = readline("C or X? ");
    if ($input == "C" || $input == "c") {
      draw_cross();
    } else if ($input == "X" || $input == "x") {
      draw_x();
    } else {
      echo "Invalid input\n";
    }
    echo "\n";
    readline("Ctrl+C to exit, enter to continue.");
    echo chr(27) . chr(91) . 'H' . chr(27) . chr(91) . 'J'; //^[H^[J  // Clear screen
  }
}

main();

?>