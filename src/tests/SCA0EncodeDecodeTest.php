<?php

use Mbcraft\Piol\File;
use Mbcraft\Cryptography\Sca0\SCA0Decrypter;
use Mbcraft\Cryptography\Sca0\SCA0Encrypter;
use Mbcraft\Cryptography\Sca0\Php\SCA0Impl;
use Mbcraft\Piol\StringBuffer;

class SCA0EncodeDecodeTest extends TestCase
{

    function testEncodeDecodeWithFiles()
    {
        $f = new File("/tests/data/sca0/sample_text.txt");
        $f_enc = new File("/tests/data/sca0/sample_text_enc.dat");
        $f_dec = new File("/tests/data/sca0/sample_text_dec.txt");
        
        $encrypter = new SCA0Encrypter($f,$f_enc);
        $encrypter->encrypt();
        
        $decrypter = new SCA0Decrypter($f_enc, $f_dec);
        $decrypter->decrypt();
        
        $this->assertEquals($f->getSize(),$f_dec->getSize(),"La dimensione del file decodificato non corrisponde!!");
        $this->assertEquals(md5_file($f->getFullPath()), md5_file($f_dec->getFullPath()),"L'MD5 del file codificato e decodificato non corrisponde!!");
    }

    function testEncodeDecodeWithStringBuffers() {
        $sb_data_orig = new StringBuffer("This is a simple period with some strange data after : \n\rdlsjdfsh<dfskjh\tdfslkjdZ<>fslfd\$£5434&/(())=112!\"!\"--_..");
        $sb_data_enc = new StringBuffer();

        $sca0 = new SCA0Impl();
        $sca0->encrypt($sb_data_orig,$sb_data_enc);

        $sb_data_orig->reset();
        $sb_data_enc->reset();

        $sb_data_dec = new StringBuffer();
        $sca0->decrypt($sb_data_enc,$sb_data_dec);

        $sb_data_dec->reset();

        $this->assertEquals($sb_data_orig,$sb_data_dec,"I dati non sono decodificati correttamente!");

    }

    function testCrossEncryptDecrypt1() {
        $sb_data_orig = new StringBuffer("This is a simple period with some strange data after : \n\rdlsjdfsh<dfskjh\tdfslkjdZ<>fslfd\$£5434&/(())=112!\"!\"--_..");

        $sb_data_enc = new StringBuffer();

        $sca0 = new SCA0Impl();
        $sca0->encrypt($sb_data_orig,$sb_data_enc);

        $sb_data_orig->reset();
        $sb_data_enc->reset();

        $f_enc = new File("/tests/data/sca0/cross_text_enc.dat");
        $f_enc->setContent("".$sb_data_enc);

        $f_dec = new File("/tests/data/sca0/cross_text_dec.txt");

        $decrypter = new SCA0Decrypter($f_enc, $f_dec);
        $decrypter->decrypt();

        $decoded_data = $f_dec->getContent();

        $f_enc->delete();
        $f_dec->delete();

        $this->assertEquals("".$sb_data_orig,$decoded_data,"Il decoding sca0 php-java non funziona correttamente!!");
    }

    function testCrossEncryptDecrypt2() {

        $data = "This is a simple period with some strange data after : \n\rdlsjdfsh<dfskjh\tdfslkjdZ<>fslfd\$£5434&/(())=112!\"!\"--_..";

        $f_dec = new File("/tests/data/sca0/cross_text_dec.txt");
        $f_dec->setContent($data);

        $f_enc = new File("/tests/data/sca0/cross_text_enc.dat");

        $encrypter = new SCA0Encrypter($f_dec, $f_enc);
        $encrypter->encrypt();

        $sb_data_enc = new StringBuffer($f_enc->getContent());
        $sb_data_dec = new StringBuffer();

        $sca0 = new SCA0Impl();
        $sca0->decrypt($sb_data_enc,$sb_data_dec);

        $sb_data_dec->reset();
        $sb_data_enc->reset();


        $f_enc->delete();
        $f_dec->delete();

        $this->assertEquals("".$sb_data_dec,$data,"Il decoding sca0 java-php non funziona correttamente!!");
    }

}

?>