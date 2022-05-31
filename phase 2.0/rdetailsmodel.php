<?php

class rdetails
{
    public $id;
    public $cid;
    public $sid;
    public $semester;
    public $grade;
    public $filemanagerobj;

   

    function __construct()
    {
        $this->filemanagerobj=new filemanager();
        $this->filemanagerobj->filename="rdetails.txt";
        $this->filemanagerobj->separator="~";

    }
    function addrdetails($obj)
    {
        $id=$obj->getlastid($obj->separator)+1;
        $record=$id.$obj->separator.$this->cid.$obj->separator.$this->sid.$obj->separator.$this->semester.$obj->separator.$this->grade;
        $obj->storerecord($record);

    }
    
    function listallrdetails()
    {
        $arr=array();
        $myfile=fopen($this->filemanagerobj->filename,"r+")or die("file not opened");
        $i=0;
        while(!feof($myfile))
        {
            $line=fgets($myfile);
            $arrayline=explode($this->filemanagerobj->separator,$line);
            $arr[$i]=$this->getrdetailsbyid($arrayline[0]);
            $i++;
        }
        fclose($myfile);
        return $arr;

    }
    function getrdetailsbyid($id)
    {
        $r=new rdetails();
        $record=$this->filemanagerobj->getlinebyid($id);
        $arrayline = explode($this->filemanagerobj->separator,$record);
        if($arrayline[0]!=0)
        {
        $r->id = $arrayline[0];
        $r->cid = $arrayline[1];
        $r->sid = $arrayline[2];
        $r->semester = $arrayline[3];
        $r->grade = $arrayline[4];
        
        }
        return $r;

    }
    function deleterdetails($id)
    {
        
        $record=$this->filemanagerobj->getlinebyid($id);
        $this->filemanagerobj->deleterecord($record);


    }
    function updaterdetails($id,$cid,$sid,$semester,$grade)
    {
        $record =$id."~".$cid."~".$sid."~".$semester."~".$grade."\r\n";
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