<?php
namespace lib\view;


class View
{
    private String $parentPathOfView;

    public function __construct()
    {
        $this->parentPathOfView = BASE_URL."/resources/views/";
    }

    public function renderView($filename)
    {

        if($this->hasExtensionOfFile($filename)){
            include $this->parentPathOfView.$filename;
        }else{
            include $this->parentPathOfView.$filename.".php";
        }

        
    }


    private function hasExtensionOfFile($filename)
    {
        $filesArr = explode('.', $filename);
        if(in_array('php',$filesArr)){
            return true;
        }
        return false;
    }


}