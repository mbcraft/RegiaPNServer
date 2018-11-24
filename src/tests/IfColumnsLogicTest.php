<?php

class IfColumnLogicTest extends TestCase {

    public function ifcolumnz($vars,$col) {
        if ((isset($vars["show_columns"]) && array_search($col, $vars["show_columns"]) !== FALSE) ||
                (isset($vars["hide_columns"]) && array_search($col, $vars["hide_columns"]) === FALSE) ||
                (!isset($vars["show_columns"]) && !isset($vars["hide_columns"]))) {
            return true;
        } else {
            return false;
        }
    }
    
    public function testNothingReturnsTrue() {
        $this->assertTrue($this->ifcolumnz(array(),"my_col"));
    }
    
    public function testShowColumnOk() {
        $this->assertTrue($this->ifcolumnz(array("show_columns" => ["my_col"]),"my_col"));
    }
    
    public function testHideColumnOk() {
        $this->assertFalse($this->ifcolumnz(array("hide_columns" => ["my_col"]),"my_col"));
    }
    
    public function testWithShowDifferentNameMustReturnFalse() {
        $this->assertFalse($this->ifcolumnz(array("show_columns" => ["my_col"]),"another_col"));
    }
    
    public function testWithHideDifferentNameMustReturnTrue() {
        $this->assertTrue($this->ifcolumnz(array("hide_columns" => ["my_col"]),"another_col"));
    }

}
