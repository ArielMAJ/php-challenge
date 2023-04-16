<?php

class CrossDrawer extends BaseObjectDrawer
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

?>