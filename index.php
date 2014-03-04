<?php

$goals = array(
	array("Lose 47 pounds", 0, 47),
	array("Read 24 books", 0, 24),
	array("Grow PixelBit*", 0, 100),
	array("Learn Portuguese, Rosetta Stone level 1", 0, 100),
	array("Complete 5 home improvement projects", 0, 5),
	array("Improve my firearm proficiency. Visit range at least 24 times.", 0, 24),
	array("Ride 1500 miles during the 2014 riding season.", 0, 1500),
	array("Cook 24 healthy and new meals", 0, 24),
);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>2014 Goals List :: Matthew Keefe</title>
<style type="text/css">
body { font: 14px Helvetica, Arial, sans-serif; color: #333; background-color: #eeeeee; margin-top: 10px; line-height: 1.5; }
h2 { color: #2b8236; font-size: 180%; }
a:link, a:visited { padding: 1px; color: #2b8236; text-decoration: none; }
a:hover, a:active { color: #ffffff; background-color: #2b8236; text-decoration: none; }
#wrapper { margin: 0 auto; width: 700px; background-color: #ffffff; border: 1px solid #cccccc; -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; }
#inner-wrapper { padding: 15px; padding-top: 0px; }
#footer { margin: 0 auto; width: 700px; color: #bdb9b9; }
#inner-footer { padding: 5px; }
#inner-footer a:link, #inner-footer a:visited { padding: 1px; color: #bdb9b9; text-decoration: none; }
#inner-footer a:hover, #inner-footer a:active { color: #0069a8; background-color: transparent; text-decoration: none; }
hr { border: 0; border-bottom: 1px solid #ccc; }
ul { margin-left: 0; padding-left: 0; }
li { list-style-type: none; margin-left: 0; }
.item-wrap { position: relative; background-color: #ffffff; border: 1px solid #86b08b; margin-bottom: 10px; -webkit-border-radius: 5px; -moz-border-radius: 5px;  border-radius: 5px; }
.item-wrap, .item-value, .item-text { width: 600px; height: 28px; }
.item-progress { background-color: #b2e7b4; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; }
.item-text { position: absolute; top:0; left:0; padding-top: 4px; padding-left: 10px; color: #2b8236; text-align: left; width: 100%; }x
</style>
</head>
<body>

<div id="wrapper">
	<div id="inner-wrapper">
		<h2>2014 Goals List</h2>
		<p>Below is a list of goals i'd like to accomplish this year. Some are for professional development and others are personal. I will continue to update this site as the year progresses. I am not making this public to brag or say "look at me" but rather taking advantage of public accountability.</p>
		
		<?php
		
		foreach($goals as $goal) {
			$goal_percent = round(($goal[1] / $goal[2]) * 100);
			
			// Check for premature goal completion
			if($goal_percent && ($goal[1] > $goal[2])) {
				$goal_percent = 99;
			}
			
			$goal_width = $goal_percent;
			
			?>
			<div class="item-wrap">
				<div class="item-value item-progress" style="width:<?=$goal_percent?>%;">
					<div class="item-text"><?=$goal[0]?> <small>(<?=$goal_percent?>% completed)</small></div>
				</div>
			</div>
			<?			
		}
				
		?>
		
		<p>
			<small style="color:#999;">* I realize this one has no public metric to track, however one does exist! :)</small>
		</p>
		
		<hr />
		<p>You can follow <a href="http://twitter.com/mkeefe">@mkeefe</a> on Twitter.</p>	
	</div>
</div>

<div id="footer">
	<div id="inner-footer">
		<p>&copy;&nbsp;2014 <a href="http://mkeefe.com/">Matthew Keefe</a> All Rights Reserved.</p>
	</div>
</div>

</body>
</html>