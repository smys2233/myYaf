<?php
use Yaf\Controller_Abstract;
class IndexController extends Controller_Abstract{
    public function indexAction(){
        $this->getView()->assign("content","Hello World1111111");
    }
}
