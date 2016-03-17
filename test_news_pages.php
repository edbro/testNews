<?php
// this is my test page

//required to run a test case
//require-once 'simpletest/autorun.php';
require_once 'simpletest/autorun.php';
include '../p4/news/Feed.php';
require_once('simpletest/web_tester.php');

class TestOfWebpages extends WebTestCase {
    
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
        $this->assertTrue($this->get('http://betaphase.dreamhosters.com/wn16/app/p4/news/news_list.php?id=500'));
        $this->assertText('Sorry, there are no records that match this query');
        $this->assertTrue($this->get('http://betaphase.dreamhosters.com/wn16/app/p4/news/news_list.php?id=batman'));
        $this->assertTrue('This theme means you didn');
        
    }
}