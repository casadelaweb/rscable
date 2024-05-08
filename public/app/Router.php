<?php namespace App;

class Params {
  public array $list = [];
  public int $length = 0;

  public function get(string $key) {
    if (property_exists($this, $key)) {
      return $this->$key;
    } else {
      return null;
    }
  }

  public function set(string $key, string|array|int $value): static {
    $this->$key = $value;
    return $this;
  }
}

class Router {
  public static string $currentRoute;
  public static Params $params;
  protected static array $routes = [];

  public static function enable(bool $debug = false): void {
    if ($debug) {
      echo "<pre>";
      var_dump($_SERVER);
      var_dump($_GET);
      echo "</pre>";
    }
    self::$currentRoute = $_SERVER['REDIRECT_URL'] ?? '/';

    if (!in_array(self::$currentRoute, self::$routes)) {
      self::$currentRoute = '404';
    }

    $queryString = $_SERVER['QUERY_STRING'] ?? '';
    self::$params = self::getQueryParams($queryString);
  }

  public static function getQueryParams(string|null $queryString): Params {
    $params = new Params();

    $queryString = empty($queryString) ? [] : explode('&', trim($queryString));
    $length = count($queryString);
    if ($length > 0) {
      foreach ($queryString as $pair) {
        $param = explode('=', $pair);
        $key = $param[0];
        $value = $param[1];

        $params->set($key, $value);
        $params->list[] = $key;
        $params->length++;
      }
    }

    return $params;
  }

  public static function register(string|null $url): void {
    if ($url) self::$routes[] = $url;
  }
}
