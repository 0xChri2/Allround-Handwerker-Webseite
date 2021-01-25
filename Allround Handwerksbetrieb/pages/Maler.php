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

        <form action="" method="post">
		<div class="headline"><h1><u>Maler</u></h1></div>
		<div class="form">
			<center>	
			<p>
				Anrede <select name="Anrede" size="1" value="<?php echo $_POST['Anrede'] ?>">
				<option>Herr</option>
				<option>Frau</option>
				</select>
				<br /><br />
				Vorname:<input type="text" name="vorname" placeholder="Max" value="<?php echo $_POST['vorname'] ?>"/><br /><br />
				Nachname:<input type="text" name="nachname" placeholder="Mustermann" value="<?php echo $_POST['nachname'] ?>"/><br /><br />      
				Geburtstag:<input type="date" name="Geburtstag" required value="<?php echo $_POST['Geburtstag'] ?>"/><br /><br />
				Strasse:<input type="text" name="strasse" placeholder="Musterstrasse" value="<?php echo $_POST['strasse'] ?>"/><br /><br />
				Hausnummer:<input type="number" name="hausnummer" placeholder="3" value="<?php echo $_POST['hausnummer'] ?>"/><br /><br />
				Stadt:<input type="text" name="stadt" placeholder="Hilden" value="<?php echo $_POST['stadt'] ?>"/><br /><br />
				Postleitzahl:<input type="number" name="postleitzahl" placeholder="40721" value="<?php echo $_POST['postleitzahl'] ?>"/><br /><br />
				Telefon:<input type="number" name="telefon" value="<?php echo $_POST['telefon'] ?>"/><br /><br />
				E-Mail:<input type="text" name="e-mail" value="<?php echo $_POST['e-mail'] ?>"/><br /><br />
				<h3>Wunsch Termin</h3>
				Wunschtermin:<input type="date" name="TerminW" value="<?php echo $_POST['TerminW'] ?>" required/>
				<h3>Tätigkeit</h3>
				<textarea name="Tätigkeit" cols="50" rows="10"> 
				</textarea>
				
			<hr />
			
			<input type="submit" name="Senden" value="Anfrage abschicken!">
			<input type="reset">
			</p>
			</center>
		</div>
        </form>
		
		<?php
			
			if(isset($_POST['Senden'])==true)
			{			
				
				//error message 
				$error = false;
				$fehler_nachricht=array();
			
				//vorname
				$vorname = trim($_POST['vorname']);
				if($vorname=="")
				{
				$error = true;
				$fehler_nachricht[]="Geben sie bitte ihren Vornamen ein";
				}

				//nachname
				$nachname = trim($_POST['nachname']);
				if($nachname=="")
				{
				$error = true;
				$fehler_nachricht[]="Geben sie bitte ihren Nachnamen ein";
				}

				//telefon
				$telefon = trim($_POST['telefon']);
				if($telefon=="")
				{
				$error = true;
				$fehler_nachricht[]="Geben sie bitte ihren Telefonnummer an";
				}

				//strasse
				$strasse = $_POST['strasse'];
				if($strasse=="")
				{
				$error = true;
				$fehler_nachricht[]="Geben sie bitte ihren Strassennamen an";
				}

				//hausnummer
				$hausnummer = $_POST['hausnummer'];
				if($hausnummer=="")
				{
				$error = true;
				$fehler_nachricht[]="Geben sie bitte ihren Hausnummer an";
				}

				//stadt
				$stadt = trim($_POST['stadt']);
				if($stadt=="")
				{
				$error = true;
				$fehler_nachricht[]="Geben sie bitte ihren Stadtnamen an";
				}
				
				//postleitzahl
				$postleitzahl = trim($_POST['postleitzahl']);
				if($postleitzahl=="")
				{
				$error = true;
				$fehler_nachricht[]="Geben sie bitte ihren Postleitzahl an";
				}

				//email
				$email = trim($_POST['e-mail']);
				if($email=="")
				{
				$error = true;
				$fehler_nachricht[]="Geben sie bitte ihren E-Mail ein";
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
				
				$umlaute = array('ä','Ä','ü','Ü','ö','Ö');
				for($i = 0; $i >= 5;$i++)
				{
					if(strpos($email,$umlaute[$i]))
					{
						$error = true;
						$fehler_nachricht[]="Ihre E-Mail enthält Umlaute.";
						break;
					}
					
				}

				//Wunschtermin
				$TerminW = strtotime($_POST['TerminW']);
				$Date = date("d.m.Y",$TerminW);
				$today = time();
				$todaydate = strtotime($today);
				
				//Zeit bis zum Wunschtermin
				$daysleft = (strtotime($Date)-$today)/60/60/24;
	
				//Tag des Termins 
				$dayk = array("Sonntag", "Montag", "Dienstag", "Mittwoch", "Donnerstag", "Freitag", "Samstag");
				$Termintag = date("d", strtotime(daysleft));
				$day = $dayk [date("w", $TerminW)];

				//Wuschtermin check 
				if($today > strtotime($Date))
				{
					$error = true;
					$fehler_nachricht[]="Ihr Wunschtermin ist in der Vergangenheit.";
				}

				if($day == "Sonntag")
				{
					$error = true;
					$fehler_nachricht[]="Ein Sonntag als Wunschtermin ist leider nicht möglich.";
				}
				
				//error message
				if($error == true)
				{
					echo"<center><h1>Fehlermeldung</h1></center><br/>";
				}
				foreach ($fehler_nachricht as $fehler)
				{		
					echo "<center><h2>".$fehler."</h2></center>";
				}
				
				//success message
				$anrede = $_POST['Anrede'];
				if($error == false)
				{
				echo"<br /><br /><center><h2> Vielen Dank, ". $_POST['Anrede'] . " " . $_POST['nachname'] . ". Wir melden uns bald bei Ihnen!</h4>";
				echo"<h2>Ihre Wunsch Termin ist ". $Date ."</h2></center>";
				echo"<center><h2> Zeit bis zum Termin ist: ". ceil($daysleft) ."</h2> </center>";
				echo"<center><h2> Tag des Termins: ". $day ."</h2> </center>";
				if($day == "Samstag")
				{
					echo"<center><h2>Bitte beachten Sie, dass Samstage extra kosten beinhalten.</h2></center>";
				}
				}				

			}
		
		
		?>      


        </div>


        <div id="footer">
              <a href="Impressum.php">Impressum</a> | <a href="Kontakte.php"> Kontakt </a>
        </div>

   
</body>
</html>

