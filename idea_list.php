<script> $('#ideas').listview('refresh'); </script>
<div data-role="page" id="idea_list">
<!-- displays a list of current ideas -->

		<div aria-level="1" data-role="header" class="ui-title"><h1>MindStorm</h1>		
		<div role="navigation" class="ui-navbar ui-mini" data-role="navbar">
			<ul class="ui-grid-a">
				<li class="ui-block-a"><a class="ui-btn ui-btn-up-a ui-btn-inline" data-inline="true" data-theme="a" data-wrapperels="span" data-iconshadow="true" data-shadow="false" data-corners="false" href="#idea_list"><span class="ui-btn-inner"><span class="ui-btn-text">Idea List</span></span></a></li>
				<li class="ui-block-b"><a class="ui-btn ui-btn-inline ui-btn-up-a" data-inline="true" data-theme="a" data-wrapperels="span" data-iconshadow="true" data-shadow="false" data-corners="false" href="#new"><span class="ui-btn-inner"><span class="ui-btn-text">New Idea</span></span></a></li>
			</ul>
		</div>
		</div><!-- /navbar -->
<div data-role="content">
<?php
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql = "select name from ideas";
$result = mysqli_query($mysql_link,$sql);
echo "<ul data-role='listview' id='ideas'>";
while($row = mysqli_fetch_array($result))
  {
  echo "<li>";
  echo $row[0];
  echo "</li>";
  }
echo "</ul>";
?>
</div>
</div>
