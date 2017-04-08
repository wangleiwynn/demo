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
    if(isset($_GET['s'])){
      $info = explode('/',$_GET['s']);
      $class = '\\web\\controller\\'.ucfirst($info[0]);
      $action = $info[1];
    }else{
      $class = '\\web\\controller\\Index';
      $action = 'show';
    }
    (new $class)->$action();
    //$con->$action;
  }
}