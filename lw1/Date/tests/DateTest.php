<?php 
require_once "src/date.php";
use PHPUnit\Framework\TestCase;

class DetaTest extends TestCase{
    private $date;
    private $date2;

    public function setUp():void
    {
        $this->date2 = new Date(28,10,2002);
        $this->date = new Date(1,2,2000);
    }

    public function testDiffDate(){
        $this->assertEquals($this->date->diffDate($this->date2),1000);
    }

    public function testMinusDay(){
        $this->assertEquals($this->date->minusDay(32),"31.12.1999");
    }
    public function testGetDateOfWeek(){
        $this->assertEquals($this->date->getDateOfWeek(),"Tuesday");
    }

    public function testFormatRu(){
        $this->assertEquals($this->date->format("ru"),"1.2.2000");
    }

    public function testFormatEn(){
        $this->assertEquals($this->date->format("en"),"2000-2-1");
    }
}