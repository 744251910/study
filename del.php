<?php
$id=$_POST['id'];
require_once 'DAOPDO.class.php';
$configs=array(
    'dbname'=>'project'
);
$dao=DAOPDO::getSingleton($configs);
$sql="delete from blog where id=$id";
$res=$dao->query($sql);
if($res){
    $arr=array(
        'code'=>1,
        'msg'=>'恭喜你，删除成功'
    );
    echo json_encode($arr);
}else{
    $arr=array(
        'code'=>0,
        'msg'=>'删除失败'
    );
    echo json_encode($arr);
}