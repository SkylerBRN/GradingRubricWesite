<!DOCTYPE HTML>
<body>
<?php
    
    $Articulation=0; $Plan = 0; $Methods = 0; $Presentation = 0; $Time = 0; $Teamwork = 0;
    $Total = 0;
    $Comments = $_POST["Comments"];
    $Name = $_POST["Name"];
    
    if ($_POST["articulate1"] > $_POST["articulate2"] && $_POST["articulate1"] > $_POST["articulate3"] )
    { $Articulation = $_POST["articulate1"]; }
    
    if ($_POST["articulate2"] > $_POST["articulate1"] && $_POST["articulate2"] > $_POST["articulate3"] )
    
    { $Articulation = $_POST["articulate2"]; }
    
    if ($_POST["articulate3"] > $_POST["articulate1"] && $_POST["articulate3"] > $_POST["articulate2"] )
    
    { $Articulation = $_POST["articulate3"]; }

    if ($_POST["plan1"] > $_POST["plan2"] && $_POST["plan1"] > $_POST["plan3"] )
    { $Plan = $_POST["plan1"]; }
    
    if ($_POST["plan2"] > $_POST["plan1"] && $_POST["plan2"] > $_POST["plan3"] )
    
    { $Plan = $_POST["plan2"]; }
    
    if ($_POST["plan3"] > $_POST["plan1"] && $_POST["plan3"] > $_POST["plan2"] )
    
    { $Plan = $_POST["plan3"]; }
    
    if ($_POST["methods1"] > $_POST["methods2"] && $_POST["methods1"] > $_POST["methods3"] )
    { $Methods = $_POST["methods1"]; }
    
    if ($_POST["methods2"] > $_POST["methods1"] && $_POST["methods2"] > $_POST["methods3"] )
    
    { $Methods = $_POST["methods2"]; }
    
    if ($_POST["methods3"] > $_POST["methods1"] && $_POST["methods3"] > $_POST["methods2"] )
    
    { $Methods = $_POST["methods3"]; }
    
    if ($_POST["presentation1"] > $_POST["presentation2"] && $_POST["presentation1"] > $_POST["presentation3"] )
    { $Presentation = $_POST["presentation1"]; }
    
    if ($_POST["presentation2"] > $_POST["presentation1"] && $_POST["presentation2"] > $_POST["presentation3"] )
    
    { $Presentation = $_POST["presentation2"]; }
    
    if ($_POST["presentation3"] > $_POST["presentation1"] && $_POST["presentation3"] > $_POST["presentation2"] )
    
    { $Presentation = $_POST["presentation3"]; }
    
    if ($_POST["time1"] > $_POST["time2"] && $_POST["time1"] > $_POST["time3"] )
    
    { $Time = $_POST["time1"]; }
    
    if ($_POST["time2"] > $_POST["time1"] && $_POST["time2"] > $_POST["time3"] )
    
    { $Time = $_POST["time2"]; }
    
    if ($_POST["time3"] > $_POST["time1"] && $_POST["time3"] > $_POST["time2"] )
    
    { $Time = $_POST["time3"]; }
    
    if ($_POST["teamwork1"] > $_POST["teamwork2"] && $_POST["teamwork1"] > $_POST["teamwork3"] )
    
    { $Teamwork = $_POST["teamwork1"]; }
    
    if ($_POST["teamwork2"] > $_POST["teamwork1"] && $_POST["teamwork2"] > $_POST["teamwork3"] )
    
    { $Teamwork = $_POST["teamwork2"]; }
    
    if ($_POST["teamwork3"] > $_POST["teamwork1"] && $_POST["teamwork3"] > $_POST["teamwork2"] )
    
    { $Teamwork = $_POST["teamwork3"]; }
    
    
    if ($_POST["total1"] > $_POST["total2"] && $_POST["total1"] > $_POST["total3"] )
    
    { $TotalIn = $_POST["total1"]; }
    
    if ($_POST["total2"] > $_POST["total1"] && $_POST["total2"] > $_POST["total3"] )
    
    { $TotalIn = $_POST["total2"]; }
    
    if ($_POST["total3"] > $_POST["total1"] && $_POST["total3"] > $_POST["total2"] )
    
    { $TotalIn = $_POST["total3"]; }

    function calcTotal
    ($Articulation, $Plan, $Methods, $Presentation, $Time, $Teamwork) {
    
        static $Total = 0;
        $Total = $Articulation + $Plan + $Methods + $Presentation + $Time + $Teamwork;
        echo $Total;
    
    }
    
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "FinalDB";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if (!$conn)
        { die("Connection failed:" .mysqli_connect_error()); }


    $sql = "INSERT INTO FinalProj (Articulation, Plan, Methods, Presentation, Time, Teamwork, TotalInput, Comments, Name) VALUES ($Articulation, $Plan, $Methods, $Presentation, $Time, $Teamwork, $Total, '$Comments', '$Name')";
    
        if ($conn->query($sql)==TRUE){

    }
    else
    {
    echo "Error creating record: " .$conn->error;
    }
    $conn->close();
    
    echo "Total calculated grade is: ";
    calcTotal($Articulation, $Plan, $Methods, $Presentation, $Time, $Teamwork);
        
?>

<br>
<br>

<form action = "index.php" method = "post">
<input type = "submit" value = "Go back to homepage">
</form>


</body>

</html>

