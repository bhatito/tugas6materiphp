<?php
require_once 'abstrack.php';
class persegipanjang extends Bentuk2D{
    public $panjang =20;
    public $lebar =10;
    public function namaBidang(){
        $namabidang = "Persegi Panjang";
        return $namabidang;
    }
    public function luasBidang(){
        $luas = $this->panjang * $this->lebar;
        return $luas;
    }
    public function kelilingbidang(){
        $keliling = 2 * ($this->panjang + $this->lebar);
        return $keliling;
    }

}



?>