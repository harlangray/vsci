<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PasswordValidate
 *
 * @author harla
 */
class PasswordValidate {
    //put your code here
    const MIN_LENGTH = 6;
    const MAX_LENGTH = 12;
    
    public function lengthValid($password){
        $passLength = strlen($password);
        
        return $passLength >= self::MIN_LENGTH && $passLength <= self::MAX_LENGTH;
    }
}
