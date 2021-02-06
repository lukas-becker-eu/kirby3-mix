<?php

namespace LukasBecker\Mix;

class Helpers {
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
}
