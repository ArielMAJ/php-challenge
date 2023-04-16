<?php

require_once "classes/BaseObjectDrawer.php";

class CrossDrawer extends BaseObjectDrawer
{
  public static function draw_on_screen(): void
  {
    echo "Cross:\n\n";
    echo self::get_object();
  }

  public static function get_object(): string
  {
    $cross = "";
    for ($x = 0; $x < 5; $x++)
      $cross .= ($x != 1) ? "...*...\n" : ".*****.\n";
    return $cross;
  }
}

?>