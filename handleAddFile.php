<?php
include_once('class/ZipFile.php');
include_once('class/xmlFile.php');
$ZipFile=new ZipFile();
$file='';
if(isset($_POST["submit"]))
{
  $file= $_FILES["zipFile"];
  $ZipFile->validate($file);
}

//to show xml formate
      if(isset($_GET['xmlFormate']) )
    {
    $strenc2= $_GET['xmlFormate'];
    $arr = unserialize(urldecode($strenc2));
   
        
      // Calling arrayToxml Function and printing the result 
     // This function create a xml object with element root. 
    $xml = new SimpleXMLElement('<root/>'); 
      
    // This function resursively added element 
    // of array to xml document 
    array_walk_recursive($arr, array ($xml, 'addChild')); 
      
    // This function prints xml document. 
    echo'<pre>';
     print_r($xml->asXML()); 
    echo '</pre>';
    //for print array befor convert 
    echo'<pre>';
    foreach($arr as $data){
         var_dump($data).'<hr>';
    }
    echo '</pre>';
    }
        
    
  


?>