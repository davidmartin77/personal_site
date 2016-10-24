<?php
	$thisPage="odds_and_ends";

// 	function iscurrentpage ($pagename, $currentpage) {

// 		if ($pagename == $currentpage) {
// 			echo "pageslist__pagesitem--current page";
// 	}
// }

?>


<!DOCTYPE html>
<html>

<link rel="stylesheet" type="text/css" href="stylesheet.css">

<body> 

<div class = "header">

	<div = topimages>

		<img src="santorini.jpg" class="topimages__item">

		<img src="santorini.jpg" class="topimages__item">
	
	</div>	

	<div class = "Topic">	
		
		<p> <em> Odds and Ends </em> When my wife, Ginny, and I have the time and the resources, we love to <em> travel </em>. We'd much rather travel than buy something, hence our old cars and the dearth of furniture in our house in Lincoln. Together, we've been to Africa, much of Western Europe and to Mexico and Costa Rica in Central America. I've also been lucky enough to go to some interesting international destinations for work, including Russia, Cuba, Colombia and Norway. Work has taken me to all 50 states as well, including some unusual places. One example: I've been to death row in three states. I've also had a chance to meet fascinating and inspiring people, some of the famous, most unknown folks living courageous lives. I love hearing people's stories so much I organize a twice-a-year storytelling event in Lincoln called <em> True Stories - Live!</em> </p>
	
	</div>		
 
 </div>

<div class = "navigation">	
	
			<a class = "navigation__item" <?php if ($thisPage=="odds_and_ends") {echo " id=\"navigation__item--currentPage\"";} ?> href = "index.php">
				Home
			</a>

		<div class = "navigation__item">
			<a href = "aspirations.php">
				<h1> Aspirations </h1>
			</a>
		</div>
		
		<div class = "navigation__item">
			<a href = "odds_and_ends.php">
				<h1> Odds and Ends </h1>
			</a>
		</div>

	</div>

	

</body>
</html>
