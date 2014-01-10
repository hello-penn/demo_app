<?php include 'header.php'; ?>
<div data-role="page" id="new">
<h1 aria-level="1" role="heading" class="ui-title">MindStorm</h1>		
		<div role="navigation" class="ui-navbar ui-mini" data-role="navbar">
			<ul class="ui-grid-a">
				<li class="ui-block-a"><a class="ui-btn ui-btn-up-a ui-btn-inline" data-inline="true" data-theme="a" data-wrapperels="span" data-iconshadow="true" data-shadow="false" data-corners="false" href="#idea_list"><span class="ui-btn-inner"><span class="ui-btn-text">Idea List</span></span></a></li>
				<li class="ui-block-b"><a class="ui-btn ui-btn-inline ui-btn-up-a" data-inline="true" data-theme="a" data-wrapperels="span" data-iconshadow="true" data-shadow="false" data-corners="false" href="#new"><span class="ui-btn-inner"><span class="ui-btn-text">New Idea</span></span></a></li>
			</ul>
		</div>
<div data-role="content">
<h2>PHP Form Validation Example</h2>
<form method="post" action="insert.php">
   Idea Name: <input type="text" name="ideaname">
   <br><br>
   Description: <textarea name="description" rows="5" cols="40"></textarea>
   <br><br>
   <input type="submit" name="submit" value="Submit">
</form>
</div>div>
</body>
</html>
