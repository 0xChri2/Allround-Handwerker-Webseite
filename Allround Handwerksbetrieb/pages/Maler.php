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
			//if(isset($_POST['Senden'])==0)
			//{
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
				Vorname <input type="text" name="vorname" placeholder="Max" >
				Nachname <input type="text" name="nachname" placeholder="Mustermann" >
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
				<td><center><input type="text" name="strasse" placeholder="Musterstrasse" ></center></td>
				<td><center><input type="number" name="hausnummer" placeholder="3" ></center></td>
				<td><center><input type="text" name="stadt" placeholder="Hilden" ></center></td>
				<td><center><input type="number" name="posteitzahl" placeholder="40721" ></center></td>
			</tr>
			
			</table>
            <p> 
				Telefon <input type="number" name="telefon" >
				E-Mail <input type="text" name="e-mail" >
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
			
			if(isset($_POST['Senden'])==true)
			{	
				$anrede = $_POST['Anrede'];
				$vorname = $_POST['vorname'];
				$nachname = $_POST['nachname'];
				$email = $_POST['e-mail'];
				$telefon = $_POST['telefon'];
				$strasse = $_POST['strasse'];
				$hausnummer = $_POST['hausnummer'];
				$stadt = $_POST['stadt'];
				$postleitzahl = $_POST['posteitzahl'];
				$error = false;
				$fehler_nachricht=array();
				$umlaute = array('ä','Ä','ü','Ü','ö','Ö');

				if($vorname=="")
				{
				$error = true;
				$fehler_nachricht[]="Geben sie bitte ihren Vornamen ein";
				}
				if($nachname=="")
				{
				$error = true;
				$fehler_nachricht[]="Geben sie bitte ihren Nachnamen ein";
				}
				if($email=="")
				{
				$error = true;
				$fehler_nachricht[]="Geben sie bitte ihren E-Mail ein";
				}
				if($telefon=="")
				{
				$error = true;
				$fehler_nachricht[]="Geben sie bitte ihren Telefonnummer an";
				}
				if($strasse=="")
				{
				$error = true;
				$fehler_nachricht[]="Geben sie bitte ihren Strassennamen an";
				}
				if($hausnummer=="")
				{
				$error = true;
				$fehler_nachricht[]="Geben sie bitte ihren Hausnummer an";
				}
				if($stadt=="")
				{
				$error = true;
				$fehler_nachricht[]="Geben sie bitte ihren Stadtnamen an";
				}
				if($postleitzahl=="")
				{
				$error = true;
				$fehler_nachricht[]="Geben sie bitte ihren Postleitzahl an";
				}
				if(strpos($email, "@")== false)
				{
					$error = true;
					$fehler_nachricht[]="Ihre E-Mail Adresse enthält kein @ Zeichen oder es steht am Anfang. ";
				}
				if((strpos($email, "@")) != (strrpos($email, "@")))
				{
					$error = true;
					$fehler_nachricht[]="Ihre E-Mail Adresse enthält zu viele @ Zeichen. ";
				}
				if((strpos($email, "."))== false)
				{
					$error = true;
					$fehler_nachricht[]="Ihre E-Mail Adresse enthält kein Punkt oder er steht am Anfang. ";
				}
				if((strpos($email, " "))== true)
				{
					$error = true;
					$fehler_nachricht[]="Ihre E-Mail Adresse enthält ein Leerzeichen. ";
				}
				if(substr($email, -1,1)==".")
				{
					$error = true;
					$fehler_nachricht[]="Ihre E-Mail Adresse enthält einen Punkt am Ende. ";
				}
				if(substr($email, -1,1)=="@")
				{
					$error = true;
					$fehler_nachricht[]="Ihre E-Mail Adresse enthält einen @ am Ende. ";
				}
				if(strlen($email) < "6") 
				{
					$error = true;
					$fehler_nachricht[]="Ihre E-Mail Adresse ist zu kurz. ";
				}
				if(strlen($email) > "320") 
				{
					$error = true;
					$fehler_nachricht[]="Ihre E-Mail Adresse ist zu lang. ";
				}
				if((strrpos($email, "."))<(strrpos($email, "@")))
				{
					$error = true;
					$fehler_nachricht[]="Ihre letzter Punkt ist nicht an der Richtigen stelle.";
				}
				
				for($i = 0; $i >= 5;$i++)
				{
					if(strpos($email,$umlaute[$i]))
					{
						$error = true;
						$fehler_nachricht[]="Ihre E-Mail enthält Umlaute.";
						break;
					}
					
				}
				if($error == true)
				{
					echo"<center><h1>Fehlermeldung</h1></center><br/>";
				}
				foreach ($fehler_nachricht as $fehler)
				{		
					echo "<center><h2>".$fehler."</h2></center>";
				}
			
				if($error == false)
				{
				echo"<br /><br /><center><h2> Vielen Dank, ". $_POST['Anrede'] . " " . $_POST['nachname'] . ". Wir melden uns bald bei Ihnen!</h2></center>" ;
				}
			}
			
		?>
               
               


        </div>


        <div id="footer">
              <a href="Impressum.php">Impressum</a> | <a href="Kontakte.php"> Kontakt </a>
        </div>

   
</body>
</html>

