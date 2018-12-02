<style>
	*{
		margin:0;
		padding:0;
		border:0;
		font-family: sans-serif;
	}

	header {
		text-align: center:
		background: #333;
		padding: 20px 0;
	  margin-left: 10px;
	}

	nav ul li{
		display:inline;
	}

	nav a{
		text-decoration: none;
		color:white;
		background: #f2e0d9;
		padding: 5px;
	}
	nav a:hover{
	  background-color: #ba9f95;
	  color:#333333;
	}
</style>

<header>
  <nav>
    <ul>
      <li><a href=“about.html”>About Us</a></li>
      <li><a href=“experience.html”>Experience</a></li>
      <li><a href=“index.html”>Home</a></li>
      <li><a href=“portfolio.html”>Portfolio</a></li>
      <li><a href=“contact.html”>Contact</a></li>
  </nav>
</header>

<div class="container">
	<h1>Missing fields</h1>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
		}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>
