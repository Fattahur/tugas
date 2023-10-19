<?php
class wordcount{
    public function countWords($sentence){
        return count(explode(" ",$sentence));
    }
}
?>