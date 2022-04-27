<?php
include_once"functionsrd.php";
$filename="registrationdetails.txt";


//create
function adduser($cid,$sid,$semester)
{
    global $filename;
    $rid=getlastid($filename,"~")+1;
    $record=$rid."~".$cid."~".$sid."~".$semester;
    //echo $record
    
        storerecord($filename,$record);
        return true;

    

    
}

//read
function getuserbyid($rid)
{
    global $filename;
    $record=getrowbyid($filename,"~",$rid);
    $arrayresult=explode("~",$record);
    $result['cid']=$arrayresult[1];
    $result['sid']=$arrayresult[2];
    $result['semester']=$arrayresult[3];
   
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
function updateuser($rid,$cid,$sid,$semester)
{
    global $filename;
    $record=$rid."~".$cid."~".$sid."~".$semester."\r\n";
    $r=getrowbyid($filename,"~",$rid);
    //echo $record ."NEW <br>";
    //echo $r ."NEW <br>";
    updaterecord($filename,$record,$r);

}


//delete
function deleteuser($rid)
{
    global $filename;
    $r=getrowbyid($filename,"~",$rid);
    //echo $r;
    //exit();
    deleterecord($filename,$r);
}


?>