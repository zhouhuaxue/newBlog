<?php
/**
 * Created by PhpStorm.
 * User: xue
 * Date: 15-6-13
 * Time: 下午12:59
 */

class mysql
{
    public $conn ;

    public function __construct()
    {
      $this->conn =mysqli_connect("localhost","root","2312qqbc",'myblog');
    }
    public function query($sql){

        $int_ins=mysqli_query($this->conn,$sql) or die(mysqli_error($this->conn));
        return $int_ins;
    }

    public function sel($sql){
        $query=mysqli_query($this->conn,$sql)or die(mysqli_error($this->conn));
        $rel=mysqli_fetch_assoc($query);

        return $rel;
    }
}

