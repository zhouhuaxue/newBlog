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
      // mysqli_query($this->conn,"set names utf8" );
    }
    public function query($sql){
        mysqli_query($this->conn,"set names utf8" );
       // mysqli_query("set names utf8" ,$this->conn);
        $int_ins=mysqli_query($this->conn,$sql) or die(mysqli_error($this->conn));

        return $int_ins;
    }

    public function sel($sql){
        mysqli_query($this->conn,"set names utf8" );
        $query=mysqli_query($this->conn,$sql)or die(mysqli_error($this->conn));
        $rel=mysqli_fetch_assoc($query);

        return $rel;
    }
    public function getAll($sql){
        mysqli_query($this->conn,"set names utf8" );
       // mysqli_query("set names utf8" ,$this->conn);
        $query=mysqli_query($this->conn,$sql)or die(mysqli_error($this->conn));
        $array = array();
        while($rs = mysqli_fetch_assoc($query)){
            $array[] = $rs;
        }

        return $array;
    }
}

