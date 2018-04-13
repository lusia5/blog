<?php 
/**
 * user表的操作模型
 */
class userModel extends Model{
	public function getRow($condition){
		$sql = "select * from bg_user where".$condition;
		$re = $this->dao->fetchRow($sql);
		return $re;
	}
	public function Row($id){
		$sql = "select * from bg_user where id=".$id;
		$re = $this->dao->fetchRow($sql);
		return $re;
	}
	public function upd($content,$condition){
		$sql = "update bg_user set ".$content.' where '.$condition;
		return $this->dao->my_query($sql);
	}
}






