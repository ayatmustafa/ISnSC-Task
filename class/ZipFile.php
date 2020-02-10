
               
<?php
include_once('xmlFile.php');

class ZipFile
 {
    
    //validate is function for make sure upute input have file or it's empty 
    function validate($file)
    {
        
        if($file["name"]!='')
        {
        //for get name and extension of uploaded file
        $file_path=pathinfo($file["name"]);
        //name is name of extract file
        $this->name=$file_path["filename"];
        $extension=$file_path["extension"];
         //check file is extension zip type 
            if( $extension =='zip'){
          
           $this-> GetFileZip($file);
            }
            else
            {
                $message='the extention should be zip';
                header('location:http://localhost/isnsc/?message='.$message);

            }
        }
        else
        {
            $message='you should uploade zip file its empty!';
            header('location:http://localhost/isnsc/?message='.$message);

        }

    }
    //----------------------------------////
   //ectract and upload file 
    function GetFileZip($file)
    {  
        $filename=$file["name"];
        $filetype=$file["type"];
        $filetmp_name=$file["tmp_name"];
        $fileerror=$file["error"];
        $filesize=$file["size"];
        $file_path=pathinfo($filename);
        $extension=$file_path["extension"];
        $newname=uniqid().$extension;
        $path="upload/";
        $location=$path.$filename;
        //to make sure if file uploaded before or not
        if( ! file_exists($location)){
            if( move_uploaded_file($file["tmp_name"],$location) ){
                $this->extractZipFile($location,$path,$file_path["filename"]);
            }
            else
            {
                $message='error occurred! couldent upload zip file chose other one ';
                header('location:http://localhost/isnsc/?message='.$message);
            }
        }
        else
        {
            $message='existed before so we not uploaded it again ';
            $xmlFile=new xmlFile();
            $xmlFile->showxmldata($path,$file_path["filename"],$message);        }   

    }
    // function for extract Zip  file and show it
    function extractZipFile($location,$path,$name)
    {
        $zip = new ZipArchive;
            //open zip file
            if($zip->open($location)){
            //extract zip file
            $zip->extractTo($path);
            $zip->close();
            $xmlFile=new xmlFile();
            $xmlFile->showxmldata($path,$name,'no');
            }
            else{
                $message='error occurred! couldent extract zip file ';
                header('location:http://localhost/isnsc/?message='.$message);
            }
    }
   
   
  
    }





?>                 
                  