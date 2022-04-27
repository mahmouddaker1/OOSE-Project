<?php
class Course
{
    public $ID;
    public $Name;
    public $FileManagerObj;
    function __construct()
    {
         $this->FileManagerObj = new FileManager();
         $this->FileManagerObj->FileName = "Course.txt";
         $this->FileManagerObj->Separator = ">";
    }
    function StoreCourse()
    {
        $ID = $this->FileManagerObj->GetLastID($this->FileManagerObj->Separator)+1;
        $record = $ID.$this->FileManagerObj->Separator.$this->Name;
        $this->FileManagerObj->StoreRecordInFile($record);
    }
    function ListAllCourses()
    {
        $MyReturn = array();
        $myfile = fopen($this->FileManagerObj->FileName, "r+") or die("Unable to open file!");
        $i = 0;
        while(!feof($myfile))
        {
            $line = fgets($myfile);
            $ArrayLine = explode($this->FileManagerObj->Separator, $line);
            $MyReturn[$i] = $this->GetCourseFromFileByID($ArrayLine[0]);
            $i++;
        }
        fclose($myfile);
        return $MyReturn;
    }
    function GetCourseFromFileByID($ID)
    {
        $OBJ = new Course();
        $record = $this->FileManagerObj->GetRecordByID($ID);
        $ArrayLine = explode($this->FileManagerObj->Separator, $record);
        $OBJ->ID = $ArrayLine[0];
        $OBJ->Name = $ArrayLine[1];
        return $OBJ;
    }
    function DeleteCourse($ID)
    {
        $record = $this->FileManagerObj->GetRecordByID($ID);
        $this->FileManagerObj->DeleteRecord($record);
    }
    function UpdateCourse($ID, $N)
    {
        $record = $ID.">".$N."\r\n";
        $r = $this->FileManagerObj->GetRecordByID($ID);
        $this->FileManagerObj->UpdateRecord($this->FileManagerObj->FileName, $record, $r);
    }
    function SearchCourse($FileName, $Search)
    {
        $OBJ = new Course();
        $record = $this->FileManagerObj->SearchRecord($this->FileManagerObj->FileName, $Search);
        $ArrayLine = explode($this->FileManagerObj->Separator, $record);
        $OBJ->ID = $ArrayLine[0];
        $OBJ->Name = $ArrayLine[1];
        return $OBJ;
    }
}
class FileManager
{
    public $FileName;
    public $Separator;
    function StoreRecordInFile($record)
    {
        $myfile = fopen($this->FileName, "a+");
        fwrite($myfile, $record."\r\n");
        fclose($myfile);
    }
    function GetRecordByID($ID)
    {
    if(!file_exists($this->FileName))
    {
        return 0;
    }
    $myfile = fopen($this->FileName, "r+") or die("Unable to open file!");
    while(!feof($myfile))
    {
        $line = fgets($myfile);
        $ArrayLine = explode($this->Separator, $line);
        if($ArrayLine[0]==$ID)
        {
            return $line;
        }
    }
    return "";
    }
    function DeleteRecord($record)
    {
        $contents = file_get_contents($this->FileName);
        $contents = str_replace($record, '', $contents);
        file_put_contents($this->FileName, $contents);
    }
    function UpdateRecord($FileName,$NewRecord,$OldRecord)
    {
        $contents=file_get_contents($this->FileName);
        $contents=str_replace($OldRecord, $NewRecord, $contents);
        file_put_contents($this->FileName, $contents);
    }
    function SearchRecord($FileName, $Search)
    {
        $myfile = fopen($this->FileName, "r+") or die("Unable to open file!");
        while(!feof($myfile))
        {
            $line = fgets($myfile);
            $ArrayLine = explode($this->Separator, $line);
            if($ArrayLine[1] == $Search)
            {
                return $line;
            } 
        }
        fclose($myfile);
        return false;
    }
    function GetLastID()
    {
        if(!file_exists($this->FileName))
        {
            return 0;
        }
        $myfile = fopen($this->FileName, "r+") or die("Unable to open file!");
        $LastID = 0;
        while(!feof($myfile))
        {
            $line = fgets($myfile);
            $ArrayLine = explode($this->Separator, $line);
            if($ArrayLine[0]!="")
            {
                $LastID = $ArrayLine[0];
            }
        }
        return $LastID;
    }
    function DrawTableFromFile()
    {
        $myfile = fopen($this->FileName, "r+") or die("Unable to open file!");
        while(!feof($myfile))
        {
            $line = fgets($myfile);
            echo "<tr>";
            $ArrayLine = explode(">", $line);
            for($i=0; $i<count($ArrayLine); $i++)
            {
                echo "<td>".$ArrayLine[$i]."</td>";
            }
            echo "</tr>";
        }
        fclose($myfile);
    }
}
?>