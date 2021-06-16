<!DOCTYPE html>
<html>

<head>
    <title>Musikschuleflötenotto</title>
    <meta name="viewport" conent="width_device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="jquery.inview.min.js"></script>
    <script src="assets/main.js"></script>
    <link href="../index.css" type="text/css" rel="stylesheet">
    <link href="../assets/style.css" type="text/css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favoicon.png">
    <meta http-equiv="language" content="deutsch, de">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="keywords" content="Musik, Instrumente, Akkordeon, Geige, Klavier, Gitarre, Flöte, Schlagzeug, Anmeldung, Öffnungszeiten, Erwachsene, Kinder, Bildergalery">
    <meta name="description" content="Musik, Erwachsene, Kinder, Instrumente">
    <meta name="page-topic" content="Dienstleistung, Musik, Instrumente, Spaß">
    
</head>
<body> 
	<header>
	<h1><img src="../images/logo.png"></h1>
        <p id="toplink">
      <img id="hochpfeil" onclick="$('html, body').stop().animate({'scrollTop': $('header').offset().top}, 300, 'swing');" alt="Nach Oben" src="../images/Seitenanfang.png">
</p>
    </header>
     <section id="menubar">
    <ul>
        <li><a class="menubutton" href="#menu"><img src="images/menu.png"/></a></li>
        </ul>    
    </section>
    <nav>
        <ul>
            <li tabindex="0"><a onclick="return false;">Instrumente</a>
                <ul class="submenu">
                        <li><a tabindex="0" href="../instrument.html?id=akk">Akkordeon</a></li>
                        <li><a tabindex="0" href="../instrument.html?id=floete">Fl&ouml;te</a></li>
                        <li><a tabindex="0" href="../instrument.html?id=geige">Geige</a></li>
                        <li><a tabindex="0" href="../instrument.html?id=gitarre">Gitarre</a></li>
                        <li><a tabindex="0" href="../instrument.html?id=klavier">Klavier</a></li>
                        <li><a tabindex="0" href="../instrument.html?id=schlagzeug">Schlagzeug</a></li>
                    </ul>
            </li>
            <li aria-current="page"><a href="../index.php">Home</a>
            </li>
            <li tabindex="0"><a oneclick="return false;">Gesang</a>
                <ul class="submenu">
                    <li><a href="../erwachsene.php">Erwachsene</a>
                    </li>
                    <li><a href="../kinder.php">Kinder</a>
                    </li>
                </ul>
            </li>
            <li ><a id="anmeldung" href="../anmelden.php">Anmeldung</a>
            </li>
        </ul>
    </nav>
    <section id="main">
        <article>
<?php

   if ($_POST['bereich'] != "" && $_POST['bereich'] != "xx" && $_POST['inhalt'] != "")
   {
		$date = date ("d.m.Y");
        $sql= "update `seiteninhalt` set `inhalt` = '{$_POST['inhalt']}', `datum` = '{$date}' where `bereich` = '{$_POST['bereich']}';";

        $db_link=mysqli_connect ("localhost", "root", "", "datenbank");
        mysqli_select_db ($db_link, "datenbank");
        mysqli_query ($db_link, $sql);

		echo "<p>Eintrag wurde gespeichert!</p><br />";
		echo '<form id="formular" action="../Seiteninhaltbearbeiten.php" , method="post">';
			echo '<input type="submit" value="Zur&uuml;ck" />';
		echo '</form>';
   }
   else
	{
		echo "<p>Bitte alle Felder ausf&uuml;llen!</p><br />";
		echo '<input onclick="history.back()" type="button"  value="Zur&uuml;ck">';
	}	

?>
            </article>
       <aside>
            <section>
                <h2>Info's</h2>
                <p> Hier Erfahren Sie alle wichtigen Details über unsere Musikschule.</p>
            </section>
            <section>
                <h2>Öffnungszeiten</h2>
                <p> <b>Montags - Freitags</b><br/><br/>
                    08:00 - 12:00 Uhr<br/>
                    13:00 - 19:00 Uhr<br/><br/>
                    <strong>Samstag</strong><br/><br/>
                    09:00 - 12:00 Uhr</p>
            </section>
            <section>
                <h2>Bildergalerie</h2>
        <div class="responsive">
  <div class="gallery">
    <a href="instrument.html?id=gitarre">
      <img src="../images/gitarre.png" alt="Cinque Terre" width="600" height="400">
    </a>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a href="instrument.html?id=klavier">
      <img src="../images/klavier.png" alt="Forest" width="600" height="400">
    </a>    
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a href="instrument.html?id=schlagzeug">
      <img src="../images/Schlagzeug.png" alt="Northern Lights" width="600" height="400">
    </a>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a href="instrument.html?id=akk">
      <img src="../images/AKK.png" alt="Mountains" width="600" height="400">
    </a>
  </div>
</div>

<div class="clearfix"></div>
            </section>
        </aside>
    </section>
    <footer>
        <ul>
            <li>&copy; 2020 It's me* </li>
            <li><a tabindex="0" href="kontakt.html">Kontakt </li>
            <li><a tabindex="0" href="impressum.html">Impressum </li>
            <li><a tabindex="0" href="datenschutz.html"> Datenschutz </li>
            <li><a tabindex="0" href="admin.php"> Admin </li>
            
            <li>*Corona </li>
        </ul>

    </footer>
</body>
</html>