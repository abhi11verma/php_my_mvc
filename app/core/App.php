<?php

class App{

  protected $controller = 'home';
  protected $method = 'index';
  protected $params = [];

  public function __construct()
  {
      $url = $this->parseUrl();

      //Checking if the first part of url that defines the controllers,
      //if the controller file exisst in the controller folder.

      if(file_exists('../app/controllers/'.$url[0].'.php'))
      {
          $this->controller = $url[0];
          unset($url[0]);
      }
      //echo $this->controller;
      require_once '../app/controllers/'.$this->controller.'.php';

      $this->controller = new $this->controller;

      if(isset($url[1]))
      {
        if(method_exists($this->controller,$url[1]))
        {
          $this->method = $url[1];
          unset($url[1]);
        }
      }
      
      $this->params = $url ? array_values($url):[];

      call_user_func_array([$this->controller,$this->method],$this->params);

  }

  protected function parseUrl()
  {//parse the recived url in the get from the index.php

    if(isset($_GET['url']))
    {
      $parsed_url = explode('/',filter_var(rtrim($_GET['url'],'/'), FILTER_SANITIZE_URL));
      return $parsed_url;
    }

  }


}
 ?>
