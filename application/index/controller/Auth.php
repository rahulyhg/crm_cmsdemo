<?php
/**
 * Created by PhpStorm.
 * User: yang
 * Date: 2018-12-11
 * Time: 00:01
 */
namespace app\index\controller;
use think\Controller;

class Auth extends Controller{

    public function group(){
        $selfid = input('get.selfid');
        $selfData = model('AuthRule')->getDataById($selfid);
        $hisFatherData = model('AuthRule')->getFatherDataById($selfid);

        return $this->fetch('',[
            'tree' => session('tree'),
            'groups' => session('groups'),
            'selfid' => $selfid,
            'selfData' => $selfData,
            'hisFatherData' => $hisFatherData
        ]);
    }

    public function groupuser(){
        $selfid = input('get.selfid');
        return $this->fetch('',[
            'tree' => session('tree'),
            'groups' => session('groups'),
            'selfid' => $selfid
        ]);
    }
}