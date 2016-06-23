<?php
class ReviewAction extends Action {
	/*
	*评价添加
	*/
	public function addreview(){
		$name = $_SESSION['user_name'];
		if($name){

			$data['user_name'] = $name;
			$data['goods_id'] = $_POST['goods_id'];
			$data['quality'] = $_POST['quality'];
			$data['price'] = $_POST['price'];
			$data['text'] = $_POST['text'];
			$data['time'] = date("Y-m-d H:i:s",time());
			$review=D("Review");
			$sku=$review->add($data);
			if($sku){
				$this->redirect("Goods/product_page?goods_id=".$_POST['goods_id']."");
			}else{
				echo "<script>alert('网络繁忙，请稍后重试……	');</script>";
				$this->redirect("Goods/product_page?goods_id=".$_POST['goods_id']."");
			}
		}else{
			echo "<script>alert('请先登陆');location.href='login'</script>";
		}
	}
	/*
	*跳转登陆
	*/
	public function login(){
		$this->redirect("Login/login");
	}
}