<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/8
 * Time: 15:13
 */
namespace web\controller;
use core\View;

class Index{
  private $view;

  public function __construct()
  {
    $this->view = new View();
  }
  public function show()
  {
    return $this->view->make('index')->with('name','wanglei');
  }

  public function post()
  {
    echo "post";
    //gregwar/captcha
  }
}