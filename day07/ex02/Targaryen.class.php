<?php

class Targaryen {

   protected function resistsFire(){
       false;
   }

   public function getBurned(){
       if (!$this->resistsFire()){
           return "burns alive";
       } else {
           return "emerges naked but unharmed";
       }
   }
}
?>
