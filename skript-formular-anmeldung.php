<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">

<title>Danke für Ihre Anmeldung f&uuml;r Wochenendweinseminar</title>


<link href="css/vowstyles.css" rel="stylesheet">

<style type="text/css">

body
{
	margin-left: auto;
	margin-right: auto;
	margin-top: 160px;
	background-color: #FFF;
	background-image: url(none);
	
}

</style>
</head>

<body>
<div class="container">



<?php 

$termin=$HTTP_POST_VARS['termin'];

$teilnehmerZahl=$HTTP_POST_VARS['teilnehmerZahl'];
$rahmenZahl=$HTTP_POST_VARS['rahmenZahl'];
$TN1=$HTTP_POST_VARS['TN1'];
$TN2=$HTTP_POST_VARS['TN2'];
$TN3=$HTTP_POST_VARS['TN3'];
$TN4=$HTTP_POST_VARS['TN4'];
$TN5=$HTTP_POST_VARS['TN5'];
$TN6=$HTTP_POST_VARS['TN6'];

$keinFleisch=$HTTP_POST_VARS['keinFleisch'];
$keinFisch=$HTTP_POST_VARS['keinFisch'];

$Gelbepost=$HTTP_POST_VARS['Gelbepost'];
$gutscheinstatus=$HTTP_POST_VARS['gutscheinstatus'];
$rechnungsNummer=$HTTP_POST_VARS['rechnungsNummer'];
$GutscheinBetrag=$HTTP_POST_VARS['gutscheinBetrag'];
$gutscheinAnrede=$HTTP_POST_VARS['gutscheinAnrede'];
$Gutsch_Vorn=$HTTP_POST_VARS['gutscheinVorname'];
$Gutsch_Name=$HTTP_POST_VARS['gutscheinNachname'];
$Gutsch_Termin=$HTTP_POST_VARS['gutscheinTermin'];

$Anrede=$HTTP_POST_VARS['Anrede'];
$Vorname=$HTTP_POST_VARS['vorname'];
$Name=$HTTP_POST_VARS['name'];
$Unternehmen=$HTTP_POST_VARS['Unternehmen'];
$Strasse=$HTTP_POST_VARS['Strasse'];

$Hausnummer=$HTTP_POST_VARS['Hausnummer'];
$Plz=$HTTP_POST_VARS['PLZ'];
$Wohnort=$HTTP_POST_VARS['Wohnort'];
$Land=$HTTP_POST_VARS['Land'];
$Telefonnummer=$HTTP_POST_VARS['Telefon'];
$eMail=$HTTP_POST_VARS['email'];
$Agb=$HTTP_POST_VARS['AGB'];

$Newsletter=$HTTP_POST_VARS['eNews'];

$weinbuch=$HTTP_POST_VARS['weinbuch'];

$Kommentar=$HTTP_POST_VARS['Kommentar'];

if($Agb=="OK")
{

$text="<b>Kursort: </b>";
$text.=$Kursort;
$text.="<p>";

$text.="<b>Termin: </b>";
$text.=$termin;
$text.="<br>";

$text.="<b>Versandart: </b>";
$text.=$Gelbepost;
$text.="<p>";

$text.="<b>Teilnehmerzahl: </b>";
$text.=$teilnehmerZahl;
$text.="<p>";

$text.="<b>Rahmenprogramm: </b>";
$text.=$rahmenZahl;
$text.="<p>";

$text.="<b>Teilnehmer 1: </b>";
$text.=$TN1;
$text.="<p>";

$text.="<b>Teilnehmer 2: </b>";
$text.=$TN2;
$text.="<p>";

$text.="<b>Teilnehmer 3: </b>";
$text.=$TN3;
$text.="<p>";

$text.="<b>Teilnehmer 4: </b>";
$text.=$TN4;
$text.="<p>";

$text.="<b>Teilnehmer 5: </b>";
$text.=$TN5;
$text.="<p>";

$text.="<b>Teilnehmer 6: </b>";
$text.=$TN6;
$text.="<p>";

$text.="<b>Vegetarier aber Fisch: </b>";
$text.=$keinFleisch;
$text.="<br>";

$text.="<b>Vegetarier kein Fisch und kein Fleisch: </b>";
$text.=$keinFisch;
$text.="<p>";


$text.="<b>Gutschein-Status: </b>";
$text.=$gutscheinstatus;
$text.="<br>";


$text.="<b>Rechnungsnummer gleich Gutscheinnummer: </b>";
$text.=$rechnungsNummer;
$text.="<p>";

$text.="<b>Blanco-Gutschein-Betrag: </b>";
$text.=$GutscheinBetrag;
$text.="<p>";



$text.="<b>Anrede des Beschenkten: </b>";
$text.=$gutscheinAnrede;
$text.="<br>";


$text.="<b>Vorname des Beschenkten: </b>";
$text.=$Gutsch_Vorn;
$text.="<br>";

$text.="<b>Nachname des Beschenkten: </b>";
$text.=$Gutsch_Name;
$text.="<br>";

$text.="<b>Gutschein wird benoetigt bis: </b>";
$text.=$Gutsch_Termin;
$text.="<p>";



$text.="<b>Anrede: </b>";
$text.=$Anrede;
$text.="<br>";

$text.="<b>Vorname: </b>";
$text.=$Vorname;
$text.="<br>";

$text.="<b>Name: </b>";
$text.=$Name;
$text.="<br>";

$text.="<b>Firma: </b>";
$text.=$Unternehmen;
$text.="<br>";

$text.="<b>Strasse: </b>";
$text.=$Strasse;
$text.="<br>";

$text.="<b>Hausnummer: </b>";
$text.=$Hausnummer;
$text.="<br>";

$text.="<b>Plz: </b>";
$text.=$Plz;
$text.="<br>";

$text.="<b>Wohnort: </b>";
$text.=$Wohnort;
$text.="<br>";

$text.="<b>Land: </b>";
$text.=$Land;
$text.="<br>";

$text.="<b>Telefonnummer: </b>";
$text.=$Telefonnummer;
$text.="<br>";

$text.="<b>eMail: </b>";
$text.=$eMail;
$text.="<p>";

$text.="<b>Agb: </b>";
$text.=$Agb;
$text.="<p>";

$text.="<b>eNewsletter: </b>";
$text.=$Newsletter;
$text.="<p>";


$text.="<b>Ihr Kommentar: </b>";
$text.=$Kommentar;
$text.="<p>";


echo ("<h3> Vielen Dank für Ihre Anmeldung! </h3> <br> <h4> Sie haben folgende Daten in das Formular eingegeben:</h4>");


//echo("$text");
echo("<div class=\"well\">$text</div>");


echo("<h4>Ihr Terminwunsch wird geprüft. Die Bestätigung erhalten Sie in der Regel innerhalb von 3 Tagen.<br> Die Unterlagen (Memo oder Gutschein und die Rechnung) erhalten Sie, entsprechend der gewählten Option, per eMail oder als Brief mit der Gelben Post.</h4>");

echo ("<a href='index.html'> Zurück zur Startseite </a>");

$Mailtext.="Kursort: ";
$Mailtext.="$Kursort\r\n\r\n";

$Mailtext.="Termin: ";
$Mailtext.="$termin\r\n";

$Mailtext.="Termin Leipheim: ";
$Mailtext.="$terminLeipheim\r\n";

$Mailtext.="Tertmin Freiberg: ";
$Mailtext.="$terminFreiberg\r\n";

$Mailtext.="Termin Rothenburg: ";
$Mailtext.="$terminRothenburg\r\n";

$Mailtext.="Termin Brixen: ";
$Mailtext.="$terminBrixen\r\n";

$Mailtext.="Termin Rothenburg Premium: ";
$Mailtext.="$terminRothenburgPremium\r\n";

$Mailtext.="Termin Trier : ";
$Mailtext.="$terminTrier\r\n";

$Mailtext.="Termin Trier Premium: ";
$Mailtext.="$terminTrierPremium\r\n";

$Mailtext.="Termin Bad Neuenahr Premium: ";
$Mailtext.="$terminBadneuenahrPremium\r\n\r\n";

$Mailtext.="Versamdart: ";
$Mailtext.="$Gelbepost\r\n";

$Mailtext.="Teilnehmerzahl: ";
$Mailtext.="$teilnehmerZahl\r\n";

$Mailtext.="Anzahl Rahmenprogramm: ";
$Mailtext.="$rahmenZahl\r\n";

$Mailtext.="TN1: ";
$Mailtext.="$TN1\r\n";

$Mailtext.="TN2: ";
$Mailtext.="$TN2\r\n";

$Mailtext.="TN3: ";
$Mailtext.="$TN3\r\n";

$Mailtext.="TN4: ";
$Mailtext.="$TN4\r\n";

$Mailtext.="TN5: ";
$Mailtext.="$TN5\r\n";

$Mailtext.="TN6: ";
$Mailtext.="$TN6\r\n";

$Mailtext.="Kein Fleisch: ";
$Mailtext.="$keinFleisch\r\n";

$Mailtext.="Kein Fleisch und Fisch: ";
$Mailtext.="$keinFisch\r\n\r\n";


$Mailtext.="Gutschein-Status: ";
$Mailtext.="$gutscheinstatus\r\n";


$Mailtext.="Verrechnen: ";
$Mailtext.="$Verrechnen\r\n";

$Mailtext.="Rechnungsmummer: ";
$Mailtext.="$rechnungsNummer\r\n";

$Mailtext.="Blanco-Gutschein-Betrag: ";
$Mailtext.="$GutscheinBetrag\r\n";



$Mailtext.="Anrede des Gutscheinbesitzers: ";
$Mailtext.="$gutscheinAnrede\r\n";

$Mailtext.="Gutsch_Vorn: ";
$Mailtext.="$Gutsch_Vorn\r\n";

$Mailtext.="Gutsch_Name: ";
$Mailtext.="$Gutsch_Name\r\n";

$Mailtext.="Gutsch_Termin: ";
$Mailtext.="$Gutsch_Termin\r\n\r\n";




$Mailtext.="Anrede: ";
$Mailtext.="$Anrede\r\n";

$Mailtext.="Vorname: ";
$Mailtext.="$Vorname\r\n";

$Mailtext.="Name: ";
$Mailtext.="$Name\r\n";


$Mailtext.="Firma: ";
$Mailtext.="$Unternehmen\r\n";

$Mailtext.="Strasse: ";
$Mailtext.="$Strasse\r\n";

$Mailtext.="Hausnummer: ";
$Mailtext.="$Hausnummer\r\n";

$Mailtext.="Plz: ";
$Mailtext.="$Plz\r\n";

$Mailtext.="Wohnort: ";
$Mailtext.="$Wohnort\r\n";

$Mailtext.="Land: ";
$Mailtext.="$Land\r\n";

$Mailtext.="Telefonnummer: ";
$Mailtext.="$Telefonnummer\r\n";

$Mailtext.="eMail: ";
$Mailtext.="$eMail\r\n\r\n";




$Mailtext.="Agb: ";
$Mailtext.="$Agb\r\n";

$Mailtext.="Newsletter: ";
$Mailtext.="$Newsletter\r\n";

$Mailtext.="Weinbuch bestellen: ";
$Mailtext.="$weinbuch\r\n";



$Mailtext.="Kommentar: ";
$Mailtext.="$Kommentar\r\n";


$Absender="From:";
$Absender.=$eMail;


mail("kollmann@voice-of-wine.com", "Anmeldung fuer $termin", $Mailtext, $Absender);

}

else {
echo ("<h3>Bitte AGB im Formular akzeptieren!</h3><br> <p> HINWEIS: Wenn Sie statt des Links unten Ihren Browser zum Zurücknavigieren benutzen, bleiben die eingegebenen Daten wahrscheinlich erhalten.</p>");
echo ("<a href='store_weinseminar#formular.html'> Zurück zum Formular </a>");

}

?>



</div>
</body>
</html>
