<?php
/**
 * 文件名：BalanceController.class.php
 * 作者: Min
 * 日期时间: 2016-09-30  17:42
 * 描述：
 */

namespace Home\Controller;

use Think\Controller;

class BalanceController extends Controller {
    public function index() {

        $balance = M('balance')->select()[0]['balance'];
        $data = M('incomeandcost')->order('systemTimeStamp desc')->page(1, 10)->select();
        $count = M('incomeandcost')->count();
        $this->assign('data',$data);
        $this->assign('count',$count);
        $this->assign('page',10);
        $this->assign('balance', $balance);
        $this->display();
    }

    public function getAllMoney() {
        $curPage = I('curPage');
        $result = M('incomeandcost')->order('systemTimeStamp desc')->page($curPage, 10)->select();
        echo json_encode($result);
    }
}