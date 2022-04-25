<?php
include_once "Function.php";
class User
{
    public $ID;
    public $Name;
    public $Email;
    public $Password;
    public $Type;
    public $FileManagerObj;
    function __construct()
    {
         $this->FileManagerObj = new FileManager();
         $this->FileManagerObj->FileName = "user.txt";
         $this->FileManagerObj->Separator = "~";
    }
    function Login($Email, $Password)
    {
        $myfile = fopen($this->FileManagerObj->FileName, "r+") or die("Unable to open file!");
        while(!feof($myfile))
        {
            $line = fgets($myfile);
            $ArrayLine = explode($this->FileManagerObj->Separator, $line);
            if($Email == $ArrayLine[2] && $Password == $ArrayLine[3])
            {
                return true;
            }
        }
        fclose($myfile);
        return false;
    }
}
?>