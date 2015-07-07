<?php
class Base{}
/**
*定义一个类ｓｅｓｓｉｏｎ　类中包含２个成员变量　$name 和$sexy
*包含２个方法
*
*/
class session extends Base {
	public $name;
	public $sexy;
	public function setName($name){
		$this->name = $name;
	}
	public function getName(){
		return $this->name;
	}
	
	public function setSexy($sexy){
		$this->sexy = $sexy;
	}
	public function getSexy(){
		return $this->sexy;
	}
}
/**
*定义另外一个类，该类中使用上一个类的对象和方法
*
*/
class action extends  Base{
	public $session;
	public function __construct(){
		$this->session = new session();
	}
	public function getInfo(){
		$this->session->setName("huhu");
		echo $this->session->getName()."\n";
	}
}
/*  $session = new session();//初始化一个ｓｅｓｓｉｏｎ　对象
  $session->setName('xiaohua');//使用类中的方法
  $session->setSexy('Fmale');
  echo $session->getName()."-".$session->getSexy()."\n";*/
  $action = new action();//初始化对象
  $action->getInfo();//调用对象方法，该方法包含另外一个类的对象

