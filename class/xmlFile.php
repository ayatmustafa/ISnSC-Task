<?php 

class xmlFile
{

 public function showxmldata($path,$name,$msg)
 {
      //read xml file 
     $message='may not have file content xml formate!';
     $xml = simplexml_load_file($path.$name.".xml");
     if ($xml === false) 
     {
          $message='error inside xml format  or oocored in uploade it ';
          header("Location:http://localhost/isnsc/?message=".$message);   
    
      } 
      else 
      {
           //convert from xml to array
          $array = json_decode(json_encode($xml), TRUE);
          //add array to url in array $_GET
          $str = serialize($array);
          $strenc = urlencode($str);
          if($msg==='no')
           {
               header('location:http://localhost/isnsc/showDmarcReport.php?data='.$strenc);
           }
           else
           {
               header('location:http://localhost/isnsc/showDmarcReport.php?message='.$msg.'&&data='.$strenc);
     
             }
           
         
      }

      
 }

}