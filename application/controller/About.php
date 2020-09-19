<?php


namespace app\controller;

use app\model\Lr_site_info;
use think\Controller;

class About extends Controller
{
    public function index()
    {
           $info =  new Lr_site_info();
        $data = $info->getInfo();


        $this->assign('data',$data);
       return  $this->fetch('about');
    }
}