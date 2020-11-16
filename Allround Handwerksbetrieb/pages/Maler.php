<!-- Jan Werth, Christoph Riedel-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="de" xml:lang="de">
	 <head>
		  <title>Allround Handwerkbetrieb</title>
		  <meta http-equiv="content-type" content="text/plain; charset=utf-8" />
		  <meta http-equiv="content-language" content="de" />
		  <link type = "text/css" rel = "stylesheet" href = "../style.css" />
	</head>

<body bgcolor="#101010">
    
        <div id="heading">
            <h1> Allround Handwerkerbetrieb! </h1>


        </div>
        <div id="menu">
            <ul>
                <li class="topmenu">
                    <a href=""><img src="../pictures/Drei Striche.png"></a>
                    
                    <ul>
                        <li class="submenu"><a href="../index.php">Startseite</a></li>
                        <li class="submenu"><a href="Über uns.php">Über uns</a></li>
						<li class="submenu"><a href="Tätigkeiten.php">Tätigkeiten</a></li>
						<li class="submenu"><a href="FAQ.php">FAQ</a></li>
						<li class="submenu"><a href="Kontakte.php">Kontakte</a></li>
						<li class="submenu"><a href="Impressum.php">Impressum</a></li>
                    </ul>
                </li>
                
            </ul>
        </div>
        <div id="banner">
        </div>
        <div id="article">

		<?php 
			if(isset($_POST['Senden'])==0)
			{
		?>

          <center>
        <form action="" method="post">
        <h1><u>Maler</u></h1>
        <font size="5">
			<p>
				Anrede <select name="Anrede" size="1">
				<option>Herr</option>
				<option>Frau</option>
				</select>
				Vorname <input type="text" name="vorname" placeholder="Max" required>
				Nachname <input type="text" name="nachname" placeholder="Mustermann" required>
			</p>
			<p>
				Geburtstag <br/><input type="date" name="Geburtstag" required>
			</p>
			<table width="100%">
			<tr>
				<td><center><font size="5">Strasse</font></center></td>
				<td><center><font size="5">Hausnummer</font></center></td>
				<td><center><font size="5">Stadt</font></center></td>
				<td><center><font size="5">Postleitzahl</font></center></td> 
			</tr>
			<tr>
				<td><center><input type="text" name="strasse" placeholder="Musterstrasse" required></center></td>
				<td><center><input type="number" name="hausnummer" placeholder="3" required></center></td>
				<td><center><input type="text" name="stadt" placeholder="Hilden" required></center></td>
				<td><center><input type="number" name="posteitzahl" placeholder="40721" required></center></td>
			</tr>
			
			</table>
            <p> 
				Telefon <input type="number" name="telefon" required>
				E-Mail <input type="text" name="e-mail" required>
			</p>
            <p>
				<h3>Terminzeitraum</h3>
				von <input type="date" name="Termin Anfang" required>
				bis <input type="date" name="Termin Ende" required>
			</p>
            <p>
				<h3>Tätigkeit</h3>
				<textarea name="Tätigkeit" cols="50" rows="10"> 
				</textarea>
				
			<hr />
			
			<input type="submit" name="Senden" value="Anfrage abschicken!">
			<input type="reset">
			</p>

        </form>
        </font>
        </center>      
		
		<?php
			}
			else
			{
				echo"<br /><br /><center><h2> Vielen Dank, ". $_POST['Anrede'] . " " . $_POST['nachname'] . ". Wir melden uns bald bei Ihnen!</h2></center>" ;
			}  
	 
		?>
               
               


        </div>


        <div id="footer">
              <a href="Impressum.php">Impressum</a> | <a href="Kontakte.php"> Kontakt </a>
        </div>

   
</body>
</html>

