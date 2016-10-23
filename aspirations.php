<!DOCTYPE html>
<html>
<head>
	<title> David Martin's Personal Site </title>
</head>

<link rel="stylesheet" type="text/css" href="stylesheet.css">

<body>

	<div class = "header">

		<div class = "topimages">
			<img src="computer code.jpg" class="topimages__item">
			<img src="computer code.jpg" class="topimages__item">
			<img src="computer code.jpg" class="topimages__item">
			<img src="computer code.jpg" class="topimages__item">
		</div>	

	<Div class = "Topic">

		<p> <em> Aspirations </em>
		My professional goals are straightforward. I want to learn coding and make a career change. I'm hoping coding has some of the same elements that I loved about journalism: learning, writing and creativity. As someone who has never coded before, this decision is comes with a good deal of anxiety and uncertainty. After all, I am absolute beginner and not even a "digital native." I look forward to the day when I know enough to make a contribution somewhere. </p> 

	</Div>

	<div class = "navigation">	
	
			<a class = "navigation__item" <?php if ($thisPage=="Index") {echo " id=\"navigation__item--currentPage\"";} ?> href = "index.php">
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


	<div class = "navigation">


			<li> <a class="pagesList__pagesItem <?php isCurrentPage("Home", $currentPage); ?> " href="personal_site.php">
           		Home </a>          		
     		 </li>

      		<li> <a class="pagesList__pagesItem <?php isCurrentPage("Aspirations", $currentPage); ?> " href="navigation__goals.html">
          		Aspirations </a>
	      </li>


		      <li> <a class="pagesList__pagesItem <?php isCurrentPage("OddsandEnds", $currentPage); ?> " href="navigation__oddsandends.html">
          		Odds and Ends </a>
      			</li>

  		  </ul>





	<div class = "navigation__pageitem">
 	<a href = "aspirations.html"> <h1> Aspirations </h1>
	</a>
	</div>

	<div class = "navigation__oddsandends">
	<a href = "odds and ends.html"> <h1> Odds and Ends </h1>
	</a>
	</div>

</div>	

<div class = "socialmedia">
	
	<div class = socialmedia__linkedin">
	<img src="linkedin logo.png" style="width:12px;height:12px;">
	<a href = "https://www.linkedin.com/in/david-steen-martin-4061979?authType=NAME_SEARCH&authToken=SaRu&locale=en_US&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A27321990%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1475693919048%2Ctas%3ADav" <p> Linkedin </p>
	</a>
	</div>

	<div class = socialmedia__github>
	<img src="GitHub-Mark.png" style="width:18px;height:12px;">
	<a href = "https://github.com/davidmartin77" <p> GitHub </p>
	</a>
	</div>

<div class = socialmedia__twitter>	
	<img src="Twitter logo.png">
	<a href = "https://twitter.com/Stories_Live"> <p> Twitter </p>
	</a>
	</div>

</div>
</div>



</p>
</body>
</html>

