<?php

class XDrawer extends BaseObjectDrawer
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

?>