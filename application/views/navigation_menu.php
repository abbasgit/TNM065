<div id="navcontainer">
	<ul id="navlist">
		<li>
			<a id="report">Report</a>
		</li>
		<li>
			<a id="profile">Profile</a>
		</li>
		<li id="logout">
			<span class="logged_in_user">Logged in as: <?php echo $username; ?></span>
			<a href="<?php echo base_url(); ?>index.php?/main_page/logout">Logout</a>
		</li>
	</ul>
</div>