<?php

class A{

public $name;

function __construct($name){

	$this->name=$name;
}

}

$obj=new A("Hello from PHP");

echo $obj->name;


?>
