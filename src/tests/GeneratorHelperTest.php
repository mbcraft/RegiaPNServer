<?php

use Mbcraft\Laravel\GeneratorUtils;
use Mbcraft\Laravel\Lang\LangGeneratorHelper;
use Mbcraft\Laravel\Lang\KeyValue;

class GeneratorHelperTest extends TestCase {

    function testValuesAtEndOfString() {
        $string = "mykey.something.values";
        
        $this->assertTrue(strpos($string,".values")===strlen($string)-strlen(".values"),"Il valore della posizione della stringa trovata in fondo non corrisponde!");
    }
    
    function testNamespaceWith() {
        $namespace = "App\\Lang";
        
        $result = GeneratorUtils::getNamespaceWith($namespace,"Session");
        
        $this->assertEquals($result,"App\\Lang\\Session","Il namespace costruito non corrisponde.");
    }
    
    function testGetMethodNameFromKey() {
        
        $key = "my_key.another.sub_key";
        
        $method_name = GeneratorUtils::getMethodNameFromKey($key);
        
        $this->assertEquals("myKey_another_subKey", $method_name,"Il nome del metodo generato non corrisponde a quello atteso!");
        
    }
    
    function testGetKeyFromMethodName() {
        
        $method_name = "myKey_another_subKey";
        
        $key = GeneratorUtils::getKeyFromMethodName($method_name);
        
        $this->assertEquals("my_key.another.sub_key",$key,"La chiave estratta dal nome del metodo non corrisponde!");
        
    }
    
    function testIsKeyword() {
        $this->assertTrue(GeneratorUtils::isKeyword("clone"),"La parola chiave clone non viene riconosciuta!");
        $this->assertTrue(GeneratorUtils::isKeyword("array"),"La parola chiave clone non viene riconosciuta!");
        $this->assertTrue(GeneratorUtils::isKeyword("die"),"La parola chiave clone non viene riconosciuta!");
        $this->assertFalse(GeneratorUtils::isKeyword("prova"),"La parola chiave clone non viene riconosciuta!");
        
    }
    
    function testImportKeys() {
        
        $f0 = array(
            'key0' => new KeyValue('value0'),
            'key1' => new KeyValue('value1')
        );
        
        $f1 = array(
            'key0' => new KeyValue('valueP0'),
            'key2' => new KeyValue('value2')
        );
        
        $result = LangGeneratorHelper::importKeys($f0, $f1);
        
        $this->assertEquals(2,count($f0));
        $this->assertEquals(2,count($f1));
        $this->assertEquals(4,count($result));
        
        $this->assertEquals("value0",$result["key0"]->value,"Il valore della chiave non corrisponde a quello atteso!");
        $this->assertEquals("valueP0",$result["|key0"]->value,"Il valore della chiave non corrisponde a quello atteso!");
        $this->assertEquals("value1",$result["key1"]->value,"Il valore della chiave non corrisponde a quello atteso!");
        $this->assertEquals("value2",$result["key2"]->value,"Il valore della chiave non corrisponde a quello atteso!");
        
    }
    
    function testArrayFlattening() {

        $data = array(
            'id' => 'Id',
            'unique_label' => 'Unique Folder Label',
            'status' => array(
                'requested' => "Player requested.",
                'shipped' => "Player shipped.",
                'received' => "Player received from the customer.",
                'active' => "The Player is Active.",
                'limited' => "The Player runs in limited mode.",
                'blocked' => "The Player is BLOCKED.",
                'returned' => "The Player was returned."),
            'nested_test' => array(
                'label' => "Nested Test",
                'values' => array(
                    0 => "This is value 0",
                    1 => "This is value 1"
                ),
            ),
            'rsync_password' => 'Current Rsync Password',
            'address' => 'Address',
            'postal' => 'Postal / Zip code',
            'city' => 'City',
            'province' => 'Province',
            'state' => 'State',
            'time_zone' => 'Time Zone',
            'play_start_time' => 'Player Music Start Time',
            'play_end_time' => 'Player Music End Time',
            'play_end_time_day_offset' => 'Play End Time Day Offset',
            'check_play_minutes_interval' => 'Check For Play Minutes Interval',
            'files_update_time' => 'Player Update Time',
            'created_at' => 'Created at',
            'actions' => 'Actions',
        );
        
        $values = LangGeneratorHelper::flattenKeys($data);
        
        //27 perchè i contenitori "values" generano un'altra voce
        $this->assertEquals(27,count($values),"Il numero dei valori non corrisponde!");
    
        $this->assertEquals($values["status.requested"]->value,"Player requested.","La chiave di indice 2 non corrisponde!");
        $this->assertEquals($values["nested_test.values.1"]->value,"This is value 1","La chiave di indice 2 non corrisponde!");
        
    }
     
     

}
