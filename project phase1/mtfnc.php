<?php
include_once "mtfunctions.php";
$filename="menutype.txt";


//create
function adduser($uid,$mid)
{
    global $filename;
    $mtid=getlastid($filename,"~")+1;
    $record=$mtid."~".$uid."~".$mid;
    //echo $record
    
        storerecord($filename,$record);
        return true;

    

    
}

//read
function getuserbyid($mtid)
{
    global $filename;
    $record=getrowbyid($filename,"~",$mtid);
    $arrayresult=explode("~",$record);
    $result['uid']=$arrayresult[0];
    $result['mid']=$arrayresult[1];
    
    return $result;

}

function getallusers()
{
    global $filename;
    $r=listall($filename);
    return $r;
}

function getallusersbykeyword($keyword)
{
    global $filename;
    $r=searchkeyword($filename,$keyword);
    //echo $r[0]."1";
    return $r;
}

function login($email,$password)
{
    global $filename;
    if(searchuser($filename,$email."~".$password))
    {
        return true;
    }
    else
    {
        return false;
    }
     
}

//update
function updateuser($mtid,$uid,$mid)
{
    global $filename;
    $record=$mtid."~".$uid."~".$mid."\r\n";
    $r=getrowbyid($filename,"~",$mtid);
    //echo $record ."NEW <br>";
    //echo $r ."NEW <br>";
    updaterecord($filename,$record,$r);

}


//delete
function deleteuser($mtid)
{
    global $filename;
    $r=getrowbyid($filename,"~",$mtid);
    //echo $r;
    //exit();
    deleterecord($filename,$r);
}


?>