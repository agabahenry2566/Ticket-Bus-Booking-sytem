<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=400, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>Inel Power System</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 400px; font-size:12px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
Print and present this details upon boarding the bus<br><br>
<a href="javascript:Clickheretoprint()">Print</a>
<div id="print_content" style="width: 400px;">
<strong>Ticket Reservation Details</strong><br><br>
<?php
include('include/dbcon.php');
/*$Id=$_GET['id'];
$setnum=$_GET['setnum']; */
$result = mysqli_query($con, "SELECT * FROM book");
while($row = mysqli_fetch_array($result))
	{
		echo 'Id: '.$row['id'].'<br>';
		echo 'Departure Area: '.$row['departure_area'].'<br>';
		echo 'Bus Type: '.$row['bus_type'].'<br>';
		echo 'Email Address: '.$row['email'].'<br>';
		echo 'Phone Number: '.$row['phone'].'<br>';
		echo 'Travel Date: '.$row['travel_date'].'<br>';
		echo 'Luggage: '.$row['luggage'].'<br>';
		echo 'Adults: '.$row['adults'].'<br>';
		echo 'Children: '.$row['children'].'<br>';
		echo 'Description(if any): '.$row['description'].'<br>';
	}
	/*
$results = mysqli_query($con, "SELECT * FROM reserve WHERE transactionnum='$id'");
while($rows = mysqli_fetch_array($results))
	{
		$ggagaga=$rows['bus'];
		echo 'Route and Type of Bus: ';
		$resulta = mysqli_query($con, "SELECT * FROM route WHERE id='$ggagaga'");
		while($rowa = mysqli_fetch_array($resulta))
			{
			echo $rowa['route'].'     :'.$rowa['type'];
			$time=$rowa['time'];
			}
		echo '<br>Time of Departure: '.$time;
		echo '<br>';
		echo 'Seat Number: '.$setnum.'<br>';
		echo 'Date Of Travel: '.$rows['date'].'<br>';
		
	}*/
?>
</div>
<a href="index.html">Home</a>