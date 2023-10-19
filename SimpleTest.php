<?php
    use PHPUnit\Framework\TestCase;
    require_once "Wordcount.php";
    class Simpletest extends TestCase {
        public function testcountword (){
            $Wc = new WordCount();

            $TestSentence = "My name is joko";
            $WordCount = $Wc->countWords($TestSentence);
            
            $this -> assertEquals(4, $WordCount);
        }
    }
?>