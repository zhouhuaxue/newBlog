<?php
	class study{
		public function huhu(){
			echo "study huhu\n";
		}
		public function min(){
			echo "min\n";
		}
	}
	class test extends study {
		public function __construct(){
			echo "haha\n";
			$this->gugu();
		//	parent::huhu();
		//	$this->huhu();
		}
		public function huhu(){
		//	parent::huhu();
			echo "huhu\n";
		}
		public static function gugu(){
			echo "min test\n";
			parent::min();
			self::huhu();

		}
	}
/*	$test =new test();
	$test->huhu();
	$test->min();*/
	//静态的无法使用ｔｈｉｓ关键字，需要使用ｓｅｌｆ关键字
	test::gugu();
