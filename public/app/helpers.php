<?php namespace App;

function getFilePathWithHash(string $path): string {
  $timestamp = filemtime($_SERVER['DOCUMENT_ROOT'] . $path);
  return $path . '?v=' . $timestamp;
}
