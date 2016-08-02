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
          <h1><a href="research.php">&nbsp;<span class="logo_colour">Research</span></a></h1>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="index.php">Home</a></li>
          <li class="selected"><a href="research.php">Research</a></li>
          <li><a href="publications.php">Publications</a></li>
          <li><a href="software.php">Software</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div id="content">
	<p><span class="title_font">Scientific interest</span><br>
	Application of high-throughput sequencing data in the annotation of non-coding RNAs.</p>
	<p><span class="title_font">Motivation</span><br>
	Rapid accumulation of high-throughput sequencing data provide a challenge as well as an opportunity to better understand an 
	organsim genome at the transcriptomic level. This includes understanding the dynamics of expression and role of each expressed
	genomic loci in defining the genotype and phenotype of an Organism. The untranslated part of the transcriptome termed as non-coding
	RNAs (ncRNAs) is gaining more and more importance for its role in regulation of various regulatory networks.</p>
	<p>Given that almost whole genome of an organism is transcribed, a major challenge is to filter out the information from the noise.
	The information can be in the form of understanding the change in expression at different physiological conditions, alternative splicing and
	various read processing machineries.</p>
	<p><span class="title_font">Projects</span><br>
	<ul>
		<li><span class="sub_font">Current</span>: comparative study of read-processing patterns across various RNA-seq datasets from Human. This would help in
	the identification and classification of novel and well-defined read processing patterns/pathways.</li>
		<li><span class="sub_font">Earlier</span>: development of an algorithm to align RNA-seq read patterns to quickly identify RNAs that share similar read processing
footprints. An implementation of this algorithm is available in the form of a program named <a href="http://rth.dk/resources/dba">deepBlockAlign</a>.</p>
	</ul>
	<!--img src="img/uc.gif" border="0"><br>Under Construction-->
      </div>
    </div>
    <?php include("footer.html"); ?>
  </div>
<!--div style="text-align: center; font-size: 0.75em;"></div-->
</body>
</html>
