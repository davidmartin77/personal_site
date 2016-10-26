<!DOCTYPE html>
<html>

<div id="navigation">
<ul> 
<li<?php if ($thisPage=="Home")
echo " id=\"currentpage\""; ?>>
<a href="index.php">Home</a>
</li<?php if ($thisPage=="Aspirations")
echo " id=\"currentpage\""; ?>>
<a href = "aspirations.php">Aspirations</a></li>
<li<?php if ($thisPage=="odds_and_ends")
echo " id=\"currentpage\""; ?>>
<a href="odds_and_ends.php">Odds and Ends</a></li>

</ul>
</div>
