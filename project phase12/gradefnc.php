<?php
include_once"functionsgrade.php";
$filename="grades.txt";


//create
function adduser($sid,$cn,$g)
{
    global $filename;
    $gc=getlastid($filename,"~")+1;
    $record=$gc."~".$sid."~".$cn."~".$g;
    //echo $record
    
        storerecord($filename,$record);
        return true;

    

    
}

//read
function getuserbyid($gc)
{
    global $filename;
    $record=getrowbyid($filename,"~",$gc);
    $arrayresult=explode("~",$record);
    $result['sid']=$arrayresult[1];
    $result['cn']=$arrayresult[2];
    $result['g']=$arrayresult[3];
   
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
function updateuser($gc,$sid,$cn,$g)
{
    global $filename;
    $record=$gc."~".$sid."~".$cn."~".$g."\r\n";
    $r=getrowbyid($filename,"~",$gc);
    //echo $record ."NEW <br>";
    //echo $r ."NEW <br>";
    updaterecord($filename,$record,$r);

}


//delete
function deleteuser($gc)
{
    global $filename;
    $r=getrowbyid($filename,"~",$gc);
    //echo $r;
    //exit();
    deleterecord($filename,$r);
    
}


?>