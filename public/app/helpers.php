<?php namespace App;

function getFilePathWithHash(string $path): string {
  $timestamp = filemtime($_SERVER['DOCUMENT_ROOT'] . $path);
  return $path . '?v=' . $timestamp;
}

//class Suggestion {
//  public string $title;
//  public string $url;
//
//  public function __construct(array $props) {
//    $this->title = $props['title'];
//    $this->url = $props['url'];
//  }
//}
