<?php

class PayAction extends Action {
	public function pay(){
		$order_number=$_GET['order_number'];
		session('order_number',$order_number);
		// ******************************************************配置 start*************************************************************************************************************************
		//↓↓↓↓↓↓↓↓↓↓请在这里配置您的基本信息↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓
		//合作身份者id，以2088开头的16位纯数字
		$alipay_config['partner']		= '2088002075883504';
		//收款支付宝账号
		$alipay_config['seller_email']	= 'li1209@126.com';
		//安全检验码，以数字和字母组成的32位字符
		$alipay_config['key']			= 'y8z1t3vey08bgkzlw78u9cbc4pizy2sj';
		//↑↑↑↑↑↑↑↑↑↑请在这里配置您的基本信息↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑
		//签名方式 不需修改
		$alipay_config['sign_type']    = strtoupper('MD5');
		//字符编码格式 目前支持 gbk 或 utf-8
		//$alipay_config['input_charset']= strtolower('utf-8');
		//ca证书路径地址，用于curl中ssl校验
		//请保证cacert.pem文件在当前文件夹目录中
		$alipay_config['cacert']    = getcwd().'\\cacert.pem';
		//访问模式,根据自己的服务器是否支持ssl访问，若支持请选择https；若不支持请选择http
		$alipay_config['transport']    = 'http';
		// ******************************************************配置 end*************************************************************************************************************************
		// ******************************************************请求参数拼接 start*************************************************************************************************************************
		$parameter = array(
		    "service" => "create_direct_pay_by_user",
		    "partner" => $alipay_config['partner'], // 合作身份者id
		    "seller_email" => $alipay_config['seller_email'], // 收款支付宝账号
		    "payment_type"	=> '1', // 支付类型
		    "notify_url"	=> "http://bw.com133.com/notify_url.php", // 服务器异步通知页面路径
		    "return_url"	=> 'http://localhost/crazy/Crazy/xiangmu/xiangmu_index/index.php/Pay/return_url', // 页面跳转同步通知页面路径
		    "out_trade_no"	=> $order_number, // 商户网站订单系统中唯一订单号
		    "subject"	=> "订单", // 订单名称
		    "total_fee"	=> "0.01", // 付款金额
		    "body"	=> "", // 订单描述 可选
		    "show_url"	=> "", // 商品展示地址 可选
		    "anti_phishing_key"	=> "", // 防钓鱼时间戳  若要使用请调用类文件submit中的query_timestamp函数
		    "exter_invoke_ip"	=> "", // 客户端的IP地址
		    "_input_charset"	=> 'utf-8', // 字符编码格式
		);
		// 去除值为空的参数
		foreach ($parameter as $k => $v) {
		    if (empty($v)) {
		        unset($parameter[$k]);
		    }
		}
		// 参数排序
		ksort($parameter);
		reset($parameter);
		// 拼接获得sign
		$str = "";
		foreach ($parameter as $k => $v) {
		    if (empty($str)) {
		        $str .= $k . "=" . $v;
		    } else {
		        $str .= "&" . $k . "=" . $v;
		    }
		}
		$parameter['sign'] = md5($str . $alipay_config['key']);
		$parameter['sign_type'] = $alipay_config['sign_type'];
		// ******************************************************请求参数拼接 end*************************************************************************************************************************
		// ******************************************************模拟请求 start*************************************************************************************************************************
		$sHtml = "<form id='alipaysubmit' name='alipaysubmit' action='https://mapi.alipay.com/gateway.do?_input_charset=utf-8' method='get'>";
		foreach ($parameter as $k => $v) {
		    $sHtml.= "<input type='hidden' name='" . $k . "' value='" . $v . "'/>";
		}
		$sHtml = $sHtml."<script>document.forms['alipaysubmit'].submit();</script>";

		// ******************************************************模拟请求 end*************************************************************************************************************************
		echo $sHtml;
			}
	public function return_url(){
		$order_number=session('order_number');
		$db = D('Pay');
		$bool = $db->trans($order_number);
		if($bool){
			echo "成功";

		}else{
			echo "失败";
		}
		$this->redirect('Order/CreatOrder');
		//pdo实例化
		/*$pdo = new PDO('mysql:host=localhost;dbname=da_hufupin','root','root');
		//开启异常事物处理
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		try{
			//开启pdo事务
			$pdo->beginTransaction();
			//两个修改语句
			//修改状态
			$data = array('border_state'=>1);
			$db = M('border');
			$re = $db->where('border_number = '.$order_number)->save($data);
			//查询订单中所有商品的数量
			$model = M('border_goods');
			$re1 = $model->join('border ON border.border_id = border_goods.border_id')->where('border.border_number ='.$order_number)->select();
			foreach ($re1 as $k => $v) {
				$num = $v['']
				$re2="update es_goods_sku set sku_num=sku_num-".$v['goods_num']." where sku_id =".$v['sku_id'];
				if($pdo->exec($re)&&$pdo->exec($re2)){
					$pdo->commit();
					echo "<script>alert('支付成功！');location.href='".site_url('home/order')."';</script>";
				}
			}
			//上面2个操作均成功，说明事务可以提交
		}catch(PDOException $e){//异常信息进行捕获
			//失败进行回滚
			$pdo->rollBack();
		    echo $e->getMessage();
		}*/
	}
}
