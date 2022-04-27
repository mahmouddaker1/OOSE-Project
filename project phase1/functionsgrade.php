<?php
//non functional requirment
//encryption
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
function Decrypt($Word, $Key)
{
    $Result = "";
    for ($i = 0; $i < strlen($Word); $i++) {
        $c = chr(ord($Word[$i]) - $Key - $i);
        $Result .= $c;
    }
    return $Result;
}


//the crud

//create
function storerecord($filename,$record)
{
    $myfile=fopen($filename,"a+");
    fwrite($myfile,$record."\r\n");
    fclose($myfile);
}

//read
function getrowbyid($filename,$separator,$gc)
{
    if(!file_exists($filename))
    {
        return 0;
    }

    $myfile=fopen($filename,"r+")or die("unable to open file!");
    
    while(!feof($myfile))
    {
        $line=fgets($myfile);
        $arrayline=explode("~",$line);
        if($arrayline[0]==$gc)
        {
            
            return $line;
        }
    }
    return false;
}

function getlastid($filename,$separator)
{
    if(!file_exists($filename))
    {
        return 0;
    }
    $myfile=fopen($filename,"r+")or die("unable to open file!");
    $lastid=0;
    while(!feof($myfile))
    {
        $line=fgets($myfile);
        $arrayline=explode("~",$line);
        if($arrayline[0]!="")
        {
            $lastid=$arrayline[0];
        }
    }
    return $lastid;


}

function searchkeyword($filename,$search)
{
    $myfile=fopen($filename,"r+")or die("unable to open file!");
    $result="";
    $j=0;
    while(!feof($myfile))
    {
        $line=fgets($myfile);
        $i=strpos($line,$search);
        if($i>=0&&$i!=null)
        {
            $result[$j]=$line;
            $j++;

        }
    }
    fclose($myfile);
    return $result;



}

function searchuser($filename,$search)
{
    $myfile=fopen($filename,"r+")or die("unable to open file!");
    while(!feof($myfile))
    {
        $line=fgets($myfile);
        $i=strpos($line,$search);
        if($i>=0 && $i!=null)
        {
            return $line;
        }
    }
    fclose($myfile);
    return false;


}

//update

function updaterecord($filename,$newrecord,$oldrecord)
{
    $contents=file_get_contents($filename);
    //replace recrd with null in content
    $contents=str_replace($oldrecord,$newrecord,$contents);
    file_put_contents($filename,$contents);
}

//delete

function deleterecord($filename,$record)
{
    $contents=file_get_contents($filename);
    //replace recrd with null in content
    $contents=str_replace($record,'',$contents);
    file_put_contents($filename,$contents);
}

function listall($filename)
{
    $myfile=fopen($filename,"r+");
    $i=0;
    while(!feof($myfile))
    {
        $line[$i]=fgets($myfile);
        $i++;
    
    }
    return $line;
}


?>