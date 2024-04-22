<?php
define('LANGUAGE_CODES', array('ja', 'en', 'cn', 'tc', 'ko'));
define('LANGUAGE_PATH', array(
    'ja' => '/',
    'en' => '/en/',
    'cn' => '/cn/',
    'tc' => '/tc/',
    'ko' => '/ko',
  )
);

function current_page_name() {
  $url = $_SERVER['REQUEST_URI'];
  $url = explode('/', $url);
  $last_part = array_pop($url);

  return $last_part;
}

function get_lang_words() {
  $language_words = get_word_list();
  return $language_words[get_lang()];
}

function the_lang() {
  echo get_lang();
}

function get_lang() {
  $languages = array('ja', 'en', 'cn', 'tc', 'ko');

  $page_name = current_page_name();
  if ($page_name == "nahachatan" || $page_name == "miyoshi") {
    $lang = "ja";
  } else {
    $lang = "en";
  }
  if (strpos($page_name, "-")) {
    $page_name_array = explode("-", $page_name);
    $lang = $page_name_array[1];
  } else {
    return $lang;
  }
  if (in_array($lang, $languages)) {
    return $lang;
  } else {
    return 'en';
  }
}

function get_selected_lang_name()
{
  $language_words = get_word_list();
  echo $language_words[get_lang()][get_lang()];
}

function the_lang_word($key) {
  $word = get_lang_word($key);

  // 値が存在しない場合は null を入れる
  if (empty($word)) {
    $word = null;
  }

  echo $word;
}

function get_lang_word($key) {
  $lang_word = null;
  if (isset(get_lang_words()[$key])) {
    $lang_word = get_lang_words()[$key];
  }
  return $lang_word;
}

function get_word_list() {
  $language_words = array(
    'ja' => array(
      'language' => '言語',
      'ja' => '日本語',
      'en' => 'English',
      'cn' => '中文（简体）',
      'tc' => '中文（繁體）',
      #'ko' => '한국'
    ),
    'en' => array(
      'language' => 'Language',
      'ja' => '日本語',
      'en' => 'English',
      'cn' => '中文（简体）',
      'tc' => '中文（繁體）',
      #'ko' => '한국'
    ),
    'cn' => array(
      'language' => '',
      'ja' => '日本語',
      'en' => 'English',
      'cn' => '中文（简体）',
      'tc' => '中文（繁體）',
      #'ko' => '한국'
    ),
    'tc' => array(
      'language' => '',
      'ja' => '日本語',
      'en' => 'English',
      'cn' => '中文（简体）',
      'tc' => '中文（繁體）',
      #'ko' => '한국'
    ),
    'ko' => array(
      'language' => '',
      'ja' => '日本語',
      'en' => 'English',
      'cn' => '中文（简体）',
      'tc' => '中文（繁體）',
      #'ko' => '한국'
    )
  );
  return $language_words;
}
