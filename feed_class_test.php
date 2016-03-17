<?php
// this is my test page

//required to run a test case
//require-once 'simpletest/autorun.php';
require_once 'simpletest/autorun.php';
include '../p4/news/Feed.php';
require_once('simpletest/web_tester.php');

class TestofFeed extends UnitTestCase 
{
    
    function testValidAssignment()
    {
        $myDateTime = date('l jS \of F Y h:i:s A');
        echo "$myDateTime  " . $myDateTime . '<br/>';
        $myData = 'This is the data';
        $myFeed = new Feed(5, $myDateTime, $myData);
        $this->assertEqual($myFeed->ID, 5);
        $this->assertEqual($myFeed->DateTime, $myDateTime);
        $this->assertEqual($myFeed->Data, $myData);
        
    }
    
    function testInvalidAssignment()
    {
        $myFeed = new Feed(10, 'Jan 3, 2011');
        $this->assertEqual($myFeed->ID, 10);
        $this->assertEqual($myFeed->DateTime, 'Jan 3, 2011');
        $this->assertEqual($myFeed->Data, '');
    }
} //end of TestofFeed
    


//SimpleTest::prefer(new TextReporter());
/*
class WebTests extends TestSuite {
    function WebTests() {
        $this->TestSuite('Web site tests');
        $this->addFile('lastcraft_test.php');
    }
} //end of WebTests
*/
/*
class TestOfLastcraft extends WebTestCase {
    
    function testHomepage() {
        $this->assertTrue($this->get('http://betaphase.dreamhosters.com/wn16/app/p4/news/index.php'));
        $this->assertText('News');
    }
    
    function testTier2Page() {
        $this->assertTrue($this->get('http://betaphase.dreamhosters.com/wn16/app/p4/news/news_list.php?id=1'));
        $this->assertText('Soccer');
        $this->assertText('The Academy Awards');
        $this->assertText('Albert Einstein');
        $this->assertTrue($this->get('http://betaphase.dreamhosters.com/wn16/app/p4/news/news_list.php?id=2'));
        $this->assertText('Soccer');
        $this->assertText('The Academy Awards');
        $this->assertText('Albert Einstein');
        $this->assertTrue($this->get('http://betaphase.dreamhosters.com/wn16/app/p4/news/news_list.php?id=3'));
        $this->assertText('Soccer');
        $this->assertText('The Academy Awards');
        $this->assertText('Albert Einstein');
        
    }
}
*/
