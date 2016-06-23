<?php
class ReviewModel extends Model{
	//实例化表
	protected $tableName = 'review';
	/**
	 * 添加评论
	 */
	public function add($data){
		$db = M('review');
		$order_id = $db->add($data);	
		return $order_id;
		
	}
}
