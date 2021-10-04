<?php

class View
{

    public function renderLayout()
    {
        
    }

    
    public function renderView($fileName)
    {
       
        $file = explode('.',$fileName);
        if(in_array("php",$file)){
            include BASE_URL."/resources/view/$fileName";
        }else{
            include BASE_URL."/resources/view/$fileName.php";
        }
       
    }
}