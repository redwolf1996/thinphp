<?php

namespace lib;

class controller
{
  public $data;

  public function __construct()
  {

  }

  /**
   * assign and display
   *
   * @param string $path
   * @param array $data
   * @return void
   */
  public function view($path = '', array $data = [])
  {
    $this->data = $data;
    extract($this->data);

    $file = BASEPATH.'/app/view/'.$path.'.php';
    if(is_file($file)){
      include $file;
    }else{
      throw new \Exception('view path error '.$file);
    }
  }
}
