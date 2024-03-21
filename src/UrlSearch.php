<?php

namespace Ponponumi\UrlSearch;

class UrlSearch{
  public static function search(string $text){
    // URLを抽出する
    preg_match_all('/(https?:\/\/(?:[a-zA-Z0-9_\-\.]+)(?:\:[0-9]+)?(?:[^\s]+))/', $text, $match_list);
    $url_list = $match_list[0];
    return $url_list;
  }

  public static function searchPos(string $text){
    // URLの開始位置も返す
    $url_list = self::search($text);
    $result = [];

    if($url_list !== []){
      // URLがあれば
      $start = 0;

      foreach ($url_list as $url) {
        $pos = mb_strpos($text,$url,$start);

        if($pos !== false){
          $start = $pos + 1;
        }

        $result[] = [
          "pos" => $pos,
          "value" => $url,
        ];
      }
    }

    return $result;
  }
}
