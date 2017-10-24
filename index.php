<?php

class identitas {

 public $nm;
 public $tl;
 public $kls;
 public $stt;


 public function __construct ($nama,$tempatlahir,$kelas,$status){
 $this->nm =$nama;
 $this->tl =$tempatlahir;
 $this->kls =$kelas;
 $this->stt =$status;

 }
public function get_nama (){
 	return $this->nm;
 }
 public function get_tempatlahir (){
 	return $this->tl;
 }
 public function get_kelas (){
 	return $this->kls;
 }
 public function get_status (){
 	return $this->stt;
 }
 
}
 


?>