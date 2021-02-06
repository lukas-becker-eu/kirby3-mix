<?php

use Mix\Helpers as H;
@include_once __DIR__ . '/vendor/autoload.php';

Kirby::plugin('lukas-becker/kirby3-mix', [
  'options' => [
    'manifest' => '/mix-manifest.json'
  ],
  'components' => [
    'css' => function($kirby, $url, $options) {
      return H::mix($url);
    },
    'js' => function($kirby, $url, $options) {
      return H::mix($url);
    }
  ],
]);
