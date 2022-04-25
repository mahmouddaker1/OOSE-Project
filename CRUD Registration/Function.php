<?php

class registration{
    public $SID;
    public $CourseName;
    public $COurseID;

    // function storeRegistration($FileManagerObj)
    // {
    //     $SID=$_REQUEST["S_ID"];
    //     $reg=$_REQUEST["CourseName"];
    //     $CID=$_REQUEST["CourseID"];
    //     $record=$SID."~".$reg."~".$CID;
    //     $FileManagerObj->StoreRecordinFile($record);
    // }

    function __construct()
    {
        $this->FileManagerObj= new FileManager();
        $this->FileManagerObj->FileName="Registration.txt";
        $this->FileManagerObj->Separator="~";


    }
    function deleteRegistration($S_ID)
    {
        $record=$this->FileManagerObj->getLineWIthId($S_ID);
        $this->FileManagerObj->deleteRecord($record);
    }
    function GetRegistrtionFromFilrById($S_ID)
    {
        $r=new Registration();
        $record=$this->FileManagerObj->getLineWIthId($S_ID);
        $ArrayLine=explode("~",$record);
        $this->S_ID = $ArrayLine[0];
        $this->CourseName = $ArrayLine[1];
        $this->CourseID = $ArrayLine[2];
        return $r;
    }
}


class FileManager
{
    public $FileName;
    public $Seperator;
    function deleteRecord($record)
    {
        $contents = file_get_contents($this->FileName);
        $contents=str_replace($record,'',$contents);
        file_put_contents($this->FileName,$contents);
    }
    function StoreRecordinFile($record)
    {
        $myfile = fopen("FileName", "a+");
        fwrite($myfile, $record."\r\n");
        fclose($myfile);
    }
    

	/**
	 */
	function __construct() {
	}



function getLineWIthId($S_ID)
{
    if(!file_exists($this->Filename))
    {
        return 0;
    }

    $myfile = fopen($this->FileName,"r+") or die ("Unable to open file!");

    while(!feof($myfile))
    {
        $line=fgets($myfile);
        echo"<tr>";
        $ArrayLine=explode("~",$line);
        if($ArrayLine[0]==$S_ID)
        {
            return $line;
        }
    }
}
}
return "";

$obj=new Registration();
$obj->GetRegistrtionFromFilrById(213059);
echo $obj->CourseName;


//  function DrawTablefromFile($FIleName)
//  {
//      $myfile = fopen($FileName,"r+") or die ("Unable to open file!");
//      while(!feof($myfile))
//      {
//          $line=fgets($myfile);
//          echo"<tr>";
//          $ArrayLine=explode("~",$line);
//          for($i=0;$i<count($ArrayLine);$i++)
//          {
//               echo "<td>". $ArrayLine[$i]." </td>";
//          }
//          echo"</tr>";
//      }
//      fclose($myfile);
//  }
 ?>