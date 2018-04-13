<?php
class CommentController extends Controller{
    public function indexAction(){
        $this->display('Com_index.tpl');
    }
    public function addAction(){
        $this->display('com_add.tpl');
    }
}