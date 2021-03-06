<?php
/**
 * 文件名：IncomeController.class.php
 * 作者: Min
 * 日期时间: 2016-09-30  17:40
 * 描述：
 */

namespace Home\Controller;

use Think\Controller;

class IncomeController extends Controller {

    public function index(){
        $count = M('incomeandcost')->where("classification='income'")->count();
        $data = M('incomeandcost')->where("classification='income'")->order('systemTimeStamp desc')->page(1, 10)->select();
        $class = M('what')->where("classification='income'")->order('time desc')->field('whatName')->select();
        $classData = array();
        for($i=0,$counts=count($class);$i<$counts;$i++){
            $classData[$i]=$class[$i]['whatName'];
        }
        $this->assign('class',json_encode($classData));
        $this->assign('data',$data);
        $this->assign('count',$count);
        $this->assign('page',10);
        $this->display();
    }

    public function getIncomeClassification(){
        $this->ajaxReturn(M('what')->where("classification='income'")->field('whatName')->select());
    }

    public function getIncomeData(){
        $curPage = I('curPage');
        $result = M('incomeandcost')->where("classification='income'")->order('systemTimeStamp desc')->page($curPage, 10)->select();
        $this->ajaxReturn($result);
    }

    public function savaData(){
        $post = I('post.');
        $data=array(
            'whatName'=>$post['what'],
            'Money'=>$post['money'],
            'When'=>$post['date'],
            'classification'=>'income'
            );
        //没有那个what就加进去
        $isHasClass=(M('what')->where("classification='income' AND whatName='".$post['what']."'")->count());
        if($isHasClass==0)
            M('what')->data(array('whatName'=>$post['what'],'classification'=>'income'))->add();
        //插入income记录
        M('incomeandcost')->data($data)->add();
        //加钱
        M('balance')->where('id=1')->setInc('balance',$post['money']);
        $this->redirect('income/index');
    }
}