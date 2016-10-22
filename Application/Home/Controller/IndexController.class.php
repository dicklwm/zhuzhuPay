<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

        $LatelyIncome = M('incomeandcost')->where("classification='income'")->order('systemTimeStamp desc')->page(1, 10)->sum('Money');
        $LatelyCost = M('incomeandcost')->where("classification='cost'")->order('systemTimeStamp desc')->page(1, 10)->sum('Money');

        $order = mt_rand(0, M('saysomething')->count());

        $saySomethingModel = M('saysomething');
		$saySomething = '';
		if($saySomethingModel->count()>0){
			$saySomething = $saySomethingModel->where("id='%d'",$order)->select();
			$saySomething = $saySomething[0]['name'];
		}

        $balance = M('balance')->select();
		$balance = $balance[0]['balance'];

        $this->assign('LatelyIncome',$LatelyIncome);
        $this->assign('LatelyCost',$LatelyCost);
        $this->assign('saySomething',$saySomething);
        $this->assign('balance',$balance);
        $this->display();
    }
    public function get(){
        p(json_decode(https_request("http://localhost:9187/webapi/LoginComp/API_AccPwdIdentityAndLogin",array('loginAccount'=>'admin','loginPassword'=>'yB5yjZ1ML2NvBn+JzBSGLA=='))));
        //199b26949d134508cbdb91ec4c60f09d
    }

    public function getInfo(){
        p(json_decode(https_request("http://localhost:9187/webapi/LoginComp/API_QueryLoginInfo")));
    }

    public function out(){
        p(json_decode(https_request("http://localhost:9187/webapi/LoginComp/API_Logout")));
    }
}