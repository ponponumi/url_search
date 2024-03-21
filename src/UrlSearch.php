<?php

namespace Ponponumi\UrlSearch;

class UrlSearch{
  public static function search(string $text){
    // URLを抽出する
    preg_match_all('/(https?:\/\/(?:[a-zA-Z0-9_\-\.]+)(?:\:[0-9]+)?(?:[^\s]+))/', $text, $match_list);
    $url_list = $match_list[0];
    return $url_list;
  }
}
