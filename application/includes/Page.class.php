<?php
/**
 * 分页类 第九版
 * 
 *  */
class Page{
	public $limit;	
	private $total;//总记录数
	private $page;	
	private $listRows;//每页的数据条数;
	private $pageNum;//总页数
	private $num;
	private $url;
	private $config=array('first'=>"首页",'prev'=>"上一页",'next'=>'下一页','end'=>"末页");
	public function __construct($_total,$_listRows=3,$_num=2){
		$this->num=$_num;
		$this->total=$_total;
		$this->listRows=$_listRows;
		//$_GET['page']有值的话，就这个值，没值就是1；		
		$this->pageNum=ceil($this->total/$this->listRows);
		$this->handlePage();
		$this->limit="  limit ".($this->page-1)*$this->listRows.",".$this->listRows;
		$this->url=$this->reWrite();
		//echo $this->url."<br>";
	}
	/**
	 * 处理page的范围;
	 *   */
	private function handlePage(){
		$this->page=!empty($_GET['page'])?$_GET['page']:1;
		if($this->page>$this->pageNum){
			$this->page=$this->pageNum;
		}
		if($this->page<1){
			$this->page=1;
		}		
	}
	/**
	 * 把?action=show&page=7转换为?action=show
	 *   */
	public function reWrite(){
		$url=$_SERVER['REQUEST_URI'];		
		//解析？后的键值对;返回值是数组
		$parseURL=parse_url($url);
		//print_r($parseURL);
		//echo $parseURL['query'];
		if(isset($parseURL['query'])){
			//把$parseURL['query']字符串，解析为$query数组			
			parse_str($parseURL['query'],$query);
			//print_r($query);
			unset($query['page']);
			//http_build_query:重新生成一个查询字符串;
			$newURL=$parseURL['path']."?".http_build_query($query);
		}else{
			$newURL=$parseURL['path']."?";
		}
		return $newURL;
	}
	/**
	 * 跳转
	 *   */
	private function jump(){
		$str='';
		$str.="&nbsp;<input type='text'style='width:25px;border:1px solid #eee;text-align:center;' value='".$this->page."' id='urInput'>";
		$str.="<input type='button' value='GO' id='btn'>";
		$str.="<script>";
		$str.=" var urInput=document.getElementById('urInput');
		       var btn=document.getElementById('btn');
		       urInput.onkeyup=function(evt){
		          var e=evt||window.event;
		          //alert(e.keyCode);
		          if(e.keyCode==13){
		             location.href='".$this->url."&page='+urInput.value;
		          }		         
		       }	
		       btn.onclick=function(){
		        location.href='".$this->url."&page='+urInput.value;
		       }
		";
		$str.="</script>";
		return $str;
	}
	public function setConfig($_key,$_value){
		if(isset($this->config[$_key])){
			$this->config[$_key]=$_value;
		}
	}
	/**
	 * 当前页之前和之后的页面list
	 *   */
	private function pageList(){
		$next='';
		$prev='';
		$first='';
		$end='';
		if($this->page==1){
			$first="";
		}elseif($this->page>$this->num+2){
			$first="<a href='".$this->url."&page=1'>1</a>...";
		}elseif($this->page>$this->num+1){
			$first="<a href='".$this->url."&page=1'>1</a>&nbsp;";
		}
		if($this->page==$this->pageNum){
			$end='';
		}elseif($this->pageNum-$this->page>$this->num+1){
			$end="...<a href='".$this->url."&page=".$this->pageNum."'>".$this->pageNum."</a>";
		}elseif($this->pageNum-$this->page>$this->num){
			$end="<a href='".$this->url."&page=".$this->pageNum."'>".$this->pageNum."</a>";
		}
		$present="&nbsp;<span class='present' class='present'>".$this->page."</span>&nbsp;";
		//当前页的prev循环；
		for($i=$this->num;$i>=1;$i--){
			if($this->page-$i<1){
				continue;
			}else{
				$prev.="<a href='".$this->url."&page=".($this->page-$i)."' class='prev'>".($this->page-$i)."</a>&nbsp;";
			}			
		}
		//当前页next循环
		for($j=1;$j<=$this->num;$j++){
			if($this->page+$j<=$this->pageNum){
				$next.="<a href='".$this->url."&page=".($this->page+$j)."' class='next'>".($this->page+$j)."</a>&nbsp;";
			}else{
				break;
			}
		}
		return $first.$prev.$present.$next.$end;
	}
	/**
	 * 显示首页
	 * $page=1没有链接
	 * $page!=1有链接
	 *   */
	private function first(){
		$str='';
		if($this->page==1){
			$str=$this->config['first'];
		}else{
			$str="<a href='".$this->url."&page=1'>".$this->config['first']."</a>";
		}
		return $str;
	}
	/**
	 * 显示末页
	 *   */
	private function end(){
		$str='';
		if($this->page==$this->pageNum){
			$str=$this->config['end'];
		}else{
			$str="<a href='".$this->url."&page=".$this->pageNum."'>".$this->config['end']."</a>";
		}
		return $str;
	}
	private function next(){
		$str='';
		if($this->page==$this->pageNum){
			$str=$this->config['next'];
		}else{
			$str="<a href='".$this->url."&page=".($this->page+1)."' class='next'>".$this->config['next']."</a>";
		}
		return $str;
	}
	private function prev(){
		$str='';
		if($this->page==1){
			$str=$this->config['prev'];
		}else{
			$str="<a href='".$this->url."&page=".($this->page-1)."' class='prev'>".$this->config['prev']."</a>";
		}
		return $str;
	}
	private function listRowsBegin(){
		return ($this->page-1)*$this->listRows+1;
	}
	private function listRowsEnd(){
		return min($this->page*$this->listRows,$this->total);
	}
	public function display($data=array(0,1,2,3,4,5,6,7)){
		$str='';
		$ui[0]=$this->prev();
		$ui[1]=$this->pageList();
		$ui[2]=$this->next();
		$ui[3]=$this->first();		
		$ui[4]=$this->end();		
		$ui[5]="第".$this->listRowsBegin()."条/第".$this->listRowsEnd()."条";
		$ui[6]="第".$this->page."页/共".$this->pageNum."页";
		$ui[7]=$this->jump();
		//var_dump($ui);
		$data1=array(0,1,2,3,4,5,6,7);
		foreach ($data as $value){	
			if(in_array($value,$data1)){
				$str.=$ui[$value]."&nbsp;";
			}						
		}
		return $str;
	}	
}
?>