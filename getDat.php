<?php
 
$host='ec2-54-225-88-199.compute-1.amazonaws.com:5432';
$user='xdqjgaozhtaasr';
$pass='54258cdfb513438027c94e35444ce15e3475d0ac4a620f735cd2bd8c3fd19393';
echo "before connection";
$conn=mysql_connect($host,$user,$pass) or die("connection error");
 echo "before after connection and before select db";
 mysql_select_db('ds0d1s0hfqnab');
 
 /*define('HOST','us-cdbr-iron-east-05.cleardb.net');
 define('USER','bdd7e2596c1297');
 define('PASS','45148afc');
 define('DB','heroku_4162dc62c83337d');*/
 /*define('HOST','sql12.freemysqlhosting.net:3306');
 define('USER','sql1219559');
 define('PASS','5V8iGMJUZe');
 define('DB','sql1219559');*/
 //$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect'); 
 
/*$arr=array(array('mark',4,5),
           array('lakhan',9,8),
		   array('preetam',12,13));
*/


//echo $arr;		   
 //require_once('dbConnect.php');
 $date=date('Y-m-d');
 $datee=date("Y-m-d",strtotime('today'));
 $datede = new DateTime($datee);
$datefind=$datede->format('Y-m-d');    

//echo $datefind;

 // $datefind

//$sql = "SELECT * FROM demand_entery where Date='$datefind'";
$sql = "SELECT * FROM demand_entery where date='2017-09-21'";
$json=array();
// $r = mysql_query($con,$sql);   result2 = mysql_query($myQuery) or die($myQuery."<br/><br/>".mysql_error());
 echo "after db and before query";
 $r = mysql_query($sql,$conn) or die($sql."<br/><br/>".mysql_error());
 echo "after query and before fetch_array";
 //$res = mysqli_fetch_array($r);
 while($row=mysql_fetch_array($r,MYSQL_ASSOC))
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
	echo "after fatcharray and before puch array";
	array_push($json,array("Id"=>$row['id'],"Name_Of_Product"=>$row['name_of_product'],"E_caret"=>$row['e_caret'],"M_caret"=>$row['m_caret'],"Date"=>$row['date'],"Time"=>$row['time']));
	
	
} 

//echo $json["id"];
//print(json_encode($arr));
 //$result = array();
/// $result =array(); 
 /*
 array_push($result,array(
 "name"=>$res['name'],
 "address"=>$res['address'],
 "vc"=>$res['vicechancellor']
 )
 );*/
 
 echo "before json encoding";
 echo json_encode(array("server_responce"=>$json));//array("result"=>$result));
 echo "what do you meaning    after json encoding";
 mysql_close($conn);
 
 
 ?>