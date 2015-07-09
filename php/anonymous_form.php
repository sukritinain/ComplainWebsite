<html>
    <head>
        <title>Complain Form</title>
    </head>
        <body>

        <?php
                $Subject = $_POST['subject'];
                $Complain_Description = $_POST['complain'];
 
    
                $dbc = mysqli_connect('localhost','root','','complain_data')
                       or die('Error connecting to MySQL server');
    
                $query = "INSERT INTO anonymous_complain_info (subject,complain) values('$Subject','$Complain_Description')";
    
                $result = mysqli_query($dbc,$query)
                          or die('error quering database');
                mysqli_close($dbc);
                echo 'Thank You for sharing your Complain!!<br />';
                echo "<a href='index.html'>Back to main page</a>";
    

                if(isset($_POST['complain'])){
                        $a = $_POST['complain'];
                        $anonymous_file_complain = "anonymous_file_complain.txt";
                        $fh = fopen($anonymous_file_complain,'w') or die ("can't open the file");
                        fwrite($fh,$a);
                        fclose($fh);
                        echo 'did you save the data?';
                }   
        ?>
        </body>
</html>