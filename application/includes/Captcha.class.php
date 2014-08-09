<?php
/**
 * 验证码类
 * 自动公开的执行一个区分人和计算机的测试
 * Captcha:Automated Public Turning Test to Tell Computers and Huaman Apart 
 * @package image
 * 步骤=========
 * 1.创建图片;
 * 2.添加验证码;
 * 3.输出图片;
 * 4.添加干扰元素;
 * ================
 *  */
class Captcha{
	private $width;
	private $height;
	private $codeNum;
	private $image;
	private $noiseNum;
	private $captchaCode;
	private $isNoise=true;
	private $level=10;
	public function __construct($_width=80,$_height=20,$_codeNum=4){
		$this->width=$_width;
		$this->height=$_height;
		$this->codeNum=$_codeNum;
		$this->captchaCode=$this->createCaptcha();
		////////让干扰元素与图片的尺寸有关联/////////////////
// 		$number=floor($_width*$_height/15);
// 		if($number>240-$_codeNum){
// 			$this->level=(240-$_codeNum)*10;
// 		}else{
// 			$this->level=$number*10;
// 		}
	}
	/**
	 * 显示验证码图片
	 *   */
	public function showCaptcha($_fontFile=''){
		//创建图片
		$this->createImage();		
		$this->setNoise();
		$this->outputText($_fontFile);
		//输出图片
		$this->outputImage();
	}
	/**
	 * 设置干扰元素
	 *   */
	private function setNoise(){
		if($this->isNoise){
			//验证码图上添加点
			for($i=0;$i<$this->level*10;$i++){
				$color=imagecolorallocate($this->image,rand(0,255),rand(0,255),rand(0,255));
				imagesetpixel($this->image,rand(1,$this->width-2), rand(1,$this->height-2), $color);
			}
			///////验证码图上添加弧线
			for($j=0;$j<$this->level;$j++){
				$color=imagecolorallocate($this->image,rand(0,100),rand(0,100),rand(0,100));
				imagearc($this->image,rand(-10,$this->width),rand(-10,$this->height),rand(30,300),rand(20,200),55,44,$color);
			}
		}
	}
	public function getCaptcha(){
		return $this->captchaCode;
	}
	/**
	 * 设置干扰元素的级别	  
	 * @param int $_level
	 * 
	 * */
	public function setLevel($_level=10){
		$this->level=$_level;
	}
	/**
	 * 创建验证码;
	 *   */
	private function createCaptcha(){
		$str="23456789abcdefghijkmnpqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ";
		$code='';
		for($i=0;$i<$this->codeNum;$i++){
			$code.=$str[rand(0,strlen($str)-1)];
		}
		return $code;
	}
	/**
	 * 向图片上写入验证码
	 *   */
	private function outputText($_fontFile){
		for($i=0;$i<$this->codeNum;$i++){
			$fontColor=imagecolorallocate($this->image, rand(0,120), rand(0,120),  rand(0,120));
			if($_fontFile==''){
				$fontSize=rand(3,5);
				$x=floor($this->width/$this->codeNum)*$i+3;
				$y=rand(0,$this->height-15);
				imagechar($this->image, $fontSize, $x, $y,$this->captchaCode[$i], $fontColor);
			}else{
				$fontSize=rand(10,16);
				$angle=rand(-30,30);
				$x=floor(($this->width-8)/$this->codeNum)*$i+8;
				$y=rand($fontSize+5,$this->height-2);
				imagettftext($this->image, $fontSize, $angle, $x, $y, $fontColor,$_fontFile, $this->captchaCode[$i]);
			}		
		}
	}
	/**
	 * 创建图片
	 * 添加边框/背景色：背景色是随机浅色;
	 *   */
	private function createImage(){
		$this->image=imagecreatetruecolor($this->width, $this->height);
		$bgColor=imagecolorallocate($this->image,rand(200,255), rand(200,255), rand(200,255));
		imagefill($this->image, 0, 0, $bgColor);
		$borderColor=imagecolorallocate($this->image, 0, 0, 0);
		imagerectangle($this->image, 0, 0, $this->width-1, $this->height-1, $borderColor);
	}
	private function outputImage(){
		imagepng($this->image);
	}
}
?>