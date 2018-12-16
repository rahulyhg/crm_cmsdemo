<?php
/**
 * Created by PhpStorm.
 * User: yang
 * Date: 2018-12-12
 * Time: 21:17
 */

namespace app\index\model;
use think\Model;

class AuthRule extends Model{
    //根据编号获取单条数据
    public function getDataById($id){
        $condition = [
            'id' => $id
        ];
        return $this->where($condition)->select();
    }

    //查询该节点的父节点信息
    public function getFatherDataById($id){
        return $this->query("select a.* from y_auth_rule a,y_auth_rule b where a.id=b.nid and b.id=$id");
    }

}