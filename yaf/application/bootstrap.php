<?php
/**
 * Created by PhpStorm.
 * User: gongzhi
 * Date: 2018/9/20
 * Time: 17:34
 */
class Bootstrap extends Yaf_Bootstrap_Abstract{
    public function _initConfig(Yaf_Dispatcher $dispatcher){
        //存放全局数据
        $config = Yaf_Application::app()->getConfig();
        Yaf_Registry::set("config",$config);
        //读取配置
        $dispatcher->getCongif()->get('database')->master->host;
        //关闭自动渲染
        $dispatcher->autoRender(false);
        //设置自定的模版引擎(如smarty)
        $dispatcher->setView(Yaf_View_Interface $request);
    }
    public function _initDefaultName(Yaf_Dispatcher $dispatcher){
        //注册插件
        $dispatcher->setDefaultModule("index")->setDefaultController("Index")->setDefaultAction("index");
    }

    public function _initRegistLocalLib(Yaf_Dispatcher $dispatcher){
        //注册本地类的前缀，对于以这些前缀开头的本地类，都从本地类库路径中加载
        Yaf_Loader::getInstance()->registerLocalNamespace(array('Foo','Msn'));
    }



































}