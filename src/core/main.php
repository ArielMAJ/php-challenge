<?php

require_once "classes/BaseObjectDrawer.php";
require_once "classes/XDrawer.php";
require_once "classes/CrossDrawer.php";

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