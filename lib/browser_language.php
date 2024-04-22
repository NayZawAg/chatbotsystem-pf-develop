<?php
$browser_language = get_browser_language();

function page_transition_by_browser_language() {
  $browser_language = get_browser_language();
  if ($browser_language == 'ja') {
    // 302 Moved Temporary 
    header("Location: /jorge/poster-ja");
    exit();
  } else if ($browser_language == 'zh-cn') {
    // 302 Moved Temporary 
    header("Location: /jorge/poster-cn");
    exit();
  } else if ($browser_language == 'zh-tw') {
    // 302 Moved Temporary 
    header("Location: /jorge/poster-tc");
    exit();
  } else {
    // 302 Moved Temporary 
    header("Location: /jorge/poster-en");
    exit();
  }
}

function get_browser_language() {
  $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
  if ($lang == "zh") {
    $lang = strtolower(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 5));
  }
  $accept_lang = ['ja', 'en', 'zh-cn', 'zh-tw'];
  $lang = in_array($lang, $accept_lang) ? $lang : 'en';
  return $lang;
}
