<?php

/*
- self tidak bisa melakukan inheritance 
- self tidak mereference child class nya
*/

class A 
{
    public static function who() 
    {
        echo __CLASS__;
    }
    
    public static function test() 
    {
        static::who();
    }
}

class B extends A 
{
    public static function who() 
    {
        echo __CLASS__; 
    }
}

B::test();