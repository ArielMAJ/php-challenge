<?php

abstract class BaseObjectDrawer
{
  abstract public static function draw_on_screen(): void;
  abstract public static function get_object(): string;
}

?>