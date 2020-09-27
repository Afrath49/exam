<?php 
  

class ICT { 
  
    private $studentId; 
    private $pwd; 
      
    
    public function updatePwd($studentId, $pwd) { 
          
         
        echo("Function to update password '"  . $pwd . "' for user " . $studentId); 
          
        echo "<br>"; 
    }
     
    public function courseCode($coursecode) { 
          
        
        echo("Function to course code of user ". $coursecode); 
          
        echo "<br>"; 
    }  
  
    
} 
  
$obj = new ICT(); 
$obj -> updatePwd("ICT008", "ict008"); 
$obj -> courseCode("swt22022"); 
  
?> 