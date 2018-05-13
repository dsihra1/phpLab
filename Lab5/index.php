<?php
 
$doc = "<html>
			<head>
				<title>Take me out to the ball game...</title>
				<script src='clientCode/jquery-3.2.0.min.js'></script>
				<script src='clientCode/playersearch.js'></script>
			</head>
			<body>
				
				<select name='cboPlayers'>
				<option value='0'>Choose...</option>
				<option value='C'>Catcher</option>
				<option value='1B'>First Base</option>
				<option value='2B'>Second Base</option>
				<option value='3B'>Third Base</option>
				<option value='SS'>Shortstop</option>
				<option value='OF'>Outfield</option>
				</select>
				<div><hr></div>
				<div class='playerList'></div>
			</body>
		</html>";
 
echo $doc;
?>