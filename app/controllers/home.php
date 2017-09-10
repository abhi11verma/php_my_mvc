<?php
/**This home controller uses the core functionality of core/Controller by extending
 * Home controller is called when app is initialized ,
 * index() method is called on app initialization by default if nothing is given in url
 */
class Home extends Controller
{
  public function index($name = '')
  {
    $user = $this->model('User');
    $user->name = $name;

    //Rendering View
    $this->view('templates/header');

    //Passing data in view
    $this->view('home/index',['name'=>$user->name]);

    $this->view('templates/footer');

  }
}

 ?>
