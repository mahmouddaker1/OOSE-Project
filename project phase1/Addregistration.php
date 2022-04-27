<?php
// echo "The Registeration Name you fill is " .$_REQUEST["CourseName"];
// echo "The Registeration Name you fill is " .$_REQUEST["S_ID"];
// echo "The Registeration Name you fill is " .$_REQUEST["CourseID"];
$filename="registration.txt";
$rid=getlastid($filename,"~")+1;
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
$SID=$_REQUEST["S_ID"];
$reg=$_REQUEST["CourseName"];
$CID=$_REQUEST["CourseID"];
$record=$rid."~".$SID."~".$reg."~".$CID;
$myfile = fopen("registration.txt", "a+");
storerecord($filename,$record);
function storerecord($filename,$record)
{
    $myfile=fopen($filename,"a+");
    fwrite($myfile,$record."\r\n");
    fclose($myfile);
}
fclose($myfile);
header("location:ListRegistration.php");
?>