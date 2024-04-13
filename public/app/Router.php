<?php namespace App;

class Router {
  public static string $currentRoute;
  protected static array $routes = [];

  public static function enable(bool $debug = false): void {
    if ($debug) {
      echo "<pre>";
      var_dump($_SERVER);
      var_dump($_GET);
      echo "</pre>";
    }
    self::$currentRoute = $_SERVER['REQUEST_URI'] ?? '/';

    if (!in_array(self::$currentRoute, self::$routes)) {
      self::$currentRoute = '404';
    }
  }

  public static function register(string|null $url): void {
    if ($url) self::$routes[] = $url;
  }
}
