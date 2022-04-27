<?php
include_once"userfunctions.php";
$filename="user.txt";


//create
function adduser($fullname,$email,$password,$type)
{
    global $filename;
    $id=getlastid($filename,"~")+1;
    $record=$id."~".$fullname."~".$email."~".$password."~".$type;
    //echo $record
    
        storerecord($filename,$record);
        return true;

    

    
}

//read
function getuserbyid($id)
{
    global $filename;
    $record=getrowbyid($filename,"~",$id);
    $arrayresult=explode("~",$record);
    $result['id']=$arrayresult[0];
    $result['fullname']=$arrayresult[1];
    $result['email']=$arrayresult[2];
    $result['password']=$arrayresult[3];
    $result['type']=$arrayresult[4];
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
function updateuser($id,$fullname,$email,$password,$type)
{
    global $filename;
    $record=$id."~".$fullname."~".$email."~".$password."~".$type."\r\n";
    $r=getrowbyid($filename,"~",$id);
    //echo $record ."NEW <br>";
    //echo $r ."NEW <br>";
    updaterecord($filename,$record,$r);

}


//delete
function deleteuser($id)
{
    global $filename;
    $r=getrowbyid($filename,"~",$id);
    //echo $r;
    //exit();
    deleterecord($filename,$r);
}


?>