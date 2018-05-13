<?php
    require "connect.php";
	$position = $_GET["p"];
	$positionSQL = "select playerNumber,playerLastName,playerFirstName,playerBattingAvg from ballplayer where 
	                 playerposition = '$position' order by playerBattingAvg DESC ";
	
	$result = $mysqli->query($positionSQL);
	$output = "<strong>Players at position $position:<br></strong>";
	$output.= "<ul>";
	while($row = $result->fetch_array())
	{
		$pnum	= $row['playerNumber'];
		$plname = $row["playerLastName"];
		$pfname = $row["playerFirstName"];
		$pbatting = $row["playerBattingAvg"];
		$output.="<li><img src ='images/$pnum.png'>#$pnum:$plname,$pfname($pbatting)<br></li>";
		
		
	}
	$output.="</ul>";
	echo $output;
	
	//close connection to DB
	$mysqli->close();

?>