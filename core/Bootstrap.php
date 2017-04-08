<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/8
 * Time: 15:04
 */
namespace core;
class Bootstrap{
  public static function run(){
    self::parseUrl();
  }
//分析URL生成控制器方法常量
  public static function parseUrl()
  {
    dd($_SERVER);
  }
}