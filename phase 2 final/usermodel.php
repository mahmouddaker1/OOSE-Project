<?php

class user
{
    public $id;
    public $fullname;
    public $email;
    public $password;
    public $type;
    public $filemanagerobj;

   

    function __construct()
    {
        $this->filemanagerobj=new filemanager();
        $this->filemanagerobj->filename="user.txt";
        $this->filemanagerobj->separator="~";

    }
    function Login($Email, $Password)
    {
        $myfile = fopen($this->filemanagerobj->filename, "r+") or die("Unable to open file!");
        while(!feof($myfile))
        {
            $line = fgets($myfile);
            $ArrayLine = explode($this->filemanagerobj->separator, $line);
            if($Email == $ArrayLine[2] && $this->Encrypt($Password,3)== $ArrayLine[3])
            {
                return true;
            }
        }
        fclose($myfile);
        return false;
    }
    function Encrypt($Word, $Key)
    {
    $Result = "";
    for ($i = 0; $i < strlen($Word); $i++)
    {
        $c = chr(ord($Word[$i]) + $Key );
        $Result .= $c;
    }
    return $Result;
    }

    function adduser($obj)
    {
        $id=$obj->getlastid($obj->separator)+1;
        $pass=$this->Encrypt($this->password,3);
        $this->password=$pass;
        $record=$id.$obj->separator.$this->fullname.$obj->separator.$this->email.$obj->separator.$this->password.$obj->separator.$this->type;
        $obj->storerecord($record);

    }
    
    function listallusers()
    {
        $arr=array();
        $myfile=fopen($this->filemanagerobj->filename,"r+")or die("file not opened");
        $i=0;
        while(!feof($myfile))
        {
            $line=fgets($myfile);
            $arrayline=explode($this->filemanagerobj->separator,$line);
            $arr[$i]=$this->getuserbyid($arrayline[0]);
            $i++;
        }
        fclose($myfile);
        return $arr;

    }
    function getuserbyid($id)
    {
        $r=new user();
        $record=$this->filemanagerobj->getlinebyid($id);
        $arrayline = explode($this->filemanagerobj->separator,$record);
        if($arrayline[0]!=0)
        {
        $r->id = $arrayline[0];
        $r->fullname = $arrayline[1];
        $r->email = $arrayline[2];
        $r->password = $arrayline[3];
        $r->type = $arrayline[4];
        
        }
        return $r;

    }
    function deleteuser($id)
    {
        
        $record=$this->filemanagerobj->getlinebyid($id);
        $this->filemanagerobj->deleterecord($record);


    }
    function updateuser($id,$fullname,$email,$password,$type)
    {
        $record =$id."~".$fullname."~".$email."~".$password."~".$type."\r\n";
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
        $contents=str_replace($record,'',$contents);
        file_put_contents($this->filename,$contents);


    }
    function updaterecord($newrecord,$oldrecord)
    {
        $contents=file_get_contents($this->filename);
        $contents=str_replace($oldrecord,$newrecord,$contents);
        file_put_contents($this->filename,$contents);
    }




}






?>