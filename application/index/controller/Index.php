<?php
namespace app\index\controller;
use think\Auth;
use think\Controller;
use think\Db;
use think\Session;

class Index extends Controller{

    public function index(){
        $auth = new Auth();
        $groups = $auth->getGroups(1);
        $groupsInfo = Db::name('auth_rule')->where('id','in',explode(',',$groups[0]['rules']))->select();
        $tree = [];
        //筛选出结果集中的所有主节点
        foreach ($groupsInfo as $key=>$value){
            if($value['nid'] == 0){
                $tree[] = $value;
            }
        }

        //从结果集中筛选出所有子节点 并插入到对应的父节点中
        foreach($tree as $treeKey=>$treeValue){
            foreach ($groupsInfo as $sonKey=>$sonValue){
                if($sonValue['nid'] == $treeValue['id']){
                    $tree[$treeKey]['childrens'][] = $sonValue;
                }
            }

        }

        $hisFatherData = [
            '0' => [
                'id' => 0,
            ]
        ];


        //存放session
        Session::set('tree',$tree);
        Session::set('groups',$groups);


        //页面输出
        return $this->fetch('',[
            'tree' => $tree,
            'groups' => $groups,
            'selfid' => 0,
            'hisFatherData' => $hisFatherData
        ]);
    }

    public function logout(){
        session('tree',null);
        session('groups',null);
    }


}
