<?php

require_once "classes/XDrawer.php";
require_once "classes/CrossDrawer.php";

class Main
{
  public static function main()
  {
    self::clearScreen();
    while (true) {
      $input = readline("C or X? ");
      if ($input == "C" || $input == "c") {
        CrossDrawer::draw_on_screen();
      } else if ($input == "X" || $input == "x") {
        XDrawer::draw_on_screen();
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