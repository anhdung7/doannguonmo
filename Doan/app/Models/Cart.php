<?php
namespace App\Models;
class Cart{
    public $sanphams = null;
    public $tongtien = 0;
    public $tongsl = 0;

    public function __construct($cart)
    {
        if($cart){
            $this->sanphams = $cart->sanphams;
            $this->tongtien = $cart->tongtien;
            $this->tongsl = $cart->tongsl;
        }
    }
    public function addCart($sp, $id){
       $newSampham =['sl'=>0,'gia'=>$sp->dongia,'sanphaminfo'=>$sp];
       if($this->sanphams){
           if(array_key_exists($id,  $this->sanphams)){
                $newSampham = $this->sanphams[$id];
           }
           
       }
       $newSampham['sl']++;
       $newSampham['gia'] = $newSampham['sl']*$sp->dongia;
       $this->sanphams[$id] = $newSampham;
       $this->tongtien += $sp->dongia;
       $this->tongsl ++;
    }
    public function deleteIntemCart($id){
        $this->tongsl -= $this->sanphams[$id]['sl'];
        $this->tongtien -= $this->sanphams[$id]['gia'];
        unset($this->sanphams[$id]);
    }
    public function UpdateIntemCart($id, $sl){
        $this->tongsl -= $this->sanphams[$id]['sl'];
        $this->tongtien -= $this->sanphams[$id]['gia'];

        $this->sanphams[$id]['sl']=$sl;
        $this->sanphams[$id]['gia'] = $sl*$this->sanphams[$id]['sanphaminfo']->dongia;

        $this->tongsl += $this->sanphams[$id]['sl'];
        $this->tongtien += $this->sanphams[$id]['gia'];

    }
}
