<?php session_start();  ?> <!-- Starte die Session -->

<!DOCTYPE html>
<html lang="de"></html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
 
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Odor+Mean+Chey&display=swap" rel="stylesheet">
 
  <title>Dokument</title>
 
  <link rel="stylesheet" href="../Konfigurationen/style2.css"> <!-- Externe CSS-Datei -->
 
</head>
 
<body>
<header>
    <span id="upperheader">
    <a href="../HTML Dateien/index.html"><img src="../Images/logo.svg" id="logo"></a> <!-- Logo-Bild -->
    <form id="searchbar" action="buecher.php" method='post'>
      <input type="text" name="search" id="searchbox" placeholder="Titel, Autor*in, Stichwort, ISBN"> <!-- Sucheingabefeld -->
      <input type="image" src="../Images/search.svg" id="searchlogo" width="37px" value='suchen'> <!-- Suchsymbol -->
</form>
    <span id="options">
      <span id="optionimages">
    <img src="../Images/building.svg" width="50px" class="optionimage"> <!-- Optionales Bild -->
    <img src="../Images/telephone.svg" width="50px" class="optionimage"> <!-- Optionales Bild -->
    <img src="../Images/person.svg" width="50px" class="optionimage"> <!-- Optionales Bild -->
    </span>
    <span id="optiontexts">
     <h2 class="optiontext">Über Uns</h2> <!-- Optionstext -->
      <h2 class="optiontext">Kontakt</h2> <!-- Optionstext -->
      <h2 class="optiontext">Konto</h2> <!-- Optionstext -->
    </span>
  </span>
  </span>
  <span id="lowerheader">
<h2 class="navelements"><a href="../HTML Dateien/buecher.php" class="navelements">Bücher</a></h2> <!-- Navigationslink -->
<h2 class="navelements"><a href="" class="navelements">E-Books</a></h2> <!-- Navigationslink -->
  </span>
  </header>
 
    <!-- Hauptbereich der Bücherseite -->
  <main>
        <!-- Abschnitt zum Sortieren der Seite mit Logo und Text -->
        <div id="sortieren">
            <span id="sortierabschnitt">
                <button id="sortierknopf"><img src="../Images/sort.png" id="sortierlogo" width="40px"></button>
                <h1 id="sortiertext">Alle Antiquariat-Bücher</h1>
            </span>
            <!-- Formular zum Auswählen von Sortier- und Filterkriterien -->
            <form action="buecher.php" method="post" id="subcontent">
                <!-- Sortierabschnitt -->
                <div>
                    <h2>Name</h2>
                    <label for="NA-Z">A-Z</label>
                    <input type="radio" name="sort" id="NA-Z" class="sortierinputs" value="order by kurztitle ASC">
                    <br>
                    <label for="NZ-A">Z-A</label>
                    <input type="radio" name="sort" id="NZ-A" class="sortierinputs" value="order by kurztitle DESC">
                    <br><br>
                    <h2>Nummer</h2>
                    <label for="aufsteigend">aufsteigend</label>
                    <input type="radio" name="sort" id="aufsteigend" class="sortierinputs" value="order by nummer ASC">
                    <br>
                    <label for="absteigend">absteigend&nbsp;</label>
                    <input type="radio" name="sort" id="absteigend" class="sortierinputs" value="order by nummer DESC">
                    <br><br>
                    <h2>Autor</h2>
                    <label for="AA-Z">A-Z</label>
                    <input type="radio" name="sort" id="AA-Z" class="sortierinputs" value="order by autor ASC">
                    <br>
                    <label for="AZ-A">Z-A</label>
                    <input type="radio" name="sort" id="AZ-A" class="sortierinputs" value="order by autor DESC">
                </div>
               
                <!-- Filterabschnitt -->
                <div>
                    <h2>Katalog</h2>
                    <label for="fkatalog">Katalog</label>
                    <select name="fkatalog" id="fkatalog" class="filtrierbox" onchange="this.form.submit()">
                        <option value=""></option>
                        <option value="">10</option>
                        <option value="">11</option>
                    </select>
                    <br><br><br>
                    <h2>Kategorie</h2>
                    <label for="fkategorie">Kategorie</label>
                    <select name="fkategorie" id="fkategorie" class="filtrierbox" onchange="this.form.submit()">
                        <option value=""></option>
                        <option value="">Bibeln, Klassische Autoren in den Originalsprachen</option>
                        <option value="">Geographie und Reisen</option>
                        <option value="">Geschichtswissenschaften</option>
                        <option value="">Naturwissenschaften</option>
                        <option value="">Kinderbücher</option>
                        <option value="">Moderne Literatur und Kunst</option>
                        <option value="">Moderne Kunst und Künstlergraphik</option>
                        <option value="">Kunstwissenschaften</option>
                        <option value="">Architektur</option>
                        <option value="">Technik</option>
                        <option value="">Naturwissenschaften - Medizin</option>
                        <option value="">Ozeanien</option>
                        <option value="">Afrika</option>
                    </select>
                    <br><br><br>
                    <h2>Autor</h2>
                    <label for="fzustand">Zustand</label>
                    <select name="fzustand" id="fzustand" class="filtrierbox">
                        <option value=""></option>
                        <option value="">Schlecht</option>
                        <option value="">Mittel</option>
                        <option value="">Gut</option>
                    </select>
                    <br><br>
                    <input type="reset" value="Zurücksetzen">
                    <input type="submit" name="sortsubmit" id="submit" value="Senden">
                </div>
            </form>
        </div>
        <!-- Eigenschaften und Überkategorien der Bücher -->
        <!-- Erster Abschnitt für das Bild -->
        <span id="bucheigenschaften">
            <p>Bücher</p>
            <!-- Zweiter Abschnitt für die anderen schriftlichen Eigenschaften (keine Bilder) -->
            <span id="bucheigenschaften2">
                <p>Name</p>
                <p>Kategorie</p>
                <p>Katalog</p>
                <p>Autor</p>
                <p>Nummer</p>
                <p>Zustand</p>
            </span>
        </span>
        <!-- Abschnitt mit der Bücherliste (Datenbank mit PHP auslesen) -->
        <span id="bücherliste">
       
           <?php
           
            // Verbindung zur Datenbank herstellen.
            $pdo = new PDO('mysql:host=localhost;dbname=book;charset=utf8', 'root', '');
 
            // Datensätze pro Seite  
            $DatensaetzePseite = 12;
 
            if (isset($_POST['search'])) {
              $_SESSION["suche"] = $_POST["search"];
           
           
            if($_SESSION['suche']!=""){
              $search = "'%".trim($_SESSION["suche"])."%'";
            }
              if (isset($_POST["sortsubmit"]) && isset($_POST["sort"])){
                $_SESSION["sortieren"]=$_POST["sort"];
              } elseif (isset($_POST["sortsubmit"]) && !isset($_POST["sort"])){
               $_SESSION = null;
              }
             
 
                if(isset($_SESSION['sortieren'])){
                $sort = $_SESSION["sortieren"];
               
               
                $select = $pdo->prepare("SELECT  * FROM buecher, kategorien, zustaende
                where kategorien.id = buecher.kategorie
                and zustaende.zustand = buecher.zustand
                and  (buecher.kurztitle like $search
                or buecher.autor like $search
                or buecher.title like $search)
                $sort
                LIMIT :offset, :dseite");
             
              } else {
               
                $select = $pdo->prepare("SELECT  * FROM buecher, kategorien, zustaende
                where kategorien.id = buecher.kategorie
                and zustaende.zustand = buecher.zustand
                and  (buecher.kurztitle like $search
                or buecher.autor like $search
                or buecher.title like $search)
     
                                          LIMIT :offset, :dseite");
              }
                 
            // Anzahl der Datensätze ermitteln  
            $AnzahlDatensaetze = $pdo->query("SELECT COUNT(*) FROM buecher, kategorien, zustaende
            where kategorien.id = buecher.kategorie
            and zustaende.zustand = buecher.zustand
            and  (buecher.kurztitle like $search
            or buecher.autor like $search
            or buecher.title like $search)")->fetchColumn(0);
     
            // Die Anzahl der Seiten ermitteln  
            $AnzahlSeiten = ceil($AnzahlDatensaetze / $DatensaetzePseite);
                  } else {
                   
                    if (isset($_POST["sortsubmit"]) && isset($_POST["sort"])){
                      $_SESSION["sortieren"]=$_POST["sort"];
                    } elseif (isset($_POST["sortsubmit"]) && !isset($_POST["sort"])){
                      $_SESSION = null;
                     }
                      if(isset($_SESSION['sortieren'])){
                      $sort = $_SESSION["sortieren"];
                     
                     
                $select = $pdo->prepare("SELECT * FROM buecher, kategorien, zustaende
            where kategorien.id = buecher.kategorie
            and zustaende.zustand = buecher.zustand
            $sort
                                      LIMIT :offset, :dseite");
                      } else {  $select = $pdo->prepare("SELECT * FROM buecher, kategorien, zustaende
                        where kategorien.id = buecher.kategorie
                        and zustaende.zustand = buecher.zustand
                                                  LIMIT :offset, :dseite");}
                       
 
             // Anzahl der Datensätze ermitteln  
            $AnzahlDatensaetze = $pdo->query("SELECT count(*) FROM buecher, kategorien, zustaende
            where kategorien.id = buecher.kategorie
            and zustaende.zustand = buecher.zustand")->fetchColumn(0);
   
            // Die Anzahl der Seiten ermitteln  
            $AnzahlSeiten = ceil($AnzahlDatensaetze / $DatensaetzePseite);
                }
               
            // Die aktuelle Seite ermitteln ?? Operator zum Erkennen ob es eine Seite gibt
            $AktuelleSeite = ($_GET["seite"] ?? 1);
 
             // Wert prüfen ob es eine Zahl ist, falls ja, dann Wert behalten, sonst den Wert 1 setzen
             $AktuelleSeite = ctype_digit((string) $AktuelleSeite) ? $AktuelleSeite : 1;
 
             // Den Versatz ermitteln (Offset, was übersprungen wird)
             $offset = $AktuelleSeite * $DatensaetzePseite - $DatensaetzePseite;
           
            /*Selectausgabe vorbereiten mit den benötigten Tabellen und where Klausen, um Kartesisches Produkt zu
            verhindern Limit mit Versatz und den Datensätze pro Seite, um das Blättern zu ermöglichen und nur
            12 Bücher pro Seite anzuzeigen
            $sql = "SELECT b.id AS book_id, b.*, z.*, k.*
        FROM buecher b
        LEFT JOIN zustaende z ON b.zustand = z.zustand
        LEFT JOIN kategorien k ON b.kategorie = k.id
        WHERE (b.kurztitle LIKE :search
               OR b.autor LIKE :search
               OR b.title LIKE :search)
               AND b.katalog LIKE :Katalog
               AND b.zustand LIKE :Zustand
               AND b.kategorie LIKE :Genre
        ORDER BY " . $filter['Sortieren'] . "
        LIMIT 18
        OFFSET :offset";*/
       
     
           
           
           
            // Prüfen ob aktuelle Seite kleiner als 1 ist oder größer als die Anzahl der Seiten, wenn ja, dann Wert 1 geben, sonst Wert behalten
            $AktuelleSeite = $AktuelleSeite < 1 || $AktuelleSeite > $AnzahlSeiten ? 1 : $AktuelleSeite;
 
           
 
            // Bindvalue, um eine Variable innerhalb einer Variable zu übergeben, mit dem Parameter Int, der oben verwendet wird
            $select->bindValue(':offset', $offset, PDO::PARAM_INT);
            $select->bindValue(':dseite', $DatensaetzePseite, PDO::PARAM_INT);
 
            // Ausgabe der betroffenen Zeilen
            $select->execute();
           
            // Speichern der Zeilen in einem Array (Fetch all, um alle zu nehmen, und FETCH_OBJ, um sie als Objekt zu holen)
            $buchdaten = $select->fetchAll(PDO::FETCH_OBJ);
 
           
            // Ausgabe der Daten
            echo "<div id='anzeigeBücher'>";
            // Für jede Buchdaten soll jeder Datensatz in buchdatensatz gespeichert werden
            foreach ($buchdaten as $buchdatensatz) {
                // Eigenes Div für das Design
                echo "<div class='buch'>";
                // Zuerst für jedes Buch das Buchlogo
                echo "<img src='../Images/book.png' width=130px id='buchlogo'>";
                // Ausgabe der einzelnen Spalten (Kurztitle, Kategorie, Katalog...)
                // Ermöglicht durch das Speichern als Objekt (->, um auf Attribute eines Objekts zuzugreifen (Methoden und Variablen))
                echo "<p class=buchtitel>" . $buchdatensatz->kurztitle . "</p>";
                echo "<p class='kategorie'>" . $buchdatensatz->kategorie . "</p>";
                echo "<p class='katalog'>" . $buchdatensatz->katalog . "</p>";
                echo "<p class='autor'>" . $buchdatensatz->autor . "</p>";
                echo "<p class='nummer'>" . $buchdatensatz->nummer . "</p>";
                echo "<p class='zustand'>" . $buchdatensatz->beschreibung . "</p>";
                echo "</div>";
               
            }
 
            echo "</div>";
 
 
 
// Bestehendes Pagination-Formular, das bereits in deinem Code vorhanden ist
echo '<form method="GET" autocomplete="off">';

// Start des Pagination-Wrappers
echo '<div id="pagination-wrapper">';

// "Zurück"-Button
echo (($AktuelleSeite - 1) > 0) ?
     '<a class="page-nav" href="?seite='.($AktuelleSeite - 1).'">Zurück</a>' :
     '<span class="page-nav disabled">Zurück</span>';

     echo ($AktuelleSeite != 1) ?
     '<a class="page-box first-page" href="?seite=1">1</a>' : // Wenn nicht auf Seite 1, zeige Link zur ersten Seite
     '<span class="page-box current first-page">-</span>'; // Wenn auf Seite 1, zeige einen Bindestrich

// Zweites Quadrat für die aktuelle Seite
echo '<span class="page-box current">'.$AktuelleSeite.'</span>';

// Drittes Quadrat als Button für die gewünschte Seitenzahl
echo '<button type="button" id="custom-page">...</button>';

// Verstecktes Eingabefeld innerhalb eines Modal-Popups
echo '<div id="custom-page-modal" class="modal">' .
     '<div class="modal-content">' .
     '<span class="close">&times;</span>' .
     '<form method="GET" autocomplete="off">' .
     '<label for="seite"></label>' .
     '<input type="number" id="seite" name="seite" min="1" max="'.$AnzahlSeiten.'" placeholder="1-271" required>' .
     '</form>' .
     '</div>' .
     '</div>';

  

// "Weiter"-Button
echo (($AktuelleSeite + 1) <= $AnzahlSeiten) ?
     '<a class="page-nav" href="?seite='.($AktuelleSeite + 1).'">Weiter</a>' :
     '<span class="page-nav disabled">Weiter</span>';

// Ende des Pagination-Wrappers
echo '</div>';


 
            ?>
        </span>

        
    </main>

 
 
 
 
   
 
<footer class="footer">
  <div class="footer-section">
    <ul>
      <li>Apps</li>
      <li>Software</li>
      <li>Whispersync for Voice</li>
      <li>Hilfe</li>
      <li>Facebook</li>
      <li>Twitter</li>
      <li>Audible Magazin</li>
      <li>Presse</li>
      <li>Mobile Site</li>
    </ul>
  </div>
  <div class="footer-section">
    <ul>
      <li>Gutschein einlösen</li>
      <li>Geschenke</li>
      <li>Jobs</li>
      <li>Partnerprogramm</li>
      <li>Kontakt</li>
    </ul>
  </div>
  <div class="footer-section">
    <ul>
      <li>Bestseller</li>
      <li>Neue Hörbücher</li>
      <li>Audible Originals</li>
      <li>Hörbuch-Serien</li>
      <li>Hörspiele</li>
    </ul>
  </div>
  <div class="footer-bottom">
    <p>© Copyright 1997 - 2024 isoklib GMBH AGB Datenschutzerklärung Impressum Cookies</p>
    <p>Alle Preise inklusive der gesetzlichen Mehrwertsteuer.</p>
  </div>
</footer>
 
</body>
 
</html>
 
 
   
 


<script>
// JavaScript für das Öffnen und Schließen des Modals
var modal = document.getElementById('custom-page-modal');
var btn = document.getElementById('custom-page');
var span = document.getElementsByClassName('close')[0];

btn.onclick = function() {
  modal.style.display = 'block';
}

span.onclick = function() {
  modal.style.display = 'none';
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = 'none';
  }
}
</script>

</body>
 
</html>

