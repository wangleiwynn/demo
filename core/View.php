<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/8
 * Time: 16:20
 */
  namespace core;

  class View{
    protected $file;
    protected $vars=[];

    public function make($file)
    {
      $this->file = 'view/'.$file.'.html';
      return $this;
    }

    public function with($name,$value)
    {
      $this->vars[$name]  = $value;
      return $this;
    }

    public function __toString()
    {
      extract($this->vars);
      include $this->file;

      return  '';
    }
  }