<?php

namespace App\Helper;

class Helper
{
    public static function sidebar(){
  
    $main=[];
    $main=[
        'dd' => [
                "name" =>"Product",
                "icon" => "nav-icon fas fa-tachometer-alt",
                 "child" => [
                            'pro.index' =>[
                                    "name" => "product-list",
                                    "icons" => "far fa-circle nav-icon",
                                     
                                ],
                               'dd' =>[
                                    "name" => "Dashboard v2",
                                    "icons" => "far fa-circle nav-icon",
                                    ],
                            ]
                ],
            'ipl'=> [
                 "name" => "Widgets",
                 "icon" => "nav-icon fas fa-th",
                 "child" => []
             ],
            //  'changepassword'=>[
            //         "name" => "changepassword",
            //         "icon" => "nav-icon fas fa-tachometer-alt",
            //         "child" => []
            //  ]
           
        ]; 
     
    return $main;
        
    }
}

    

?>