<?php

class registration
{
    public $id;
    public $sid;
    public $cn;
    public $cid;
    
    public $filemanagerobj;

   

    function __construct()
    {
        $this->filemanagerobj=new filemanager();
        $this->filemanagerobj->filename="registration.txt";
        $this->filemanagerobj->separator="~";

    }
    function Encrypt($Word, $Key)
    {
    $Result = "";
    for ($i = 0; $i < strlen($Word); $i++)
    {
        $c = chr(ord($Word[$i]) + $Key + $i);
        $Result .= $c;
    }
    return $Result;
    }

    function addregistration($obj)
    {
        $id=$obj->getlastid($obj->separator)+1;
       
        $record=$id.$obj->separator.$this->sid.$obj->separator.$this->cn.$obj->separator.$this->cid;
        $obj->storerecord($record);

    }
    
    function listallregistration()
    {
        $arr=array();
        $myfile=fopen($this->filemanagerobj->filename,"r+")or die("file not opened");
        $i=0;
        while(!feof($myfile))
        {
            $line=fgets($myfile);
            $arrayline=explode($this->filemanagerobj->separator,$line);
            $arr[$i]=$this->getregistrationbyid($arrayline[0]);
            $i++;
        }
        fclose($myfile);
        return $arr;

    }
    function getregistrationbyid($id)
    {
        $r=new registration();
        $record=$this->filemanagerobj->getlinebyid($id);
        $arrayline = explode($this->filemanagerobj->separator,$record);
        if($arrayline[0]!=0)
        {
        $r->id = $arrayline[0];
        $r->sid = $arrayline[1];
        $r->cn = $arrayline[2];
        $r->cid = $arrayline[3];
        
        
        }
        return $r;

    }
    function deleteregistration($id)
    {
        
        $record=$this->filemanagerobj->getlinebyid($id);
        $this->filemanagerobj->deleterecord($record);


    }
    function updateregistration($id,$sid,$cn,$cid)
    {
        $record =$id."~".$sid."~".$cn."~".$cid."\r\n";
        $r=$this->filemanagerobj->getlinebyid($id);
        $this->filemanagerobj->updaterecord($record,$r);
    }
   


   

}
class filemanager
{
    public $filename;
    public $separator="~"; 


    function getlastid($separator)
    {
        if(!file_exists($this->filename)) 
        {
            return 0;
        }
        $myfile=fopen($this->filename,"r+")or die ("file not open");
        $lastid=0;
        while(!feof($myfile))
        {
            $line=fgets($myfile);
            $arrayline=explode($separator,$line);
            if($arrayline[0]!="")
            {
                $lastid=$arrayline[0];

            }
        }
        return $lastid;
    }
    function storerecord($record)
    {
        $myfile=fopen($this->filename,"a+");
        fwrite($myfile,$record."\r\n");
        fclose($myfile);
    }
    function getlinebyid($id)
    {
        if(!file_exists($this->filename))
        {
            return 0;
        }
        $myfile= fopen($this->filename,"r+")or die("file not opened");
        while(!feof($myfile))
        {
            $line= fgets($myfile);
            $arrayline=explode($this->separator,$line);
            if($arrayline[0]==$id)
            {
                return $line;
            }
        }
        return"";
    }
    function deleterecord($record)
    {
        $contents=file_get_contents($this->filename);
        $contents=str_replace($oldrecord,$newrecord,$contents);
        file_put_contents($this->filenamae,$contents);


    }
    function updaterecord($newrecord,$oldrecord)
    {
        $contents=file_get_contents($this->filename);
        $contents=str_replace($oldrecord,$newrecord,$contents);
        file_put_contents($this->filename,$contents);
    }

}






?>