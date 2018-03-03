<?php

abstract class AbstractExercise
{

    public function servus($tmp){
        var_dump("Servus i bims {$tmp}");
    }

    abstract public function printHallo();
   // abstract public function servus();

}


Class A extends AbstractExercise
{
    public function printHallo(){
        var_dump("printHallo()");
        //servus();   
    }


    //servus("da Woifgang");
}

$a = new A();
$a->printHallo();
$a->servus("swag");


?>