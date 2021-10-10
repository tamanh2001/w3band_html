<?php
class Demo{
    private $data=[];

    public function __set($name,$value){
        $this->data[$name]=$value;
    }
    public function __get($name){
        if(!array_key_exists($name,$this->data)){
            return null;
        }
        return $this->data[$name];
    }
   
}

 $example=new Demo();
 $example->me='ABCDEF';
 echo $example->me;




?>