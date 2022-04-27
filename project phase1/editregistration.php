<?php
$filename="registration.txt";
$rid=$_REQUEST["rid"];
$sid=$_REQUEST["sid"];
$cn=$_REQUEST["cn"];
$cc=($_REQUEST["cc"]);
UpdateUser($rid,$sid,$cn,$cc);
function updateuser($rid,$sid,$cn,$cc)
{
    global $filename;
    $record=$rid."~".$sid."~".$cn."~".$cc."\r\n";
    $r=getrowbyid($filename,"~",$rid);
    //echo $record ."NEW <br>";
    //echo $r ."NEW <br>";
    updaterecord($filename,$record,$r);

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
function updaterecord($filename,$newrecord,$oldrecord)
{
    $contents=file_get_contents($filename);
    //replace recrd with null in content
    $contents=str_replace($oldrecord,$newrecord,$contents);
    file_put_contents($filename,$contents);
}

header("Location: ListRegistration.php?Msg=1");	
?>