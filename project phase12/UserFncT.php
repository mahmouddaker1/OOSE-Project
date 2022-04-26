<?php
include_once "FunctinsT.php";
$fileName = "user type.txt";
// CREATE
function addUser($Name)
{
    global $fileName;
    $id = getLastId($fileName, "~") + 1;
    $record = $id . "~" . $Name;
	//echo $record;
    if (searchUser($fileName,$Name ) == false) {
        StoreRecord($fileName, $record);
        return true;
    } else {
        return false;
    }

}


// Read
function getUserById($Id)
{
    global $fileName;
    $Record = getRowById($fileName, "~", $Id);

    $ArrayResult = explode("~", $Record);
    $Result['id'] = $ArrayResult[0];
    $Result['Name'] = $ArrayResult[1];
    return $Result;
}


function getAllUsers()
{
    global $fileName;
    $R = ListAll($fileName);
    return $R;
}

function getAllUsersByKeyWord($KeyWord)
{
    global $fileName;
    $R = SearhKeyword($fileName, $KeyWord);
    //echo $R[0] ."Ayman";
    return $R;
}
/*function Login($Email, $Password)
{
    global $fileName;
    if (searchUser($fileName, $Email . "~" . $Password)) {
        return true;
    } else {
        return false;
    }
}*/


// Update
function UpdateUser($id, $Name)
{
    global $fileName;
    $record = $id . "~" . $Name. "\r\n";
    $r = getRowById($fileName, "~", $id);
    //echo $record ."NEW <br>";
    //echo $r ."NEW <br>";
    UpdateRecord($fileName, $record, $r);

}


// Delete
function DeleteUser($id)
{
    global $fileName;
    $r = getRowById($fileName, "~", $id);
    //echo $r;
    //exit();
    DeleteRecord($fileName, $r);
}
?>