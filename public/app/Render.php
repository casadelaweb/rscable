<?php namespace App;

class Render {
  public static function component(string $name, array $props = [],): void {
    extract($props);
    ob_start();
    include "views/components/$name.php";
    $output = ob_get_clean();
    echo $output;
  }

  public static function page(string $name): void {
    include_once "views/pages/$name.php";
  }
}
