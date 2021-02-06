<?php

@include_once __DIR__ . '/vendor/autoload.php';

Kirby::plugin('lukas-becker/kirby3-mix', [
  'options' => [
    'manifest' => '/mix-manifest.json'
  ],
  'components' => [
    'css' => function($kirby, $url, $options) {
      if (function_exists('mix')) {
        return mix($url);
      } else {
        return $url;
      }
    },
    'js' => function($kirby, $url, $options) {
      return (new \LukasBecker\Helpers())->mix($url);
      /*
      if (function_exists('mix')) {
        return (new \LukasBecker\Helpers)->mix($url);
      } else {
        return $url;
      }
      */
    }
  ],
]);
