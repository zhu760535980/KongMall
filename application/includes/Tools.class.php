<?php
/**
 * 工具类：封装我们常用的操作
 * @author onlyit
 *  */
final class Tools{
	/**
	 * 弹出信息，并返回原来的页面；
	 * @method getBack();
	 * @param string $_msg:用户输入的信息
	 * @param number $_t：设置自定义倒计时的时间
	 * @return void;
	 * */
	static public function getBack($_msg,$_t){
		echo "<div id='ad' style='width:350px;height:100px;border:1px solid orange;margin:150px auto;margin-bottom:400px;padding-top:50px;'></div>";
		echo "<script>";
		echo "
		      var ad=document.getElementById('ad');
		      var t=".$_t.";
		      document.body.style.overflow='hidden';
		      var timer=setInterval(function(){
		      if(t==0){
			      clearInterval(timer);
			      ad.style.display='none';
			      history.go(-1);
		      }		      	      
	          ad.innerHTML='<center>".$_msg."</center><br><center>'+t+'</center>';
	          t--;
	         },1000);		
		";
		echo "</script>";
	}
	/**
	 * 成功后，弹出信息，倒计时跳转；
	 * @param stirng $_msg:传递的信息
	 * @param string $_url:跳转的路径
	 * @param number $_t：倒计时，默认值是3;
	 * @return void;
	 *   */
	static public function Success($_msg,$_url,$_t=3){
		echo "<div id='ad' style='width:350px;height:100px;color:green;font-weight:bolder;border:1px solid orange;margin:150px auto;margin-bottom:400px;padding-top:50px;'></div>";
		echo "<script>";
		echo " 
		      var ad=document.getElementById('ad');
		      //console.log(ad.tagName);
		      var t=".$_t.";
		     document.body.style.overflow='hidden';
		     var timer=setInterval(function(){
		      if(t==0){
			      clearInterval(timer);
			      ad.style.display='none';
			      location.href='".$_url."';
		      }		      	      
	          ad.innerHTML='<center>".$_msg."</center><br><center>'+t+'</center>';
	          t--;
	         },1000);		
		";
		echo "</script>";
		//终止代码的执行
		exit();
	}
	/**
	 * 失败后，弹出信息，倒计时跳转；
	 * @param stirng $_msg:传递的信息
	 * @param string $_url:跳转的路径
	 * @param number $_t：倒计时，默认值是3;
	 * @return void;
	 *   */
	static public function Error($_msg,$_url,$_t=5,$_fontsize=24){
		echo "<div id='ad' style='width:350px;height:100px;color:red;font-weight:bolder;border:1px solid orange;font-size:".$_fontsize."px;margin:150px auto;margin-bottom:400px;padding-top:50px;'></div>";
		echo "<script>";
		echo "
		var ad=document.getElementById('ad');
		//console.log(ad.tagName);
		var t=".$_t.";
		document.body.style.overflow='hidden';
		var timer=setInterval(function(){
		if(t==0){
		clearInterval(timer);
		ad.style.display='none';
		location.href='".$_url."';
	}
	ad.innerHTML='<center>".$_msg."</center><br><center>'+t+'</center>';
	t--;
	},1000);
	";
		echo "</script>";
		//终止代码的执行
		exit();
	}
	/**
	 * 修剪多字节的字符串,如果超过范围添加后缀;
	 * @param string $_str
	 * @param number $_length:要截取的长度
	 * @param number $_start：起始的位置；
	 * @param string $_suffix  
	 * @todo:不从0开始截取？？？？
	 * */
	static public function subString($_str,$_length,$_start=0,$_suffix="..."){
		$num=mb_strlen($_str,"utf-8");
		if($num<$_length){
			return mb_substr($_str, $_start,$_length,"utf-8");
		}else{
			return mb_substr($_str, $_start,$_length,"utf-8").$_suffix;
		}
	}	
	/**
	 * 根据不同的类型，对数据进行过滤，不改变数据的类型；
	 * @param mixed $_data
	 * @return mixed $str;
	 *   */
	static public function filter($_data){
		if(is_array($_data)){
			//过滤每个键值，然后再赋到新的数组中；
			foreach ($_data as $key=>$value){
				$str[$key]=htmlspecialchars($value);
			}
		}elseif(is_object($_data)){
			//过滤每个属性值，然后再赋到新的属性中；
			foreach ($_data as $key=>$value){
				$str->$key=htmlspecialchars($value);
			}
		}elseif(is_string($_data)){
			$str=htmlspecialchars($_data);
		}		
		return $str;
	}
	/**
	 * 对内容进行反过滤，不改变数据的类型；
	 * @param mixed $_data
	 * @return mixed
	 * */
	static public function deFilter($_data){
		if(is_array($_data)){
			//过滤每个键值，然后再赋到新的数组中；
			foreach ($_data as $key=>$value){
				$str[$key]=htmlspecialchars_decode($value);
			}
		}elseif(is_object($_data)){
			//过滤每个属性值，然后再赋到新的属性中；
			foreach ($_data as $key=>$value){
				$str->$key=htmlspecialchars_decode($value);
			}
		}elseif(is_string($_data)){
			$str=htmlspecialchars_decode($_data);
		}
		return $str;
	}
	/**
	 * 判断数据是否为空;
	 * @param string $_data
	 * @return boolean;
	 * */
	static public function isNull($_data){
		if(strlen(trim($_data))==0){
			return true;
		}
		return false;
	}
	/**
	 * 判断内容必须为数字;
	 * @param mixed $_data  */
	static public function isNum($_data){
		if(!is_numeric($_data)){
			return true;
		}
		return false;
	}
	/**
	 * 判断两条数据是否相等;
	 * @param string $_firstData:第一条数据
	 * @param string $_secondData:第二条数据
	 * @return boolean;
	 *   */
	static public function isEqual($_firstData,$_secondData){
		if(trim($_firstData)!=trim($_secondData)){
			return true;
		}
		return false;
	}
	/**
	 * 判断数据长度的最大值最小值;
	 * @param string $_data:数据
	 * @param number $_length:数据的长度
	 * @param string $_flag:min||max
	 * @return boolean;
	 *   */
	static public function lengthFlag($_data,$_length,$_flag){
		if($_flag=="min"){
			if(mb_strlen(trim($_data),"utf-8")<$_length){
				return true;
			}
		}elseif($_flag=="max"){
			if(mb_strlen(trim($_data),"utf-8")>$_length){
				return true;
			}
		}
		return false;
	}
	/**
	 * 邮箱验证
	 * xiangrui@live.com.cn	  
	 * @param string $_data  
	 * @return boolean;
	 * */
	static public function isEmail($_data){
		//preg_match(模式，目标字符串)
		//执行一个正则匹配
		if(!preg_match("/([\w]+)+@([\w]+)+\.([\w]){2,4}(\.([a-zA-Z]){2,4})?$/", $_data)){
			return true;
		}
		return false;
	}
	/**
	 * 判断session是否有值
	 * @param string $_data
	 * @return boolean;
	 *   */
	static public function isSession($_data){
		if(!isset($_SESSION[$_data])){
			return true;
		}
		return false;
	}
	/**
	 * 销毁session;
	 * @param string $_data  
	 * @return boolean;
	 * */
	static public function destroySession($_data){
		unset($_SESSION[$_data]);
		return true;
	}
	/**
	 * 判断是否具有权限；
	 * @param string $_data
	 * @return boolean;
	 *   */
	static public function isPermission($_data){
		if(!strstr($_SESSION['permission'],$_data)){
			return true;
		}
		return false;
	}
	/**
	 * 根据传进来的数据的类型，相应的dump出来;
	 * @param mixed $_data  */
	static function dump($_data){
		if(is_object($_data)){
			echo "<pre>";
			var_dump($_data);
			echo "</pre>";
		}elseif(is_array($_data)){
			echo "<pre>";
			print_r($_data);
			echo "</pre>";
		}elseif(is_string($_data)){			
			echo $_data;
		}		
	}
}