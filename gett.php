<?php
 define('HOST','ec2-54-225-88-199.compute-1.amazonaws.com:5432');
 define('USER','xdqjgaozhtaasr');
 define('PASS','54258cdfb513438027c94e35444ce15e3475d0ac4a620f735cd2bd8c3fd19393');
 define('DB','ds0d1s0hfqnab');
 /*define('HOST','sql12.freemysqlhosting.net:3306');
 define('USER','sql1219559');
 define('PASS','5V8iGMJUZe');
 define('DB','sql1219559');
 
 $host='ec2-54-225-88-199.compute-1.amazonaws.com:5432';
$user='xdqjgaozhtaasr';
$pass='54258cdfb513438027c94e35444ce15e3475d0ac4a620f735cd2bd8c3fd19393';
 echo "hello ";
 mysql_select_db('ds0d1s0hfqnab');
 
 */
 $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect'); 
 
/*$arr=array(array('mark',4,5),
           array('lakhan',9,8),
		   array('preetam',12,13));
*/
$daa=$_POST['aa'];

//echo $arr;		   
 //require_once('dbConnect.php');
 $date=date('Y-m-d');
 $datee=date("Y-m-d",strtotime('today'));
 $datede = new DateTime($daa);
$datefind=$datede->format('Y-m-d'); 


 $da=new DateTime($daa);
 $chec=$da->format('Y-m-d');   

//echo $datefind;

 // $datefind

//$sql = "SELECT * FROM demand_entery where Date='$chec'";
$sql = "SELECT * FROM demand_entery where Date='2017-09-21'";
$json=array();
 $r = mysqli_query($con,$sql);
 
 //$res = mysqli_fetch_array($r);
 while($row=mysqli_fetch_array($r,MYSQL_ASSOC))
{
//$row['name']=>$innerarr;
//foreach($row as $as=>$innerarr){
	//echo $innerarr."<br/>";//[0]." ".$innerarr[1]." ".$innerarr[2]." ".$innerarr[3]." ".$innerarr[4];
     
	
//}



 // array_push($json,array("Id"=>$row[0],"Name_Of_Product"=>$row[1],"E_caret"=>$row[2],"M_caret"=>$row[3],"Date"=>$row[4],"Time"=>$row[5]));
  
     
	//$arr=$json;

	//$json=$row;
	/*echo "  "."{$row['id']}"."  ".'&nbsp';
	echo "  "."{$row['Name_Of_Product']}"."  ".'&nbsp';
	echo "  "."{$row['E_caret']}"." ".'&nbsp';
	echo "  "."{$row['M_caret']}"." ".'&nbsp';
	echo "  "."{$row['Time']}"." ".'&nbsp';
	echo "  "."{$row['Date']}"."<br/>";*/
	
	array_push($json,array("Id"=>$row['Id'],"Name_Of_Product"=>$row['Name_Of_Product'],"E_caret"=>$row['E_caret'],"M_caret"=>$row['M_caret'],"Date"=>$row['Date'],"Time"=>$row['Time']));
	
	
} 

//echo $json["id"];
//print(json_encode($arr));
 //$result = array();
/// $result =array(); 
 /*
 array_pushg($result,array(
 "name"=>$res['name'],
 "address"=>$res['address'],
 "vc"=>$res['vicechancellor']
 )
 );*/
 echo json_encode(array("server_responce"=>$json));//array("result"=>$result));
 
 mysqli_close($con);
 
 
 ?>