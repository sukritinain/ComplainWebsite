<html>
<head>
       <title>Complain Form</title>
</head>
<body>

<?php
    $Name  = $_POST['name'];
    $Email = $_POST['email'];
    $Complain_Description = $_POST['complain'];
    $Subject = $_POST['subject1'];
  
    $dbc = mysqli_connect('localhost','root','','complain_data')
           or die('Error connecting to MySQL server');
    
    $query = "INSERT INTO complain_info (name,".
    "email, complain,subject)".
    "values('$Name', '$Email','$Complain_Description','$Subject')";
    
    $result = mysqli_query($dbc,$query)
        or die('error quering database');
    mysqli_close($dbc);
    echo 'Thank You for sharing your Complain!!<br />';
    echo "<a href='index.html'>Back to main page</a>";
    
    $file_complain = "file_complain.txt";
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $fs = fopen($file_complain,"w");
        
        fwrite($fs,$_POST['complain']);
        fclose($fs);
        echo "<p>Complain is registered.Thank you!.</p>";
    }
        $fileData = htmlspecialchars(implode("",file($file_complain)));
?>

</body>
</html>