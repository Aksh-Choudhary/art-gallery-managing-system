 <?php
$servername = "localhost";
$username = "root";
$password = "Ch0udh@ry";
$dbname = "art_gallery";


$con = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $a=$_POST['G_ID'];

    if($a!="")
        {
            $sql1 = "SELECT * from Gallery where gid='$a'";
            $result = mysqli_query($con,$sql1);

            if(mysqli_num_rows($result)>0)
            {
            $sql3="DELETE from Gallery where gid='$a'"; 
            mysqli_query($con,$sql3);
            echo "<b>Record with G_ID = $a is deleted successfully.<b>";
            }
           else
        {
            echo "<b>!!!Error in Deleting Record!!!<br> Record '$a' was not found in database.<b>" ;
        }
        }else{
                echo "<b>G_ID Field is Empty</b>";
            }
$con->close();
}
?>