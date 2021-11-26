<?php

//use Mix\Helpers as H;
@include_once __DIR__ . '/vendor/autoload.php';

function mix($url) {

  if (! Str::startsWith($url, '/')) {
    $url = "/{$url}";
  }

  $manifest_path = kirby()->root().'/'.option('lukas-becker.kirby3-mix.manifest');

  if (! F::exists($manifest_path)) {
    return $url;
  } else {
    $manifest = F::read($manifest_path);
    $manifest = json_decode($manifest, true);
    if (! array_key_exists($url, $manifest)) {
      return $url;
    } else {
      return $manifest[$url];
    }
  }
}

Kirby::plugin('lukas-becker/kirby3-mix', [
  'options' => [
    'manifest' => '/mix-manifest.json'
  ],
  'components' => [
    'css' => function($kirby, $url, $options) {
      return mix($url);
    },
    'js' => function($kirby, $url, $options) {
      return mix($url);
    }
  ],
]);
