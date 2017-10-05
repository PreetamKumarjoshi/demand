<?PHP
$host="ec2-54-225-88-199.compute-1.amazonaws.com";
$user="xdqjgaozhtaasr";
$pass="54258cdfb513438027c94e35444ce15e3475d0ac4a620f735cd2bd8c3fd19393";
$db="ds0d1s0hfqnab";
echo "before connection";
$conn=mysql_connect($host,$user,$pass);
echo "after connection ";
$sql="select * from demand_entery";
mysql_select_db($db);
$r=mysql_query($conn,$sql);
while($row=mysql_fetch_array($r,MYSQL_ASSOC))
{
    echo "{$row['Id']}";
    echo "{$row['Name_Of_Product']}";
}

?>