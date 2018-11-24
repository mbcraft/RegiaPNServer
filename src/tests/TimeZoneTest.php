<?php

use Mbcraft\Form\FormHelper;

class TimeZoneTest extends TestCase {
    
    function testTimeZones() {
        
        $result = FormHelper::timeZones();
        
        $this->assertFalse(empty($result),"Le time zones non sono state generate!");
    }
    
}