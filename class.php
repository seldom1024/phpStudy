<?php
class Site {
    /* 成员变量 */
    var $url;
    var $title;

    function __construct($title, $url)
    {
        $this->setTitle($title);
        $this->setUrl($url);
    }

    /* 成员函数 */
    function setUrl($par){
        $this->url = $par;
    }

    function getUrl(){
        echo $this->url . PHP_EOL;
    }

    function setTitle($par){
        $this->title = $par;
    }

    function getTitle(){
        echo $this->title . PHP_EOL;
    }
}
?>
<?php
$run = new Site("2018", "2019");
echo $run->getTitle().$run->getUrl();
?>