<?php
/**
 * 上传类第二版
 * 
 * 构造方法中传递表单字段名，路径，允许的文件类型，是否开启随机文件名
 * 自定义错误信息；
 * 上传之前的预检测;
 * 外部设置允许的大小;
 *  */
class UploadFile{
	private $maxSize=1000000;//允许的最大值
	private $fileSize;//文件大小
	private $allowType;//允许的文件类型；
	private $fileType;//文件类型；
	private $originName;//文件的原名
	private $newName;//文件的新名
	private $isRandom;//是否开启随机文件名；
	private $tmpName;//临时文件名
	private $filePath;//文件路径
	private $errorNum;//错误号
	private $errorMsg;//错误信息
	/**	 
	 * @param string $_fieldName表单的字段名
	 * @param string $_filePath上传文件保存的路径
	 * @param array $_allowType允许上传的文件类型
	 * @param boolean $_isRandom:是否开启随机文件名
	 * 参数必须要顺序传递
	 *   */
	public function __construct($_fieldName,$_filePath="uploads/",$_allowType=array("gif","png","jpg"),$_isRandom=true){		
		$this->allowType=$_allowType;
		$this->filePath=$_filePath;	
		$this->isRandom=$_isRandom;	
		$this->getFileInfo($_fieldName);		
		$this->setNewName();
	}
	/**
	 * 获取上传文件的信息，赋到类的属性中;
	 * @param string $_fieldName  */
	private function getFileInfo($_fieldName){		
		$this->fileSize=$_FILES[$_fieldName]['size'];				
		$this->originName=$_FILES[$_fieldName]['name'];
		$this->originName=iconv("utf-8", "gb2312",$this->originName);
		$this->errorNum=$_FILES[$_fieldName]['error'];
		$this->tmpName=$_FILES[$_fieldName]['tmp_name'];
		$arr=explode(".",$this->originName);
		//strtolower(字符串):把字符串转换为小写;
		$this->fileType=strtolower($arr[count($arr)-1]);
	}
	/**
	 * 如果开启了随机文件名，就产生新的名字
	 * 
	 * 如果没有开启，就把原来的文件名赋给$this->newName;
	 *   */
	private function setNewName(){
		if($this->isRandom==true){
			$this->newName=date("YmdHis").rand(100,999).".".$this->fileType;
		}else{
			$this->newName=$this->originName;
		}
	}
	private function getError(){
		$str="错误信息是：";
		switch ($this->errorNum){
			/////内置的错误号开始//////
			case 1:
				$str.="上传文件超过了php.ini的最大值";
				break;
			case 2:
				$str.="上传文件超过了表单MAX_FILE_SIZE允许的最大值";
				break;
			case 3:
				$str.="文件只上传了一部分";
				break;
			case 4:
				$str.="文件没有上传";
				break;
			case 6:
				$str.="没有生成临时文件";
				break;
			case 7:
				$str.="文件写入失败";
				break;
				/////内置的错误号结束//////
				/////自定义错误号结束//////
			case -1:
				$str.="文件类型错误";
				break;
			case -2:
				$str.="超过了".$this->maxSize;
				break;
			case -3:
				$str.="上传目录不存在";
				break;
			default:
				$str.="未知的错误";
		}
		return $str;
	}
	/**
	 * 返回错误信息;
	 *   */
	public function getErrorMsg(){
		return $this->errorMsg;
	}
	/**
	 * 检测文件大小
	 * @return boolean;
	 * */
	private function checkFileSize(){
		if($this->fileSize>$this->maxSize){
			$this->errorNum=-2;
			return false;
		}
		return true;
	}
	/**
	 * 检测路径
	 * @return boolean;
	 *   */
	private function checkFilePath(){
		if(empty($this->filePath)){	
			$this->errorNum=-3;
			return false;
		}
		if(!file_exists($this->filePath)){
			mkdir($this->filePath);
		}
		//如果路径中有斜线，就不处理
		//没有斜线，就添加斜线;
		$this->filePath=rtrim($this->filePath,"/")."/";
		return true;
	}
	/**
	 * 检测文件类型;
	 * @return boolean;
	 *   */
	private function checkFileType(){
		if(!in_array($this->fileType,$this->allowType)){
			$this->errorNum=-1;
			return false;
		}
		return true;
	}
	public function setMaxSize($_size){
		$this->maxSize=$_size;
	}	
	/**
	 * 返回新文件名
	 *   */
	public function getNewName(){
		return $this->newName;
	}
	/**
	 * 预检测
	 * @return boolean;
	 *   */
	private function preCheck(){
		//errorNum的错误号是内置1-7的。		
		if($this->errorNum){
			$this->errorMsg=$this->getError();
			return false;
		}
		if(!$this->checkFileSize()){
			$this->errorMsg=$this->getError();
			return false;
		}
		if(!$this->checkFileType()){
			$this->errorMsg=$this->getError();
			return false;
		}
		if(!$this->checkFilePath()){
			$this->errorMsg=$this->getError();
			return false;
		}
		return true;
	}
	/**
	 * 如果预检测通过的话，就进行上传;
	 *  */
	public function upload(){
		//echo $this->filePath.$this->newName;	
		//如果预检测通过，再执行上传;	
		if($this->preCheck()){
			if(is_uploaded_file($this->tmpName)){
				if(move_uploaded_file($this->tmpName, $this->filePath.$this->newName)){
					return true;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}
	}
}