<?php
namespace app\model;


use think\Db;

class Lr_site_info
{
    public function getInfo()
    {
           $res =  Db::table('lr_site_info')->find();
           $data['title']           =   $res['title'];           //站点标题
           $data['subtitle']        =   $res['subtitle'];        //网站副标题
           $data['keywords']        =   $res['keywords'];         //网站关键字
           $data['icp']             =   $res['icp'];                   //网站icp
           $data['address']         =   $res['address'];                   //公司地址
           $data['phone']         =   $res['phone'];                   //公司电话
           $data['email']         =   $res['email'];                   //公司邮箱
           $data['other']           =   $res['other'];                   //网站其他信息介绍
           $data['copyright']       =   $res['copyright'];         //网站版权信息
           $data['description']     =   $res['description'];       //网站描述

          return $data;
    }
}