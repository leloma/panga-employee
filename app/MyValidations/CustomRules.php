<?php
namespace App\MyValidations;

class CustomRules{

  // Rule is to validate shift hours
  public function timeoutcheck(int $timeout, int $timein, int $minhours){
    
    if($timeout - $timein <= $minhours){
      echo "Shift hours must be 6 hours or more";
      return false; 
      
    }
    else{
      
      return true;
    }
  }
}
