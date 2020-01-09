<?php
namespace MyProject;
echo '这是第 " ' . __LINE__ . ' " 行<br>';
?>
<?php
echo '该文件位于 " ' . __FILE__ . ' " <br>';
?>
<?php
echo '该文件位于 " ' . __DIR__ . ' " <br>';
?>
<?php
function test()
{
    echo '函数名为：' . __FUNCTION__ . '<br>';
}

test();
?>
<?php

class test
{
    function _print()
    {
        echo '类名为：' . __CLASS__ . "<br>";
        echo '函数名为：' . __FUNCTION__ . '<br>';
    }
}

$t = new test();
$t->_print();
?>
<?php

class Base
{
    public function sayHello()
    {
        echo 'Hello ';
    }
}

trait SayWorld
{
    public function sayHello()
    {
        parent::sayHello();
        echo 'World!<br>';
    }
}

class MyHelloWorld extends Base
{
    use SayWorld;
}

$o = new MyHelloWorld();
$o->sayHello();
?>
<?php
function test2()
{
    echo '函数名为：' . __METHOD__.'<br>';
}

test2();
?>
<?php


echo '命名空间为："', __NAMESPACE__, '"';
?>