<!DOCTYPE html>
<html>

<div id="navigation">
<ul> 

<li<?php if ($thisPage=="Home")
echo " id=\"currentpage\""; ?>>
<a href="index.php">HOME</a></li>

<li<?php if ($thisPage=="Aspirations")
echo " id=\"currentpage\""; ?>>
<a href="aspirations.php">ASPIRATIONS</a></li>

<li<?php if ($thisPage=="odds_and_ends")
echo " id=\"currentpage\""; ?>>
<a href="odds_and_ends.php">ODDS AND ENDS</a></li>

</ul>
</div>
</html>
