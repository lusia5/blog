<?php
class CategoryModel extends Model{
    public function getTree($pid=0,$level=1){
        static $tree = array();
        $sql = "select * from bg_category where 1";
        $data = $this->dao->fetchAll($sql);
        foreach($data as $v){
            if($v['pid'] == $pid){
                $v['level'] = $level;
                $tree[] = $v;
                $this->getTree($v['cat_id'],$level+1);
            }
        }
        return $tree;
    }
    public function my_query($data){
        $cat_name = $data['cat_name'];
        $pid = $data['pid'];
        $cat_desc = $data['cat_desc'];
        $sql = "insert into bg_category ('cat_name','pid','cat_desc') values ('{$cat_name}',$pid,'{$cat_desc}')";
        return $this->dao->my_query($sql);
    }
}