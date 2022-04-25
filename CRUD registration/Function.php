<?php
$filename="registration.txt";
   function deleteuser($rid)
   {
       global $filename;
       $r=getrowbyid($filename,"~",$rid);
       //echo $r;
       //exit();
       deleterecord($filename,$r);
   }
   function getrowbyid($filename,$separator,$rid)
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
           if($arrayline[0]==$rid)
           {
               return $line;
           }
       }
       return false;
   }
   function deleterecord($filename,$record)
{
    $contents=file_get_contents($filename);
    //replace recrd with null in content
    $contents=str_replace($record,'',$contents);
    file_put_contents($filename,$contents);
}

class registration{
    public $rid;
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
    function deleteRegistration($rid)
    {
        $record=$this->FileManagerObj->getLineWIthId($rid);
        $this->FileManagerObj->deleteRecord($record);
    }
    function GetRegistrtionFromFilrById($rid)
    {
        $r=new Registration();
        $record=$this->FileManagerObj->getLineWIthId($rid);
        $ArrayLine=explode("~",$record);
        $this->rid = $ArrayLine[0];
        $this->S_ID = $ArrayLine[1];
        $this->CourseName = $ArrayLine[2];
        $this->CourseID = $ArrayLine[3];
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



function getLineWIthId($rid)
{
    

    $myfile = fopen($this->FileName,"r+") or die ("Unable to open file!");

    while(!feof($myfile))
    {
        $line=fgets($myfile);
        echo"<tr>";
        $ArrayLine=explode("~",$line);
        if($ArrayLine[0]==$rid)
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