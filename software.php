<!DOCTYPE HTML>
<html>
<head>
  <title>Web address - Sachin Pundhir</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="software.php">&nbsp;<span class="logo_colour">Software</span></a></h1>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="index.php">Home</a></li>
          <li><a href="research.php">Research</a></li>
          <li><a href="publications.php">Publications</a></li>
          <li class="selected"><a href="software.php">Software</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div id="content">
	<p><span class="title_font">Software</span>
		<ul>
			<li><a href="http://rth.dk/resources/dba">deepBlockAlign</a>: a tool for aligning RNA-seq profiles of read processing patterns</li>
		</ul>
	</p>
      </div>
    </div>
    <?php include("footer.html"); ?>
  </div>
<!--div style="text-align: center; font-size: 0.75em;"></div-->
</body>
</html>
