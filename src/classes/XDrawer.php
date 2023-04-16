<?php

require_once "classes/BaseObjectDrawer.php";

class XDrawer extends BaseObjectDrawer
{
  public static function draw_on_screen()
  {
    echo "X:\n\n";
    echo self::get_object();
  }

  public static function get_object()
  {
    $x_obj = "";
    for ($x = 0; $x < 5; $x++) {
      if ($x == 0 || $x == 4) {
        $x_obj .= ".*...*.";
      } else if ($x == 2) {
        $x_obj .= "...*...";
      } else {
        $x_obj .= "..*.*..";
      }
      $x_obj .= "\n";
    }
    return $x_obj;
  }
}

?>