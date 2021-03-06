<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------

namespace Home\Controller;
use OT\DataDictionary;

/**
 * 图册
 */
class GalleryController extends HomeController {

	//系统首页
    public function index(){  
    	$Document = D('Document');
    	$list = $Document->order('create_time')->limit(10)->select();
    	$this->assign('list', $list);
        $this->display();
    }

}