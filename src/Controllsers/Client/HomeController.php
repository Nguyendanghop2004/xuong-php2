<?php

namespace Acer\XuongOop\Controllsers\Client;
use Acer\XuongOop\Commons\Controller ;
use Acer\XuongOop\Commons\Helper;
use Acer\XuongOop\Models\Users;

class HomeController extends Controller{

    public function  index()  {
        // $user =new Users ();
        // Helper::debug($user);
        $name ='hop';
       $this ->renderViewClient('home',[
        'name'=>$name
       ]);
    }
    
}
