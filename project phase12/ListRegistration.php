<form action="searchregistration.php" method="post">
Search <input type="text" name="rid" /> <input type="image" src="download.png" align="middle"/>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is a test</title>
</head>
<body>
     <h1>List All Registerations</h1>
     <table border =1>
         <tr>
             <td>registration id</td>
             <td>Student_ID</td>
             <td>Course_Name</td>
             <td>Course_ID</td>
             <td>Delete</td>

         </tr>
     
     <?php
    include_once "Function.php";
    $myfile = fopen("registration.txt","r+") or die ("Unable to open file!");
    while(!feof($myfile))
    {
        $line=fgets($myfile);
        echo"<tr>";
        $ArrayLine=explode("~",$line);
        for($i=0;$i<count($ArrayLine);$i++)
        {
             
             if($i==0)
             {
             echo"<td><a href=editregistration.html?rid=$ArrayLine[0]>".$ArrayLine[$i]."</a></td>";
             }
             else{
                echo "<td>". $ArrayLine[$i]." </td>";
             }
        }
        
        echo "<td><a href=del.php?rid=$ArrayLine[0]>X</a></td>"; 
        echo"</tr>";
    }
    fclose($myfile);
     ?>
    <tr>
        <td>
            <a href="Addregistration.html"> Add registeration</a>
        </td>
    </tr>

     </table>
</body>
</html>