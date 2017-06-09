<?php

namespace Griff;

final class Config
{
  private static $instance;
  private $config;
  const CONFIG_DIR = __DIR__.'/../config/';

  private static function get_instance() {
    if (!isset(self::$instance)) {
      self::$instance = new Config();
    }
    return self::$instance;
  }

  private function __construct() {
    $this->config = json_decode(file_get_contents(self::CONFIG_DIR.'config.json'), true);
  }

  public static function get($key = null) {

    if (empty($key)) {
      return self::get_instance()->config;
    }

    return self::get_instance()->config[$key];
  }
}
