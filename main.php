<?php
abstract class ObjectDrawer
{
  abstract public static function draw();
}

class CrossDrawer extends ObjectDrawer
{
  public static function draw()
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
}

class XDrawer extends ObjectDrawer
{
  public static function draw()
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
}

class Main
{
  public static function main()
  {
    while (true) {
      $input = readline("C or X? ");
      if ($input == "C" || $input == "c") {
        CrossDrawer::draw();
      } else if ($input == "X" || $input == "x") {
        XDrawer::draw();
      } else {
        echo "Invalid input\n";
      }
      echo "\n";
      readline("Ctrl+C to exit, enter to continue.");
      self::clearScreen();
    }
  }

  private static function clearScreen()
  {
    echo chr(27) . chr(91) . 'H' . chr(27) . chr(91) . 'J'; //^[H^[J  // Clear screen
  }
}


Main::main();

?>