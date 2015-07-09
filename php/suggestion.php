<html>
<head>
<title>Complain Form</title>
</head>
<body>

<?php
    $Name  = $_POST['name'];
    $Email = $_POST['email'];
    $Suggestions = $_POST['complain'];
    
    $dbc = mysqli_connect('localhost','root','','suggestions_data')
           or die('Error connecting to MySQL server');
    
    $query = "insert into user_suggestions(name, email, message) values ('$Name', '$Email','$Suggestions')";
    
    $result = mysqli_query($dbc,$query)
              or die('error quering database');
    mysqli_close($dbc);
    echo 'Thank You!!<br />';
    echo "<a href='index.html'>Back to main page</a>";
?>

</body>
</html>