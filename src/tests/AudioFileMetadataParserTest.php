<?php

use Mbcraft\Piol\File;
use Mbcraft\Console\Audio\AudioFileMetadataParser;

class AudioFileMetadataParserTest extends TestCase {
    
    function testMp3_liian_kuan() 
    {        
        $f = new File("tests/data/audiofile_metadata/08.Liian Kauan.mp3");
        $this->assertTrue($f->exists(),"Il file non esiste!");
        
        $a = new AudioFileMetadataParser($f);
        $a->analyze();
        
        $this->assertEquals(6,count($a->getMetadata()));
        $m = $a->getMetadata();
        
        $this->assertEquals("Liian Kauan",$m["title"]);
        $this->assertEquals("Chisu",$m["artist"]);
        $this->assertEquals("Alkovi",$m["album"]);
        $this->assertEquals("Pop",$m["genre"]);
        $this->assertEquals("08",$m["track"]);
        $this->assertEquals("2008",$m["date"]);
        
        $this->assertEquals("00:03:27.46",$a->getDuration());
        $this->assertEquals("231 kb/s", $a->getBitrate());
    }
    
    function testMp3_huumaavaa() 
    {        
        $f = new File("tests/data/audiofile_metadata/01.Huumaavaa.mp3");
        $this->assertTrue($f->exists(),"Il file non esiste!");
        
        $a = new AudioFileMetadataParser($f);
        $a->analyze();
        
        $this->assertEquals(6,count($a->getMetadata()));
        $m = $a->getMetadata();
        
        $this->assertEquals("Huumaavaa",$m["title"]);
        $this->assertEquals("Chisu",$m["artist"]);
        $this->assertEquals("Alkovi",$m["album"]);
        $this->assertEquals("Pop",$m["genre"]);
        $this->assertEquals("01",$m["track"]);
        $this->assertEquals("2008",$m["date"]);
        
        $this->assertEquals("00:04:34.33",$a->getDuration());
        $this->assertEquals("228 kb/s", $a->getBitrate());
    }
    
    function testMp3_kurenai() 
    {        
        $f = new File("tests/data/audiofile_metadata/01.Kurenai.mp3");
        $this->assertTrue($f->exists(),"Il file non esiste!");
        
        $a = new AudioFileMetadataParser($f);
        $a->analyze();
        
        $this->assertEquals(6,count($a->getMetadata()));
        $m = $a->getMetadata();
        
        $this->assertEquals("Kurenai",$m["title"]);
        $this->assertEquals("X Japan",$m["artist"]);
        $this->assertEquals("Best-Fan's Selection",$m["album"]);
        $this->assertEquals("Heavy Metal",$m["genre"]);
        $this->assertEquals("01",$m["track"]);
        $this->assertEquals("2001",$m["date"]);
        
        $this->assertEquals("00:06:21.59",$a->getDuration());
        $this->assertEquals("319 kb/s", $a->getBitrate());
    }
    
    function testAac() 
    {
        $f = new File("tests/data/audiofile_metadata/happy-upbeat.wav");
        $a = new AudioFileMetadataParser($f);
        $a->analyze();
        $this->assertEquals(0,count($a->getMetadata()));
        $this->assertEquals("00:01:36.00",$a->getDuration());
        $this->assertEquals("1411 kb/s", $a->getBitrate());
    }
    
    function testWav() 
    {
        $f = new File("tests/data/audiofile_metadata/Bob_Marley_Knocking_on_Heavens_Door.aac");
        $a = new AudioFileMetadataParser($f);
        $a->analyze();
        $this->assertEquals(0,count($a->getMetadata()));
        $this->assertEquals("00:01:56.10",$a->getDuration());
        $this->assertEquals("66 kb/s", $a->getBitrate());
    }
}
