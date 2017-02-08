<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PasswordValidateTest
 *
 * @author harla
 */
class PasswordValidateTest extends PHPUnit_Framework_TestCase {
    //put your code here
    
    public function testValidateLength(){
        $validPass = new PasswordValidate();
        
        $expected = $validPass->lengthValid('1234');
        $this->assertFalse($expected);
    }
}
