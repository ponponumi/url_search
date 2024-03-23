<?php

namespace Ponponumi\UrlSearch;

use Ponponumi\MatchPos\Search;

class UrlSearch{
  public static function patternGet(){
    return '/(https?:\/\/(?:[a-zA-Z0-9_\-\.]+)(?:\:[0-9]+)?(?:[^\s]+))/';
  }

  public static function search(string $text){
    // URLを抽出する
    $pattern = self::patternGet();
    preg_match_all($pattern, $text, $match_list);
    $url_list = $match_list[0];
    return $url_list;
  }

  public static function searchPos(string $text){
    // URLの開始位置も返す
    $url_list = self::search($text);
    $result = Search::multibyte($text,$url_list);

    return $result;
  }

  public static function check(string $text){
    // URLが含まれるかどうか確認
    $pattern = self::patternGet();
    $result = preg_match($pattern,$text);
    return $result == 1;
  }
}
