# PHP für Fachinformatiker (IHK AP1/AP2)

---

# Teil 01

Version: PHP 8.x

Zielgruppe:

- Fachinformatiker Anwendungsentwicklung
- Umschüler
- IHK AP1
- IHK AP2

---

# Inhaltsverzeichnis

1. Einführung in PHP
2. Die erste PHP-Anwendung
3. HTML und PHP
4. Kommentare
5. Variablen
6. Datentypen
7. Operatoren
8. Übungen

---

# Kapitel 1

# Einführung in PHP

## Was ist PHP?

PHP steht für

> PHP: Hypertext Preprocessor

PHP ist eine serverseitige Skriptsprache.

Mit PHP werden dynamische Webseiten erstellt.

Im Gegensatz zu HTML wird PHP **nicht im Browser**, sondern **auf dem Webserver** ausgeführt.

Der Besucher sieht niemals den PHP-Code.

Er erhält ausschließlich das erzeugte HTML.

---

## Der Ablauf einer PHP-Anwendung

```
Browser
    │
    │ HTTP Request
    ▼
Webserver
(Apache / Nginx)
    │
    ▼
PHP Interpreter
    │
führt PHP-Code aus
    │
    ▼
HTML wird erzeugt
    │
    ▼
Browser zeigt HTML an
```

---

## Unterschied zwischen HTML und PHP

HTML beschreibt lediglich das Aussehen einer Webseite.

PHP erzeugt Inhalte.

HTML alleine:

```html
<h1>Hallo Welt</h1>
```

liefert immer dieselbe Ausgabe.

PHP:

```php
<?php

echo date("H:i:s");

?>
```

liefert bei jedem Aufruf eine andere Uhrzeit.

Deshalb nennt man PHP eine dynamische Sprache.

---

## Typische Einsatzgebiete

PHP wird verwendet für

- Login-Systeme
- Kontaktformulare
- Onlineshops
- Blogs
- Foren
- Buchungssysteme
- Warenwirtschaft
- REST-APIs
- Datenbankanwendungen

Fast alle bekannten CMS basieren auf PHP.

Zum Beispiel

- WordPress
- Joomla
- Drupal
- TYPO3

---

## Vorteile von PHP

- kostenlos
- leicht zu lernen
- große Community
- sehr gute Datenbankunterstützung
- auf nahezu jedem Webserver verfügbar
- ideal für Webanwendungen

---

## Nachteile

- nur serverseitig
- für Desktopanwendungen ungeeignet
- historisch viele unterschiedliche Programmierstile

Mit modernen Versionen (PHP 8) wurden viele dieser Nachteile beseitigt.

---

# Merken (IHK)

PHP läuft immer auf dem Server.

Der Browser erhält niemals den PHP-Code.

Der Browser erhält ausschließlich HTML.

Diese Aussage wird regelmäßig in IHK-Prüfungen abgefragt.

---

# Kapitel 2

# Die erste PHP-Anwendung

Erstellen Sie eine Datei

```
index.php
```

mit folgendem Inhalt

```php
<?php

echo "Hallo Welt!";

?>
```

Öffnen Sie die Datei über den Webserver.

Ausgabe

```
Hallo Welt!
```

---

## echo

Der wichtigste Befehl in PHP lautet

```php
echo
```

Er gibt Text aus.

Beispiele

```php
<?php

echo "Hallo";

?>
```

Ausgabe

```
Hallo
```

---

Mehrere Ausgaben

```php
<?php

echo "Hallo";
echo " ";
echo "Welt";

?>
```

Ausgabe

```
Hallo Welt
```

---

Auch Zahlen können ausgegeben werden.

```php
<?php

echo 42;

?>
```

Ausgabe

```
42
```

---

Rechenausdrücke

```php
<?php

echo 5 + 7;

?>
```

Ausgabe

```
12
```

---

Strings und Zahlen können kombiniert werden.

```php
<?php

echo "Ergebnis: ";
echo 5 + 7;

?>
```

Ausgabe

```
Ergebnis: 12
```

---

# Typischer Anfängerfehler

Falsch

```php
echo(Hallo);
```

Zeichenkette Hallo in diesem Beispiel ist kein String.

Richtig

```php
echo("Hallo");
```

oder

```php
echo 'Hallo';
```

---

# Kapitel 3

# HTML und PHP

Eine PHP-Datei besteht meistens aus HTML und PHP.

Beispiel

```php
<!DOCTYPE html>
<html>

<head>
    <title>Meine erste PHP-Seite</title>
</head>

<body>

<h1>Willkommen</h1>

<?php

echo "Hallo Kunde";

?>

</body>

</html>
```

---

Der Browser erhält später

```html
<!DOCTYPE html>
<html lang="de">

<head>
    <title>Meine erste PHP-Seite</title>
</head>

<body>

<h1>Willkommen</h1>

Hallo Kunde

</body>

</html>
```

Der PHP-Code existiert im Browser nicht mehr.

---

## Mehrere PHP-Blöcke

Eine Datei darf beliebig viele PHP-Blöcke besitzen.

```php
<h1>

<?php
echo "PHP";
?>

</h1>

<p>

<?php
echo "ist einfach.";
?>

</p>
```

---

## Kurzschreibweise

Statt

```php
<?php

echo $name;

?>
```

kann geschrieben werden

```php
<?= $name ?>
```

Diese Schreibweise ist heute Standard.

---

# Merken

HTML beschreibt die Darstellung.

PHP erzeugt Inhalte.

---

# Kapitel 4

# Kommentare

Kommentare werden vom Interpreter ignoriert.

---

Einzeilige Kommentare

```php
// Kommentar
```

oder

```php
# Kommentar
```

---

Mehrzeilige Kommentare

```php
/*
Dies ist
ein mehrzeiliger
Kommentar.
*/
```

---

Kommentare dienen ausschließlich der Dokumentation.

---

# Best Practice

Schlechte Kommentare

```php
// Variable

$name = "Max";
```

Der Kommentar bringt keinen Mehrwert.

Gute Kommentare

```php
// Speichert den aktuell angemeldeten Benutzer

$currentUser = "Max";
```

---

# Prüfungstipp (IHK)

Kommentare werden nicht ausgeführt.

Sie dienen ausschließlich der Dokumentation.

# Kapitel 5

# Variablen

## Was ist eine Variable?

Eine Variable ist ein Speicherplatz im Arbeitsspeicher.

In einer Variablen können Werte gespeichert werden.

Beispiele:

- Name
- Alter
- Preis
- Temperatur
- Benutzername
- Passwort
- Datum

Man kann sich eine Variable wie einen beschrifteten Karton vorstellen.

```
+----------------------+
| Name: $alter         |
| Inhalt: 25           |
+----------------------+
```

---

## Variablen deklarieren

In PHP beginnen alle Variablen mit einem Dollarzeichen.

```php
$name = "Max";
```

oder

```php
$alter = 25;
```

oder

```php
$preis = 19.99;
```

---

## Syntax

```php
$variablenname = Wert;
```

Der Operator "=" weist einer Variablen einen Wert zu.

Er bedeutet **nicht** "gleich".

Er bedeutet

> Weise den Wert der Variablen zu.

---

## Beispiele

```php
<?php

$name = "Max";

echo $name;

?>
```

Ausgabe

```
Max
```

---

```php
<?php

$zahl = 42;

echo $zahl;

?>
```

Ausgabe

```
42
```

---

## Variablen verändern

```php
<?php

$konto = 100;

echo $konto;

$konto = 250;

echo $konto;

?>
```

Ausgabe

```
100250
```

Mit Leerzeichen:

```php
echo $konto;
echo "<br>";

$konto = 250;

echo $konto;
```

Ausgabe

```
100
250
```

---

## Werte kopieren

```php
<?php

$a = 10;

$b = $a;

echo $b;

?>
```

Ausgabe

```
10
```

---

## Rechnen mit Variablen

```php
<?php

$a = 8;
$b = 5;

echo $a + $b;

?>
```

Ausgabe

```
13
```

---

```php
<?php

$preis = 10;
$anzahl = 4;

echo $preis * $anzahl;

?>
```

Ausgabe

```
40
```

---

## Variablen ausgeben

```php
<?php

$name = "Lisa";

echo "Hallo ";

echo $name;

?>
```

Ausgabe

```
Hallo Lisa
```

---

## String-Verkettung

In PHP werden Strings mit einem Punkt verbunden.

Nicht mit "+"

Richtig

```php
<?php

$name = "Lisa";

echo "Hallo " . $name;

?>
```

Ausgabe

```
Hallo Lisa
```

---

Mehrere Variablen

```php
<?php

$vorname = "Max";
$nachname = "Mustermann";

echo $vorname . " " . $nachname;

?>
```

Ausgabe

```
Max Mustermann
```

---

## String Interpolation

PHP erlaubt Variablen direkt in doppelten Anführungszeichen.

```php
<?php

$name = "Max";

echo "Hallo $name";

?>
```

Ausgabe

```
Hallo Max
```

Auch möglich

```php
echo "Hallo {$name}";
```

Diese Schreibweise wird empfohlen, wenn mehrere Variablen direkt nebeneinander stehen.

---

## Namensregeln

Erlaubt

```php
$preis
$preisNetto
$anzahlArtikel
$_name
```

Nicht erlaubt

```php
$5preis
```

Eine Variable darf nicht mit einer Zahl beginnen.

---

Groß- und Kleinschreibung

```php
$name
```

ist nicht dasselbe wie

```php
$Name
```

PHP unterscheidet zwischen Groß- und Kleinschreibung.

---

## Best Practice

Verwenden Sie sprechende Namen.

Schlecht

```php
$a = 15;
```

Besser

```php
$temperatur = 15;
```

Noch besser

```php
$raumTemperatur = 15;
```

---

## camelCase

In PHP wird üblicherweise camelCase verwendet.

Beispiele

```php
$customerName

$orderNumber

$totalPrice

$currentUser

$loginSuccessful
```

---

# Merken (IHK)

Variablen beginnen immer mit

```php
$
```

---

# Kapitel 6

# Datentypen

PHP besitzt verschiedene Datentypen.

Die wichtigsten sind

| Datentyp | Beschreibung     |
|----------|------------------|
| int      | Ganze Zahlen     |
| float    | Kommazahlen      |
| string   | Texte            |
| bool     | Wahr oder falsch |
| array    | Mehrere Werte    |
| null     | Kein Wert        |

---

## Integer

```php
$anzahl = 15;
```

Weitere Beispiele

```php
0

15

-5

2500
```

---

## Float

```php
$preis = 19.95;
```

Weitere Beispiele

```php
3.14

0.5

-7.25
```

Wichtig

In PHP wird immer

```
.
```

als Dezimaltrennzeichen verwendet.

Nicht

```
,
```

---

## String

```php
$name = "Max";
```

oder

```php
$name = 'Max';
```

---

## Boolean

Ein bool besitzt nur zwei Zustände.

```php
true
```

oder

```php
false
```

Beispiel

```php
$eingeloggt = true;
```

---

## Null

```php
$kunde = null;
```

Die Variable besitzt aktuell keinen Wert.

---

## Datentyp anzeigen

```php
<?php

$preis = 19.95;

var_dump($preis);

?>
```

Ausgabe

```
float(19.95)
```

---

Weitere Beispiele

```php
$name = "Max";

var_dump($name);
```

Ausgabe

```
string(3) "Max"
```

---

```php
$alter = 25;

var_dump($alter);
```

Ausgabe

```
int(25)
```

---

## gettype()

```php
echo gettype($alter);
```

Ausgabe

```
integer
```

---

# Typische Fehler

```php
$preis = "25";
```

Das ist kein Integer.

Das ist ein String.

```
"25"
```

ist Text.

```
25
```

ist Zahl.

Dieser Unterschied wird in Prüfungen häufig abgefragt.

---

# Dynamische Typisierung

PHP ist dynamisch typisiert.

```php
$x = 5;

$x = "Hallo";

$x = true;
```

Alles ist erlaubt.

Der Datentyp wird automatisch angepasst.

---

# Vergleich zu Java

Java

```java
int alter = 20;
```

PHP

```php
$alter = 20;
```

Java verlangt einen Datentyp.

PHP erkennt ihn automatisch.

---

# Prüfungstipp (IHK)

Merken Sie den Unterschied zwischen

```php
25
```

und

```php
"25"
```

Die erste Schreibweise ist eine Zahl.

Die zweite Schreibweise ist Text.

# Kapitel 7

# Konstanten

## Was ist eine Konstante?

Eine Konstante ist ein Speicherplatz, dessen Wert **nach der Initialisierung nicht mehr geändert werden kann**.

Im Gegensatz zu Variablen bleibt der Wert während der gesamten Programmausführung unverändert.

Typische Beispiele:

- Mehrwertsteuersatz
- PI
- Firmenname
- Datenbank-Konfiguration
- Versionsnummer

---

## Konstanten definieren

Seit PHP 7 wird die Funktion `define()` oder das Schlüsselwort `const` verwendet.

### Variante 1

```php
define("MWST", 19);
```

Ausgabe

```php
echo MWST;
```

Ergebnis

```
19
```

---

### Variante 2 (empfohlen)

```php
const MWST = 19;

echo MWST;
```

---

## Unterschied Variable und Konstante

Variable

```php
$preis = 10;
$preis = 15;
```

✔ erlaubt

---

Konstante

```php
const MWST = 19;

MWST = 7;
```

❌ nicht erlaubt

---

## Namenskonvention

Konstanten werden meistens komplett in Großbuchstaben geschrieben.

```php
const PI = 3.14159265;

const VERSION = "1.0";

const MAX_USERS = 100;
```

---

# Kapitel 8

# Operatoren

Operatoren führen Berechnungen oder Vergleiche durch.

PHP besitzt verschiedene Operatorgruppen.

- Arithmetische Operatoren
- Vergleichsoperatoren
- Logische Operatoren
- Zuweisungsoperatoren
- Inkrement-/Dekrementoperatoren

---

# Arithmetische Operatoren

| Operator | Bedeutung      |
|----------|----------------|
| +        | Addition       |
| -        | Subtraktion    |
| *        | Multiplikation |
| /        | Division       |
| %        | Modulo         |
| **       | Potenz         |

---

## Addition

```php
$a = 5;
$b = 8;

echo $a + $b;
```

Ergebnis

```
13
```

---

## Subtraktion

```php
echo 10 - 3;
```

Ergebnis

```
7
```

---

## Multiplikation

```php
echo 4 * 5;
```

Ergebnis

```
20
```

---

## Division

```php
echo 20 / 4;
```

Ergebnis

```
5
```

---

## Modulo

Modulo liefert den Rest einer Division.

```php
echo 10 % 3;
```

```
1
```

Warum?

```
10 : 3 = 3 Rest 1
```

Weitere Beispiele

```php
8 % 2
```

Ergebnis

```
0
```

---

```php
15 % 4
```

Ergebnis

```
3
```

---

## Typische Verwendung von Modulo

Gerade Zahl?

```php
if($zahl % 2 == 0){
    echo "gerade";
}
```

Ungerade Zahl?

```php
if($zahl % 2 != 0){
    echo "ungerade";
}
```

Diese Aufgabe erscheint regelmäßig in Programmierprüfungen.

---

## Potenz

```php
echo 2 ** 5;
```

Ergebnis

```
32
```

---

# Reihenfolge der Berechnung

PHP verwendet dieselben Regeln wie Mathematik.

```
Klammern

Potenzen

Multiplikation / Division

Addition / Subtraktion
```

Beispiel

```php
echo 3 + 5 * 2;
```

Ergebnis

```
13
```

Nicht

```
16
```

---

Mit Klammern

```php
echo (3 + 5) * 2;
```

Ergebnis

```
16
```

---

# Kapitel 9

# Zuweisungsoperatoren

Normale Zuweisung

```php
$zahl = 5;
```

---

Addition

```php
$zahl += 3;
```

entspricht

```php
$zahl = $zahl + 3;
```

---

Subtraktion

```php
$zahl -= 4;
```

---

Multiplikation

```php
$zahl *= 5;
```

---

Division

```php
$zahl /= 2;
```

---

Modulo

```php
$zahl %= 3;
```

---

# Kapitel 10

# Inkrement und Dekrement

## Inkrement

```php
$zahl++;
```

entspricht

```php
$zahl = $zahl + 1;
```

---

## Dekrement

```php
$zahl--;
```

entspricht

```php
$zahl = $zahl - 1;
```

---

Beispiel

```php
$counter = 0;

$counter++;

$counter++;

echo $counter;
```

Ausgabe

```
2
```

---

# Präfix und Postfix

Postfix

```php
$i++;
```

Präfix

```php
++$i;
```

Der Unterschied wird häufig gefragt.

Beispiel

```php
$i = 5;

echo $i++;
```

Ausgabe

```
5
```

Danach besitzt `$i` den Wert

```
6
```

---

```php
$i = 5;

echo ++$i;
```

Ausgabe

```
6
```

---

### Merksatz

```
i++

erst benutzen

dann erhöhen
```

```
++i

erst erhöhen

dann benutzen
```

---

# Kapitel 11

# Vergleichsoperatoren

Vergleichsoperatoren liefern immer

```
true

oder

false
```

---

| Operator | Bedeutung           |
|----------|---------------------|
| ==       | gleich              |
| ===      | identisch           |
| !=       | ungleich            |
| !==      | nicht identisch     |
| >        | größer              |
| <        | kleiner             |
| >=       | größer oder gleich  |
| <=       | kleiner oder gleich |

---

## Gleich

```php
5 == 5
```

Ergebnis

```
true
```

---

## Ungleich

```php
5 != 7
```

```
true
```

---

## Größer

```php
10 > 5
```

```
true
```

---

## Kleiner

```php
3 < 1
```

```
false
```

---

# == oder === ?

Dies ist eine der wichtigsten Fragen in PHP.

---

```php
5 == "5"
```

Ergebnis

```
true
```

Warum?

PHP wandelt den String automatisch in eine Zahl um.

---

```php
5 === "5"
```

Ergebnis

```
false
```

Hier werden

- Wert
- Datentyp

verglichen.

---

## Beispiel

```php
$a = 5;
$b = "5";

var_dump($a == $b);
```

Ergebnis

```
true
```

---

```php
var_dump($a === $b);
```

Ergebnis

```
false
```

---

### Empfehlung

Verwenden Sie möglichst

```php
===
```

Dadurch vermeiden Sie viele Fehler.

---

# Typischer Anfängerfehler

```php
if($zahl = 5)
```

❌

Hier wird zugewiesen.

---

Richtig

```php
if($zahl == 5)
```

oder besser

```php
if($zahl === 5)
```

---

# Prüfungstipp (IHK)

Verwechseln Sie niemals

```php
=
```

mit

```php
==
```

und

```php
===
```

Diese Frage kommt in vielen Multiple-Choice-Aufgaben vor.


# Kapitel 12

# Logische Operatoren

## Warum benötigen wir logische Operatoren?

Oft reicht eine einzige Bedingung nicht aus.

Beispiele:

- Benutzer muss volljährig **und** eingeloggt sein.
- Benutzer ist Administrator **oder** Moderator.
- Benutzer darf **nicht** gesperrt sein.

Hier kommen logische Operatoren zum Einsatz.

---

## Übersicht

| Operator | Bedeutung   |
|----------|-------------|
| &&       | UND (AND)   |
| \|\|     | ODER (OR)   |
| !        | NICHT (NOT) |

---

# Der UND-Operator (&&)

Der Ausdruck ist nur dann **true**, wenn beide Bedingungen erfüllt sind.

Beispiel

```php
$alter = 20;
$eingeloggt = true;

if ($alter >= 18 && $eingeloggt) {
    echo "Zugriff erlaubt";
}
```

Ausgabe

```
Zugriff erlaubt
```

---

## Wahrheitstabelle

| A     | B     | A && B |
|-------|-------|--------|
| false | false | false  |
| false | true  | false  |
| true  | false | false  |
| true  | true  | true   |

---

## Praxisbeispiel

```php
$benutzer = "admin";
$passwort = "1234";

if($benutzer == "admin" && $passwort == "1234"){
    echo "Login erfolgreich";
}
```

---

# Der ODER-Operator (||)

Mindestens eine Bedingung muss erfüllt sein.

```php
$rolle = "Moderator";

if($rolle == "Administrator" || $rolle == "Moderator"){
    echo "Backend geöffnet";
}
```

---

## Wahrheitstabelle

| A     | B     | A \|\| B |
|-------|-------|----------|
| false | false | false    |
| false | true  | true     |
| true  | false | true     |
| true  | true  | true     |

---

# Der NICHT-Operator (!)

NOT kehrt das Ergebnis um.

```php
$eingeloggt = false;

if(!$eingeloggt){
    echo "Bitte anmelden.";
}
```

---

## Beispiel

```php
$sperre = false;

if(!$sperre){
    echo "Benutzer darf sich anmelden.";
}
```

---

# Kombinationen

```php
if($alter >= 18 && !$gesperrt){
    echo "Zugang erlaubt";
}
```

---

```php
if(($rolle == "Admin" || $rolle == "Moderator") && !$gesperrt){
    echo "Backend öffnen";
}
```

---

# Klammern verwenden

Schlecht

```php
if($a && $b || $c && !$d)
```

Besser

```php
if(($a && $b) || ($c && !$d))
```

Dadurch wird der Code deutlich lesbarer.

---

# Prüfungstipp (IHK)

Komplexe Bedingungen sollten immer geklammert werden.

---

# Kapitel 13

# if-Anweisung

Die if-Anweisung entscheidet, welcher Programmteil ausgeführt wird.

---

## Syntax

```php
if(Bedingung){

    Anweisung;

}
```

---

## Beispiel

```php
$temperatur = 24;

if($temperatur > 20){

    echo "Es ist warm.";

}
```

---

## if / else

```php
$temperatur = 12;

if($temperatur >= 20){

    echo "Warm";

}else{

    echo "Kalt";

}
```

---

## Ablauf

```
        Bedingung

           │

      true │ false

           │

      if   │ else
```

---

# Kapitel 14

# else if

Mehrere Bedingungen können nacheinander geprüft werden.

```php
$note = 2;

if($note == 1){

    echo "Sehr gut";

}else if($note == 2){

    echo "Gut";

}else if($note == 3){

    echo "Befriedigend";

}else{

    echo "Nicht bestanden";

}
```

---

## Wichtig

PHP arbeitet von oben nach unten.

Sobald eine Bedingung erfüllt wurde,

werden die restlichen Bedingungen **nicht mehr geprüft**.

---

## Beispiel

```php
$zahl = 15;

if($zahl > 0){

    echo "positiv";

}else if($zahl > 10){

    echo "größer als 10";

}
```

Ausgabe

```
positiv
```

Warum?

Die erste Bedingung ist bereits wahr.

Die zweite wird niemals erreicht.

---

# Typischer Fehler

Falsch

```php
if($zahl > 0){

}

if($zahl > 10){

}
```

Hier werden beide Bedingungen geprüft.

Oft ist eigentlich

```php
if(){

}
else if(){

}
```

gemeint.

---

# Kapitel 15

# switch

switch eignet sich hervorragend,

wenn viele Werte miteinander verglichen werden.

---

## Syntax

```php
switch($variable){

    case Wert:

        Anweisung;

        break;

    default:

        Anweisung;

}
```

---

## Beispiel

```php
$tag = 3;

switch($tag){

    case 1:

        echo "Montag";

        break;

    case 2:

        echo "Dienstag";

        break;

    case 3:

        echo "Mittwoch";

        break;

    default:

        echo "Unbekannt";

}
```

Ausgabe

```
Mittwoch
```

---

# break

break beendet den switch.

---

## Ohne break

```php
$zahl = 1;

switch($zahl){

    case 1:

        echo "A";

    case 2:

        echo "B";

}
```

Ausgabe

```
AB
```

Warum?

Der Programmfluss läuft einfach weiter.

Dieses Verhalten nennt man

```
Fall Through
```

---

## Mit break

```php
switch($zahl){

    case 1:

        echo "A";

        break;

    case 2:

        echo "B";

        break;

}
```

Ausgabe

```
A
```

---

# default

default entspricht dem else.

```php
switch($farbe){

    case "rot":

        echo "Rot";

        break;

    case "blau":

        echo "Blau";

        break;

    default:

        echo "Unbekannte Farbe";

}
```

---

# Wann if?

Gut geeignet

- größer
- kleiner
- Bereiche

Beispiel

```php
if($alter >=18)
```

---

# Wann switch?

Gut geeignet

- exakte Werte

Beispiele

```
Montag

Dienstag

Mittwoch

Donnerstag
```

oder

```
Admin

User

Gast
```

---

# Kapitel 16

# match (PHP 8)

Seit PHP 8 existiert

```php
match
```

Es ähnelt switch,

arbeitet jedoch sicherer.

---

## Beispiel

```php
$note = 2;

$text = match($note){

    1 => "Sehr gut",

    2 => "Gut",

    3 => "Befriedigend",

    default => "Unbekannt"

};

echo $text;
```

---

## Vorteile gegenüber switch

- kein break notwendig
- kein Fall Through
- besser lesbar
- liefert direkt einen Wert zurück

---

## switch oder match?

Neue Anwendungen verwenden häufig

```php
match
```

Viele bestehende Projekte verwenden jedoch weiterhin

```php
switch
```

Beides sollte bekannt sein.

---

# Typische IHK-Aufgabe

Schreiben Sie ein Programm,
das abhängig von einer Schulnote
den entsprechenden Text ausgibt.

Lösung mit

- switch

und

- match

sollte beherrscht werden.

# Kapitel 17

# Arrays

## Was ist ein Array?

Ein Array ist eine Datenstruktur, in der mehrere Werte unter einem gemeinsamen Namen gespeichert werden können.

Statt

```php
$kunde1 = "Max";
$kunde2 = "Lisa";
$kunde3 = "Tom";
$kunde4 = "Julia";
```

verwendet man

```php
$kunden = ["Max", "Lisa", "Tom", "Julia"];
```

Dadurch wird der Code deutlich übersichtlicher.

---

## Vorteile von Arrays

- mehrere Werte in einer Variablen
- einfacher zu verwalten
- ideal für Schleifen
- sehr häufig in PHP-Projekten

---

# Indizierte Arrays

Die Elemente werden über einen Index angesprochen.

Der erste Index lautet immer

```
0
```

Beispiel

```php
$farben = ["Rot", "Grün", "Blau"];
```

Darstellung

| Index | Wert |
|-------|------|
| 0     | Rot  |
| 1     | Grün |
| 2     | Blau |

---

## Zugriff auf Elemente

```php
echo $farben[0];
```

Ausgabe

```
Rot
```

---

```php
echo $farben[2];
```

Ausgabe

```
Blau
```

---

## Neues Element hinzufügen

```php
$farben[] = "Gelb";
```

Das Array enthält nun

| Index | Wert |
|-------|------|
| 0     | Rot  |
| 1     | Grün |
| 2     | Blau |
| 3     | Gelb |

---

## Element ändern

```php
$farben[1] = "Orange";
```

Ergebnis

```
Rot
Orange
Blau
Gelb
```

---

# Array mit array()

Früher wurde häufig geschrieben

```php
$zahlen = array(1,2,3,4);
```

Seit PHP 5.4 verwendet man meistens

```php
$zahlen = [1,2,3,4];
```

Diese Schreibweise ist moderner und kürzer.

---

# Array ausgeben

Nicht geeignet

```php
echo $zahlen;
```

Ausgabe

```
Array
```

Warum?

echo kann Arrays nicht direkt darstellen.

---

## print_r()

```php
print_r($zahlen);
```

Ausgabe

```
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
)
```

---

## var_dump()

```php
var_dump($zahlen);
```

liefert zusätzlich Datentypen.

---

# Anzahl der Elemente

```php
$count = count($zahlen);

echo $count;
```

Ausgabe

```
4
```

---

# Kapitel 18

# Assoziative Arrays

Nicht jeder Index muss eine Zahl sein.

Stattdessen können Schlüssel verwendet werden.

```php
$kunde = [

    "vorname" => "Max",

    "nachname" => "Mustermann",

    "alter" => 35

];
```

---

## Zugriff

```php
echo $kunde["vorname"];
```

Ausgabe

```
Max
```

---

```php
echo $kunde["alter"];
```

Ausgabe

```
35
```

---

## Werte ändern

```php
$kunde["alter"] = 36;
```

---

## Neue Werte hinzufügen

```php
$kunde["stadt"] = "Berlin";
```

---

# Praxisbeispiel

```php
$produkt = [

    "name" => "Notebook",

    "preis" => 899.99,

    "lager" => 12

];

echo $produkt["preis"];
```

Ausgabe

```
899.99
```

---

# Kapitel 19

# Mehrdimensionale Arrays

Ein Array kann wiederum Arrays enthalten.

Beispiel

```php
$kunden = [

    [

        "name" => "Max",

        "alter" => 30

    ],

    [

        "name" => "Lisa",

        "alter" => 25

    ]

];
```

---

## Zugriff

```php
echo $kunden[0]["name"];
```

Ausgabe

```
Max
```

---

```php
echo $kunden[1]["alter"];
```

Ausgabe

```
25
```

---

## Praxis

Mehrdimensionale Arrays werden häufig verwendet

- Datenbanken
- JSON
- REST-APIs
- CSV-Dateien

---

# Kapitel 20

# Die for-Schleife

Eine Schleife wiederholt Anweisungen.

---

## Syntax

```php
for(Start; Bedingung; Veränderung){

    Anweisungen

}
```

---

## Beispiel

```php
for($i=1;$i<=5;$i++){

    echo $i;

}
```

Ausgabe

```
12345
```

---

## Mit Zeilenumbruch

```php
for($i=1;$i<=5;$i++){

    echo $i . "<br>";

}
```

Ausgabe

```
1
2
3
4
5
```

---

# Schleife rückwärts

```php
for($i=10;$i>=1;$i--){

    echo $i;

}
```

---

# Kapitel 21

# Arrays mit for durchlaufen

```php
$farben = [

    "Rot",

    "Grün",

    "Blau"

];
```

---

```php
for($i=0;$i<count($farben);$i++){

    echo $farben[$i];

}
```

---

## Bessere Variante

```php
$anzahl = count($farben);

for($i=0;$i<$anzahl;$i++){

    echo $farben[$i];

}
```

Warum?

count() wird nur einmal berechnet.

Das ist effizienter.

---

# Typischer Anfängerfehler

```php
for($i=0;$i<=count($farben);$i++)
```

Falsch.

Warum?

Der letzte Index existiert nicht.

Richtig

```php
for($i=0;$i<count($farben);$i++)
```

---

# Merken (IHK)

Bei Arrays beginnt der erste Index immer mit

```
0
```

Das ist eine der häufigsten Fehlerquellen.

---

# Übung 1

Gegeben ist

```php
$zahlen = [5,10,15,20,25];
```

Geben Sie

- das erste Element
- das letzte Element
- die Anzahl der Elemente

aus.

---

# Lösung

```php
echo $zahlen[0];

echo "<br>";

echo $zahlen[count($zahlen)-1];

echo "<br>";

echo count($zahlen);
```

---

# Übung 2

Erzeugen Sie ein Array mit fünf Städten.

Geben Sie alle Städte mit einer for-Schleife aus.

---

# Musterlösung

```php
$staedte = [

    "Ingolstadt",

    "München",

    "Nürnberg",

    "Regensburg",

    "Augsburg"

];

for($i=0;$i<count($staedte);$i++){

    echo $staedte[$i];

    echo "<br>";

}
```
**Hinweis des Autors (wichtig):** Beim weiteren Schreiben werde ich die Qualität noch weiter erhöhen. Bis jetzt haben wir die Grundlagen gelegt. Ab **Teil 06** wird das Buch deutlich praxisorientierter: mit größeren Beispielen, Mini-Projekten, UML-Bezug, SQL-Anbindung und typischen IHK-Aufgaben inklusive ausführlicher Lösungen. Dadurch wird das Buch eher den Charakter eines professionellen Lehrbuchs als eines Skripts bekommen.

# Kapitel 22

# Die foreach-Schleife

## Warum foreach?

Die `for`-Schleife eignet sich hervorragend, wenn man mit einem Zähler arbeitet.

Möchte man jedoch **alle Elemente eines Arrays** durchlaufen, ist `foreach` die bessere Wahl.

Sie ist:

- einfacher zu lesen
- kürzer
- weniger fehleranfällig
- Standard in modernen PHP-Anwendungen

---

## Syntax

```php
foreach ($array as $element) {

    // Anweisungen

}
```

---

## Beispiel

```php
$farben = [
    "Rot",
    "Grün",
    "Blau"
];

foreach ($farben as $farbe) {
    echo $farbe . "<br>";
}
```

Ausgabe

```
Rot
Grün
Blau
```

---

## Was passiert intern?

```
Array

+---------+
| Rot     |
| Grün    |
| Blau    |
+---------+

↓

foreach

↓

$farbe = Rot

↓

$farbe = Grün

↓

$farbe = Blau
```

---

# foreach mit Schlüssel

Bei assoziativen Arrays benötigt man häufig sowohl den Schlüssel als auch den Wert.

```php
$kunde = [

    "Vorname" => "Max",

    "Nachname" => "Mustermann",

    "Alter" => 35

];

foreach ($kunde as $schluessel => $wert) {

    echo $schluessel . ": " . $wert . "<br>";

}
```

Ausgabe

```
Vorname: Max

Nachname: Mustermann

Alter: 35
```

---

## Wann for?

Wenn...

- ein Zähler benötigt wird
- der Index wichtig ist
- vorwärts oder rückwärts gezählt werden soll

---

## Wann foreach?

Wenn...

- alle Elemente gelesen werden
- kein Index benötigt wird
- ein Array verarbeitet wird

**Merksatz:**

> Muss ich nur jedes Element ansehen? → `foreach`

> Muss ich zählen oder den Index verwenden? → `for`

---

# Kapitel 23

# while-Schleife

Die `while`-Schleife wird verwendet, solange eine Bedingung wahr ist.

---

## Syntax

```php
while (Bedingung) {

    // Anweisungen

}
```

---

## Beispiel

```php
$i = 1;

while ($i <= 5) {

    echo $i . "<br>";

    $i++;

}
```

Ausgabe

```
1

2

3

4

5
```

---

## Ablauf

```
Bedingung?

↓

Ja

↓

Anweisungen

↓

zurück zur Bedingung

↓

Nein

↓

Ende
```

---

## Typischer Anfängerfehler

```php
$i = 1;

while ($i <= 5) {

    echo $i;

}
```

❌ Endlosschleife

Warum?

Der Wert von `$i` verändert sich nie.

---

Richtig

```php
$i++;
```

nicht vergessen.

---

# Kapitel 24

# do...while

Der Unterschied zur `while`-Schleife:

Die Anweisungen werden **mindestens einmal** ausgeführt.

---

## Syntax

```php
do {

    // Anweisungen

} while (Bedingung);
```

---

## Beispiel

```php
$i = 10;

do {

    echo $i;

} while ($i < 5);
```

Ausgabe

```
10
```

Obwohl die Bedingung falsch ist.

---

## Vergleich

### while

```
Bedingung

↓

true?

↓

Ja

↓

Anweisung
```

---

### do...while

```
Anweisung

↓

Bedingung

↓

wiederholen?
```

---

# Kapitel 25

# break

`break` beendet eine Schleife sofort.

---

## Beispiel

```php
for ($i = 1; $i <= 10; $i++) {

    if ($i == 6) {
        break;
    }

    echo $i . "<br>";

}
```

Ausgabe

```
1

2

3

4

5
```

---

## Praxis

Suche nach einem Kunden.

Sobald der Kunde gefunden wurde:

→ Schleife verlassen.

---

# Kapitel 26

# continue

`continue` beendet **nicht** die Schleife.

Es wird lediglich der aktuelle Durchlauf übersprungen.

---

## Beispiel

```php
for ($i = 1; $i <= 5; $i++) {

    if ($i == 3) {
        continue;
    }

    echo $i . "<br>";

}
```

Ausgabe

```
1

2

4

5
```

---

## Unterschied

```
break

↓

Schleife beendet
```

```
continue

↓

nächster Durchlauf
```

---

# Kapitel 27

# Verschachtelte Schleifen

Eine Schleife kann weitere Schleifen enthalten.

---

## Beispiel

```php
for ($i = 1; $i <= 3; $i++) {

    for ($j = 1; $j <= 3; $j++) {

        echo $i . "," . $j . "<br>";

    }

}
```

Ausgabe

```
1,1

1,2

1,3

2,1

2,2

2,3

3,1

3,2

3,3
```

---

## Typische Verwendung

- Tabellen erzeugen
- Schachbrett
- Spielfelder
- Matrizen
- CSV-Dateien

---

# Kapitel 28

# Praxisbeispiel

## Noten berechnen

```php
$noten = [

    2,

    3,

    1,

    2,

    4

];

$summe = 0;

foreach ($noten as $note) {

    $summe += $note;

}

$durchschnitt = $summe / count($noten);

echo $durchschnitt;
```

Ausgabe

```
2.4
```

---

# Praxisbeispiel

## Größte Zahl finden

```php
$zahlen = [

    15,

    8,

    42,

    19,

    3

];

$max = $zahlen[0];

foreach ($zahlen as $zahl) {

    if ($zahl > $max) {

        $max = $zahl;

    }

}

echo $max;
```

Ausgabe

```
42
```

---

# Praxisbeispiel

## Gerade Zahlen zählen

```php
$zahlen = [

    5,

    8,

    11,

    14,

    22,

    25

];

$anzahl = 0;

foreach ($zahlen as $zahl) {

    if ($zahl % 2 == 0) {

        $anzahl++;

    }

}

echo $anzahl;
```

Ausgabe

```
3
```

---

# Typische IHK-Aufgabe

Gegeben ist folgendes Array:

```php
$preise = [

    15,

    28,

    12,

    30,

    8

];
```

Ermitteln Sie:

- die Summe
- den Durchschnitt
- den größten Wert
- den kleinsten Wert

---

# Musterlösung

```php
$summe = 0;

$max = $preise[0];

$min = $preise[0];

foreach ($preise as $preis) {

    $summe += $preis;

    if ($preis > $max) {
        $max = $preis;
    }

    if ($preis < $min) {
        $min = $preis;
    }

}

$durchschnitt = $summe / count($preise);

echo "Summe: " . $summe . "<br>";
echo "Durchschnitt: " . $durchschnitt . "<br>";
echo "Maximum: " . $max . "<br>";
echo "Minimum: " . $min;
```

---

# Best Practice

Bevorzugen Sie

```php
foreach
```

für Arrays.

Verwenden Sie

```php
for
```

nur dann,

wenn Sie tatsächlich den Index benötigen.

# Kapitel 29

# Funktionen

## Was ist eine Funktion?

Eine Funktion ist ein **wiederverwendbarer Programmbaustein**, der eine bestimmte Aufgabe übernimmt.

Anstatt denselben Code mehrfach zu schreiben, wird er einmal in einer Funktion definiert und kann anschließend beliebig oft aufgerufen werden.

Dadurch wird der Code

- übersichtlicher
- wartbarer
- wiederverwendbar
- einfacher zu testen

---

## Warum Funktionen?

Ohne Funktionen

```php
echo "Hallo Max";
echo "<br>";

echo "Hallo Lisa";
echo "<br>";

echo "Hallo Tom";
```

Mit Funktion

```php
function begruessung($name)
{
    echo "Hallo " . $name . "<br>";
}

begruessung("Max");
begruessung("Lisa");
begruessung("Tom");
```

Der Code ist deutlich kürzer und leichter zu erweitern.

---

# Aufbau einer Funktion

```php
function funktionsName(Parameter)
{
    // Anweisungen
}
```

Beispiel

```php
function hallo()
{
    echo "Hallo Welt!";
}
```

Aufruf

```php
hallo();
```

Ausgabe

```
Hallo Welt!
```

---

# Wichtige Begriffe

| Begriff      | Bedeutung                        |
|--------------|----------------------------------|
| Funktion     | Wiederverwendbarer Programmblock |
| Aufruf       | Ausführen einer Funktion         |
| Parameter    | Eingabewerte                     |
| Rückgabewert | Ergebnis einer Funktion          |

Diese Begriffe solltest du für die IHK sicher beherrschen.

---

# Kapitel 30

# Parameter

Parameter übergeben Daten an eine Funktion.

Beispiel

```php
function begruessung($name)
{
    echo "Hallo " . $name;
}

begruessung("Max");
```

Ausgabe

```
Hallo Max
```

---

Noch einmal

```php
begruessung("Lisa");
```

Ausgabe

```
Hallo Lisa
```

Der Code der Funktion bleibt unverändert.

Nur die Eingabedaten ändern sich.

---

# Mehrere Parameter

```php
function addiere($a, $b)
{
    echo $a + $b;
}

addiere(5, 8);
```

Ausgabe

```
13
```

---

Weiteres Beispiel

```php
function produkt($preis, $anzahl)
{
    echo $preis * $anzahl;
}

produkt(25, 4);
```

Ausgabe

```
100
```

---

# Parameterreihenfolge

Die Reihenfolge ist wichtig.

```php
function person($vorname, $nachname)
{
    echo $vorname . " " . $nachname;
}

person("Max", "Mustermann");
```

Ausgabe

```
Max Mustermann
```

---

Vertauscht

```php
person("Mustermann", "Max");
```

Ausgabe

```
Mustermann Max
```

---

# Kapitel 31

# return

Viele Anfänger machen folgenden Fehler:

```php
function addiere($a, $b)
{
    echo $a + $b;
}
```

Das funktioniert zwar,

ist aber selten sinnvoll.

Besser

```php
function addiere($a, $b)
{
    return $a + $b;
}
```

Jetzt kann das Ergebnis weiterverarbeitet werden.

---

## Beispiel

```php
$ergebnis = addiere(5, 8);

echo $ergebnis;
```

Ausgabe

```
13
```

---

Noch besser

```php
echo addiere(15, 30);
```

---

# return beendet die Funktion

```php
function test()
{
    echo "A";

    return;

    echo "B";
}

test();
```

Ausgabe

```
A
```

Alles hinter `return` wird nicht mehr ausgeführt.

---

# Kapitel 32

# Datentypen für Parameter

Seit PHP 7 können Datentypen angegeben werden.

```php
function addiere(int $a, int $b)
{
    return $a + $b;
}
```

---

Auch möglich

```php
function hallo(string $name)
{
    echo "Hallo " . $name;
}
```

---

Weitere Datentypen

```php
bool

float

array

object
```

---

# Rückgabetyp

Auch der Rückgabewert kann angegeben werden.

```php
function quadrat(int $zahl): int
{
    return $zahl * $zahl;
}
```

---

Beispiel

```php
echo quadrat(6);
```

Ausgabe

```
36
```

---

# Vorteile

Der Code wird

- sicherer
- verständlicher
- leichter wartbar

Deshalb werden Typdeklarationen in modernen Projekten empfohlen.

---

# Kapitel 33

# Standardparameter

Parameter können Standardwerte besitzen.

```php
function begruessung($name = "Gast")
{
    echo "Hallo " . $name;
}
```

---

Aufruf

```php
begruessung();
```

Ausgabe

```
Hallo Gast
```

---

Oder

```php
begruessung("Max");
```

Ausgabe

```
Hallo Max
```

---

# Kapitel 34

# Scope

Scope beschreibt den Gültigkeitsbereich einer Variablen.

---

## Lokale Variable

```php
function test()
{
    $zahl = 10;

    echo $zahl;
}
```

Die Variable existiert nur innerhalb der Funktion.

---

## Fehler

```php
function test()
{
    $zahl = 10;
}

echo $zahl;
```

Fehlermeldung

```
Undefined variable
```

---

## Globale Variable

```php
$zahl = 10;

function test()
{
    global $zahl;

    echo $zahl;
}
```

---

### Achtung!

Die Verwendung von `global` sollte möglichst vermieden werden.

Besser ist es,

Variablen über Parameter zu übergeben.

---

Schlecht

```php
global $kunde;
```

Besser

```php
function ausgabe($kunde)
{
    ...
}
```

---

# Kapitel 35

# Funktionen aufrufen

Eine Funktion kann eine andere Funktion aufrufen.

```php
function hallo()
{
    echo "Hallo";
}

function start()
{
    hallo();
}

start();
```

Ausgabe

```
Hallo
```

---

# Kapitel 36

# Rekursion

Eine Funktion darf sich selbst aufrufen.

Dies nennt man Rekursion.

Ein bekanntes Beispiel ist die Fakultät.

```
5!

=

5 × 4 × 3 × 2 × 1
```

---

```php
function fakultaet($n)
{
    if ($n <= 1) {
        return 1;
    }

    return $n * fakultaet($n - 1);
}

echo fakultaet(5);
```

Ausgabe

```
120
```

---

### Wichtig

Rekursion benötigt immer eine Abbruchbedingung.

Ohne Abbruchbedingung entsteht eine Endlosrekursion.

---

# Typischer Anfängerfehler

```php
function test()
{
    test();
}
```

Das Programm endet mit einem Fehler.

---

# Best Practice

Eine Funktion sollte

- genau eine Aufgabe erfüllen
- einen sprechenden Namen besitzen
- möglichst kurz sein
- keine doppelten Aufgaben übernehmen

Schlecht

```php
function a()
{
}
```

Besser

```php
function berechneMehrwertsteuer()
{
}
```

---

# Merken (IHK)

Parameter

↓

Eingabewerte

---

return

↓

Rückgabewert

---

echo

↓

Ausgabe

---

Eine Funktion kann

- Parameter besitzen
- keinen Parameter besitzen
- einen Rückgabewert besitzen
- keinen Rückgabewert besitzen

---

# Typische IHK-Aufgabe

Schreiben Sie eine Funktion

```php
berechneRabatt()
```

Die Funktion erhält

- Preis
- Rabatt in Prozent

und liefert den neuen Preis zurück.

---

# Musterlösung

```php
function berechneRabatt(float $preis, float $rabatt): float
{
    return $preis - ($preis * $rabatt / 100);
}

echo berechneRabatt(100, 15);
```

Ausgabe

```
85
```

# Kapitel 37

# String-Funktionen

## Was ist ein String?

Ein String ist eine Folge von Zeichen.

Beispiele:

```php
"Hallo"

"Max Mustermann"

"PHP 8"

"12345"
```

Auch Zahlen können als String gespeichert werden.

```php
$zahl = "25";
```

Achtung:

```php
25
```

ist ein Integer.

```php
"25"
```

ist ein String.

Diese Unterscheidung wird in der IHK häufig geprüft.

---

# Strings erzeugen

```php
$name = "Andreas";
```

oder

```php
$name = 'Andreas';
```

Beides ist erlaubt.

---

# Doppelte oder einfache Anführungszeichen?

## Doppelte Anführungszeichen

Variablen werden ersetzt.

```php
$name = "Max";

echo "Hallo $name";
```

Ausgabe

```
Hallo Max
```

---

## Einfache Anführungszeichen

```php
$name = "Max";

echo 'Hallo $name';
```

Ausgabe

```
Hallo $name
```

Es findet keine Variablenersetzung statt.

---

# Best Practice

Texte ohne Variablen

↓

```php
'Hallo'
```

Texte mit Variablen

↓

```php
"Hallo $name"
```

---

# Kapitel 38

# strlen()

Liefert die Anzahl der Zeichen.

```php
$text = "Hallo";

echo strlen($text);
```

Ausgabe

```
5
```

---

Weitere Beispiele

```php
strlen("PHP")
```

Ergebnis

```
3
```

---

```php
strlen("")
```

Ergebnis

```
0
```

---

## Praxis

```php
$passwort = "abc123";

if(strlen($passwort) < 8){

    echo "Passwort zu kurz.";

}
```

---

# Kapitel 39

# trim()

Entfernt Leerzeichen am Anfang und Ende.

```php
$name = "   Max   ";

echo trim($name);
```

Ausgabe

```
Max
```

---

## Warum wichtig?

Benutzer geben häufig versehentlich Leerzeichen ein.

```
" Max"

"Max "

" Max "
```

Mit

```php
trim()
```

werden diese entfernt.

---

## Beispiel

```php
$eingabe = trim($_POST["name"]);
```

Diese Schreibweise ist Standard.

---

# Kapitel 40

# strtoupper()

Alles wird großgeschrieben.

```php
echo strtoupper("php");
```

Ausgabe

```
PHP
```

---

# strtolower()

Alles wird kleingeschrieben.

```php
echo strtolower("PHP");
```

Ausgabe

```
php
```

---

# ucfirst()

Der erste Buchstabe wird groß.

```php
echo ucfirst("max");
```

Ausgabe

```
Max
```

---

# ucwords()

Jedes Wort beginnt mit einem Großbuchstaben.

```php
echo ucwords("max mustermann");
```

Ausgabe

```
Max Mustermann
```

---

# Kapitel 41

# str_replace()

Ersetzt Text.

Syntax

```php
str_replace(Suchen, Ersetzen, Text)
```

---

Beispiel

```php
$text = "Ich mag Java.";

echo str_replace("Java", "PHP", $text);
```

Ausgabe

```
Ich mag PHP.
```

---

Mehrere Ersetzungen

```php
$text = "rot grün blau";

$text = str_replace("rot", "gelb", $text);

echo $text;
```

Ausgabe

```
gelb grün blau
```

---

# Kapitel 42

# strpos()

Sucht einen Text.

```php
$text = "Hallo Welt";

echo strpos($text, "Welt");
```

Ausgabe

```
6
```

Warum?

```
H a l l o _ W e l t
0 1 2 3 4 5 6
```

---

Nicht gefunden

```php
strpos($text, "PHP")
```

Ergebnis

```
false
```

---

## Typischer Anfängerfehler

```php
if(strpos($text,"PHP")){
```

❌

Warum?

Wenn der Text an Position **0** gefunden wird,

liefert

```
0
```

und **0 wird als false interpretiert**.

---

Richtig

```php
if(strpos($text,"PHP") !== false){
```

Diese Schreibweise ist Standard.

---

# Kapitel 43

# explode()

Zerlegt einen String.

Syntax

```php
explode(Trennzeichen, String)
```

---

Beispiel

```php
$text = "Max;Lisa;Tom";

$namen = explode(";", $text);

print_r($namen);
```

Ausgabe

```
Array
(
    [0] => Max
    [1] => Lisa
    [2] => Tom
)
```

---

## Typische Verwendung

CSV-Dateien

```
Max;Mustermann;35
```

↓

```
["Max","Mustermann","35"]
```

---

# Kapitel 44

# implode()

Das Gegenteil von explode()

```php
$namen = [

    "Max",

    "Lisa",

    "Tom"

];

echo implode(", ", $namen);
```

Ausgabe

```
Max, Lisa, Tom
```

---

Sehr häufig beim Erstellen von CSV-Dateien.

---

# Kapitel 45

# substr()

Liefert einen Teil eines Strings.

```php
$text = "Ingolstadt";

echo substr($text,0,4);
```

Ausgabe

```
Ingo
```

---

Weiteres Beispiel

```php
echo substr("Programmierung",12);
```

Ausgabe

```
ung
```

---

# Kapitel 46

# sprintf()

Erzeugt formatierte Texte.

```php
$name = "Max";

$alter = 35;

$text = sprintf(

    "%s ist %d Jahre alt.",

    $name,

    $alter

);

echo $text;
```

Ausgabe

```
Max ist 35 Jahre alt.
```

---

## Platzhalter

| Platzhalter | Bedeutung |
|-------------|-----------|
| %s          | String    |
| %d          | Integer   |
| %f          | Float     |

---

# Praxisbeispiel

```php
$preis = 19.95;

echo sprintf(

    "Preis: %.2f €",

    $preis

);
```

Ausgabe

```
Preis: 19.95 €
```

---

# Kapitel 47

# String-Funktionen kombinieren

```php
$name = "   max mustermann   ";

$name = trim($name);

$name = ucwords($name);

echo $name;
```

Ausgabe

```
Max Mustermann
```

---

# Praxisbeispiel

Ein Benutzer gibt ein:

```
"   aNdReAs hAaS   "
```

Nach der Verarbeitung

```php
$name = trim($name);

$name = strtolower($name);

$name = ucwords($name);
```

Ergebnis

```
Andreas Haas
```

---

# Typische IHK-Aufgabe

Gegeben ist

```php
$text = "Max;Lisa;Tom";
```

Erstellen Sie ein Array mit den drei Namen.

---

## Musterlösung

```php
$namen = explode(";", $text);
```

---

Gegeben ist

```php
$namen = [

    "Max",

    "Lisa",

    "Tom"

];
```

Erzeugen Sie

```
Max, Lisa, Tom
```

---

## Lösung

```php
echo implode(", ", $namen);
```

---

# Prüfungsfalle

Viele verwechseln

```php
explode()
```

und

```php
implode()
```

Merksatz

```
explode()

↓

1 String

↓

viele Elemente
```

```
implode()

↓

viele Elemente

↓

1 String
```

# Kapitel 48

# HTML-Formulare

## Warum Formulare?

Bisher konnten unsere Programme lediglich Daten ausgeben.

Eine Webanwendung wird jedoch erst dann interaktiv, wenn der Benutzer Daten eingeben kann.

Typische Beispiele:

- Login
- Registrierung
- Kontaktformular
- Produktsuche
- Bestellung
- Gästebuch
- Passwort ändern

Alle diese Anwendungen basieren auf HTML-Formularen.

---

# Aufbau eines Formulars

Ein Formular beginnt immer mit dem `<form>`-Tag.

```html
<form>

</form>
```

Innerhalb des Formulars befinden sich Eingabefelder.

---

## Einfachstes Formular

```html
<form>

    <input type="text">

</form>
```

Dieses Formular besitzt bereits ein Textfeld.

---

## Formular mit Button

```html
<form>

    <input type="text">

    <button>Senden</button>

</form>
```

---

## Formular mit Beschriftung

```html
<form>

    <label>Name</label>

    <input type="text">

    <button>Senden</button>

</form>
```

---

# Kapitel 49

# Das form-Element

Ein Formular besitzt normalerweise mindestens zwei Attribute.

```html
<form action="..." method="...">

</form>
```

---

## action

Legt fest,

an welche PHP-Datei die Daten gesendet werden.

Beispiel

```html
<form action="login.php">
```

---

## method

Bestimmt,

wie die Daten übertragen werden.

Es existieren hauptsächlich zwei Methoden.

- GET
- POST

---

# Übersicht

| Methode | Verwendung                           |
|---------|--------------------------------------|
| GET     | Daten stehen in der URL              |
| POST    | Daten werden im HTTP-Body übertragen |

---

# Kapitel 50

# Eingabefelder

## Textfeld

```html
<input type="text">
```

---

## Passwort

```html
<input type="password">
```

Während der Eingabe werden die Zeichen verborgen.

---

## Zahl

```html
<input type="number">
```

---

## E-Mail

```html
<input type="email">
```

Der Browser prüft bereits die grundlegende Syntax einer E-Mail-Adresse.

---

## Datum

```html
<input type="date">
```

---

## Checkbox

```html
<input type="checkbox">
```

---

## Radio Button

```html
<input type="radio">
```

Radio Buttons erlauben genau eine Auswahl.

---

## Datei auswählen

```html
<input type="file">
```

Dieses Feld wird später beim Datei-Upload verwendet.

---

# Wichtiges Attribut: name

Ein Eingabefeld ohne `name` wird **nicht an PHP übertragen**.

Falsch

```html
<input type="text">
```

Richtig

```html
<input

    type="text"

    name="vorname"

>
```

---

Merksatz

> Ohne `name` existiert das Eingabefeld für PHP nicht.

Dies ist eine klassische Prüfungsfrage.

---

# Kapitel 51

# Erstes Formular

```html
<form action="ausgabe.php" method="post">

    <label>Vorname</label>

    <br>

    <input

        type="text"

        name="vorname"

    >

    <br><br>

    <button>

        Senden

    </button>

</form>
```

---

Nach dem Klick auf

```
Senden
```

wird

```
ausgabe.php
```

aufgerufen.

---

# Kapitel 52

# GET

Die Methode GET sendet Daten über die URL.

Beispiel

```
produkt.php?id=15
```

Die URL besteht aus

```
produkt.php

?

id=15
```

---

Mehrere Werte

```
produkt.php?id=15&farbe=rot
```

---

Darstellung

```
Datei

↓

produkt.php

↓

Parameter

↓

id=15

farbe=rot
```

---

## Zugriff in PHP

```php
$id = $_GET["id"];

echo $id;
```

---

Beispiel

URL

```
kunde.php?id=25
```

PHP

```php
echo $_GET["id"];
```

Ausgabe

```
25
```

---

# Vorteile von GET

- URL kann gespeichert werden
- URL kann als Lesezeichen verwendet werden
- URL kann geteilt werden

---

# Nachteile

- Daten sichtbar
- begrenzte Länge
- ungeeignet für Passwörter

---

# Kapitel 53

# POST

POST sendet Daten **nicht sichtbar** in der URL.

Beispiel

```html
<form

    action="login.php"

    method="post"

>

...
```

---

PHP

```php
$name = $_POST["name"];
```

---

## Beispiel

HTML

```html
<form

    action="login.php"

    method="post"

>

<input

    type="text"

    name="benutzer"

>

<button>

Login

</button>

</form>
```

---

PHP

```php
$benutzer = $_POST["benutzer"];

echo $benutzer;
```

---

# GET oder POST?

| GET              | POST               |
|------------------|--------------------|
| sichtbar         | unsichtbar         |
| URL              | HTTP-Body          |
| Suchanfragen     | Login              |
| Filter           | Formulare          |
| Seitennavigation | vertrauliche Daten |

---

# Best Practice

Verwenden Sie

GET

für

- Suche
- Filter
- Navigation

Verwenden Sie

POST

für

- Login
- Registrierung
- Passwort
- Bestellungen
- Formulare

---

# Kapitel 54

# Superglobale Variablen

PHP besitzt mehrere Superglobals.

| Variable  | Zweck               |
|-----------|---------------------|
| $_GET     | URL-Parameter       |
| $_POST    | Formulardaten       |
| $_SERVER  | Serverinformationen |
| $_FILES   | Datei-Upload        |
| $_COOKIE  | Cookies             |
| $_SESSION | Sitzungsdaten       |
| $_REQUEST | GET + POST          |

---

## $_SERVER

```php
echo $_SERVER["PHP_SELF"];
```

Liefert den aktuellen Dateinamen.

---

```php
echo $_SERVER["REQUEST_METHOD"];
```

Ausgabe

```
GET
```

oder

```
POST
```

---

## Typische Prüfung

```php
if($_SERVER["REQUEST_METHOD"] == "POST"){

    ...

}
```

Damit prüft man,

ob das Formular abgesendet wurde.

---

# Kapitel 55

# Erstes vollständiges Beispiel

## index.php

```php
<!DOCTYPE html>

<html>

<head>

    <title>Kontakt</title>

</head>

<body>

<form

    method="post"

>

    <label>

        Name

    </label>

    <br>

    <input

        type="text"

        name="name"

    >

    <br><br>

    <button>

        Senden

    </button>

</form>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    echo "<hr>";

    echo "Hallo ";

    echo $_POST["name"];

}

?>

</body>

</html>
```

---

## Ablauf

```
Browser

↓

Formular anzeigen

↓

Benutzer tippt Namen

↓

Button klicken

↓

POST

↓

PHP verarbeitet Daten

↓

Neue HTML-Seite

↓

Browser zeigt Ergebnis
```

---

# Typische Anfängerfehler

❌

```html
<input

type="text"

id="name"

>
```

Warum falsch?

Es fehlt

```html
name="name"
```

Nur `name` wird übertragen.

---

❌

```php
echo $_POST["vorname"];
```

Das Formular besitzt

```html
name="name"
```

Nicht

```
vorname
```

Die Namen müssen identisch sein.

---

# Mini-Projekt 1

## Begrüßungsformular

Aufgabe

Erstellen Sie ein Formular,

welches

- Vorname
- Nachname

abfragt.

Nach dem Absenden soll ausgegeben werden

```
Hallo Max Mustermann!
```

---

## Musterlösung

```php
<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $vorname = $_POST["vorname"];

    $nachname = $_POST["nachname"];

    echo "<h2>";

    echo "Hallo ";

    echo $vorname;

    echo " ";

    echo $nachname;

    echo "!";

    echo "</h2>";

}

?>

<form method="post">

<label>Vorname</label>

<br>

<input

type="text"

name="vorname"

>

<br><br>

<label>Nachname</label>

<br>

<input

type="text"

name="nachname"

>

<br><br>

<button>

Senden

</button>

</form>
```

---

# Prüfungswissen (IHK)

Merken Sie unbedingt:

✓ Ein Formular benötigt `<form>`.

✓ Daten werden über `name` übertragen.

✓ `id` dient HTML/CSS/JavaScript.

✓ `name` dient PHP.

✓ GET → URL.

✓ POST → HTTP-Body.

Diese Punkte werden regelmäßig in AP1 und AP2 abgefragt.


# Kapitel 56

# Formulardaten prüfen

## Warum validieren?

Benutzereingaben dürfen **niemals ungeprüft** verarbeitet werden.

Benutzer können

- Felder leer lassen
- falsche Daten eingeben
- absichtlich ungültige Daten senden
- Sicherheitslücken ausnutzen

Deshalb gilt:

> **Vertraue niemals Benutzereingaben!**

Dies gehört zu den wichtigsten Regeln der Softwareentwicklung.

---

# Ablauf einer Formulardatenverarbeitung

```
Benutzer

↓

Formular ausfüllen

↓

POST

↓

PHP

↓

Validierung

↓

Fehler?

↓

Ja --------→ Fehlermeldung

↓

Nein

↓

Daten verarbeiten

↓

Ergebnis anzeigen
```

---

# Kapitel 57

# isset()

Mit `isset()` prüft man,

ob eine Variable existiert.

Syntax

```php
isset($variable)
```

---

## Beispiel

```php
if(isset($_POST["name"])){

    echo "Vorhanden";

}
```

---

## Rückgabewert

| Ergebnis | Bedeutung                |
|----------|--------------------------|
| true     | Variable existiert       |
| false    | Variable existiert nicht |

---

## Beispiel

```php
$name = "Max";

var_dump(isset($name));
```

Ausgabe

```
bool(true)
```

---

```php
var_dump(isset($alter));
```

Ausgabe

```
bool(false)
```

---

# Typische Verwendung

```php
if(isset($_POST["email"])){

    ...

}
```

---

# Kapitel 58

# empty()

Mit `empty()` prüft man,

ob eine Variable leer ist.

---

Syntax

```php
empty($variable)
```

---

## Beispiel

```php
$name = "";

if(empty($name)){

    echo "Bitte Namen eingeben.";

}
```

---

## empty() liefert true bei

```
""

0

"0"

false

null

[]
```

---

## Beispiel

```php
$zahl = 0;

var_dump(empty($zahl));
```

Ausgabe

```
true
```

---

# Unterschied

## isset()

Existiert die Variable?

---

## empty()

Ist sie leer?

---

Merksatz

```
isset()

↓

Existiert?
```

```
empty()

↓

Hat sie Inhalt?
```

---

# Kapitel 59

# trim()

Vor jeder Prüfung sollte der Text bereinigt werden.

```php
$name = trim($_POST["name"]);
```

Warum?

Der Benutzer könnte eingeben

```
"        Max"
```

oder

```
"Max      "
```

Nach

```php
trim()
```

bleibt

```
Max
```

übrig.

---

# Kapitel 60

# htmlspecialchars()

Einer der wichtigsten Befehle überhaupt.

Er verhindert HTML-Ausgabe.

---

## Beispiel

Benutzer gibt ein

```html
<script>alert("Hallo")</script>
```

Ohne Schutz

```php
echo $_POST["name"];
```

Der Browser würde JavaScript ausführen.

---

Mit

```php
echo htmlspecialchars($_POST["name"]);
```

Ausgabe

```
<script>alert("Hallo")</script>
```

als normaler Text.

---

## Warum?

Sicherheit.

Schutz vor

```
Cross Site Scripting

(XSS)
```

---

Merksatz

> Alles, was vom Benutzer stammt und im Browser ausgegeben wird, sollte mit `htmlspecialchars()` maskiert werden.

---

# Kapitel 61

# filter_var()

PHP besitzt viele eingebaute Filter.

---

## E-Mail prüfen

```php
$email = $_POST["email"];

if(filter_var($email, FILTER_VALIDATE_EMAIL)){

    echo "E-Mail gültig.";

}
```

---

Ungültig

```
max@

```

---

Gültig

```
max@test.de
```

---

## URL prüfen

```php
filter_var($url, FILTER_VALIDATE_URL)
```

---

## Integer prüfen

```php
filter_var($zahl, FILTER_VALIDATE_INT)
```

---

# Kapitel 62

# Mehrere Prüfungen kombinieren

```php
$name = trim($_POST["name"]);

if(empty($name)){

    echo "Name fehlt.";

}
```

---

Weiteres Beispiel

```php
$email = trim($_POST["email"]);

if(empty($email)){

    echo "Bitte E-Mail eingeben.";

}
elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){

    echo "Ungültige E-Mail.";

}
else{

    echo "Alles korrekt.";

}
```

---

# Kapitel 63

# Fehlermeldungen sammeln

Statt sofort abzubrechen,

werden alle Fehler gesammelt.

---

```php
$errors = [];
```

---

```php
if(empty($name)){

    $errors[] = "Name fehlt.";

}
```

---

```php
if(empty($email)){

    $errors[] = "E-Mail fehlt.";

}
```

---

```php
if(count($errors)==0){

    echo "Speichern.";

}
else{

    foreach($errors as $error){

        echo $error."<br>";

    }

}
```

---

# Warum?

Der Benutzer sieht alle Fehler auf einmal.

Nicht

```
Fehler 1

↓

erneut senden

↓

Fehler 2

↓

erneut senden
```

sondern

```
Alle Fehler sofort
```

---

# Kapitel 64

# Loginformular

HTML

```php
<form method="post">

<label>Benutzername</label>

<br>

<input

type="text"

name="username"

>

<br><br>

<label>Passwort</label>

<br>

<input

type="password"

name="password"

>

<br><br>

<button>

Login

</button>

</form>
```

---

PHP

```php
if($_SERVER["REQUEST_METHOD"]=="POST"){

    $username = trim($_POST["username"]);

    $password = trim($_POST["password"]);

    if(empty($username)){

        echo "Benutzername fehlt.<br>";

    }

    if(empty($password)){

        echo "Passwort fehlt.";

    }

}
```

---

# Kapitel 65

# Passwort niemals speichern!

Falsch

```php
$password = "geheim";
```

oder

```
123456
```

in der Datenbank.

---

Richtig

```php
password_hash()
```

und

```php
password_verify()
```

Diese Funktionen gehören zum Standard moderner PHP-Anwendungen.

(Im PDO-Kapitel werden wir sie ausführlich einsetzen.)

---

# Kapitel 66

# Häufige Anfängerfehler

## Fehler 1

```php
if($_POST["name"]=="")
```

Besser

```php
if(empty($_POST["name"]))
```

---

## Fehler 2

```php
echo $_POST["name"];
```

Besser

```php
echo htmlspecialchars($_POST["name"]);
```

---

## Fehler 3

```php
$email = $_POST["email"];
```

Besser

```php
$email = trim($_POST["email"]);
```

---

## Fehler 4

Keine Prüfung der Request-Methode.

Richtig

```php
if($_SERVER["REQUEST_METHOD"]==="POST"){

    ...

}
```

---

# Mini-Projekt 2

## Login vorbereiten

Aufgabe

Erstellen Sie ein Loginformular.

Es soll prüfen:

- Benutzername eingegeben?
- Passwort eingegeben?
- Passwort mindestens 8 Zeichen?
- E-Mail gültig?

---

## Musterlösung

```php
$errors = [];

$username = trim($_POST["username"] ?? "");

$email = trim($_POST["email"] ?? "");

$password = trim($_POST["password"] ?? "");

if(empty($username)){
    $errors[] = "Benutzername fehlt.";
}

if(empty($email)){
    $errors[] = "E-Mail fehlt.";
}
elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $errors[] = "Ungültige E-Mail.";
}

if(strlen($password) < 8){
    $errors[] = "Passwort muss mindestens 8 Zeichen besitzen.";
}

if(empty($errors)){

    echo "Login erfolgreich vorbereitet.";

}else{

    foreach($errors as $error){
        echo htmlspecialchars($error)."<br>";
    }

}
```

---

# Best Practice

Bei Formularen lautet die Reihenfolge immer:

```
1.

REQUEST_METHOD prüfen

↓

2.

trim()

↓

3.

Validieren

↓

4.

Fehler sammeln

↓

5.

htmlspecialchars()

↓

6.

Weiterverarbeiten
```

Diese Reihenfolge wird in professionellen PHP-Projekten verwendet.

---

# Kapitel 67

# Warum Dateien?

Nicht alle Daten werden sofort in einer Datenbank gespeichert.

Viele Programme arbeiten zunächst mit Dateien.

Beispiele aus der Praxis:

- Logdateien
- CSV-Dateien
- Konfigurationsdateien
- Textdateien
- JSON-Dateien
- XML-Dateien

Typische Dateiendungen:

```
.txt
.csv
.log
.json
.xml
.ini
```

---

# Dateiverarbeitung in PHP

Typischer Ablauf

```
Datei öffnen

↓

Datei lesen

↓

Daten verarbeiten

↓

Datei schließen
```

---

# Kapitel 68

# fopen()

Mit `fopen()` wird eine Datei geöffnet.

Syntax

```php
$datei = fopen("test.txt", "r");
```

Parameter

| Parameter | Bedeutung    |
|-----------|--------------|
| test.txt  | Dateiname    |
| r         | Read (lesen) |

---

## Rückgabewert

```php
resource
```

oder

```php
false
```

wenn die Datei nicht geöffnet werden kann.

---

## Deshalb immer prüfen

```php
$datei = fopen("test.txt", "r");

if($datei === false){

    die("Datei konnte nicht geöffnet werden.");

}
```

---

# Öffnungsmodi

| Modus | Bedeutung                      |
|-------|--------------------------------|
| r     | Lesen                          |
| w     | Schreiben (Datei wird geleert) |
| a     | Anhängen                       |
| x     | Neue Datei erstellen           |
| r+    | Lesen und Schreiben            |
| a+    | Lesen und Anhängen             |

Diese Tabelle ist prüfungsrelevant.

---

# Kapitel 69

# fclose()

Jede geöffnete Datei sollte wieder geschlossen werden.

```php
$datei = fopen("test.txt","r");

fclose($datei);
```

---

Warum?

- Ressourcen freigeben
- Speicher sparen
- Dateien korrekt schließen

---

# Best Practice

```
öffnen

↓

lesen

↓

schließen
```

Immer diese Reihenfolge.

---

# Kapitel 70

# fgets()

Liest genau **eine Zeile**.

Datei

```
Max

Lisa

Tom
```

PHP

```php
$datei = fopen("namen.txt","r");

echo fgets($datei);

fclose($datei);
```

Ausgabe

```
Max
```

---

## Mehrere Zeilen

```php
$datei = fopen("namen.txt","r");

echo fgets($datei);

echo fgets($datei);

echo fgets($datei);

fclose($datei);
```

Ausgabe

```
Max

Lisa

Tom
```

---

# Kapitel 71

# feof()

EOF bedeutet

```
End Of File
```

Mit `feof()` erkennt PHP das Dateiende.

---

## Beispiel

```php
$datei = fopen("namen.txt","r");

while(!feof($datei)){

    echo fgets($datei);

}

fclose($datei);
```

---

## Ablauf

```
Datei geöffnet

↓

EOF erreicht?

↓

Nein

↓

Zeile lesen

↓

wiederholen

↓

EOF erreicht

↓

Datei schließen
```

---

# Kapitel 72

# file()

Mit `file()` wird die komplette Datei eingelesen.

```php
$zeilen = file("namen.txt");

print_r($zeilen);
```

Ergebnis

```php
Array
(
    [0] => Max
    [1] => Lisa
    [2] => Tom
)
```

---

## Verarbeitung

```php
foreach($zeilen as $zeile){

    echo trim($zeile);

    echo "<br>";

}
```

---

Wann verwenden?

- kleine Dateien
- einfache Verarbeitung

---

# Kapitel 73

# file_get_contents()

Liest den gesamten Inhalt.

```php
$text = file_get_contents("test.txt");

echo $text;
```

---

Datei

```
Hallo

PHP

IHK
```

Ausgabe

```
Hallo

PHP

IHK
```

---

Vorteil

Sehr einfach.

Nachteil

Große Dateien benötigen viel Speicher.

---

# Kapitel 74

# file_put_contents()

Schreibt Daten in eine Datei.

```php
file_put_contents(

    "test.txt",

    "Hallo Welt"

);
```

Dateiinhalt

```
Hallo Welt
```

---

Bestehende Datei

↓

wird überschrieben.

---

# Anhängen

```php
file_put_contents(

    "log.txt",

    "Neue Zeile\n",

    FILE_APPEND

);
```

Jetzt bleibt der bisherige Inhalt erhalten.

---

# Kapitel 75

# CSV-Dateien

CSV

```
Comma Separated Values
```

Beispiel

```
Max,Mustermann,35

Lisa,Müller,28
```

---

CSV einlesen

```php
$zeilen = file("kunden.csv");

foreach($zeilen as $zeile){

    $daten = explode(",", trim($zeile));

    print_r($daten);

}
```

---

Ergebnis

```
Array

(

Max

Mustermann

35

)
```

---

# Kapitel 76

# Logdateien

Typisches Log

```
1661156269 Max Mustermann 192.168.178.42 google.de granted

1661156577 Erika Mustermann 192.168.178.47 youtube.de denied
```

---

Verarbeitung

```php
$zeilen = file("log.txt");

foreach($zeilen as $zeile){

    echo htmlspecialchars($zeile);

}
```

---

Später werden wir daraus Objekte erzeugen.

---

# Kapitel 77

# Datei Zeile für Zeile verarbeiten

```php
$datei = fopen("kunden.csv","r");

while(!feof($datei)){

    $zeile = fgets($datei);

    echo htmlspecialchars($zeile);

}

fclose($datei);
```

---

Warum?

Für große Dateien deutlich besser als

```php
file()
```

---

# Mini-Projekt

## Besucherprotokoll

Jeder Besucher soll gespeichert werden.

Datei

```
log.txt
```

Eintrag

```
2026-07-16 10:35 Max Mustermann
```

PHP

```php
$name = "Max Mustermann";

$eintrag = date("Y-m-d H:i:s");

$eintrag .= " ";

$eintrag .= $name;

$eintrag .= PHP_EOL;

file_put_contents(

    "log.txt",

    $eintrag,

    FILE_APPEND

);
```

---

# Typische IHK-Aufgabe

Gegeben ist

```
kunden.csv

Max,Mustermann,35

Lisa,Müller,28
```

Erstellen Sie ein Programm,

welches

- Datei einliest
- jede Zeile verarbeitet
- Name und Alter ausgibt

---

## Musterlösung

```php
$zeilen = file("kunden.csv");

foreach($zeilen as $zeile){

    $daten = explode(",", trim($zeile));

    echo $daten[0];

    echo " ";

    echo $daten[2];

    echo "<br>";

}
```

---

# Best Practices

✓ Immer prüfen, ob eine Datei geöffnet werden konnte.

✓ Dateien nach der Verarbeitung schließen.

✓ Große Dateien mit `fgets()` lesen.

✓ Kleine Dateien mit `file()` oder `file_get_contents()` einlesen.

✓ Beim Schreiben `FILE_APPEND` verwenden, wenn bestehende Daten erhalten bleiben sollen.

✓ Benutzereingaben vor der Ausgabe mit `htmlspecialchars()` schützen.

---

# Prüfungsfallen (IHK)

❌ Datei öffnen und `fclose()` vergessen.

❌ `file_put_contents()` ohne `FILE_APPEND` verwenden → Datei wird überschrieben.

❌ CSV-Zeilen ohne `trim()` verarbeiten → Zeilenumbrüche bleiben erhalten.

❌ Große Logdateien komplett mit `file()` laden.

---

# Kapitel 78

# Was ist eine CSV-Datei?

CSV bedeutet

```
Comma Separated Values
```

Eigentlich muss das Trennzeichen nicht unbedingt ein Komma sein.

Sehr häufig werden verwendet

```
,

;

Tabulator
```

Deutschland

```
Max;Mustermann;35
```

USA

```
Max,Mustermann,35
```

---

# Aufbau

```
Vorname;Nachname;Alter

Max;Mustermann;35

Lisa;Müller;28

Tom;Schmidt;41
```

---

# Kapitel 79

# fgetcsv()

Die professionelle Methode zum Lesen von CSV-Dateien.

Syntax

```php
fgetcsv($datei, 0, ";");
```

Parameter

| Parameter | Bedeutung                       |
|-----------|---------------------------------|
| Datei     | Dateihandle                     |
| 0         | maximale Länge (0 = unbegrenzt) |
| ;         | Trennzeichen                    |

---

## Beispiel

Datei

```
Max;Mustermann;35
```

PHP

```php
$datei = fopen("kunden.csv","r");

$daten = fgetcsv($datei,0,";");

print_r($daten);

fclose($datei);
```

Ergebnis

```
Array
(
    [0] => Max
    [1] => Mustermann
    [2] => 35
)
```

---

# Warum fgetcsv?

Viele Anfänger schreiben

```php
explode(";", $zeile);
```

Das funktioniert meistens.

Aber

```
"Müller; GmbH";Berlin
```

würde falsch zerlegt werden.

fgetcsv()

kennt dagegen

- Anführungszeichen
- Sonderzeichen
- CSV-Regeln

Deshalb gilt

> Verwenden Sie immer `fgetcsv()`, wenn Sie CSV-Dateien lesen.

---

# Kapitel 80

# Ganze CSV-Datei lesen

```php
$datei = fopen("kunden.csv","r");

while(($daten = fgetcsv($datei,0,";")) !== false){

    print_r($daten);

}

fclose($datei);
```

---

Ablauf

```
Datei öffnen

↓

Zeile lesen

↓

Array erzeugen

↓

verarbeiten

↓

nächste Zeile

↓

Dateiende

↓

Datei schließen
```

---

# Kapitel 81

# fputcsv()

CSV-Dateien schreiben

```php
$datei = fopen("kunden.csv","w");

$kunde = [

    "Max",

    "Mustermann",

    35

];

fputcsv($datei,$kunde,";");

fclose($datei);
```

Datei

```
Max;Mustermann;35
```

---

Mehrere Datensätze

```php
$datei = fopen("kunden.csv","w");

fputcsv($datei,["Max","Mustermann",35],";");

fputcsv($datei,["Lisa","Müller",28],";");

fputcsv($datei,["Tom","Schmidt",41],";");

fclose($datei);
```

---

# Kapitel 82

# Objektorientierte Verarbeitung

Gegeben

```
Max;Mustermann;35
```

Statt

```php
$daten[0]

$daten[1]

$daten[2]
```

erzeugen wir Objekte.

---

## Klasse Kunde

```php
class Kunde
{

    public function __construct(

        public string $vorname,

        public string $nachname,

        public int $alter

    ){}

}
```

---

Einlesen

```php
$daten = fgetcsv($datei,0,";");

$kunde = new Kunde(

    $daten[0],

    $daten[1],

    (int)$daten[2]

);
```

Jetzt besitzt man

```php
$kunde->vorname

$kunde->nachname

$kunde->alter
```

Das ist wesentlich lesbarer.

---

# Kapitel 83

# CSV exportieren

Objekte können wieder geschrieben werden.

```php
$datei = fopen("kunden.csv","w");

foreach($kunden as $kunde){

    fputcsv(

        $datei,

        [

            $kunde->vorname,

            $kunde->nachname,

            $kunde->alter

        ],

        ";"

    );

}

fclose($datei);
```

---

# Kapitel 84

# Praxisprojekt

## Logdatei

```
1661156269 Max Mustermann 192.168.178.42 google.de granted

1661156577 Erika Mustermann 192.168.178.47 youtube.de denied
```

Gesucht

```
short.csv

Max Mustermann,192.168.178.42,granted

Erika Mustermann,192.168.178.47,denied
```

und

```
long.csv

2022-08-22T08:22:57,

Max Mustermann,

192.168.178.42,

google.de,

granted
```

---

# Objekt

```php
class Eintrag
{

    public function __construct(

        public int $timestamp,

        public string $username,

        public string $ip,

        public string $url,

        public string $status

    ){}

}
```

---

# Exportmethoden

```php
public function toShortCsv(): array
{
    return [

        $this->username,

        $this->ip,

        $this->status

    ];
}
```

---

```php
public function toLongCsv(): array
{

    return [

        date(

            "Y-m-d\\TH:i:s",

            $this->timestamp

        ),

        $this->username,

        $this->ip,

        $this->url,

        $this->status

    ];

}
```

---

# Schreiben

```php
$short = fopen("short.csv","w");

$long = fopen("long.csv","w");

foreach($eintraege as $eintrag){

    fputcsv(

        $short,

        $eintrag->toShortCsv(),

        ","

    );

    fputcsv(

        $long,

        $eintrag->toLongCsv(),

        ","

    );

}

fclose($short);

fclose($long);
```

---

# Warum diese Lösung?

Sie trennt

```
Einlesen

↓

Objekt

↓

Export
```

Damit gilt das

**Single Responsibility Principle (SRP)**.

Die Klasse kennt ihre Daten.

Der Service verarbeitet Dateien.

---

# Kapitel 85

# Typische IHK-Aufgabe

Gegeben ist

```
produkte.csv

Notebook;999

Monitor;249

Maus;39
```

Berechnen Sie

- Summe

- Durchschnitt

- teuerstes Produkt

---

## Musterlösung

```php
$datei = fopen("produkte.csv","r");

$summe = 0;

$max = 0;

while(($daten = fgetcsv($datei,0,";")) !== false){

    $preis = (float)$daten[1];

    $summe += $preis;

    if($preis > $max){

        $max = $preis;

    }

}

fclose($datei);

echo $summe;

echo $max;
```

---

# Best Practices

✓ Verwenden Sie `fgetcsv()` statt `explode()`.

✓ Verwenden Sie `fputcsv()` statt eigener String-verkettung.

✓ Nutzen Sie Klassen statt numerischer Array-Indizes.

✓ Trennen Sie Dateioperationen von Geschäftslogik.

✓ Verwenden Sie `foreach` für Objektlisten.

---

# Prüfungsfallen (IHK)

❌ CSV mit `explode()` zerlegen.

❌ `fclose()` vergessen.

❌ Zahlen nicht in `int` oder `float` umwandeln.

❌ Datei nicht auf `false` prüfen.

❌ Arrays statt Objekte verwenden, obwohl Klassen gefordert sind.

---

# Mini-Projekt

## Kundenverwaltung

Erstellen Sie

- Klasse `Kunde`
- `kunden.csv`
- Import
- Export
- Ausgabe aller Kunden

Zusatzaufgabe

Berechnen Sie

- Durchschnittsalter
- ältesten Kunden
- jüngsten Kunden

---

# Kapitel 86

# Was ist Objektorientierung?

Bei der objektorientierten Programmierung wird ein Programm aus **Objekten** aufgebaut.

Ein Objekt besitzt

- Eigenschaften (Attribute)
- Verhalten (Methoden)

Beispiel:

```
Auto
```

Eigenschaften

```
Marke

Modell

Farbe

Kilometerstand
```

Methoden

```
starten()

bremsen()

tanken()

fahren()
```

---

## Darstellung

```
                Auto
          +----------------+
          | Marke          |
          | Modell         |
          | Farbe          |
          +----------------+
          | starten()      |
          | fahren()       |
          | bremsen()      |
          +----------------+
```

---

# Warum OOP?

Früher wurden Programme oft rein prozedural geschrieben.

Beispiel

```php
$vorname = "Max";

$nachname = "Mustermann";

$alter = 35;
```

Mit OOP

```php
$kunde->vorname

$kunde->nachname

$kunde->alter
```

Alle Informationen gehören logisch zusammen.

---

# Vorteile

✓ übersichtlicher

✓ wiederverwendbar

✓ leichter testbar

✓ besser wartbar

✓ besser erweiterbar

Deshalb wird moderne Software fast ausschließlich objektorientiert entwickelt.

---

# Kapitel 87

# Klassen

Eine Klasse ist der **Bauplan** eines Objektes.

Vergleich

```
Bauplan

↓

Haus
```

oder

```
Klasse

↓

Objekt
```

---

## Beispiel

```php
class Kunde
{

}
```

Diese Klasse besitzt noch keine Eigenschaften.

---

# Eigenschaften

```php
class Kunde
{

    public string $vorname;

    public string $nachname;

    public int $alter;

}
```

---

# Objekt erzeugen

```php
$kunde = new Kunde();
```

Jetzt existiert ein Objekt.

---

# Werte setzen

```php
$kunde->vorname = "Max";

$kunde->nachname = "Mustermann";

$kunde->alter = 35;
```

---

# Werte ausgeben

```php
echo $kunde->vorname;
```

Ausgabe

```
Max
```

---

# Klasse vs. Objekt

```
Klasse

↓

Bauplan
```

```
Objekt

↓

konkrete Instanz
```

---

Beispiel

```
Klasse

Auto
```

Objekte

```
BMW

Audi

VW
```

Alle basieren auf derselben Klasse.

---

# Kapitel 88

# Methoden

Methoden sind Funktionen innerhalb einer Klasse.

---

## Beispiel

```php
class Kunde
{

    public string $vorname;

    public function hallo()
    {

        echo "Hallo!";

    }

}
```

---

Aufruf

```php
$kunde = new Kunde();

$kunde->hallo();
```

Ausgabe

```
Hallo!
```

---

# Eigenschaften und Methoden kombinieren

```php
class Kunde
{

    public string $vorname;

    public function begruessung()
    {

        echo "Hallo ";

        echo $this->vorname;

    }

}
```

---

Benutzung

```php
$kunde = new Kunde();

$kunde->vorname = "Max";

$kunde->begruessung();
```

Ausgabe

```
Hallo Max
```

---

# Kapitel 89

# $this

`$this` verweist auf das aktuelle Objekt.

Beispiel

```php
$this->vorname
```

bedeutet

```
der Vorname dieses Objektes
```

---

Beispiel

```php
class Kunde
{

    public string $vorname;

    public function anzeigen()
    {

        echo $this->vorname;

    }

}
```

---

Ohne `$this`

```php
echo $vorname;
```

❌ Fehler

Warum?

PHP weiß nicht,

welche Variable gemeint ist.

---

Mit

```php
$this->vorname
```

weiß PHP,

dass die Eigenschaft des aktuellen Objekts gemeint ist.

---

# Kapitel 90

# Konstruktor

Ein Konstruktor wird automatisch beim Erzeugen eines Objekts ausgeführt.

---

Syntax

```php
public function __construct()
{

}
```

---

Beispiel

```php
class Kunde
{

    public function __construct()
    {

        echo "Neuer Kunde.";

    }

}
```

---

Aufruf

```php
$kunde = new Kunde();
```

Ausgabe

```
Neuer Kunde.
```

---

# Konstruktor mit Parametern

```php
class Kunde
{

    public string $vorname;

    public function __construct($vorname)
    {

        $this->vorname = $vorname;

    }

}
```

---

Verwendung

```php
$kunde = new Kunde("Max");
```

Jetzt besitzt das Objekt bereits alle Daten.

---

# Moderne Schreibweise (PHP 8)

```php
class Kunde
{

    public function __construct(

        public string $vorname,

        public string $nachname,

        public int $alter

    ){

    }

}
```

---

Objekt erzeugen

```php
$kunde = new Kunde(

    "Max",

    "Mustermann",

    35

);
```

Diese Schreibweise nennt man

**Constructor Property Promotion**.

Sie wird heute fast überall verwendet.

---

# Kapitel 91

# Mehrere Objekte

```php
$kunde1 = new Kunde(

    "Max",

    "Mustermann",

    35

);

$kunde2 = new Kunde(

    "Lisa",

    "Müller",

    28

);
```

---

Darstellung

```
Kunde

↓

Objekt 1

Max

↓

Objekt 2

Lisa
```

Die Objekte sind unabhängig voneinander.

---

# Kapitel 92

# UML-Klassendiagramm

```
+----------------------+
| Kunde                |
+----------------------+
| +vorname : string    |
| +nachname : string   |
| +alter : int         |
+----------------------+
| +begruessung()       |
+----------------------+
```

---

Bedeutung

```
+

↓

public
```

```
-

↓

private
```

```
#

↓

protected
```

Diese Symbole solltest du für die IHK kennen.

---

# Mini-Projekt

## Klasse Buch

Erstellen Sie eine Klasse

```
Buch
```

Eigenschaften

- Titel
- Autor
- Preis

Methoden

```
anzeigen()
```

---

## Musterlösung

```php
class Buch
{

    public function __construct(

        public string $titel,

        public string $autor,

        public float $preis

    ){

    }

    public function anzeigen(): void
    {

        echo $this->titel;

        echo "<br>";

        echo $this->autor;

        echo "<br>";

        echo $this->preis;

    }

}

$buch = new Buch(

    "Clean Code",

    "Robert C. Martin",

    39.99

);

$buch->anzeigen();
```

---

# Typische IHK-Aufgabe

**Frage:**

Was ist der Unterschied zwischen einer Klasse und einem Objekt?

---

**Antwort:**

Eine **Klasse** ist der Bauplan.

Ein **Objekt** ist eine konkrete Instanz dieser Klasse.

---

# Prüfungsfallen (IHK)

❌ Klasse und Objekt verwechseln.

❌ Eigenschaften ohne `$this` verwenden.

❌ Konstruktor falsch benennen (`construct` statt `__construct`).

❌ Objekt ohne `new` erzeugen.

❌ Eigenschaften nicht initialisieren.

---

# Best Practices

✓ Constructor Property Promotion verwenden (PHP 8)

✓ Klassen klein halten

✓ Eine Klasse sollte nur eine Verantwortung besitzen (Single Responsibility Principle)

✓ Aussagekräftige Klassennamen verwenden

✓ Methoden mit sprechenden Namen versehen

---

# Kapitel 93

# Sichtbarkeiten

In PHP besitzt jede Eigenschaft und jede Methode eine Sichtbarkeit.

Es gibt genau drei Möglichkeiten.

| Schlüsselwort | Zugriff                  |
|---------------|--------------------------|
| public        | überall                  |
| private       | nur innerhalb der Klasse |
| protected     | Klasse und Unterklassen  |

---

## public

```php
class Kunde
{
    public string $vorname;
}

$kunde = new Kunde();

$kunde->vorname = "Max";

echo $kunde->vorname;
```

Das funktioniert problemlos.

---

## private

```php
class Kunde
{
    private string $vorname;
}
```

Jetzt funktioniert

```php
$kunde->vorname = "Max";
```

nicht mehr.

PHP meldet

```
Fatal Error

Cannot access private property
```

---

Warum?

Weil nur die Klasse selbst auf private Eigenschaften zugreifen darf.

---

# Kapitel 94

# Kapselung (Encapsulation)

Kapselung bedeutet:

> Daten werden vor direktem Zugriff geschützt.

Statt

```
Objekt

↓

Eigenschaft ändern
```

arbeitet man über Methoden.

---

Beispiel

```php
class Kunde
{

    private string $vorname;

    public function setVorname(string $vorname): void
    {
        $this->vorname = $vorname;
    }

    public function getVorname(): string
    {
        return $this->vorname;
    }

}
```

---

Verwendung

```php
$kunde = new Kunde();

$kunde->setVorname("Max");

echo $kunde->getVorname();
```

---

Warum Getter und Setter?

Die Klasse kontrolliert ihre Daten.

Beispiel

```php
public function setAlter(int $alter): void
{
    if($alter >= 0){

        $this->alter = $alter;

    }
}
```

Ungültige Werte werden dadurch verhindert.

---

# Kapitel 95

# Getter und Setter

Getter

```
liefert Daten
```

Setter

```
ändert Daten
```

---

Beispiel

```php
private float $preis;
```

Getter

```php
public function getPreis(): float
{
    return $this->preis;
}
```

Setter

```php
public function setPreis(float $preis): void
{
    if($preis >= 0){

        $this->preis = $preis;

    }
}
```

---

# Wann Getter?

Wenn Daten gelesen werden sollen.

---

# Wann Setter?

Wenn Daten verändert werden dürfen.

---

Merksatz

Nicht jede Eigenschaft benötigt einen Setter.

---

# Kapitel 96

# readonly

Seit PHP 8.1 existiert

```php
readonly
```

Beispiel

```php
class Kunde
{

    public function __construct(

        public readonly int $id,

        public string $name

    ){

    }

}
```

---

Verwendung

```php
$kunde = new Kunde(

    1,

    "Max"

);
```

---

Später

```php
$kunde->id = 10;
```

führt zu

```
Fatal Error
```

---

Warum?

Eine ID darf normalerweise nicht verändert werden.

---

# Kapitel 97

# static

Normalerweise gehören Eigenschaften zu einem Objekt.

```
Objekt

↓

Eigenschaft
```

---

Manchmal soll eine Eigenschaft jedoch zur gesamten Klasse gehören.

Dafür gibt es

```php
static
```

---

Beispiel

```php
class Kunde
{

    public static int $anzahl = 0;

    public function __construct()
    {
        self::$anzahl++;
    }

}
```

---

Benutzung

```php
new Kunde();

new Kunde();

new Kunde();

echo Kunde::$anzahl;
```

Ausgabe

```
3
```

---

Typische Verwendung

- Besucherzähler
- Objektanzahl
- Cache
- Hilfsmethoden

---

# Kapitel 98

# Klassenkonstanten

Konstanten verändern sich niemals.

```php
class Rechner
{

    public const PI = 3.1415926535;

}
```

---

Benutzung

```php
echo Rechner::PI;
```

---

Unterschied

Variable

```
änderbar
```

Konstante

```
nicht änderbar
```

---

# Kapitel 99

# final

Mit

```php
final
```

verbietet man Vererbung.

---

Beispiel

```php
final class Datenbank
{

}
```

---

Jetzt ist verboten

```php
class MeineDB extends Datenbank
{

}
```

---

Auch Methoden können final sein.

```php
final public function speichern()
{

}
```

Diese Methode darf nicht überschrieben werden.

---

# Kapitel 100

# UML erweitern

```
+---------------------------+
| Kunde                     |
+---------------------------+
| - id : int                |
| - name : string           |
| - alter : int             |
+---------------------------+
| + getName() : string      |
| + setName() : void        |
| + getAlter() : int        |
| + setAlter() : void       |
+---------------------------+
```

---

Legende

```
+

public
```

```
-

private
```

```
#

protected
```

---

# Kapitel 101

# Constructor + readonly

Sehr moderne Schreibweise

```php
class Produkt
{

    public function __construct(

        public readonly int $id,

        private string $name,

        private float $preis

    ){

    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPreis(): float
    {
        return $this->preis;
    }

}
```

Diese Schreibweise wird heute häufig in Laravel und Symfony verwendet.

---

# Mini-Projekt

## Klasse Bankkonto

Erstellen Sie

Eigenschaften

- Kontonummer
- Kontostand

Regeln

- Kontonummer readonly
- Kontostand private

Methoden

```
einzahlen()

abheben()

getKontostand()
```

---

## Musterlösung

```php
class Bankkonto
{

    public function __construct(

        public readonly string $kontonummer,

        private float $kontostand

    ){

    }

    public function einzahlen(float $betrag): void
    {
        if($betrag > 0){

            $this->kontostand += $betrag;

        }
    }

    public function abheben(float $betrag): void
    {
        if($betrag > 0 && $betrag <= $this->kontostand){

            $this->kontostand -= $betrag;

        }
    }

    public function getKontostand(): float
    {
        return $this->kontostand;
    }

}
```

---

# Typische IHK-Fragen

## Warum private?

Antwort

```
Schutz der Daten

↓

Kapselung

↓

Kontrollierter Zugriff
```

---

## Wann readonly?

Antwort

Wenn sich der Wert nach der Erstellung des Objektes nicht mehr ändern darf.

Beispiele

- ID
- Personalnummer
- Rechnungsnummer

---

## Wann static?

Antwort

Wenn eine Eigenschaft oder Methode nicht zu einem Objekt, sondern zur gesamten Klasse gehört.

---

# Prüfungsfallen

❌ `private` und `protected` verwechseln.

❌ `readonly` nachträglich ändern.

❌ `static` mit `$this` aufrufen.

Falsch

```php
$this->anzahl
```

Richtig

```php
self::$anzahl
```

---

❌ Getter vergessen, obwohl Eigenschaft private ist.

---

# Best Practices

✓ Eigenschaften möglichst `private` deklarieren.

✓ Nur notwendige Setter bereitstellen.

✓ Immutable Daten mit `readonly` modellieren.

✓ Konstanten als `public const` definieren.

✓ `static` sparsam einsetzen.

✓ Klassen klein und fokussiert halten (SRP).

---

# Kapitel 102

# Was ist Vererbung?

Vererbung bedeutet,

dass eine Klasse Eigenschaften und Methoden einer anderen Klasse übernimmt.

Dadurch müssen gemeinsame Funktionen nicht mehrfach programmiert werden.

---

## Beispiel

Ohne Vererbung

```
Auto

↓

Marke

Farbe

starten()

stoppen()
```

```
Motorrad

↓

Marke

Farbe

starten()

stoppen()
```

Beide Klassen besitzen identischen Code.

---

Mit Vererbung

```
Fahrzeug

↓

Auto

↓

Motorrad
```

Gemeinsamer Code existiert nur noch einmal.

---

# Vorteile

✓ weniger Code

✓ bessere Wartbarkeit

✓ höhere Wiederverwendbarkeit

✓ klare Hierarchie

---

# Kapitel 103

# extends

Mit `extends` wird eine Klasse von einer anderen Klasse abgeleitet.

---

## Basisklasse

```php
class Fahrzeug
{

    public string $marke;

    public function starten(): void
    {
        echo "Motor gestartet";
    }

}
```

---

## Unterklasse

```php
class Auto extends Fahrzeug
{

}
```

Jetzt besitzt

```php
Auto
```

automatisch

- marke
- starten()

---

Benutzung

```php
$auto = new Auto();

$auto->marke = "BMW";

$auto->starten();
```

Ausgabe

```
Motor gestartet
```

---

# Darstellung

```
Fahrzeug

↓

Auto
```

Auto besitzt alles,

was Fahrzeug besitzt.

---

# Kapitel 104

# Eigene Eigenschaften hinzufügen

Unterklassen dürfen zusätzliche Eigenschaften besitzen.

```php
class Auto extends Fahrzeug
{

    public int $tueren;

}
```

---

Benutzung

```php
$auto = new Auto();

$auto->marke = "Audi";

$auto->tueren = 4;
```

---

Jetzt besitzt Auto

```
Marke

+

Türen
```

---

# Kapitel 105

# Methoden überschreiben (Override)

Eine Unterklasse darf Methoden neu definieren.

---

Basisklasse

```php
class Fahrzeug
{

    public function starten(): void
    {
        echo "Motor gestartet";
    }

}
```

---

Unterklasse

```php
class Elektroauto extends Fahrzeug
{

    public function starten(): void
    {
        echo "Elektromotor aktiviert";
    }

}
```

---

Benutzung

```php
$auto = new Elektroauto();

$auto->starten();
```

Ausgabe

```
Elektromotor aktiviert
```

Die Methode der Basisklasse wird überschrieben.

---

# Kapitel 106

# parent

Manchmal soll zunächst die Methode der Oberklasse ausgeführt werden.

Dafür existiert

```php
parent::
```

---

Beispiel

```php
class Elektroauto extends Fahrzeug
{

    public function starten(): void
    {

        parent::starten();

        echo "<br>";

        echo "Batterieprüfung";

    }

}
```

Ausgabe

```
Motor gestartet

Batterieprüfung
```

---

# Kapitel 107

# Konstruktoren bei Vererbung

Basisklasse

```php
class Fahrzeug
{

    public function __construct(

        public string $marke

    ){

    }

}
```

---

Unterklasse

```php
class Auto extends Fahrzeug
{

    public function __construct(

        string $marke,

        public int $tueren

    ){

        parent::__construct($marke);

    }

}
```

---

Verwendung

```php
$auto = new Auto(

    "BMW",

    4

);
```

---

# Kapitel 108

# Polymorphie

Ein Objekt einer Unterklasse kann wie ein Objekt der Oberklasse behandelt werden.

---

Beispiel

```php
class Fahrzeug
{

}
```

```php
class Auto extends Fahrzeug
{

}
```

```php
class Motorrad extends Fahrzeug
{

}
```

---

Jetzt funktioniert

```php
$fahrzeuge = [

    new Auto(),

    new Motorrad()

];
```

---

Noch besser

```php
function starten(Fahrzeug $fahrzeug): void
{

    $fahrzeug->starten();

}
```

Jetzt können alle Fahrzeugtypen verwendet werden.

---

Polymorphie bedeutet

```
gleiche Schnittstelle

↓

unterschiedliches Verhalten
```

---

# Kapitel 109

# abstract

Manche Klassen sollen niemals direkt erzeugt werden.

Dafür existiert

```php
abstract
```

---

Beispiel

```php
abstract class Tier
{

}
```

Jetzt ist verboten

```php
new Tier();
```

---

Erlaubt

```php
class Hund extends Tier
{

}
```

---

```php
$hund = new Hund();
```

---

Warum?

Ein allgemeines Tier existiert selten.

Ein Hund dagegen schon.

---

# Kapitel 110

# Abstrakte Methoden

```php
abstract class Tier
{

    abstract public function geraeusch(): void;

}
```

---

Unterklasse

```php
class Hund extends Tier
{

    public function geraeusch(): void
    {
        echo "Wuff";
    }

}
```

---

Katze

```php
class Katze extends Tier
{

    public function geraeusch(): void
    {
        echo "Miau";
    }

}
```

---

Jetzt garantiert die Oberklasse,

dass jede Unterklasse

```
geraeusch()
```

implementiert.

---

# Kapitel 111

# UML

```
           Fahrzeug
         +------------+
         | marke      |
         +------------+
         | starten()  |
         +------------+
               ▲
               │
      -------------------
      │                 │
    Auto           Motorrad
```

Der Pfeil zeigt

**zur Oberklasse**.

---

# Mini-Projekt

## Mitarbeiter

Basisklasse

```php
abstract class Mitarbeiter
{

    public function __construct(

        public string $name

    ){

    }

    abstract public function gehalt(): float;

}
```

---

Unterklasse

```php
class Entwickler extends Mitarbeiter
{

    public function gehalt(): float
    {
        return 65000;
    }

}
```

---

Weitere Klasse

```php
class Tester extends Mitarbeiter
{

    public function gehalt(): float
    {
        return 52000;
    }

}
```

---

Benutzung

```php
$mitarbeiter = [

    new Entwickler("Max"),

    new Tester("Lisa")

];

foreach($mitarbeiter as $person){

    echo $person->name;

    echo " ";

    echo $person->gehalt();

    echo "<br>";

}
```

---

Ausgabe

```
Max 65000

Lisa 52000
```

---

# Typische IHK-Fragen

## Wann verwendet man Vererbung?

Antwort

Wenn mehrere Klassen gemeinsame Eigenschaften oder Methoden besitzen.

---

## Was bedeutet Override?

Antwort

Eine Unterklasse ersetzt die Implementierung der Oberklasse.

---

## Was bedeutet abstract?

Antwort

Die Klasse dient nur als Vorlage und kann nicht direkt instanziiert werden.

---

## Was bedeutet Polymorphie?

Antwort

Objekte verschiedener Unterklassen können über denselben Oberklassentyp behandelt werden.

---

# Prüfungsfallen

❌ `extends` und `implements` verwechseln.

❌ `parent::__construct()` vergessen.

❌ Abstrakte Klassen instanziieren.

❌ Abstrakte Methoden nicht implementieren.

❌ Vererbung verwenden, obwohl keine "ist-ein"-Beziehung besteht.

---

# Best Practices

✓ Vererbung nur bei echten "Ist-ein"-Beziehungen einsetzen.

✓ Gemeinsame Logik in die Oberklasse verschieben.

✓ Überschreiben nur bei abweichendem Verhalten.

✓ Abstrakte Klassen für gemeinsame Basiskonzepte nutzen.

✓ Komposition bevorzugen, wenn keine echte Vererbung vorliegt.

---

# Kapitel 112

# Was ist ein Interface?

Ein Interface beschreibt ausschließlich

- welche Methoden vorhanden sein müssen

nicht aber,

wie diese Methoden implementiert werden.

Ein Interface enthält also einen **Vertrag** (Contract).

---

## Vergleich

### Klasse

```
Ich weiß,

WAS

und

WIE
```

---

### Interface

```
Ich weiß nur,

WAS vorhanden sein muss.
```

---

# Beispiel

Jedes Fahrzeug kann starten.

Wie genau?

Das entscheidet jedes Fahrzeug selbst.

---

```
Startbar

↓

starten()
```

```
Auto

↓

starten()
```

```
Motorrad

↓

starten()
```

```
Flugzeug

↓

starten()
```

---

# Kapitel 113

# Interface erstellen

```php
interface Startbar
{

    public function starten(): void;

}
```

---

Ein Interface besitzt

- keine Attribute
- keine Konstruktoren
- normalerweise keine Implementierung

Es beschreibt lediglich Methoden.

---

# Kapitel 114

# implements

Eine Klasse übernimmt ein Interface mit

```php
implements
```

---

```php
interface Startbar
{

    public function starten(): void;

}
```

---

```php
class Auto implements Startbar
{

    public function starten(): void
    {

        echo "Auto startet.";

    }

}
```

---

Verwendung

```php
$auto = new Auto();

$auto->starten();
```

Ausgabe

```
Auto startet.
```

---

# Was passiert,

wenn eine Methode fehlt?

```php
class Auto implements Startbar
{

}
```

PHP meldet

```
Fatal Error

Class Auto contains
1 abstract method...
```

Warum?

Weil jede Methode des Interfaces implementiert werden muss.

---

# Kapitel 115

# Mehrere Klassen

```php
interface Druckbar
{

    public function drucken(): void;

}
```

---

```php
class Rechnung implements Druckbar
{

    public function drucken(): void
    {

        echo "Rechnung";

    }

}
```

---

```php
class Vertrag implements Druckbar
{

    public function drucken(): void
    {

        echo "Vertrag";

    }

}
```

---

Jetzt kann jede Klasse unterschiedlich arbeiten.

---

# Kapitel 116

# Polymorphie mit Interfaces

```php
function ausgeben(Druckbar $objekt)
{

    $objekt->drucken();

}
```

---

Jetzt funktioniert

```php
ausgeben(new Rechnung());

ausgeben(new Vertrag());
```

Das ist Polymorphie.

---

# Kapitel 117

# Mehrere Interfaces

Im Gegensatz zur Vererbung

kann eine Klasse

mehrere Interfaces implementieren.

---

```php
interface Druckbar
{

    public function drucken(): void;

}
```

---

```php
interface Speicherbar
{

    public function speichern(): void;

}
```

---

```php
class Dokument

implements

Druckbar,

Speicherbar
{

    public function drucken(): void
    {

        echo "Druck";

    }

    public function speichern(): void
    {

        echo "Speichern";

    }

}
```

---

Darstellung

```
Druckbar

↘

 Dokument

↗

Speicherbar
```

---

# Kapitel 118

# Interface oder Vererbung?

Vererbung

```
IST-EIN

Auto

ist ein

Fahrzeug
```

---

Interface

```
KANN ETWAS

Auto

kann

starten
```

---

Merksatz

Vererbung beschreibt

```
Beziehungen
```

Interfaces beschreiben

```
Fähigkeiten
```

---

# Kapitel 119

# Dependency Inversion Principle (D)

Eines der SOLID-Prinzipien.

Falsch

```php
class RechnungService
{

    private PDFDrucker $drucker;

}
```

Jetzt funktioniert der Service

nur mit PDF.

---

Besser

```php
class RechnungService
{

    private Druckbar $drucker;

}
```

Jetzt können verwendet werden

- PDF
- Word
- HTML
- Drucker
- Testobjekte

ohne den Service zu verändern.

---

# Kapitel 120

# UML

Interface

```
+----------------+
| <<interface>>  |
| Druckbar       |
+----------------+
| + drucken()    |
+----------------+
```

---

Klasse

```
      <<interface>>

        Druckbar

            ▲

            │

      ..............

            │

       Rechnung
```

Gestrichelte Linie

↓

implements

---

# Kapitel 121

# Interface vs. abstrakte Klasse

| Interface                  | Abstrakte Klasse           |
|----------------------------|----------------------------|
| Vertrag                    | gemeinsame Implementierung |
| keine Attribute            | Attribute erlaubt          |
| keine Konstruktoren        | Konstruktor erlaubt        |
| mehrere Interfaces möglich | nur eine Oberklasse        |
| beschreibt Fähigkeiten     | beschreibt Basisklassen    |

---

Merksatz

```
abstract

↓

gemeinsamer Code
```

```
interface

↓

gemeinsame Schnittstelle
```

---

# Kapitel 122

# Praxisbeispiel

Interface

```php
interface Exportierbar
{

    public function exportieren(): string;

}
```

---

CSV

```php
class CsvExport

implements Exportierbar
{

    public function exportieren(): string
    {

        return "CSV";

    }

}
```

---

JSON

```php
class JsonExport

implements Exportierbar
{

    public function exportieren(): string
    {

        return "JSON";

    }

}
```

---

Service

```php
class ExportService
{

    public function export(

        Exportierbar $export

    ): void
    {

        echo $export->exportieren();

    }

}
```

---

Benutzung

```php
$service = new ExportService();

$service->export(

    new CsvExport()

);

$service->export(

    new JsonExport()

);
```

Ausgabe

```
CSV

JSON
```

Der Service kennt

keine konkrete Klasse.

---

# Kapitel 123

# Mini-Projekt

Erstellen Sie

Interface

```php
Bezahlbar
```

Methoden

```php
bezahlen()
```

---

Klassen

```
PayPal

Kreditkarte

Überweisung
```

Alle implementieren

```
Bezahlbar
```

---

Service

```php
function bezahlen(

    Bezahlbar $zahlung

)
{
    $zahlung->bezahlen();
}
```

Dadurch können beliebig viele Zahlungsarten ergänzt werden.

---

# Typische IHK-Fragen

## Warum Interfaces?

Antwort

Zur Entkopplung von Klassen und zur Definition gemeinsamer Schnittstellen.

---

## Unterschied

implements

und

extends

---

Antwort

```
extends

↓

Vererbung
```

```
implements

↓

Interface
```

---

## Kann eine Klasse mehrere Interfaces besitzen?

Ja.

---

## Kann eine Klasse mehrere Oberklassen besitzen?

Nein.

PHP unterstützt keine Mehrfachvererbung.

---

# Prüfungsfallen

❌ Interface instanziieren.

```php
new Druckbar();
```

Nicht erlaubt.

---

❌ Methode vergessen.

Alle Methoden müssen implementiert werden.

---

❌ `extends` statt `implements` verwenden.

---

❌ Interface mit gemeinsamer Logik füllen.

Ein Interface beschreibt primär den Vertrag, nicht die Implementierung.

---

# Best Practices

✓ Gegen Interfaces programmieren.

✓ Nicht gegen konkrete Klassen programmieren.

✓ Interfaces klein halten (Interface Segregation Principle).

✓ Aussagekräftige Namen verwenden (`Exportierbar`, `Speicherbar`, `Druckbar`).

✓ Interfaces dort einsetzen, wo mehrere Implementierungen möglich sind.

---

# Kapitel 124

# Warum Namespaces?

Stellen Sie sich ein großes Projekt vor.

Es besitzt

```
100 Klassen
```

Vielleicht existieren sogar mehrere Klassen mit demselben Namen.

Beispiel

```
User
```

im Backend

und

```
User
```

im Frontend.

PHP könnte diese Klassen nicht unterscheiden.

Dafür existieren **Namespaces**.

---

## Vergleich

Windows

```
C:\Bilder\Urlaub\bild.jpg
```

Linux

```
/home/max/bilder/
```

Java

```
de.firma.service
```

PHP

```
App\Service
```

Namespaces funktionieren ähnlich wie Ordner.

---

# Kapitel 125

# Namespace erstellen

Datei

```
Kunde.php
```

```php
<?php

namespace App\Model;

class Kunde
{

}
```

Jetzt lautet der vollständige Name

```
App\Model\Kunde
```

---

# Objekt erzeugen

Ohne Import

```php
$kunde = new App\Model\Kunde();
```

Das funktioniert,

ist aber unübersichtlich.

---

# Kapitel 126

# use

Deshalb existiert

```php
use
```

---

```php
<?php

use App\Model\Kunde;

$kunde = new Kunde();
```

Jetzt muss der vollständige Namespace nicht mehr geschrieben werden.

---

Mehrere Klassen

```php
use App\Model\Kunde;

use App\Model\Adresse;

use App\Service\KundenService;
```

---

# Alias verwenden

```php
use App\Model\Kunde as Customer;
```

Nun kann geschrieben werden

```php
$kunde = new Customer();
```

Das ist hilfreich,

wenn zwei Klassen denselben Namen besitzen.

---

# Kapitel 127

# Projektstruktur

Professionelle Projekte verwenden meist eine ähnliche Struktur.

```
Projekt/

│

├── src/

│   ├── Model/

│   ├── Service/

│   ├── Repository/

│   └── Controller/

│

├── public/

│   └── index.php

│

├── vendor/

│

├── composer.json

│

└── README.md
```

---

Warum?

Jede Klasse besitzt ihren festen Platz.

Das verbessert

- Wartbarkeit
- Übersichtlichkeit
- Teamarbeit

---

# Kapitel 128

# include und require

PHP kann Dateien laden.

Es existieren vier Varianten.

```php
include
```

```php
require
```

```php
include_once
```

```php
require_once
```

---

## include

```php
include "kunde.php";
```

Existiert die Datei nicht,

läuft das Programm weiter.

PHP erzeugt lediglich eine Warnung.

---

## require

```php
require "kunde.php";
```

Existiert die Datei nicht,

wird das Programm sofort beendet.

---

Merksatz

```
include

↓

Warnung
```

```
require

↓

Fatal Error
```

---

# *_once

```php
require_once
```

lädt die Datei nur einmal.

Mehrfaches Einbinden wird verhindert.

---

Beispiel

```php
require_once "config.php";
```

Selbst wenn der Befehl mehrfach aufgerufen wird,

wird die Datei nur einmal geladen.

---

# Kapitel 129

# Autoloading

Früher

```php
require_once "Kunde.php";

require_once "Adresse.php";

require_once "Bestellung.php";

require_once "Produkt.php";

...
```

Bei großen Projekten entstanden hunderte solcher Zeilen.

---

Heute übernimmt das

**Autoloading**.

Nur die tatsächlich benötigten Klassen werden geladen.

---

# Kapitel 130

# PSR-4

PSR bedeutet

```
PHP Standards Recommendation
```

PSR-4 beschreibt,

wie Klassen automatisch gefunden werden.

---

Beispiel

Klasse

```php
namespace App\Model;

class Kunde
{

}
```

liegt in

```
src/

└── Model/

    └── Kunde.php
```

Namespace und Ordnerstruktur stimmen überein.

---

# Vorteile

✓ automatisches Laden

✓ keine include-Ketten

✓ Standard in Laravel

✓ Standard in Symfony

✓ Standard in modernen Projekten

---

# Kapitel 131

# Composer

Composer ist der Paketmanager von PHP.

Vergleich

| Sprache    | Paketmanager   |
|------------|----------------|
| Java       | Maven / Gradle |
| JavaScript | npm            |
| Python     | pip            |
| PHP        | Composer       |

---

Mit Composer können

- Bibliotheken installiert
- Abhängigkeiten verwaltet
- Autoloading erzeugt

werden.

---

# composer.json

```json
{
    "autoload": {
        "psr-4": {
            "App\\": "src/"
        }
    }
}
```

Diese Datei beschreibt,

wo sich Klassen befinden.

---

Autoloader erzeugen

```bash
composer dump-autoload
```

---

Danach genügt

```php
require_once "vendor/autoload.php";
```

Alle Klassen werden automatisch gefunden.

---

# Kapitel 132

# Beispielprojekt

Projekt

```
src/

    Model/

        Kunde.php

    Service/

        KundenService.php

public/

    index.php

vendor/

composer.json
```

---

## Kunde.php

```php
<?php

namespace App\Model;

class Kunde
{

    public function __construct(

        public string $name

    ){

    }

}
```

---

## KundenService.php

```php
<?php

namespace App\Service;

use App\Model\Kunde;

class KundenService
{

    public function anzeigen(Kunde $kunde): void
    {

        echo $kunde->name;

    }

}
```

---

## index.php

```php
<?php

require_once "../vendor/autoload.php";

use App\Model\Kunde;

use App\Service\KundenService;

$kunde = new Kunde("Max");

$service = new KundenService();

$service->anzeigen($kunde);
```

Ausgabe

```
Max
```

---

# Kapitel 133

# MVC (Überblick)

Die meisten modernen PHP-Anwendungen nutzen MVC.

```
Browser

↓

Controller

↓

Service

↓

Repository

↓

Datenbank
```

---

Die wichtigsten Bestandteile

### Model

enthält Daten

---

### View

stellt Daten dar

---

### Controller

verarbeitet Anfragen

---

### Service

enthält Geschäftslogik

---

### Repository

kommuniziert mit der Datenbank

---

Diese Architektur werden wir später mit PDO praktisch umsetzen.

---

# Mini-Projekt

Erstellen Sie folgendes Projekt.

```
src/

    Model/

        Buch.php

    Service/

        BuchService.php

public/

    index.php
```

Buch

```
Titel

Autor
```

Service

```
anzeigen()
```

Benutzen Sie

- Namespace
- use
- Constructor Property Promotion

---

# Typische IHK-Fragen

## Warum Namespaces?

Antwort

Um Namenskonflikte zwischen Klassen zu vermeiden und Projekte besser zu strukturieren.

---

## Unterschied

include

und

require

---

Antwort

```
include

↓

Warnung
```

```
require

↓

Programmabbruch
```

---

## Wozu dient Composer?

Antwort

Zum Verwalten von Bibliotheken und zum automatischen Laden von Klassen.

---

## Was ist PSR-4?

Antwort

Ein Standard für die Zuordnung von Namespaces zu Verzeichnissen.

---

# Prüfungsfallen

❌ Namespace vergessen.

❌ `use` mit `extends` verwechseln.

❌ `require_once "vendor/autoload.php"` vergessen.

❌ Falsche Ordnerstruktur bei PSR-4.

❌ Mehrfaches `include` statt `require_once`.

---

# Best Practices

✓ PSR-4 verwenden.

✓ Composer in jedem Projekt einsetzen.

✓ `src` für Quellcode verwenden.

✓ Klassen logisch in Model, Service, Repository usw. aufteilen.

✓ `require_once` nur für den Composer-Autoloader verwenden.

✓ Möglichst keine manuellen `include`-Ketten schreiben.

---

# Kapitel 134

# Warum PDO?

Fast jede moderne Anwendung arbeitet mit einer Datenbank.

Beispiele

- Online-Shop
- Kundenverwaltung
- Login-System
- Forum
- Warenwirtschaft
- CRM
- ERP

PHP besitzt dafür mehrere Möglichkeiten.

Heute verwendet man fast ausschließlich

```
PDO

(PHP Data Objects)
```

---

# Vorteile von PDO

✓ unterstützt viele Datenbanken

✓ sichere Prepared Statements

✓ objektorientierte API

✓ Standard in Laravel und Symfony

✓ verhindert SQL-Injection

---

# Kapitel 135

# Verbindung zur Datenbank

Für eine Verbindung werden benötigt

- Datenbankserver
- Datenbankname
- Benutzername
- Passwort

---

## Beispiel

```php
$host = "localhost";

$db = "firma";

$user = "root";

$password = "";
```

---

# DSN

DSN bedeutet

```
Data Source Name
```

Aufbau

```text
mysql:host=localhost;dbname=firma;charset=utf8mb4
```

Bestandteile

| Teil    | Bedeutung    |
|---------|--------------|
| mysql   | Datenbanktyp |
| host    | Server       |
| dbname  | Datenbank    |
| charset | Zeichensatz  |

---

# Kapitel 136

# PDO-Objekt erzeugen

```php
$pdo = new PDO(

    "mysql:host=localhost;dbname=firma;charset=utf8mb4",

    "root",

    ""

);
```

Jetzt besteht eine Verbindung zur Datenbank.

---

# Fehlerbehandlung

Immer aktivieren

```php
$pdo->setAttribute(

    PDO::ATTR_ERRMODE,

    PDO::ERRMODE_EXCEPTION

);
```

Warum?

Fehler werden sofort als Exception gemeldet.

Das erleichtert die Fehlersuche erheblich.

---

# Kapitel 137

# Verbindung mit try-catch

```php
try{

    $pdo = new PDO(

        "mysql:host=localhost;dbname=firma;charset=utf8mb4",

        "root",

        ""

    );

    $pdo->setAttribute(

        PDO::ATTR_ERRMODE,

        PDO::ERRMODE_EXCEPTION

    );

    echo "Verbindung erfolgreich.";

}
catch(PDOException $e){

    echo $e->getMessage();

}
```

---

Ablauf

```
Verbindung

↓

Erfolg?

↓

Ja

↓

weiterarbeiten

↓

Nein

↓

Exception

↓

Fehlermeldung
```

---

# Kapitel 138

# query()

Für einfache SELECT-Abfragen.

```php
$sql = "SELECT * FROM kunde";

$result = $pdo->query($sql);
```

`query()` führt die SQL-Anweisung sofort aus.

---

Ergebnis

```
PDOStatement
```

---

# Kapitel 139

# fetch()

Liest genau **einen Datensatz**.

```php
$row = $result->fetch();
```

Beispiel

Tabelle

| id | name |
|----|------|
| 1  | Max  |
| 2  | Lisa |

---

PHP

```php
$row = $result->fetch();

print_r($row);
```

Ausgabe

```php
Array
(
    [id] => 1
    [name] => Max
)
```

---

# fetch(PDO::FETCH_ASSOC)

Empfohlene Variante

```php
$row = $result->fetch(

    PDO::FETCH_ASSOC

);
```

Ausgabe

```php
Array
(
    [id] => 1

    [name] => Max
)
```

Keine numerischen Indizes mehr.

---

# Kapitel 140

# fetchAll()

Liest alle Datensätze.

```php
$rows = $result->fetchAll(

    PDO::FETCH_ASSOC

);
```

---

Ergebnis

```php
Array
(
    [0] =>

        Array
        (
            [id] => 1
            [name] => Max
        )

    [1] =>

        Array
        (
            [id] => 2
            [name] => Lisa
        )
)
```

---

Verarbeitung

```php
foreach($rows as $row){

    echo $row["name"];

    echo "<br>";

}
```

---

# Kapitel 141

# SQL-Injection

Eines der wichtigsten Sicherheitsthemen.

---

Falsch

```php
$name = $_POST["name"];

$sql =

"SELECT * FROM kunde

WHERE name = '$name'";
```

---

Benutzer gibt ein

```sql
' OR 1=1 --
```

Ergebnis

```sql
SELECT *

FROM kunde

WHERE name=''

OR 1=1
```

Alle Datensätze werden geliefert.

---

Dies nennt man

```
SQL-Injection
```

---

# Kapitel 142

# prepare()

Prepared Statements verhindern SQL-Injection.

```php
$sql =

"SELECT *

FROM kunde

WHERE name = ?";
```

---

```php
$stmt = $pdo->prepare($sql);
```

Noch passiert nichts.

Die Abfrage wird lediglich vorbereitet.

---

# Kapitel 143

# execute()

```php
$stmt->execute(

    [

        $name

    ]

);
```

Jetzt wird die Abfrage ausgeführt.

---

Danach

```php
$row =

$stmt->fetch(

    PDO::FETCH_ASSOC

);
```

---

Gesamter Ablauf

```php
$name = "Max";

$stmt =

$pdo->prepare(

"SELECT *

FROM kunde

WHERE name=?"

);

$stmt->execute(

    [

        $name

    ]

);

$row =

$stmt->fetch(

PDO::FETCH_ASSOC

);
```

---

# Warum ist das sicher?

Der Benutzerwert wird **nicht** in den SQL-Text eingefügt.

Die Datenbank behandelt ihn ausschließlich als Wert.

---

# Kapitel 144

# Benannte Platzhalter

Noch lesbarer

```php
$sql =

"SELECT *

FROM kunde

WHERE name = :name";
```

---

Ausführen

```php
$stmt =

$pdo->prepare($sql);

$stmt->execute(

    [

        "name"=>$name

    ]

);
```

---

Mehrere Parameter

```php
$sql =

"

SELECT *

FROM kunde

WHERE name=:name

AND alter>:alter

";
```

---

```php
$stmt->execute(

    [

        "name"=>$name,

        "alter"=>$alter

    ]

);
```

---

# Kapitel 145

# PDOStatement

```
PDO

↓

Verbindung
```

```
PDOStatement

↓

eine SQL-Abfrage
```

---

Beispiel

```php
$pdo

↓

Verbindung
```

```php
$stmt

↓

SELECT * FROM kunde
```

---

# Mini-Projekt

Tabelle

```
kunde

id

name

alter
```

Suche

```php
$name = "Lisa";

$stmt =

$pdo->prepare(

"

SELECT *

FROM kunde

WHERE name=:name

"

);

$stmt->execute(

    [

        "name"=>$name

    ]

);

$kunde =

$stmt->fetch(

PDO::FETCH_ASSOC

);

print_r($kunde);
```

---

# Typische IHK-Fragen

## Warum PDO?

Antwort

Um verschiedene Datenbanken mit einer einheitlichen API anzusprechen und sichere Datenbankabfragen zu ermöglichen.

---

## Unterschied

query()

und

prepare()

---

Antwort

```
query()

↓

führt SQL sofort aus
```

```
prepare()

↓

bereitet SQL vor
```

---

## Warum Prepared Statements?

Antwort

Zum Schutz vor SQL-Injection.

---

## Unterschied

fetch()

und

fetchAll()

---

Antwort

```
fetch()

↓

ein Datensatz
```

```
fetchAll()

↓

alle Datensätze
```

---

# Prüfungsfallen

❌ SQL mit Stringverkettung zusammensetzen.

❌ `query()` für Benutzereingaben verwenden.

❌ `execute()` vergessen.

❌ `fetch()` aufrufen, bevor `execute()` ausgeführt wurde.

❌ Keine Fehlerbehandlung mit `try-catch`.

---

# Best Practices

✓ Immer `prepare()` für Benutzereingaben verwenden.

✓ `PDO::FETCH_ASSOC` nutzen.

✓ Fehler mit `PDO::ERRMODE_EXCEPTION` behandeln.

✓ SQL und PHP sauber trennen.

✓ Platzhalter statt Stringverkettung verwenden.

---

# Kapitel 146

# CRUD

Fast jede Geschäftsanwendung besteht aus vier Grundoperationen.

| Operation | SQL    |
|-----------|--------|
| Create    | INSERT |
| Read      | SELECT |
| Update    | UPDATE |
| Delete    | DELETE |

Merksatz:

```
CRUD

↓

Create

Read

Update

Delete
```

---

# Kapitel 147

# INSERT

Neue Datensätze werden mit

```sql
INSERT INTO
```

angelegt.

SQL

```sql
INSERT INTO kunde

(name, alter)

VALUES

('Max', 28);
```

Mit PDO

```php
$sql = "

INSERT INTO kunde

(name, alter)

VALUES

(:name, :alter)

";

$stmt = $pdo->prepare($sql);

$stmt->execute([

    "name" => "Max",

    "alter" => 28

]);
```

---

# Warum Platzhalter?

Auch beim INSERT können Benutzereingaben gefährlich sein.

Deshalb gilt:

> Immer `prepare()` verwenden.

---

# Kapitel 148

# lastInsertId()

Viele Tabellen besitzen eine AUTO_INCREMENT-ID.

Beispiel

| id | name |
|----|------|
| 15 | Max  |

Nach dem INSERT möchte man oft wissen,

welche ID vergeben wurde.

```php
$id = $pdo->lastInsertId();

echo $id;
```

Ausgabe

```
15
```

---

Typische Anwendungen

- Rechnung erzeugen
- Kunde anlegen
- Bestellung speichern
- Fremdschlüssel erzeugen

---

# Kapitel 149

# UPDATE

SQL

```sql
UPDATE kunde
SET alter = 29
WHERE id = 5;
```

PDO

```php
$sql = "

UPDATE kunde

SET alter=:alter

WHERE id=:id

";

$stmt = $pdo->prepare($sql);

$stmt->execute([

    "alter" => 29,

    "id" => 5

]);
```

---

Wichtig

Ohne

```sql
WHERE
```

werden **alle Datensätze geändert.**

---

Beispiel

```sql
UPDATE kunde
SET alter = 30;
```

Jetzt besitzen alle Kunden Alter 30.

Das ist ein häufiger Prüfungsfehler.

---

# Kapitel 150

# DELETE

SQL

```sql
DELETE FROM kunde
WHERE id = 7;
```

PDO

```php
$sql = "

DELETE FROM kunde

WHERE id=:id

";

$stmt = $pdo->prepare($sql);

$stmt->execute([

    "id" => 7

]);
```

---

Auch hier gilt

Ohne

```sql
WHERE
```

werden alle Datensätze gelöscht.

```sql
DELETE FROM kunde;
```

---

# Kapitel 151

# rowCount()

Nach UPDATE oder DELETE möchte man wissen,

wie viele Datensätze betroffen waren.

```php
echo $stmt->rowCount();
```

Ausgabe

```
1
```

---

Wenn

```
0
```

zurückgegeben wird,

existierte der Datensatz möglicherweise nicht.

---

# Kapitel 152

# Transaktionen

Stellen Sie sich eine Banküberweisung vor.

```
Konto A

↓

-100 €

↓

Konto B

↓

+100 €
```

Was passiert,

wenn nach dem Abbuchen ein Fehler auftritt?

Dann fehlt Geld.

Deshalb verwendet man

```
Transaktionen
```

---

Eine Transaktion bedeutet

```
Alles

oder

Nichts
```

---

# Kapitel 153

# beginTransaction()

```php
$pdo->beginTransaction();
```

Jetzt werden Änderungen zunächst nur vorgemerkt.

---

# commit()

Wenn alles erfolgreich war

```php
$pdo->commit();
```

Jetzt werden alle Änderungen dauerhaft gespeichert.

---

# rollback()

Falls ein Fehler auftritt

```php
$pdo->rollback();
```

Alle Änderungen werden zurückgenommen.

---

# Kapitel 154

# Komplettes Beispiel

```php
try{

    $pdo->beginTransaction();

    $stmt = $pdo->prepare(

        "

        UPDATE konto

        SET kontostand = kontostand - 100

        WHERE id=1

        "

    );

    $stmt->execute();

    $stmt = $pdo->prepare(

        "

        UPDATE konto

        SET kontostand = kontostand + 100

        WHERE id=2

        "

    );

    $stmt->execute();

    $pdo->commit();

}
catch(PDOException $e){

    $pdo->rollback();

}
```

---

Ablauf

```
beginTransaction()

↓

Änderungen

↓

Fehler?

↓

Nein

↓

commit()

↓

fertig
```

---

Bei Fehler

```
beginTransaction()

↓

Fehler

↓

rollback()

↓

alles rückgängig
```

---

# Kapitel 155

# Repository Pattern

In modernen Anwendungen werden SQL-Abfragen

nicht im Controller geschrieben.

Stattdessen existiert ein Repository.

---

```
Controller

↓

Repository

↓

PDO

↓

MySQL
```

---

Beispiel

```php
class KundeRepository
{

    public function findAll(): array
    {

        // SQL

    }

    public function findById(int $id): ?array
    {

        // SQL

    }

    public function save(Kunde $kunde): void
    {

        // INSERT

    }

    public function update(Kunde $kunde): void
    {

        // UPDATE

    }

    public function delete(int $id): void
    {

        // DELETE

    }

}
```

---

Vorteile

✓ SQL an einer Stelle

✓ Controller bleibt klein

✓ bessere Wartbarkeit

✓ einfacher testbar

---

# Kapitel 156

# CRUD-Anwendung

```
Browser

↓

Controller

↓

Repository

↓

PDO

↓

MySQL
```

Repository enthält

```
SELECT

INSERT

UPDATE

DELETE
```

Controller enthält

```
Geschäftslogik
```

View enthält

```
HTML
```

---

# Mini-Projekt

Tabelle

```sql
kunde

id

name

stadt
```

Erstellen Sie ein Repository mit

```php
findAll()

findById()

insert()

update()

delete()
```

Verwenden Sie ausschließlich

- PDO
- prepare()
- execute()

---

# Typische IHK-Fragen

## Warum Prepared Statements auch bei UPDATE?

Antwort

Weil auch dort Benutzereingaben verwendet werden können.

---

## Wozu dient `lastInsertId()`?

Antwort

Sie liefert die automatisch erzeugte ID des zuletzt eingefügten Datensatzes.

---

## Wann verwendet man Transaktionen?

Antwort

Wenn mehrere zusammengehörige Datenbankoperationen entweder vollständig oder gar nicht ausgeführt werden dürfen.

---

## Warum Repository?

Antwort

Zur Trennung von Datenbankzugriff und Geschäftslogik.

---

# Prüfungsfallen

❌ UPDATE ohne WHERE.

❌ DELETE ohne WHERE.

❌ `commit()` vergessen.

❌ `rollback()` nicht im Fehlerfall aufrufen.

❌ SQL direkt im Controller schreiben.

❌ `lastInsertId()` vor dem INSERT aufrufen.

---

# Best Practices

✓ Jede Benutzereingabe mit `prepare()` verarbeiten.

✓ Datenbankzugriffe in Repository-Klassen kapseln.

✓ Transaktionen bei zusammenhängenden Änderungen verwenden.

✓ Fehler immer mit Exceptions behandeln.

✓ SQL-Anweisungen klar und lesbar formatieren.

---

# Kapitel 157

# Das HTTP-Protokoll

HTTP bedeutet

```
Hypertext Transfer Protocol
```

Es regelt die Kommunikation zwischen Browser und Webserver.

---

## Ablauf

```
Browser

↓

HTTP Request

↓

Webserver

↓

PHP

↓

MySQL

↓

PHP

↓

HTTP Response

↓

Browser
```

---

Jeder Seitenaufruf besteht aus

- einer Anfrage (Request)
- einer Antwort (Response)

---

# Kapitel 158

# HTTP-Methoden

Die wichtigsten Methoden sind

| Methode | Bedeutung           |
|---------|---------------------|
| GET     | Daten abrufen       |
| POST    | Daten senden        |
| PUT     | Daten ändern (API)  |
| DELETE  | Daten löschen (API) |

Für die IHK sind hauptsächlich GET und POST relevant.

---

# Kapitel 159

# GET

GET überträgt Daten über die URL.

Beispiel

```
https://example.de/index.php?id=5
```

Die URL enthält

```
id=5
```

---

PHP

```php
$id = $_GET["id"];

echo $id;
```

Ausgabe

```
5
```

---

Mehrere Parameter

```
?name=Max&alter=30
```

PHP

```php
echo $_GET["name"];

echo $_GET["alter"];
```

---

Vorteile

✓ einfach

✓ URL kann gespeichert werden

✓ Suchmaschinenfreundlich

---

Nachteile

✗ Daten sind sichtbar

✗ Länge begrenzt

✗ nicht für Passwörter geeignet

---

# Kapitel 160

# POST

POST sendet Daten im HTTP-Body.

Sie erscheinen **nicht** in der URL.

---

HTML

```html
<form method="post">

<input

type="text"

name="name">

<button>

Speichern

</button>

</form>
```

---

PHP

```php
$name = $_POST["name"];

echo $name;
```

---

Vorteile

✓ keine Längenbeschränkung (praktisch)

✓ Daten stehen nicht in der URL

✓ geeignet für Formulare

---

Merksatz

```
GET

lesen
```

```
POST

senden
```

---

# Kapitel 161

# HTML-Formulare

Beispiel

```html
<form action="index.php" method="post">

    <label>Name</label>

    <input type="text" name="name">
    
    <br>

    <label>Alter</label>

    <input type="number" name="alter">

    <br>

    <button>Senden</button>

</form>
```

---

Beim Klick auf

```
Senden
```

werden die Daten an

```
index.php
```

übertragen.

---

# Kapitel 162

# Formular auslesen

```php
if($_SERVER["REQUEST_METHOD"]=="POST"){

    $name = $_POST["name"];

    $alter = $_POST["alter"];

    echo $name;

    echo $alter;

}
```

Warum?

Damit die Verarbeitung nur erfolgt,

wenn das Formular tatsächlich abgeschickt wurde.

---

# Kapitel 163

# $_REQUEST

PHP besitzt

```php
$_REQUEST
```

Es enthält

- GET
- POST
- Cookies

---

Beispiel

```php
echo $_REQUEST["name"];
```

In modernen Anwendungen wird jedoch bevorzugt

```php
$_GET
```

oder

```php
$_POST
```

verwendet.

---

# Kapitel 164

# Benutzereingaben validieren

Benutzereingaben dürfen niemals ungeprüft übernommen werden.

---

Falsch

```php
$name = $_POST["name"];
```

---

Besser

```php
$name = trim($_POST["name"]);
```

---

Noch besser

```php
$name = filter_input(

    INPUT_POST,

    "name",

    FILTER_SANITIZE_SPECIAL_CHARS

);
```

---

# trim()

Entfernt Leerzeichen.

```php
$name = " Max ";

$name = trim($name);
```

Ergebnis

```
Max
```

---

# Kapitel 165

# filter_input()

Zahl prüfen

```php
$alter = filter_input(

    INPUT_POST,

    "alter",

    FILTER_VALIDATE_INT

);
```

---

Wenn keine gültige Zahl eingegeben wurde

```php
false
```

wird zurückgegeben.

---

E-Mail prüfen

```php
$email = filter_input(

    INPUT_POST,

    "email",

    FILTER_VALIDATE_EMAIL

);
```

---

URL prüfen

```php
$url = filter_input(

    INPUT_POST,

    "url",

    FILTER_VALIDATE_URL

);
```

---

# Kapitel 166

# filter_var()

Auch einzelne Werte können geprüft werden.

```php
$email = "max@test.de";

if(

filter_var(

$email,

FILTER_VALIDATE_EMAIL

)

){

    echo "gültig";

}
```

---

# Kapitel 167

# Sessions

HTTP ist zustandslos.

Das bedeutet

Der Server merkt sich den Benutzer nicht.

---

Deshalb existieren Sessions.

```
Browser

↓

Session-ID

↓

Server

↓

Sessiondaten
```

---

Session starten

```php
session_start();
```

Dies muss **vor jeder HTML-Ausgabe** erfolgen.

---

Wert speichern

```php
$_SESSION["name"]="Max";
```

---

Wert lesen

```php
echo $_SESSION["name"];
```

---

Session löschen

```php
session_destroy();
```

---

# Kapitel 168

# Cookies

Cookies werden

nicht auf dem Server,

sondern im Browser gespeichert.

---

Cookie setzen

```php
setcookie(

"sprache",

"de",

time()+3600

);
```

Bedeutung

```
1 Stunde gültig
```

---

Cookie lesen

```php
echo $_COOKIE["sprache"];
```

---

Unterschied

| Session  | Cookie         |
|----------|----------------|
| Server   | Browser        |
| sicherer | weniger sicher |
| Login    | Einstellungen  |

---

# Kapitel 169

# Einfacher Login

Formular

```html
<form method="post">

<input name="user">
    
<input type="password" name="password">

<button>Login</button>

</form>
```

---

PHP

```php
session_start();

if(

$_POST["user"]=="admin"

&&

$_POST["password"]=="1234"

){

    $_SESSION["login"]=true;

}
```

---

Geschützte Seite

```php
session_start();

if(

!isset($_SESSION["login"])

){

    die("Kein Zugriff.");

}
```

---

# Hinweis

In echten Anwendungen werden Passwörter niemals im Klartext gespeichert.

Stattdessen verwendet man

```php
password_hash()
```

und

```php
password_verify()
```

Dieses Thema behandeln wir später ausführlich.

---

# Kapitel 170

# Ablauf eines Formulars

```
Browser

↓

Formular

↓

POST

↓

PHP

↓

Validierung

↓

PDO

↓

MySQL

↓

Antwort

↓

Browser
```

---

# Mini-Projekt

Erstellen Sie ein Formular

```
Name

E-Mail

Alter
```

Prüfen Sie

- Name nicht leer
- Alter = Integer
- E-Mail gültig

Danach Ausgabe

```
Willkommen Max
```

---

# Typische IHK-Fragen

## Unterschied GET und POST?

Antwort

GET überträgt Daten in der URL.

POST überträgt Daten im HTTP-Body.

---

## Warum validieren?

Antwort

Um fehlerhafte oder manipulierte Eingaben zu verhindern.

---

## Wozu dienen Sessions?

Antwort

Zur Speicherung benutzerspezifischer Daten auf dem Server.

---

## Unterschied Session und Cookie?

Antwort

Session liegt auf dem Server,

Cookie im Browser.

---

# Prüfungsfallen

❌ `session_start()` nach HTML aufrufen.

❌ Passwörter per GET übertragen.

❌ Benutzereingaben ungeprüft verwenden.

❌ `$_REQUEST` überall einsetzen.

❌ Cookies mit Sessions verwechseln.

---

# Best Practices

✓ Formulare immer validieren.

✓ Für Formulare POST verwenden.

✓ Sessions für Logins nutzen.

✓ Cookies nur für Einstellungen oder Präferenzen verwenden.

✓ Passwörter niemals im Klartext speichern.

✓ `filter_input()` bevorzugen.

---

# Kapitel 171

# Warum Sicherheit wichtig ist

Fast jede Webanwendung verarbeitet

- Benutzerdaten
- Passwörter
- Kundendaten
- Zahlungsinformationen
- personenbezogene Daten

Schon ein kleiner Fehler kann dazu führen, dass Angreifer Zugriff auf die gesamte Anwendung erhalten.

---

Die häufigsten Angriffe sind

- SQL-Injection
- XSS
- CSRF
- unsichere Passwörter
- unsichere Dateiuploads

---

# Kapitel 172

# Passwörter niemals speichern

Falsch

```php
$password = "geheim123";
```

Datenbank

| Benutzer | Passwort  |
|----------|-----------|
| Max      | geheim123 |

---

Problem

Jeder mit Zugriff auf die Datenbank kennt alle Passwörter.

---

Richtig

```php
password_hash()
```

---

# Kapitel 173

# password_hash()

```php
$password = "geheim123";

$hash = password_hash(

    $password,

    PASSWORD_DEFAULT

);

echo $hash;
```

Ausgabe

```
$2y$10$...
```

Jeder Aufruf erzeugt einen anderen Hash.

---

Warum?

Es wird automatisch

- Salt
- Algorithmus
- Kostenfaktor

verwendet.

---

Beispiel

```php
echo password_hash(

"passwort",

PASSWORD_DEFAULT

);
```

Aufruf 1

```
$2y$10$A...
```

Aufruf 2

```
$2y$10$B...
```

Obwohl das Passwort identisch ist.

---

# Kapitel 174

# password_verify()

Beim Login wird **nicht**

der Hash neu berechnet.

Stattdessen

```php
password_verify()
```

---

```php
$passwort = $_POST["password"];

if(

password_verify(

$passwort,

$hash

)

){

    echo "Login erfolgreich.";

}
```

---

Ablauf

```
Benutzer

↓

Passwort

↓

password_verify()

↓

Hash vergleichen

↓

Login
```

---

# Kapitel 175

# SQL-Injection (Wiederholung)

Gefährlich

```php
$sql =

"

SELECT *

FROM user

WHERE

name='$name'

";
```

---

Angriff

```
' OR 1=1 --
```

Ergebnis

```sql
SELECT *

FROM user

WHERE

name=''

OR 1=1
```

Alle Benutzer werden ausgegeben.

---

Lösung

```php
$stmt =

$pdo->prepare(

"

SELECT *

FROM user

WHERE name=?

"

);

$stmt->execute([

    $name

]);
```

---

Merksatz

> Benutzereingaben niemals direkt in SQL einsetzen.

---

# Kapitel 176

# Cross Site Scripting (XSS)

XSS bedeutet,

dass Angreifer JavaScript in Webseiten einschleusen.

---

Beispiel

Benutzer gibt ein

```html
<script>

alert("Hallo")

</script>
```

Ausgabe

```php
echo $_POST["name"];
```

Browser führt das Script aus.

---

Gefahr

- Cookies stehlen
- Benutzer umleiten
- Login übernehmen
- Inhalte manipulieren

---

# Kapitel 177

# Schutz vor XSS

Verwenden Sie

```php
htmlspecialchars()
```

---

```php
echo htmlspecialchars(

$name,

ENT_QUOTES,

"UTF-8"

);
```

---

Aus

```html
<script>
```

wird

```html
&lt;script&gt;
```

Jetzt erscheint der Code nur als Text.

---

Merksatz

**Alles, was in HTML ausgegeben wird, sollte maskiert werden.**

---

# Kapitel 178

# Cross Site Request Forgery (CSRF)

CSRF bedeutet,

dass ein Benutzer unbeabsichtigt eine Aktion ausführt.

---

Beispiel

Benutzer ist im Online-Banking eingeloggt.

Er besucht eine manipulierte Webseite.

Diese sendet automatisch

```html
<form

action="bank.de"

method="POST">

...
```

Die Bank glaubt,

der Benutzer hätte die Anfrage selbst gestellt.

---

# Schutz

CSRF-Token

---

Beim Anzeigen

```php
$_SESSION["token"] =

bin2hex(

random_bytes(32)

);
```

---

Im Formular

```html
<input

type="hidden"

name="token"

value="<?= $_SESSION['token'] ?>">
```

---

Beim Absenden

```php
if(

$_POST["token"]

===

$_SESSION["token"]

){

    // gültig

}
```

---

# Kapitel 179

# Dateiupload

HTML

```html
<form

method="post"

enctype="multipart/form-data">

<input

type="file"

name="bild">

</form>
```

---

PHP

```php
$_FILES["bild"]
```

enthält

- Dateiname
- Größe
- Typ
- temporäre Datei

---

# Unsicher

```php
move_uploaded_file(

...

);

```

ohne Prüfung.

---

Gefahr

Ein Benutzer lädt hoch

```
virus.php
```

---

# Sicher

Dateityp prüfen

```php
$finfo = new finfo(

FILEINFO_MIME_TYPE

);

$type =

$finfo->file(

$_FILES["bild"]["tmp_name"]

);
```

---

Nur erlauben

```
image/jpeg
image/png
image/gif
```

---

Außerdem prüfen

- Dateigröße
- Dateiendung
- zufälligen Dateinamen vergeben

---

# Kapitel 180

# Sessions absichern

Nach erfolgreichem Login

```php
session_regenerate_id(true);
```

Dadurch wird Session Hijacking erschwert.

---

Beim Logout

```php
session_destroy();
```

---

Zusätzlich

```php
$_SESSION = [];
```

---

# Kapitel 181

# OWASP Top 10

OWASP

=

Open Worldwide Application Security Project

---

Die wichtigsten Risiken

| Risiko                      | Bedeutung                      |
|-----------------------------|--------------------------------|
| Broken Access Control       | fehlende Rechteprüfung         |
| Cryptographic Failures      | schlechte Verschlüsselung      |
| Injection                   | SQL-Injection                  |
| Insecure Design             | schlechtes Design              |
| Security Misconfiguration   | falsche Konfiguration          |
| Vulnerable Components       | veraltete Bibliotheken         |
| Authentication Failures     | schwache Logins                |
| Software Integrity Failures | manipulierte Software          |
| Logging Failures            | fehlende Protokollierung       |
| SSRF                        | Server greift fremde Server an |

Für die IHK sind besonders wichtig:

- SQL-Injection
- XSS
- CSRF
- Passwortsicherheit

---

# Mini-Projekt

Erstellen Sie ein Login.

Anforderungen

✓ Passwort mit

```php
password_hash()
```

speichern

✓ Login mit

```php
password_verify()
```

prüfen

✓ Session starten

✓ Session-ID regenerieren

✓ Logout ermöglichen

---

# Typische IHK-Fragen

## Warum `password_hash()`?

Antwort

Passwörter werden sicher gehascht und niemals im Klartext gespeichert.

---

## Warum `password_verify()`?

**Antwort**: Zum sicheren Vergleich zwischen Passwort und Hash.

---

## Unterschied Hash und Verschlüsselung?

Hash

```
Einwegfunktion

↓

nicht rückgängig
```

Verschlüsselung

```
Schlüssel vorhanden

↓

entschlüsselbar
```

---

## Schutz vor SQL-Injection?

**Antwort**: Prepared Statements.

---

## Schutz vor XSS?

**Antwort:** `htmlspecialchars()`.

---

## Schutz vor CSRF?

**Antwort:** CSRF-Token.

---

# Prüfungsfallen

❌ Passwörter im Klartext speichern.

❌ MD5 oder SHA1 für Passwörter verwenden.

❌ SQL per Stringverkettung erzeugen.

❌ HTML ohne `htmlspecialchars()` ausgeben.

❌ Uploads ohne Dateiprüfung speichern.

❌ Session-ID nach Login nicht erneuern.

---

# Best Practices

✓ Immer `password_hash()` verwenden.

✓ Login mit `password_verify()` prüfen.

✓ Prepared Statements einsetzen.

✓ Alle HTML-Ausgaben maskieren.

✓ Dateiuploads streng validieren.

✓ Sessions nach Login regenerieren.

✓ Sicherheitsupdates regelmäßig installieren.

---

# Kapitel 182

# Dateien in PHP

Viele Programme arbeiten mit Dateien.

Beispiele

- Log-Dateien
- Konfigurationsdateien
- CSV-Exporte
- JSON
- XML
- Textdateien

PHP besitzt zahlreiche Funktionen für Dateizugriffe.

---

# Kapitel 183

# fopen()

Eine Datei wird mit

```php
fopen()
```

geöffnet.

```php
$datei = fopen(

"test.txt",

"r"

);
```

---

## Parameter

```
Dateiname

+

Modus
```

---

## Häufige Modi

| Modus | Bedeutung                  |
|-------|----------------------------|
| r     | lesen                      |
| w     | schreiben (Inhalt löschen) |
| a     | anhängen                   |
| x     | neu anlegen                |
| r+    | lesen und schreiben        |

---

Merksatz

```
r

↓

Read
```

```
w

↓

Write
```

```
a

↓

Append
```

---

# Kapitel 184

# fclose()

Nach dem Arbeiten

sollte jede Datei geschlossen werden.

```php
fclose($datei);
```

---

Warum?

- Ressourcen freigeben
- Dateisperren vermeiden
- Best Practice

---

# Kapitel 185

# fread()

Datei lesen

```php
$datei = fopen(

"test.txt",

"r"

);

$content = fread(

$datei,

filesize("test.txt")

);

fclose($datei);

echo $content;
```

---

Beispiel

Datei

```
Hallo Welt
```

Ausgabe

```
Hallo Welt
```

---

# Kapitel 186

# file_get_contents()

Heute deutlich häufiger verwendet.

```php
$content = file_get_contents(

"test.txt"

);

echo $content;
```

Vorteile

✓ kürzer

✓ einfacher

✓ keine Schleife notwendig

---

# Kapitel 187

# Schreiben

```php
$datei = fopen(

"text.txt",

"w"

);

fwrite(

$datei,

"Hallo"

);

fclose($datei);
```

---

Datei

```
Hallo
```

---

Anhängen

```php
$datei = fopen(

"log.txt",

"a"

);

fwrite(

$datei,

"Neue Zeile\n"

);

fclose($datei);
```

---

# file_put_contents()

Moderne Variante

```php
file_put_contents(

"text.txt",

"Hallo"

);
```

---

Anhängen

```php
file_put_contents(

"log.txt",

"Neue Zeile\n",

FILE_APPEND

);
```

---

# Kapitel 188

# Datei zeilenweise lesen

```php
$zeilen = file(

"log.txt"

);

foreach($zeilen as $zeile){

    echo $zeile;

}
```

---

Datei

```
Max

Lisa

Tom
```

---

Ausgabe

```
Max

Lisa

Tom
```

---

# Kapitel 189

# CSV-Dateien

CSV bedeutet

```
Comma Separated Values
```

Beispiel

```
Max,28,Hamburg

Lisa,31,Berlin

Tom,25,München
```

---

CSV lesen

```php
$datei = fopen(

"kunden.csv",

"r"

);

while(

($daten = fgetcsv($datei))

!== false

){

    print_r($daten);

}

fclose($datei);
```

---

Ergebnis

```php
Array

(

[0]=>Max

[1]=>28

[2]=>Hamburg

)
```

---

# CSV schreiben

```php
$datei = fopen(

"kunden.csv",

"w"

);

fputcsv(

$datei,

["Max",28,"Hamburg"]

);

fclose($datei);
```

---

Datei

```
Max,28,Hamburg
```

---

# Kapitel 190

# JSON

JSON bedeutet

```
JavaScript Object Notation
```

Es ist heute das wichtigste Datenaustauschformat.

---

Beispiel

```json
{
  "name":"Max",
  "alter":28
}
```

---

# JSON erzeugen

```php
$kunde = [

"name"=>"Max",

"alter"=>28

];

$json = json_encode($kunde);

echo $json;
```

Ausgabe

```json
{"name":"Max","alter":28}
```

---

# JSON lesen

```php
$json =

file_get_contents(

"kunde.json"

);

$kunde =

json_decode(

$json,

true

);

echo $kunde["name"];
```

---

Warum

```
true
```

?

Damit ein Array erzeugt wird.

Ohne

```
true
```

erhält man ein Objekt.

---

# Kapitel 191

# Verzeichnisse

Existiert eine Datei?

```php
file_exists(

"test.txt"

);
```

---

Größe

```php
filesize(

"test.txt"

);
```

---

Löschen

```php
unlink(

"test.txt"

);
```

---

Ordner erstellen

```php
mkdir(

"bilder"
);
```

---

Ordner löschen

```php
rmdir(

"bilder"
);
```

---

# Kapitel 192

# scandir()

Dateien eines Ordners lesen

```php
$dateien = scandir(".");

print_r($dateien);
```

Ausgabe

```
.

..

index.php

test.txt

bilder
```

---

# Kapitel 193

# Log-Dateien

Typische IHK-Aufgabe

Log-Datei

```
1661156269 Max Mustermann 192.168.178.42 google.de granted

1661156577 Erika Mustermann 192.168.178.47 youtube.de denied
```

---

Aufgabe

Erzeugen

```
short.csv
```

```
Max Mustermann,

192.168.178.42,

granted
```

---

und

```
long.csv
```

```
2022-08-22T08:22:57,

Erika Mustermann,

192.168.178.47,

youtube.de,

denied
```

---

Lösungsansatz

```
Datei

↓

Eintrag-Objekt

↓

CSV

↓

Export
```

Genau diese Aufgabe kommt in ähnlicher Form regelmäßig in der AP2 vor.

---

# Kapitel 194

# JSON-Konfiguration

config.json

```json
{

"host":"localhost",

"user":"root",

"db":"firma"

}
```

---

Einlesen

```php
$config = json_decode(

file_get_contents(

"config.json"

),

true

);

echo $config["host"];
```

---

# Mini-Projekt

Erstellen Sie

```
personen.csv
```

Inhalt

```
Max,28

Lisa,30

Tom,41
```

---

Programm

- CSV lesen
- Person-Objekte erzeugen
- Durchschnittsalter berechnen
- Ausgabe als JSON

---

# Typische IHK-Fragen

## Unterschied

fopen()

und

file_get_contents()

---

Antwort

```
fopen()

↓

Dateihandle
```

```
file_get_contents()

↓

gesamte Datei
```

---

## Unterschied

CSV

und

JSON

---

Antwort

CSV

```
Tabellen
```

JSON

```
Objekte

Arrays
```

---

## Wann JSON?

Antwort

Für Datenaustausch zwischen Anwendungen oder APIs.

---

# Prüfungsfallen

❌ Datei nicht schließen.

❌ `filesize()` bei nicht vorhandener Datei.

❌ `json_decode()` ohne `true`, obwohl ein Array erwartet wird.

❌ `w` statt `a` verwenden (Datei wird überschrieben).

❌ CSV mit `explode(",")` statt `fgetcsv()` einlesen.

---

# Best Practices

✓ `file_get_contents()` für kleine Dateien verwenden.

✓ `fopen()` bei großen Dateien oder Streams.

✓ Immer prüfen, ob Dateien existieren.

✓ CSV mit `fgetcsv()` verarbeiten.

✓ JSON mit `json_encode()` und `json_decode()` bearbeiten.

✓ Ressourcen nach Gebrauch schließen.

---

# Kapitel 195

# Was ist eine Exception?

Eine Exception ist ein Ausnahmezustand während der Programmausführung.

Beispiele

- Datei existiert nicht
- Datenbank nicht erreichbar
- Division durch Null(0)
- Ungültige Benutzereingaben
- Netzwerkfehler

---

Ohne Fehlerbehandlung

```
Programm

↓

Fehler

↓

Abbruch
```

---

Mit Exception Handling

```
Programm

↓

Fehler

↓

Exception

↓

catch

↓

Programm läuft weiter
```

---

# Kapitel 196

# Arten von Fehlern

| Typ          | Beschreibung           |
|--------------|------------------------|
| Syntaxfehler | Programm startet nicht |
| Warning      | Warnung                |
| Notice       | Hinweis                |
| Exception    | behandelbarer Fehler   |
| Fatal Error  | Programm beendet sich  |

---

## Syntaxfehler

```php
echo "Hallo
```

Fehlende Anführungszeichen.

Programm startet nicht.

---

## Laufzeitfehler

```php
include("datei.php");
```

Datei existiert nicht.

---

## Exception

```php
throw new Exception("Fehler");
```

Kann behandelt werden.

---

# Kapitel 197

# try und catch

Grundstruktur

```php
try{

    // Code

}
catch(Exception $e){

    // Fehlerbehandlung

}
```

---

Beispiel

```php
try{

    throw new Exception(

        "Etwas ist schiefgelaufen."

    );

}
catch(Exception $e){

    echo $e->getMessage();

}
```

Ausgabe

```
Etwas ist schiefgelaufen.
```

---

# Kapitel 198

# throw

Mit `throw` wird eine Exception ausgelöst.

```php
if($alter < 18){

    throw new Exception(

        "Nicht volljährig."

    );

}
```

---

Ablauf

```
Code

↓

Bedingung erfüllt

↓

throw

↓

catch

↓

Fehler behandeln
```

---

# Kapitel 199

# Exception-Objekt

Im `catch` steht ein Exception-Objekt zur Verfügung.

```php
catch(Exception $e)
```

---

Wichtige Methoden

| Methode      | Bedeutung     |
|--------------|---------------|
| getMessage() | Fehlermeldung |
| getCode()    | Fehlercode    |
| getFile()    | Datei         |
| getLine()    | Zeilennummer  |

---

Beispiel

```php
catch(Exception $e){

    echo $e->getMessage();

    echo $e->getFile();

    echo $e->getLine();

}
```

---

# Kapitel 200

# finally

`finally` wird **immer** ausgeführt.

```php
try{

    echo "Start";

}
catch(Exception $e){

    echo "Fehler";

}
finally{

    echo "Aufräumen";

}
```

---

Auch wenn keine Exception auftritt,

wird `finally` ausgeführt.

---

Typische Verwendung

- Dateien schließen
- Datenbankverbindungen beenden
- Ressourcen freigeben

---

# Kapitel 201

# Eigene Exceptions

Eigene Exception-Klassen verbessern die Lesbarkeit.

```php
class LoginException

extends Exception
{

}
```

---

Verwendung

```php
throw new LoginException(

    "Login fehlgeschlagen."

);
```

---

Abfangen

```php
catch(LoginException $e){

    echo $e->getMessage();

}
```

---

# Kapitel 202

# Mehrere catch-Blöcke

```php
try{

    ...

}
catch(PDOException $e){

    echo "Datenbankfehler";

}
catch(RuntimeException $e){

    echo "Laufzeitfehler";

}
catch(Exception $e){

    echo "Allgemeiner Fehler";

}
```

---

Warum?

Jede Exception kann unterschiedlich behandelt werden.

---

# Kapitel 203

# Exception weiterwerfen

Eine Exception kann erneut ausgelöst werden.

```php
catch(Exception $e){

    throw $e;

}
```

Oder

```php
throw new Exception(

    "Neuer Fehler"

);
```

---

Typischer Ablauf

```
Repository

↓

Service

↓

Controller

↓

Benutzer
```

Jede Schicht kann entscheiden,

ob sie die Exception behandelt oder weitergibt.

---

# Kapitel 204

# Logging

Fehler sollten protokolliert werden.

Nicht

```php
echo $e;
```

Sondern

```php
error_log(

$e->getMessage()

);
```

---

Eigenes Log

```php
file_put_contents(

"log.txt",

$e->getMessage(),

FILE_APPEND

);
```

---

Logeintrag

```
2026-01-15

Datenbank nicht erreichbar
```

---

# Kapitel 205

# Debugging

Ein Debugger hilft,

Fehler Schritt für Schritt zu analysieren.

---

Einfaches Debugging

```php
var_dump($variable);
```

---

Oder

```php
print_r($array);
```

---

Schöner

```php
echo "<pre>";

print_r($array);

echo "</pre>";
```

---

# Kapitel 206

# Häufige Fehlerquellen

Division

```php
10 / 0
```

---

Datei

```php
file_get_contents(

"abc.txt"

);
```

---

PDO

```php
SELECT *

FROM abc
```

Tabelle existiert nicht.

---

Array

```php
$array[100]
```

Index existiert nicht.

---

# Kapitel 207

# Gute Fehlerbehandlung

Nicht

```php
catch(Exception $e){

}
```

Leerer Catch-Block.

---

Besser

```php
catch(Exception $e){

    error_log(

        $e->getMessage()

    );

    echo "Es ist ein Fehler aufgetreten.";

}
```

---

Warum?

Benutzer erhalten

keine internen Informationen.

---

# Kapitel 208

# Exception-Hierarchie

```
Throwable

│

├── Error

│

└── Exception

      │

      ├── RuntimeException

      ├── PDOException

      ├── InvalidArgumentException

      └── Eigene Exceptions
```

---

Seit PHP 7 implementieren sowohl

`Error`

als auch

`Exception`

das Interface

```
Throwable
```

---

# Mini-Projekt

Schreiben Sie eine Klasse

```php
DateiService
```

Methoden

```php
lesen()

schreiben()
```

Anforderungen

- Datei prüfen
- Exception werfen
- Fehler loggen
- Benutzerfreundliche Meldung ausgeben

---

# Typische IHK-Fragen

## Warum Exceptions?

Antwort

Damit Fehler kontrolliert behandelt werden können, ohne dass das Programm sofort beendet wird.

---

## Unterschied `throw` und `catch`?

`throw`

→ löst eine Exception aus.

`catch`

→ behandelt die Exception.

---

## Wann wird `finally` ausgeführt?

Antwort

Immer – unabhängig davon, ob eine Exception auftritt oder nicht.

---

## Warum Logging?

Antwort

Damit Fehler später analysiert werden können, ohne sie dem Benutzer anzuzeigen.

---

# Prüfungsfallen

❌ Leere `catch`-Blöcke.

❌ Interne Fehlermeldungen direkt an den Benutzer ausgeben.

❌ Dateien nicht schließen.

❌ Exceptions verschlucken.

❌ Alles mit `try-catch` umgeben, obwohl es nicht nötig ist.

---

# Best Practices

✓ Spezifische Exceptions verwenden.

✓ Fehler protokollieren (`error_log()`).

✓ Benutzerfreundliche Meldungen anzeigen.

✓ `finally` für Aufräumarbeiten nutzen.

✓ Eigene Exception-Klassen für Geschäftslogik erstellen.

✓ Keine sensiblen Informationen im Browser ausgeben.

---

# Kapitel 209

# Wiederholung OOP

Eine Klasse beschreibt den Bauplan eines Objekts.

```php
class Auto
{

    public string $marke;

    public function fahren()
    {

        echo "Fährt";

    }

}
```

Objekt

```php
$auto = new Auto();
```

---

## OOP-Grundbegriffe

| Begriff  | Bedeutung           |
|----------|---------------------|
| Klasse   | Bauplan             |
| Objekt   | Instanz             |
| Attribut | Eigenschaft         |
| Methode  | Funktion der Klasse |

---

# Kapitel 210

# Vererbung

Vererbung bedeutet

Eine Klasse übernimmt Eigenschaften einer anderen Klasse.

---

Beispiel

```
                Fahrzeug
                    ▲
                    │
     ┌──────────────┴─────────────┐
     │                            │
    Auto                        Motorrad
```

---

PHP

```php
class Fahrzeug
{

    public function fahren()
    {

        echo "Das Fahrzeug fährt.";

    }

}

class Auto extends Fahrzeug
{

}
```

---

Jetzt besitzt Auto automatisch

```php
fahren()
```

---

Benutzung

```php
$auto = new Auto();

$auto->fahren();
```

Ausgabe

```
Das Fahrzeug fährt.
```

---

# Kapitel 211

# Überschreiben (Override)

Methoden können überschrieben werden.

```php
class Fahrzeug
{

    public function fahren()
    {

        echo "Fahrzeug";

    }

}

class Auto extends Fahrzeug
{

    public function fahren()
    {

        echo "Auto";

    }

}
```

---

Jetzt lautet die Ausgabe

```
Auto
```

---

# Kapitel 212

# parent

Auf Methoden der Oberklasse kann zugegriffen werden.

```php
class Fahrzeug
{

    public function fahren()
    {

        echo "Fahrzeug";

    }

}

class Auto extends Fahrzeug
{

    public function fahren()
    {

        parent::fahren();

        echo " fährt schnell.";

    }

}
```

Ausgabe

```
Fahrzeug fährt schnell.
```

---

# Kapitel 213

# Konstruktoren

Auch Konstruktoren können vererbt werden.

```php
class Person
{

    protected string $name;

    public function __construct($name)
    {

        $this->name = $name;

    }

}
```

---

Kindklasse

```php
class Mitarbeiter extends Person
{

    private int $personalNr;

    public function __construct(

        $name,

        $nr

    ){

        parent::__construct($name);

        $this->personalNr = $nr;

    }

}
```

---

# Kapitel 214

# protected

Sichtbarkeiten

| Sichtbarkeit | Zugriff |
|---------------|----------|
| public | überall |
| private | nur eigene Klasse |
| protected | eigene Klasse + Unterklassen |

---

Beispiel

```php
protected string $name;
```

Kann in Unterklassen verwendet werden.

---

# Kapitel 215

# Abstrakte Klassen

Manche Klassen sollen niemals direkt erzeugt werden.

```php
abstract class Tier
{

}
```

---

Nicht erlaubt

```php
$tier = new Tier();
```

---

Erlaubt

```php
class Hund extends Tier
{

}

$hund = new Hund();
```

---

# Kapitel 216

# Abstrakte Methoden

```php
abstract class Tier
{

    abstract public function laut();

}
```

---

Unterklasse

```php
class Hund extends Tier
{

    public function laut()
    {

        echo "Wuff";

    }

}
```

---

Alle abstrakten Methoden müssen implementiert werden.

---

# Kapitel 217

# Interfaces

Ein Interface beschreibt nur,

**welche Methoden vorhanden sein müssen.**

---

```php
interface Fahrbar
{

    public function fahren();

}
```

---

Klasse

```php
class Auto implements Fahrbar
{

    public function fahren()
    {

        echo "Auto fährt.";

    }

}
```

---

Ein Interface enthält

- keine Attribute
- keine Implementierung (vereinfacht)

Nur Methodensignaturen.

---

# Vorteile

Mehrere Klassen können dieselbe Schnittstelle besitzen.

```
          Fahrbar
             ▲
   ┌─────────┴─────────┐
   │                   │
 Auto              Fahrrad
```

---

# Kapitel 218

# Interface vs. abstrakte Klasse

| Interface       | Abstrakte Klasse          |
|-----------------|---------------------------|
| Vertrag         | teilweise Implementierung |
| mehrere möglich | nur eine Oberklasse       |
| keine Attribute | Attribute erlaubt         |

---

Merksatz

Interface

↓

**Was kann das Objekt?**

Abstrakte Klasse

↓

**Was ist das Objekt?**

---

# Kapitel 219

# Polymorphismus

Polymorphismus bedeutet

Gleiche Schnittstelle,

unterschiedliches Verhalten.

---

```php
interface Tier
{

    public function laut();

}
```

---

```php
class Hund implements Tier
{

    public function laut()
    {

        echo "Wuff";

    }

}
```

---

```php
class Katze implements Tier
{

    public function laut()
    {

        echo "Miau";

    }

}
```

---

Benutzung

```php
function ausgabe(Tier $tier)
{

    $tier->laut();

}
```

---

```php
ausgabe(new Hund());

ausgabe(new Katze());
```

Ausgabe

```
Wuff

Miau
```

---

# Kapitel 220

# Komposition

Nicht immer ist Vererbung sinnvoll.

Beispiel

```
Auto

↓

Motor
```

Ein Auto **hat einen** Motor.

Nicht

```
Auto ist Motor.
```

---

PHP

```php
class Motor
{

}
```

---

```php
class Auto
{

    private Motor $motor;

    public function __construct()
    {

        $this->motor = new Motor();

    }

}
```

---

Merksatz

```
IS-A

↓

Vererbung
```

```
HAS-A

↓

Komposition
```

---

# Kapitel 221

# SOLID

SOLID beschreibt fünf wichtige OOP-Prinzipien.

---

## S

Single Responsibility Principle

Eine Klasse besitzt genau eine Aufgabe.

---

Schlecht

```php
class Kunde
{

    speichern()

    drucken()

    senden()

}
```

---

Besser

```
Kunde

↓

KundeRepository

↓

PdfService

↓

MailService
```

---

## O

Open Closed Principle

Klassen sollen

offen für Erweiterungen,

geschlossen für Änderungen sein.

---

Beispiel

Neue Fahrzeugtypen

↓

neue Klassen

↓

keine Änderung bestehender Klassen.

---

## L

Liskov Substitution Principle

Unterklassen müssen überall

anstelle der Oberklasse funktionieren.

---

## I

Interface Segregation Principle

Viele kleine Interfaces

statt eines riesigen.

---

Schlecht

```php
interface Worker
{

    arbeiten();

    fahren();

    fliegen();

    schwimmen();

}
```

---

Besser

```php
interface Fahrbar
```

```php
interface Schwimmbar
```

---

## D

Dependency Inversion Principle

Von Abstraktionen abhängig sein,

nicht von konkreten Klassen.

---

Schlecht

```php
class Auto
{

    private DieselMotor $motor;

}
```

---

Besser

```php
class Auto
{

    private MotorInterface $motor;

}
```

---

# Kapitel 222

# UML-Klassendiagramm

```
+----------------------+
|      Fahrzeug        |
+----------------------+
| - marke : String     |
+----------------------+
| + fahren() : void    |
+----------------------+
```

---

Vererbung

```
        Fahrzeug
             ▲
             │
          Auto
```

---

Interface

```
<<interface>>

Fahrbar

      ▲

      │

    Auto
```

---

# Kapitel 223

# Mini-Projekt

Erstellen Sie

```
Person

↑

Mitarbeiter

↑

Azubi
```

Zusätzlich

```
interface Arbeitbar
```

Methoden

```php
arbeiten()

pause()

```

Erzeugen Sie mehrere Objekte

und speichern Sie diese in einem Array.

Durchlaufen Sie das Array

mit einer Schleife.

---

# Typische IHK-Fragen

## Unterschied Interface und abstrakte Klasse?

Antwort

Ein Interface beschreibt einen Vertrag.

Eine abstrakte Klasse kann bereits Implementierungen enthalten.

---

## Wann Vererbung?

Wenn eine **IS-A**-Beziehung besteht.

---

## Wann Komposition?

Wenn eine **HAS-A**-Beziehung besteht.

---

## Was ist Polymorphismus?

Antwort

Mehrere Klassen reagieren unterschiedlich auf denselben Methodenaufruf.

---

## Was bedeutet SOLID?

Antwort

Fünf Prinzipien für wartbare objektorientierte Software.

---

# Prüfungsfallen

❌ Vererbung statt Komposition verwenden.

❌ Alles als `public` deklarieren.

❌ Interfaces mit Implementierung verwechseln.

❌ Zu große Klassen entwickeln.

❌ Mehrfachvererbung in PHP erwarten (gibt es nicht).

---

# Best Practices

✓ Interfaces für lose Kopplung verwenden.

✓ Komposition gegenüber Vererbung bevorzugen.

✓ Kleine Klassen mit klarer Verantwortung schreiben.

✓ SOLID-Prinzipien berücksichtigen.

✓ UML-Diagramme lesen und zeichnen können.

---

# PHP für Fachinformatiker (IHK AP1/AP2)

---

# Kapitel 224

# Was sind Entwurfsmuster?

Ein Entwurfsmuster ist eine **bewährte Lösung für ein häufig wiederkehrendes Softwareproblem**.

Es ist **kein fertiger Code**, sondern eine Vorlage.

---

## Warum wichtig?

In der AP2 werden häufig gefragt:

- „Welches Pattern würden Sie verwenden?“
- „Zu welcher Kategorie gehört Observer?“
- „Warum ist Strategy besser als viele if-else-Blöcke?“

---

# Kategorien

| Kategorie        | Zweck                       |
|------------------|-----------------------------|
| Erzeugungsmuster | Objekte erzeugen            |
| Strukturmuster   | Klassen zusammensetzen      |
| Verhaltensmuster | Zusammenarbeit von Objekten |

---

## Beispiele

| Pattern        | Kategorie        |
|----------------|------------------|
| Singleton      | Erzeugungsmuster |
| Factory Method | Erzeugungsmuster |
| Builder        | Erzeugungsmuster |
| Adapter        | Strukturmuster   |
| Decorator      | Strukturmuster   |
| Observer       | Verhaltensmuster |
| Strategy       | Verhaltensmuster |

---

# Kapitel 225

# Singleton

## Problem

Es soll **genau eine Instanz** existieren.

Beispiel:

- Datenbankverbindung
- Konfiguration
- Logger

---

## UML

```
+----------------------+
|      Database        |
+----------------------+
| - instance : self    |
+----------------------+
| - __construct()      |
| + getInstance()      |
+----------------------+
```

---

## Implementierung

<CodeBlock language="php" editable interactive content="<?php
class Database
{
private static ?Database $instance = null;

    private function __construct()
    {
        echo 'Verbindung erstellt';
    }

    public static function getInstance(): Database
    {
        if (self::$instance === null) {
            self::$instance = new Database();
        }

        return self::$instance;
    }
}

$db1 = Database::getInstance();
$db2 = Database::getInstance();

var_dump($db1 === $db2);"/>

Ausgabe

<CodeBlock language="text" content="Verbindung erstellt
bool(true)"/>

---

## Vorteile

✓ Nur eine Instanz

✓ Gemeinsame Ressource

✓ Speicher sparen

---

## Nachteile

✗ Globaler Zustand

✗ Schwer testbar

✗ Versteckte Abhängigkeiten

---

## IHK-Merksatz

> Singleton gehört zu den **Erzeugungsmustern**.

---

# Kapitel 226

# Factory Method

## Problem

Der Code soll **nicht direkt mit `new` arbeiten**.

---

Ohne Factory

<CodeBlock language="php" editable interactive content="<?php
$zahlung = new PayPalPayment();"/>

---

Mit Factor
```php
<CodeBlock language="php" editable interactive content="<?php
interface Payment
{
public function pay(): void;
}

class PayPalPayment implements Payment
{
public function pay(): void
{
echo 'PayPal';
}
}

class CreditCardPayment implements Payment
{
public function pay(): void
{
echo 'Kreditkarte';
}
}

class PaymentFactory
{
public static function create(string $type): Payment
{
return match ($type) {
'paypal' => new PayPalPayment(),
'card' => new CreditCardPayment(),
default => throw new InvalidArgumentException('Unbekannter Typ'),
};
}
}

$payment = PaymentFactory::create('paypal');
$payment->pay();"/>
```

---

## Vorteil

Der aufrufende Code kennt nur das Interface.

```
Controller

↓

Factory

↓

Konkrete Klasse
```

---

## IHK-Frage

**Warum Factory?**

Antwort:

Zur **Entkopplung der Objekterzeugung vom Anwendungscode**.

---

# Kapitel 227

# Builder

## Problem

Ein Objekt besitzt sehr viele optionale Parameter.

---

Schlecht

<CodeBlock language="php" editable interactive content="<?php
$haus = new Haus(
3,
true,
false,
true,
false,
true,
'rot',
'Ziegel',
2
);"/>

Niemand weiß, welcher Parameter wofür steht.

---

## Builder-Lösung

<CodeBlock language="php" editable interactive content="<?php
class Haus
{
public int $zimmer = 0;
public bool $garage = false;
public bool $pool = false;
}

class HausBuilder
{
private Haus $haus;

    public function __construct()
    {
        $this->haus = new Haus();
    }

    public function mitZimmern(int $anzahl): self
    {
        $this->haus->zimmer = $anzahl;
        return $this;
    }

    public function mitGarage(): self
    {
        $this->haus->garage = true;
        return $this;
    }

    public function mitPool(): self
    {
        $this->haus->pool = true;
        return $this;
    }

    public function build(): Haus
    {
        return $this->haus;
    }
}

$haus = (new HausBuilder())
->mitZimmern(3)
->mitGarage()
->mitPool()
->build();

var_dump($haus);"/>

---

## Vorteil

✓ Lesbarer

✓ Erweiterbar

✓ Keine langen Konstruktoren

---

# Kapitel 228

# Observer

Das Pattern kennst du bereits.

---

## Kategorie

**Verhaltensmuster**.

---

## Problem

Ein Objekt ändert seinen Zustand.

Andere Objekte sollen automatisch informiert werden.

---

## Beispiel

- GUI aktualisieren
- Aktienkurs
- Chat
- Event-System

---

## Struktur

```
Subject

↓

notify()

↓

Observer 1

Observer 2

Observer 3
```

---

## PHP-Beispiel
```php
<CodeBlock language="php" editable interactive content="<?php
interface Observer
{
public function update(string $message): void;
}

class UserObserver implements Observer
{
public function update(string $message): void
{
echo 'Benachrichtigung: ' . $message . PHP_EOL;
}
}

class ChatRoom
{
private array $observers = [];

    public function attach(Observer $observer): void
    {
        $this->observers[] = $observer;
    }

    public function sendMessage(string $message): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($message);
        }
    }
}

$chat = new ChatRoom();
$chat->attach(new UserObserver());
$chat->sendMessage('Neue Nachricht');"/>
```
---

## IHK-Merksatz

Observer = **Verhaltensmuster**.

---

# Kapitel 229

# Strategy

## Problem

Viele if-else-Blöcke.

---

Schlecht
```php
<CodeBlock language="php" editable interactive content="<?php
function berechneVersand(string $land, float $gewicht): float
{
if ($land === 'DE') {
return $gewicht * 2;
} elseif ($land === 'AT') {
return $gewicht * 3;
} elseif ($land === 'CH') {
return $gewicht * 5;
}

    return 0;
}

echo berechneVersand('AT', 10);"/>
```
Bei jedem neuen Land muss die Funktion geändert werden.

---

## Strategy-Lösung
```php
<CodeBlock language="php" editable interactive content="<?php
interface VersandStrategie
{
public function berechne(float $gewicht): float;
}

class DeutschlandStrategie implements VersandStrategie
{
public function berechne(float $gewicht): float
{
return $gewicht * 2;
}
}

class OesterreichStrategie implements VersandStrategie
{
public function berechne(float $gewicht): float
{
return $gewicht * 3;
}
}

class VersandService
{
public function __construct(
private VersandStrategie $strategie
) {
}

    public function preis(float $gewicht): float
    {
        return $this->strategie->berechne($gewicht);
    }
}

$service = new VersandService(new OesterreichStrategie());
echo $service->preis(10);"/>
```
---

## Vorteil

Neue Strategien können hinzugefügt werden,

ohne bestehenden Code zu ändern.

Das ist ein perfektes Beispiel für das **Open-Closed-Prinzip**.

---

# Kapitel 230

# Decorator

## Problem

Funktionalität soll **dynamisch erweitert** werden.

---

Beispiel

Kaffee + Milch + Zucker + Sirup.

---

## Idee

Objekte werden **eingewickelt**.

```
Espresso

↓

MilchDecorator

↓

ZuckerDecorator

↓

SirupDecorator
```

---

## IHK-Merksatz

Decorator gehört zu den **Strukturmustern**.

---

# Kapitel 231

# Adapter

## Problem

Zwei Klassen besitzen inkompatible Schnittstellen.

---

Beispiel

Alte Bibliothek
```php
<CodeBlock language="php" editable interactive content="<?php
class LegacyPrinter
{
public function printText(string $text): void
{
echo 'Legacy: ' . $text;
}
}"/>
```
Neue Anwendung erwartet
```php
<CodeBlock language="php" editable interactive content="<?php
interface Printer
{
public function print(string $text): void;
}"/>
```
---

## Adapter
```php
<CodeBlock language="php" editable interactive content="<?php
interface Printer
{
public function print(string $text): void;
}

class LegacyPrinter
{
public function printText(string $text): void
{
echo 'Legacy: ' . $text;
}
}

class PrinterAdapter implements Printer
{
public function __construct(
private LegacyPrinter $legacy
) {
}

    public function print(string $text): void
    {
        $this->legacy->printText($text);
    }
}

$printer = new PrinterAdapter(new LegacyPrinter());
$printer->print('Hallo');"/>
```
---

## Zweck

Alte Komponenten weiterverwenden,

ohne sie umzuschreiben.

---

# Kapitel 232

# MVC und Patterns

MVC kombiniert mehrere Entwurfsmuster.

| Teil       | Typisches Pattern |
|------------|-------------------|
| Model      | Observer          |
| Controller | Strategy          |
| Service    | Factory           |
| View       | Template          |

---

Beispiel

```
HTTP Request

↓

Controller

↓

Factory erzeugt Service

↓

Service nutzt Repository

↓

Model benachrichtigt Observer

↓

View rendert HTML
```

Das ist bereits sehr nah an Laravel oder Symfony.

---

# Kapitel 233

# Wann welches Pattern?
```php
<Table columnSizing="equal" rowDivider={1}>
<Table.Row header>
<Table.Cell>Problem</Table.Cell>
<Table.Cell>Pattern</Table.Cell></Table.Row>
<Table.Row>
<Table.Cell>Nur eine Instanz</Table.Cell>
<Table.Cell>Singleton</Table.Cell></Table.Row>
<Table.Row><Table.Cell>Objekte flexibel erzeugen</Table.Cell>
<Table.Cell>Factory</Table.Cell></Table.Row>
<Table.Row><Table.Cell>Viele optionale Parameter</Table.Cell>
<Table.Cell>Builder</Table.Cell></Table.Row>
<Table.Row><Table.Cell>Automatische Benachrichtigung</Table.Cell>
<Table.Cell>Observer</Table.Cell></Table.Row>
<Table.Row><Table.Cell>Algorithmus austauschbar</Table.Cell>
<Table.Cell>Strategy</Table.Cell></Table.Row>
<Table.Row><Table.Cell>Funktionalität erweitern</Table.Cell>
<Table.Cell>Decorator</Table.Cell></Table.Row>
<Table.Row><Table.Cell>Alte Schnittstelle anpassen</Table.Cell>
<Table.Cell>Adapter</Table.Cell></Table.Row></Table>
```
---

# Typische IHK-Fragen

## Zu welcher Kategorie gehört Observer?

**Antwort:** Verhaltensmuster.

---

## Wann verwendet man Strategy?

Wenn ein **Algorithmus zur Laufzeit austauschbar** sein soll.

---

## Unterschied Factory und Builder?

- **Factory:** erzeugt Objekte.
- **Builder:** erzeugt komplexe Objekte schrittweise.

---

## Warum ist Adapter nützlich?

Um **inkompatible Schnittstellen miteinander zu verbinden**.

---

# Prüfungsfallen

❌ Observer als Strukturmuster einordnen.

❌ Singleton überall verwenden.

❌ Factory mit Repository verwechseln.

❌ Strategy nur als „viele Klassen“ beschreiben – wichtig ist der **austauschbare Algorithmus**.

❌ Adapter und Decorator verwechseln.

---

# Best Practices

✓ Patterns nur einsetzen, wenn sie ein echtes Problem lösen.

✓ Nicht „Pattern um des Patterns willen“ verwenden.

✓ Interfaces für lose Kopplung nutzen.

✓ Strategy + Dependency Injection kombinieren.

✓ Singleton sparsam einsetzen.

✓ UML-Diagramme zu den wichtigsten Patterns zeichnen können.

---

# Kapitel 234

# Was ist Softwarearchitektur?

Die Softwarearchitektur beschreibt den **grundlegenden Aufbau** einer Anwendung.

Sie legt fest,

- welche Komponenten existieren,
- wie sie zusammenarbeiten,
- welche Verantwortung jede Komponente besitzt.

---

## Beispiel

```
Browser

↓

Controller

↓

Service

↓

Repository

↓

MySQL
```

---

Warum?

Eine klare Architektur erleichtert

- Wartung
- Erweiterung
- Testbarkeit
- Zusammenarbeit im Team

---

# Kapitel 235

# Schichtenarchitektur

Eine Anwendung wird in Schichten aufgeteilt.

```
+----------------------+
| Presentation Layer   |
+----------------------+
| Business Layer       |
+----------------------+
| Data Access Layer    |
+----------------------+
| Database             |
+----------------------+
```

---

## Aufgaben

### Presentation Layer

- HTML
- Formulare
- Benutzeroberfläche

---

### Business Layer

- Geschäftslogik
- Berechnungen
- Validierung

---

### Data Access Layer

- SQL
- PDO
- Repository

---

### Database

- Speicherung der Daten

---

# Vorteile

✓ klare Verantwortlichkeiten

✓ austauschbare Komponenten

✓ bessere Wartbarkeit

---

# Kapitel 236

# MVC

MVC bedeutet

```
Model

View

Controller
```

---

## MVC-Diagramm

```
Benutzer

↓

View

↓

Controller

↓

Model

↓

Datenbank

↓

Model

↓

View

↓

Benutzer
```

---

# Model

Enthält

- Daten
- Geschäftslogik
- Validierung

Beispiel

```php
class Kunde
{

    private string $name;

}
```

---

# View

Zeigt Daten an.

Beispiele

- HTML
- CSS
- Tabellen
- Formulare

Die View enthält **keine SQL-Abfragen**.

---

# Controller

Der Controller verbindet alles.

Er

- empfängt Requests
- ruft Services auf
- wählt Views aus

---

# Kapitel 237

# MVC in PHP

```
index.php

↓

CustomerController

↓

CustomerService

↓

CustomerRepository

↓

PDO

↓

MySQL
```

---

## Controller

```php
class CustomerController
{

    public function index()
    {

        $kunden = $this->service->findAll();

        include "kunden.php";

    }

}
```

---

Controller

↓

keine SQL

↓

keine HTML-Erzeugung

↓

nur Steuerung

---

# Kapitel 238

# Repository Pattern

Bereits bekannt.

Aufgabe

```
SQL kapseln
```

---

Beispiel

```php
class CustomerRepository
{

    public function findAll()
    {

    }

    public function save()
    {

    }

}
```

---

Controller kennt

keine SQL.

---

# Kapitel 239

# Service Layer

Zwischen Controller und Repository.

```
Controller

↓

Service

↓

Repository
```

---

Warum?

Geschäftslogik gehört nicht in den Controller.

---

Beispiel

```php
class CustomerService
{

    public function createCustomer()

    {

        // prüfen

        // berechnen

        // speichern

    }

}
```

---

# Verantwortlichkeiten

| Klasse     | Aufgabe        |
|------------|----------------|
| Controller | Ablauf         |
| Service    | Geschäftslogik |
| Repository | Datenbank      |

---

# Kapitel 240

# Dependency Injection

Schlecht

```php
class Service
{

    private PDO $pdo;

    public function __construct()

    {

        $this->pdo = new PDO(...);

    }

}
```

---

Problem

Die Klasse erzeugt ihre Abhängigkeiten selbst.

---

Besser

```php
class Service
{

    public function __construct(

        private CustomerRepository $repository

    ){

    }

}
```

---

Objekte werden von außen übergeben.

---

Vorteile

✓ testbar

✓ austauschbar

✓ lose Kopplung

---

# Kapitel 241

# Clean Code

Clean Code bedeutet

```
leicht lesbarer

wartbarer

verständlicher Code
```

---

Code wird häufiger gelesen

als geschrieben.

---

# Gute Namen

Schlecht

```php
$a

$b

$c
```

---

Besser

```php
customerName

invoiceTotal

employeeList
```

---

# Methoden

Schlecht

```php
doEverything()
```

---

Besser

```php
calculatePrice()

saveCustomer()

sendEmail()
```

---

# Kapitel 242

# Kleine Methoden

Schlecht

```
300 Zeilen
```

---

Besser

```
20–30 Zeilen
```

---

Eine Methode

↓

eine Aufgabe

---

# Kapitel 243

# Keine doppelten Codes

Schlecht

```php
preis * 1.19

...

preis * 1.19

...

preis * 1.19
```

---

Besser

```php
calculateVat()
```

---

Merksatz

```
DRY

Don't Repeat Yourself
```

---

# Kapitel 244

# Code Smells

Ein Code Smell ist

ein Hinweis auf mögliches schlechtes Design.

---

Typische Code Smells

- lange Methoden
- riesige Klassen
- viele Parameter
- duplizierter Code
- tiefe Verschachtelungen
- Magic Numbers

---

Beispiel

```php
if(a){

    if(b){

        if(c){

            if(d){

            }

        }

    }

}
```

---

Besser

Früh zurückkehren

```php
if(!$a){

    return;

}
```

---

# Kapitel 245

# Refactoring

Refactoring bedeutet

```
Code verbessern

↓

Funktion bleibt gleich
```

---

Beispiel

Vorher

```php
if($kunde == true){

}
```

---

Nachher

```php
if($kunde){

}
```

---

Vorher

```php
$x = 19;
```

---

Nachher

```php
const VAT = 19;
```

---

Vorher

```php
if($status == 1)
```

---

Nachher

```php
if($status == Status::ACTIVE)
```

---

# Kapitel 246

# Magic Numbers vermeiden

Schlecht

```php
if($age >= 18)
```

---

Besser

```php
const ADULT_AGE = 18;

if($age >= ADULT_AGE)
```

---

# Kapitel 247

# Beispielprojekt

```
src

│

├── Controller

│      CustomerController.php

│

├── Service

│      CustomerService.php

│

├── Repository

│      CustomerRepository.php

│

├── Model

│      Customer.php

│

├── View

│      customerList.php

│

└── config.php
```

---

Das entspricht dem Aufbau vieler professioneller PHP-Projekte.

---

# Kapitel 248

# Ablauf einer Anfrage

```
Browser

↓

Controller

↓

Service

↓

Repository

↓

PDO

↓

MySQL

↓

Repository

↓

Service

↓

Controller

↓

View

↓

Browser
```

---

# Mini-Projekt

Erstellen Sie eine Kundenverwaltung.

Klassen

```
Customer

CustomerRepository

CustomerService

CustomerController
```

Methoden

- findAll()
- findById()
- save()
- update()
- delete()

Verwenden Sie

- MVC
- PDO
- Dependency Injection

---

# Typische IHK-Fragen

## Warum MVC?

Antwort

Zur Trennung von Darstellung, Geschäftslogik und Datenhaltung.

---

## Unterschied Repository und Service?

Repository

↓

Datenbankzugriff

Service

↓

Geschäftslogik

---

## Was bedeutet Dependency Injection?

Antwort

Abhängigkeiten werden von außen übergeben und nicht innerhalb der Klasse erzeugt.

---

## Was bedeutet DRY?

Antwort

Code soll nicht mehrfach geschrieben werden.

---

## Was ist Refactoring?

Antwort

Verbesserung der Codequalität ohne Änderung des Verhaltens.

---

# Prüfungsfallen

❌ SQL im Controller.

❌ HTML im Repository.

❌ Geschäftslogik in der View.

❌ Klassen mit mehreren Verantwortlichkeiten.

❌ Verwendung von Magic Numbers.

❌ Lange Methoden mit mehreren Aufgaben.

---

# Best Practices

✓ MVC konsequent einhalten.

✓ Repository für Datenzugriff verwenden.

✓ Geschäftslogik in Services kapseln.

✓ Dependency Injection nutzen.

✓ Aussagekräftige Namen verwenden.

✓ Kleine Methoden schreiben.

✓ DRY beachten.

✓ Regelmäßig refaktorieren.

---

# Zusammenfassung Teil 26

Sie haben gelernt

✓ Softwarearchitektur

✓ Schichtenarchitektur

✓ MVC

✓ Controller

✓ Service

✓ Repository

✓ Dependency Injection

✓ Clean Code

✓ DRY

✓ Code Smells

✓ Refactoring

---

# Kapitel 249

# Was ist Composer?

Composer ist der **Standard-Paketmanager für PHP**.

Vergleich

| Sprache    | Paketmanager |
|------------|--------------|
| PHP        | Composer     |
| Java       | Maven        |
| JavaScript | npm          |
| Python     | pip          |
| .NET       | NuGet        |

---

Mit Composer können Bibliotheken automatisch installiert werden.

Beispiele

- Monolog
- PHPUnit
- Twig
- Symfony
- Laravel-Komponenten

---

# Kapitel 250

# composer.json

Jedes Composer-Projekt besitzt eine Datei

```
composer.json
```

Beispiel

```json
{
    "name": "firma/shop",
    "description": "Online Shop",
    "require": {
        "monolog/monolog": "^3.0"
    }
}
```

---

Wichtige Bereiche

| Schlüssel   | Bedeutung                |
|-------------|--------------------------|
| name        | Projektname              |
| description | Beschreibung             |
| require     | Abhängigkeiten           |
| require-dev | Entwicklungsbibliotheken |
| autoload    | Autoloading              |
| scripts     | Befehle                  |

---

# Kapitel 251

# Bibliothek installieren

Installation

```bash
composer require monolog/monolog
```

Composer

↓

lädt automatisch

↓

alle benötigten Pakete herunter.

---

Danach entsteht

```
vendor/
```

und

```
composer.lock
```

---

Projektstruktur

```
Projekt

│

├── composer.json

├── composer.lock

├── vendor/

└── src/
```

---

# Kapitel 252

# vendor-Verzeichnis

Hier liegen

alle installierten Bibliotheken.

```
vendor/

│

├── autoload.php

├── composer/

├── monolog/

└── ...
```

---

Wichtig

Dieses Verzeichnis wird **nicht selbst verändert**.

---

# Kapitel 253

# composer.lock

Viele Anfänger löschen diese Datei.

Das ist falsch.

---

Warum?

Sie speichert

die **genauen Versionen** aller Bibliotheken.

---

Beispiel

```
composer.json

↓

^3.0
```

Installiert wurde

```
3.2.1
```

Diese Version steht anschließend in

```
composer.lock
```

---

Dadurch erhalten alle Entwickler dieselben Versionen.

---

# Kapitel 254

# Autoloading

Früher

```php
require "Auto.php";
require "Motor.php";
require "Reifen.php";
require "Tank.php";
```

Bei großen Projekten völlig unübersichtlich.

---

Heute

```php
require "vendor/autoload.php";
```

Fertig.

Composer lädt Klassen automatisch.

---

# Kapitel 255

# PSR-4

PSR bedeutet

```
PHP Standard Recommendation
```

PSR-4 beschreibt,

wie Klassen automatisch gefunden werden.

---

composer.json

```json
{
    "autoload": {
        "psr-4": {
            "App\\": "src/"
        }
    }
}
```

---

Das bedeutet

```
Namespace

App

↓

Ordner

src/
```

---

# Kapitel 256

# Namespace

Ohne Namespace

```php
class User
{

}
```

Problem

Mehrere Bibliotheken besitzen ebenfalls

```
User
```

---

Mit Namespace

```php
namespace App\Models;

class User
{

}
```

---

Benutzung

```php
use App\Models\User;

$user = new User();
```

---

Ordnerstruktur

```
src

│

└── Models

      User.php
```

---

Datei

```php
namespace App\Models;

class User
{

}
```

---

# Kapitel 257

# use

Importiert Klassen.

```php
use App\Models\User;
```

Dann genügt

```php
$user = new User();
```

Ohne `use`

```php
$user = new App\Models\User();
```

---

# Kapitel 258

# Autoload aktualisieren

Nach neuen Klassen

```bash
composer dump-autoload
```

Composer erstellt den Autoloader neu.

---

# Kapitel 259

# Packagist

Die größte PHP-Paketplattform.

Beispiele

- Monolog
- Guzzle
- PHPUnit
- Symfony
- Faker

Fast jede Bibliothek wird über Packagist verteilt.

---

# Kapitel 260

# Semantische Versionierung

Version

```
2.5.8
```

besteht aus

```
Major.Minor.Patch
```

---

Beispiel

```
3.2.5
```

| Zahl | Bedeutung         |
|------|-------------------|
| 3    | große Änderungen  |
| 2    | neue Funktionen   |
| 5    | Fehlerkorrekturen |

---

# Composer-Versionen

```
^3.0
```

bedeutet

Alle Versionen

```
>=3.0

<4.0
```

---

Weitere Beispiele

| Angabe | Bedeutung           |
|--------|---------------------|
| ^2.3   | bis unter 3.0       |
| ~2.3   | bis unter 2.4       |
| 3.1.4  | exakt diese Version |

---

# Kapitel 261

# require vs require-dev

Normale Bibliotheken

```json
"require"
```

---

Entwicklungswerkzeuge

```json
"require-dev"
```

---

Beispiele

| require | require-dev  |
|---------|--------------|
| Monolog | PHPUnit      |
| Twig    | PHPStan      |
| Symfony | PHP-CS-Fixer |

---

# Kapitel 262

# Praktisches Beispiel

Projekt

```
shop/

│

├── src/

│      Product.php

│

├── composer.json

│

└── vendor/
```

---

composer.json

```json
{
    "autoload": {
        "psr-4": {
            "App\\": "src/"
        }
    }
}
```

---

Product.php

```php
namespace App;

class Product
{
    public function getName(): string
    {
        return "Notebook";
    }
}
```

---

index.php

```php
require "vendor/autoload.php";

use App\Product;

$product = new Product();

echo $product->getName();
```

Ausgabe

```
Notebook
```

---

# Kapitel 263

# Häufige PSR-Standards

| Standard | Bedeutung     |
|----------|---------------|
| PSR-1    | Grundregeln   |
| PSR-4    | Autoloading   |
| PSR-7    | HTTP Messages |
| PSR-12   | Coding Style  |
| PSR-18   | HTTP Client   |

---

Für die IHK besonders wichtig

✓ PSR-4

✓ PSR-12

---

# Mini-Projekt

Erstellen Sie

```
src/

Customer.php

Order.php

Invoice.php
```

Nutzen Sie

- Namespace
- Composer
- PSR-4
- Autoloading

Erzeugen Sie anschließend alle Klassen im `index.php`, ohne `require` für jede einzelne Datei zu verwenden.

---

# Typische IHK-Fragen

## Wozu dient Composer?

Antwort

Zur Verwaltung von Bibliotheken und Abhängigkeiten.

---

## Was macht `vendor/autoload.php`?

Antwort

Es lädt Klassen automatisch anhand der Composer-Konfiguration.

---

## Warum `composer.lock` nicht löschen?

Antwort

Damit alle Entwickler dieselben Bibliotheksversionen verwenden.

---

## Was ist ein Namespace?

Antwort

Ein Namespace verhindert Namenskonflikte zwischen Klassen.

---

## Was beschreibt PSR-4?

Antwort

Den Standard für automatisches Laden von Klassen anhand ihrer Namespaces und Ordnerstruktur.

---

# Prüfungsfallen

❌ `vendor/` manuell bearbeiten.

❌ `composer.lock` aus dem Repository löschen.

❌ Klassen ohne Namespace erstellen.

❌ Nach neuen Klassen `dump-autoload` vergessen.

❌ `require` für jede Klasse verwenden statt Composer-Autoloading.

---

# Best Practices

✓ Composer für jedes neue Projekt verwenden.

✓ PSR-4 konsequent einsetzen.

✓ Aussagekräftige Namespaces wählen.

✓ `vendor/` nicht verändern.

✓ `composer.lock` mit versionieren.

✓ Entwicklungswerkzeuge unter `require-dev` installieren.

---

# Kapitel 264

# Warum testen?

Jede Software enthält Fehler.

Tests helfen dabei,

Fehler früh zu erkennen.

---

## Vorteile

✓ weniger Bugs

✓ sicheres Refactoring

✓ bessere Wartbarkeit

✓ höhere Qualität

✓ Dokumentation des Verhaltens

---

Ohne Tests

```
Code ändern

↓

Hoffen
```

---

Mit Tests

```
Code ändern

↓

Tests ausführen

↓

Sofort sehen,

ob etwas kaputt gegangen ist
```

---

# Kapitel 265

# Testarten

| Test             | Was wird getestet?              |
|------------------|---------------------------------|
| Unit Test        | einzelne Klasse oder Methode    |
| Integrationstest | Zusammenarbeit mehrerer Klassen |
| Systemtest       | komplette Anwendung             |
| Akzeptanztest    | Anforderungen des Kunden        |

---

Für PHP ist PHPUnit hauptsächlich für **Unit Tests** gedacht.

---

# Kapitel 266

# PHPUnit

PHPUnit ist das Standard-Testframework für PHP.

Installation

```bash
composer require --dev phpunit/phpunit
```

---

Projektstruktur

```
Projekt

│

├── src

│

├── tests

│

├── vendor

└── composer.json
```

---

# Kapitel 267

# Erster Test

Klasse

```php
class Calculator
{
    public function add(int $a, int $b): int
    {
        return $a + $b;
    }
}
```

---

Test

```php
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAddition()
    {
        $calculator = new Calculator();

        $this->assertEquals(
            5,
            $calculator->add(2, 3)
        );
    }
}
```

---

Ablauf

```
Calculator

↓

Test

↓

assertEquals()

↓

OK oder Fehler
```

---

# Kapitel 268

# Assertions

Assertions vergleichen

**Soll**

mit

**Ist**

---

Wichtige Assertions

| Methode            | Bedeutung           |
|--------------------|---------------------|
| assertEquals()     | Werte gleich        |
| assertSame()       | Typ und Wert gleich |
| assertTrue()       | true erwartet       |
| assertFalse()      | false erwartet      |
| assertNull()       | null erwartet       |
| assertNotNull()    | nicht null          |
| assertCount()      | Anzahl Elemente     |
| assertEmpty()      | leer                |
| assertInstanceOf() | Objekt-Typ          |

---

Beispiele

```php
$this->assertTrue(true);

$this->assertFalse(false);

$this->assertNull(null);

$this->assertCount(3, $array);
```

---

# Kapitel 269

# Testmethoden

Jede Testmethode beginnt mit

```
test...
```

oder erhält das Attribut

```php
#[Test]
```

(Beides ist in aktuellen PHPUnit-Versionen möglich.)

---

Beispiel

```php
public function testSubtraction()
{

}
```

---

Jede Testmethode prüft

**genau eine Funktionalität**.

---

# Kapitel 270

# AAA-Prinzip

Ein guter Test besitzt drei Bereiche.

```
Arrange

↓

Act

↓

Assert
```

---

Beispiel

```php
public function testMultiply()
{
    // Arrange
    $calc = new Calculator();

    // Act
    $result = $calc->multiply(3, 4);

    // Assert
    $this->assertEquals(12, $result);
}
```

---

Merksatz

```
Vorbereiten

↓

Ausführen

↓

Prüfen
```

---

# Kapitel 271

# Gute Testfälle

Nicht nur Standardfälle testen.

---

Beispiel

Addition

```php
2 + 3
```

---

Auch

```php
0 + 0

-5 + 5

999999 + 1
```

---

Grenzwerte testen.

---

# Kapitel 272

# Exceptions testen

Klasse

```php
class Calculator
{
    public function divide($a, $b)
    {
        if ($b == 0) {
            throw new InvalidArgumentException();
        }

        return $a / $b;
    }
}
```

---

Test

```php
public function testDivisionByZero()
{
    $calc = new Calculator();

    $this->expectException(
        InvalidArgumentException::class
    );

    $calc->divide(10, 0);
}
```

---

# Kapitel 273

# Test Doubles

Manchmal sollen echte Objekte ersetzt werden.

Dafür gibt es Test Doubles.

---

Arten

| Typ  | Aufgabe                  |
|------|--------------------------|
| Stub | liefert feste Werte      |
| Mock | überprüft Aufrufe        |
| Fake | einfache Implementierung |
| Spy  | merkt sich Aufrufe       |

---

# Kapitel 274

# Stub

Beispiel

Repository liefert immer denselben Kunden.

```php
$stub = $this->createStub(
    CustomerRepository::class
);

$stub->method("findById")
     ->willReturn(
        new Customer("Max")
     );
```

---

Kein Zugriff

auf die Datenbank nötig.

---

# Kapitel 275

# Mock

Ein Mock überprüft,

ob Methoden aufgerufen wurden.

```php
$mock = $this->createMock(
    MailService::class
);

$mock->expects($this->once())
     ->method("send");
```

---

Der Test schlägt fehl,

wenn `send()` nicht aufgerufen wird.

---

# Kapitel 276

# Code Coverage

Code Coverage zeigt,

wie viel Code getestet wurde.

---

Beispiel

```
Klasse

100 Zeilen

↓

80 getestet

↓

80 %
```

---

Hohe Coverage bedeutet

nicht automatisch gute Tests.

---

# Kapitel 277

# Test Driven Development

TDD bedeutet

```
Erst Test

Dann Code
```

---

Der Zyklus

```
Red

↓

Green

↓

Refactor
```

---

Red

↓

Test schlägt fehl

---

Green

↓

Minimalen Code schreiben

---

Refactor

↓

Code verbessern

↓

Tests bleiben grün

---

# Kapitel 278

# Testbarer Code

Schlecht

```php
class Service
{
    private PDO $pdo =
        new PDO(...);
}
```

---

Besser

```php
class Service
{
    public function __construct(
        private Repository $repository
    ) {
    }
}
```

---

Dependency Injection

macht Klassen leicht testbar.

---

# Kapitel 279

# Was sollte getestet werden?

✓ Berechnungen

✓ Geschäftslogik

✓ Validierungen

✓ Services

✓ Repository (oft Integrationstest)

---

Nicht unbedingt

- Getter
- Setter
- Framework-Code

---

# Kapitel 280

# Mini-Projekt

Schreiben Sie

```
Calculator
```

Methoden

- add()
- subtract()
- multiply()
- divide()

---

Erstellen Sie

```
CalculatorTest
```

mit mindestens

- positiver Test
- negativer Test
- Exception-Test
- Grenzwert-Test

---

# Typische IHK-Fragen

## Was ist ein Unit Test?

Antwort

Ein automatisierter Test für eine einzelne Klasse oder Methode.

---

## Was prüft `assertEquals()`?

Antwort

Ob Soll- und Ist-Wert gleich sind.

---

## Unterschied Mock und Stub?

Stub

↓

liefert Werte.

Mock

↓

überprüft Methodenaufrufe.

---

## Was bedeutet TDD?

Antwort

Zuerst wird der Test geschrieben, anschließend die Implementierung.

---

## Was ist Code Coverage?

Antwort

Der Anteil des Codes, der durch Tests ausgeführt wird.

---

# Prüfungsfallen

❌ Getter und Setter übermäßig testen.

❌ Zu viele Dinge in einem Test prüfen.

❌ Tests voneinander abhängig machen.

❌ Datenbank in jedem Unit Test verwenden.

❌ Keine Grenzfälle testen.

---

# Best Practices

✓ Eine Funktion pro Test.

✓ Aussagekräftige Testnamen.

✓ AAA-Prinzip verwenden.

✓ Dependency Injection einsetzen.

✓ Tests regelmäßig ausführen.

✓ Kleine, unabhängige Tests schreiben.

---

# Kapitel 281

# Das Client-Server-Modell

Fast jede Webanwendung arbeitet nach dem Client-Server-Prinzip.

```
Browser

↓

HTTP Request

↓

Webserver

↓

PHP

↓

Datenbank

↓

Antwort

↓

Browser
```

---

## Client

Der Client ist das Programm,

das eine Anfrage sendet.

Beispiele

- Chrome
- Firefox
- Edge
- Smartphone-App

---

## Server

Der Server verarbeitet die Anfrage.

Beispiele

- Apache
- Nginx
- IIS

---

PHP läuft auf dem Server.

---

# Kapitel 282

# HTTP

HTTP bedeutet

```
HyperText Transfer Protocol
```

Es ist das wichtigste Protokoll des Webs.

---

Eigenschaften

✓ zustandslos

✓ textbasiert

✓ Request → Response

---

Jede Kommunikation besteht aus

```
Request

↓

Response
```

---

# Kapitel 283

# HTTP Request

Ein Request besteht aus

```
Methode

URL

Header

Body
```

---

Beispiel

```
GET /kunden HTTP/1.1

Host: localhost

User-Agent: Chrome
```

---

PHP verarbeitet diesen Request.

---

# Kapitel 284

# HTTP Response

Antwort des Servers

```
Statuscode

Header

Body
```

---

Beispiel

```
HTTP/1.1 200 OK

Content-Type: text/html

<html>...</html>
```

---

# Kapitel 285

# HTTP-Methoden

| Methode | Bedeutung        |
|---------|------------------|
| GET     | Daten lesen      |
| POST    | Daten senden     |
| PUT     | Daten ändern     |
| PATCH   | teilweise ändern |
| DELETE  | löschen          |

---

Merkhilfe

```
GET

↓

Read
```

```
POST

↓

Create
```

```
PUT

↓

Update
```

```
DELETE

↓

Delete
```

---

# Kapitel 286

# GET

GET überträgt Daten in der URL.

```
https://shop.de/product?id=15
```

PHP

```php
$id = $_GET["id"];
```

---

Eigenschaften

✓ sichtbar

✓ bookmarkfähig

✓ nicht für Passwörter

---

# Kapitel 287

# POST

POST sendet Daten im Request Body.

HTML

```html
<form method="post">

<input name="username">

</form>
```

PHP

```php
$username = $_POST["username"];
```

---

Vorteile

✓ große Datenmengen

✓ Passwörter nicht in URL

✓ Formulare

---

# Kapitel 288

# PUT

PUT ersetzt eine Ressource.

REST-Beispiel

```
PUT

/api/customer/15
```

---

Oft verwendet

bei APIs.

---

# DELETE

Löscht Ressourcen.

```
DELETE

/api/customer/15
```

---

# PATCH

Ändert nur einzelne Felder.

```
PATCH

/customer/15
```

---

# Kapitel 289

# HTTP-Statuscodes

Statuscodes bestehen aus drei Ziffern.

---

## 2xx

Erfolg

| Code | Bedeutung  |
|------|------------|
| 200  | OK         |
| 201  | Created    |
| 204  | No Content |

---

## 3xx

Weiterleitung

| Code | Bedeutung          |
|------|--------------------|
| 301  | Permanent Redirect |
| 302  | Temporary Redirect |

---

## 4xx

Clientfehler

| Code | Bedeutung    |
|------|--------------|
| 400  | Bad Request  |
| 401  | Unauthorized |
| 403  | Forbidden    |
| 404  | Not Found    |

---

## 5xx

Serverfehler

| Code | Bedeutung             |
|------|-----------------------|
| 500  | Internal Server Error |
| 502  | Bad Gateway           |
| 503  | Service Unavailable   |

---

Merkhilfe

```
2xx

↓

alles OK
```

```
3xx

↓

weiterleiten
```

```
4xx

↓

Benutzerfehler
```

```
5xx

↓

Serverfehler
```

---

# Kapitel 290

# Header

Header enthalten Zusatzinformationen.

Beispiele

```
Content-Type

Content-Length

Authorization

Accept

Cookie

User-Agent
```

---

PHP

```php
header("Location: login.php");
```

Weiterleitung.

---

JSON senden

```php
header(

"Content-Type: application/json"

);
```

---

# Kapitel 291

# Cookies

Cookies werden

im Browser gespeichert.

---

Beispiel

```php
setcookie(

"username",

"Max",

time()+3600

);
```

---

Lesen

```php
echo $_COOKIE["username"];
```

---

Typische Anwendungen

- Sprache
- Theme
- Login merken

---

# Kapitel 292

# Sessions

Sessions liegen

auf dem Server.

---

Start

```php
session_start();
```

---

Speichern

```php
$_SESSION["user"] = "Max";
```

---

Lesen

```php
echo $_SESSION["user"];
```

---

Session löschen

```php
session_destroy();
```

---

# Cookies vs Sessions

| Cookies                 | Sessions                     |
|-------------------------|------------------------------|
| Browser                 | Server                       |
| Benutzer kann sie sehen | Benutzer sieht Inhalte nicht |
| begrenzte Größe         | deutlich größer              |
| weniger sicher          | sicherer                     |

---

# Kapitel 293

# Login mit Session

```
Login

↓

Passwort prüfen

↓

session_start()

↓

$_SESSION["user"]

↓

geschützte Seiten
```

---

Logout

```php
session_destroy();
```

---

# Kapitel 294

# REST

REST ist ein Architekturstil

für Webservices.

---

Beispiel

```
GET

/customers
```

liefert

alle Kunden.

---

```
GET

/customers/5
```

liefert

einen Kunden.

---

```
POST

/customers
```

legt Kunden an.

---

```
PUT

/customers/5
```

ändert Kunden.

---

```
DELETE

/customers/5
```

löscht Kunden.

---

# REST und JSON

Meistens

```
Request

↓

JSON

↓

Server

↓

JSON

↓

Client
```

---

# Kapitel 295

# HTTP ist zustandslos

HTTP merkt sich nichts.

Deshalb benötigt man

Sessions oder Tokens.

---

Beispiel

```
Request 1

↓

Server kennt Benutzer

nicht mehr

↓

Request 2

↓

erneut unbekannt
```

---

Sessions lösen dieses Problem.

---

# Kapitel 296

# Mini-Projekt

Erstellen Sie

eine Login-Seite.

Nach erfolgreichem Login

- Session starten
- Benutzer speichern
- geschützte Seite anzeigen
- Logout implementieren

Zusätzlich

eine API

```
GET /products

POST /products
```

mit JSON-Ausgabe.

---

# Typische IHK-Fragen

## Unterschied GET und POST?

GET

↓

URL

POST

↓

Body

---

## Unterschied Cookies und Sessions?

Cookies liegen im Browser.

Sessions auf dem Server.

---

## Wann verwendet man 404?

Wenn die angeforderte Ressource nicht existiert.

---

## Wann verwendet man 500?

Bei einem internen Serverfehler.

---

## Warum sind Sessions sicherer?

Weil die eigentlichen Daten auf dem Server gespeichert werden.

---

## Welche HTTP-Methode löscht Daten?

DELETE.

---

# Prüfungsfallen

❌ Passwörter über GET senden.

❌ Session ohne `session_start()` verwenden.

❌ Cookies mit Sessions verwechseln.

❌ 404 und 500 vertauschen.

❌ Nach `header("Location: ...")` das Skript weiterlaufen lassen (üblich ist anschließend `exit;`).

---

# Best Practices

✓ Formulare mit POST senden.

✓ REST-konforme HTTP-Methoden verwenden.

✓ Sessions für Logins nutzen.

✓ Cookies nur für unkritische Informationen verwenden.

✓ Statuscodes korrekt zurückgeben.

✓ JSON für APIs verwenden.

✓ Header vor der ersten Ausgabe senden.

---

# Kapitel 297

# Was ist eine REST-API?

REST steht für

```
Representational State Transfer
```

Eine REST-API ermöglicht die Kommunikation zwischen Programmen über HTTP.

Beispiele

- Webshop ↔ App
- Frontend ↔ Backend
- Mobile App ↔ Server
- Angular ↔ PHP
- React ↔ Laravel

---

## Kommunikation

```
Client

↓

HTTP

↓

REST API

↓

Business Logic

↓

Datenbank
```

---

# Eigenschaften

✓ HTTP

✓ JSON

✓ Statuscodes

✓ Ressourcen

✓ zustandslos

---

# Kapitel 298

# Ressourcen

REST arbeitet mit Ressourcen.

Beispiele

```
/customers

/products

/orders

/invoices
```

Nicht

```
/getCustomers

/deleteCustomer

/createCustomer
```

---

Merksatz

REST verwendet **Substantive** statt Verben.

---

# Kapitel 299

# CRUD

CRUD beschreibt die vier Grundoperationen.

| CRUD   | HTTP      | Beispiel      |
|--------|-----------|---------------|
| Create | POST      | Kunde anlegen |
| Read   | GET       | Kunde lesen   |
| Update | PUT/PATCH | Kunde ändern  |
| Delete | DELETE    | Kunde löschen |

---

REST

```
POST

/customers
```

↓

neuer Kunde

---

```
GET

/customers
```

↓

alle Kunden

---

```
GET

/customers/12
```

↓

ein Kunde

---

```
PUT

/customers/12
```

↓

Kunde ersetzen

---

```
PATCH

/customers/12
```

↓

einzelne Felder ändern

---

```
DELETE

/customers/12
```

↓

löschen

---

# Kapitel 300

# JSON Response

PHP

```php
$customer = [

    "id" => 1,

    "name" => "Max",

    "city" => "München"

];

header("Content-Type: application/json");

echo json_encode($customer);
```

---

Ausgabe

```json
{
    "id":1,
    "name":"Max",
    "city":"München"
}
```

---

# Kapitel 301

# JSON empfangen

Der Body einer Anfrage wird gelesen.

```php
$json = file_get_contents(

"php://input"

);

$data = json_decode(

$json,

true

);
```

---

Beispiel

Client sendet

```json
{
    "name":"Lisa",
    "city":"Berlin"
}
```

---

PHP

```php
echo $data["name"];
```

Ausgabe

```
Lisa
```

---

# Kapitel 302

# Routing

Routing entscheidet,

welcher Code ausgeführt wird.

---

Beispiel

```
GET

/products
```

↓

ProductController::index()

---

```
POST

/products
```

↓

ProductController::store()

---

```
DELETE

/products/5
```

↓

ProductController::delete()

---

# Einfaches Routing

```php
$method = $_SERVER["REQUEST_METHOD"];

switch($method){

    case "GET":

        ...

        break;

    case "POST":

        ...

        break;

}
```

---

# Kapitel 303

# REST Controller

```php
class CustomerController
{

    public function index(){}

    public function show(){}

    public function store(){}

    public function update(){}

    public function delete(){}

}
```

---

Typische Methoden

| Methode  | Aufgabe             |
|----------|---------------------|
| index()  | Liste               |
| show()   | einzelner Datensatz |
| store()  | neu                 |
| update() | ändern              |
| delete() | löschen             |

---

# Kapitel 304

# Statuscodes

Erfolgreiches Lesen

```
200 OK
```

---

Erfolgreiches Anlegen

```
201 Created
```

---

Erfolgreiches Löschen

```
204 No Content
```

---

Ungültige Eingabe

```
400 Bad Request
```

---

Nicht angemeldet

```
401 Unauthorized
```

---

Keine Berechtigung

```
403 Forbidden
```

---

Nicht gefunden

```
404 Not Found
```

---

Serverfehler

```
500 Internal Server Error
```

---

PHP

```php
http_response_code(404);

echo json_encode([

    "error"=>"Nicht gefunden"

]);
```

---

# Kapitel 305

# Fehlerobjekte

Statt

```
Fehler
```

liefert REST

JSON.

---

Beispiel

```json
{
    "error":"Customer not found"
}
```

---

Oder

```json
{
    "message":"Validation failed"
}
```

---

# Kapitel 306

# Validierung

Vor dem Speichern

immer prüfen.

```php
if(

empty($data["name"])

){

    http_response_code(400);

}
```

---

Besser

```json
{
    "errors":[
        "Name fehlt"
    ]
}
```

---

# Kapitel 307

# API testen

Werkzeuge

- Postman
- Insomnia
- curl
- Bruno

---

Beispiel

```
GET

/api/customers
```

↓

JSON

---

POST

```
/api/customers
```

↓

JSON

↓

201

---

# Kapitel 308

# REST-Projektstruktur

```
src

│

├── Controller

│

├── Service

│

├── Repository

│

├── Model

│

├── Routes

│

└── Config
```

---

Ablauf

```
HTTP

↓

Router

↓

Controller

↓

Service

↓

Repository

↓

PDO

↓

MySQL

↓

JSON
```

---

# Kapitel 309

# REST und MVC

```
Browser

↓

Router

↓

Controller

↓

Service

↓

Repository

↓

Datenbank
```

Controller

↓

JSON erzeugen

↓

HTTP Response

---

# Kapitel 310

# Mini-Projekt

Erstellen Sie

eine REST-API

für Produkte.

Endpoints

```
GET

/products
```

---

```
GET

/products/{id}
```

---

```
POST

/products
```

---

```
PUT

/products/{id}
```

---

```
DELETE

/products/{id}
```

---

Antwort

immer JSON.

---

# Typische IHK-Fragen

## Was ist REST?

Antwort

Ein Architekturstil für Webservices auf Basis von HTTP.

---

## Was bedeutet CRUD?

Create

Read

Update

Delete

---

## Welche HTTP-Methode erzeugt Daten?

POST.

---

## Welche Methode liest Daten?

GET.

---

## Welche Methode löscht Daten?

DELETE.

---

## Warum JSON?

JSON ist leichtgewichtig, sprachunabhängig und wird von nahezu allen Programmiersprachen unterstützt.

---

## Was macht Routing?

Es ordnet eine URL und HTTP-Methode einer Controller-Methode zu.

---

# Prüfungsfallen

❌ Verben in URLs verwenden.

```
/deleteCustomer
```

---

Besser

```
DELETE

/customers/5
```

---

❌ Immer Statuscode 200 senden.

---

❌ HTML statt JSON zurückgeben.

---

❌ Daten ungeprüft speichern.

---

❌ Fehlermeldungen als Klartext statt JSON senden.

---

# Best Practices

✓ Ressourcen statt Aktionen verwenden.

✓ HTTP-Methoden korrekt einsetzen.

✓ JSON für Requests und Responses nutzen.

✓ Aussagekräftige Statuscodes zurückgeben.

✓ Eingaben validieren.

✓ Controller schlank halten.

✓ Geschäftslogik in Services auslagern.

✓ Datenzugriffe im Repository kapseln.

---

# Kapitel 311

# Authentifizierung vs. Autorisierung

Diese beiden Begriffe werden häufig verwechselt.

---

## Authentifizierung

**Wer bist du?**

Der Benutzer weist seine Identität nach.

Beispiele

- Benutzername + Passwort
- Fingerabdruck
- Face-ID
- Smartcard

---

## Autorisierung

**Was darfst du?**

Nachdem der Benutzer angemeldet ist, werden seine Berechtigungen geprüft.

---

Merksatz

```
Authentifizierung

↓

Identität prüfen

↓

Autorisierung

↓

Berechtigungen prüfen
```

---

# Kapitel 312

# Login-Ablauf

Ein typischer Login besteht aus mehreren Schritten.

```
Benutzer

↓

Loginformular

↓

Benutzername + Passwort

↓

Datenbank

↓

Passwort prüfen

↓

Session starten

↓

Geschützte Bereiche
```

---

Nach erfolgreichem Login

```php
session_start();

$_SESSION["user"] = $user->getId();
```

---

# Kapitel 313

# Passwörter niemals speichern

Falsch

```php
$password = "geheim";
```

oder

```sql
password = 'geheim'
```

---

Auch falsch

```php
md5($password)

sha1($password)
```

Diese Verfahren gelten als unsicher.

---

Richtig

```php
password_hash()
```

---

# Kapitel 314

# password_hash()

```php
$password = "MeinPasswort";

$hash = password_hash(

    $password,

    PASSWORD_DEFAULT

);

echo $hash;
```

Beispiel

```
$2y$10$...
```

---

Eigenschaften

✓ Salt automatisch enthalten

✓ moderner Algorithmus

✓ sicher

---

Jeder Aufruf erzeugt einen anderen Hash.

Das ist gewollt.

---

# Kapitel 315

# Passwort prüfen

Nicht

```php
if($password == $hash)
```

---

Richtig

```php
if(

password_verify(

    $password,

    $hash

)

){

    echo "Login erfolgreich";

}
```

---

Merksatz

```
Hash erzeugen

↓

password_hash()

Hash prüfen

↓

password_verify()
```

---

# Kapitel 316

# Passwort ändern

Beim Ändern eines Passworts

niemals den alten Hash verändern.

Immer

```php
password_hash()

↓

neuen Hash speichern
```

---

# Kapitel 317

# Rollen

Nicht jeder Benutzer darf alles.

Beispiele

| Rolle | Rechte |
|--------|---------|
| Gast | lesen |
| Benutzer | lesen, bestellen |
| Mitarbeiter | bearbeiten |
| Administrator | alles |

---

PHP

```php
if(

$_SESSION["role"] === "admin"

){

    // Zugriff erlaubt

}
```

---

# Kapitel 318

# Rollenmodell

```
Benutzer

↓

Role

↓

Permissions
```

---

Beispiel

```
Admin

↓

create

update

delete

read
```

---

```
Gast

↓

read
```

---

# Kapitel 319

# API-Key

Ein API-Key identifiziert

eine Anwendung.

Beispiel

```
GET /products

Authorization:

Api-Key xxxxxxxxx
```

---

Vorteile

✓ einfach

✓ schnell

---

Nachteile

✗ Benutzerrechte eingeschränkt

✗ Schlüssel muss geheim bleiben

---

# Kapitel 320

# JWT

JWT bedeutet

```
JSON Web Token
```

---

Ein JWT besteht aus

```
Header

.

Payload

.

Signature
```

---

Schema

```
xxxxx

.

yyyyy

.

zzzzz
```

---

Der Server prüft

die Signatur.

---

Typischer Ablauf

```
Login

↓

JWT erzeugen

↓

Client speichert Token

↓

Token bei jeder Anfrage senden

↓

Server prüft Token
```

---

# Kapitel 321

# Authorization Header

JWT wird meist so übertragen

```
Authorization:

Bearer eyJhbGc...
```

---

PHP liest den Header aus

und prüft das Token.

---

# Kapitel 322

# OAuth 2.0

OAuth dient dazu,

Anwendungen Zugriff zu gewähren,

ohne das Passwort weiterzugeben.

---

Beispiele

```
Login mit Google

Login mit GitHub

Login mit Microsoft

Login mit Apple
```

---

Ablauf

```
Benutzer

↓

Google Login

↓

Token

↓

eigene Anwendung
```

---

Die Anwendung kennt

das Google-Passwort nie.

---

# Kapitel 323

# Häufige Sicherheitsfehler

❌ Passwörter im Klartext speichern

❌ MD5 verwenden

❌ SHA1 verwenden

❌ Session-ID in URLs übertragen

❌ Passwörter protokollieren

❌ API-Key veröffentlichen

---

# Kapitel 324

# Session Hijacking

Angreifer stiehlt

die Session-ID.

---

Schutz

✓ HTTPS

✓ neue Session-ID nach Login

```php
session_regenerate_id(true);
```

---

✓ Session nach Logout löschen

```php
session_destroy();
```

---

# Kapitel 325

# Brute-Force-Angriffe

Ein Angreifer probiert

tausende Passwörter aus.

---

Schutz

✓ Rate Limiting

✓ Captcha

✓ Kontosperre

✓ starke Passwörter

---

# Kapitel 326

# Passwortregeln

Empfehlungen

✓ mindestens 12 Zeichen

✓ Groß- und Kleinbuchstaben

✓ Zahlen

✓ Sonderzeichen

✓ keine Wörterbuchbegriffe

✓ Passwortmanager verwenden

---

# Kapitel 327

# Beispielprojekt

Login-System

```
Login

↓

password_verify()

↓

Session

↓

Rolle prüfen

↓

Dashboard
```

---

Administrator

↓

Benutzerverwaltung

---

Benutzer

↓

Profil

---

Gast

↓

Startseite

---

# Kapitel 328

# Mini-Projekt

Erstellen Sie

eine Benutzerverwaltung.

Funktionen

- Registrierung
- Login
- Logout
- Passwort ändern
- Rollenverwaltung

Verwenden Sie

- `password_hash()`
- `password_verify()`
- Sessions
- Rollenprüfung

---

# Typische IHK-Fragen

## Unterschied Authentifizierung und Autorisierung?

Authentifizierung

↓

Identität prüfen.

Autorisierung

↓

Berechtigungen prüfen.

---

## Warum niemals MD5?

MD5 gilt als kryptografisch gebrochen und ist für Passwortspeicherung ungeeignet.

---

## Welche PHP-Funktion erzeugt sichere Passwort-Hashes?

```php
password_hash()
```

---

## Welche Funktion prüft Passwörter?

```php
password_verify()
```

---

## Wozu dient JWT?

Zur Authentifizierung bei Webanwendungen und REST-APIs, insbesondere bei zustandslosen Anwendungen.

---

## Was ist OAuth?

Ein Autorisierungsverfahren, mit dem Anwendungen auf Ressourcen zugreifen können, ohne das Passwort des Benutzers zu kennen.

---

# Prüfungsfallen

❌ Authentifizierung und Autorisierung verwechseln.

❌ Passwörter im Klartext speichern.

❌ MD5 oder SHA1 verwenden.

❌ Sessions ohne HTTPS einsetzen.

❌ Rollen nur im Frontend prüfen.

❌ API-Keys öffentlich im Quellcode speichern.

---

# Best Practices

✓ Immer `password_hash()` verwenden.

✓ Passwörter ausschließlich mit `password_verify()` prüfen.

✓ HTTPS einsetzen.

✓ Session-ID nach erfolgreichem Login erneuern.

✓ Rollen serverseitig prüfen.

✓ Tokens zeitlich begrenzen.

✓ Fehlermeldungen nicht zu detailliert ausgeben (z. B. nicht verraten, ob Benutzername oder Passwort falsch war).

---

# Kapitel 329

# Warum ist Sicherheit wichtig?

Fast jede Webanwendung verarbeitet

- Benutzerdaten
- Passwörter
- Zahlungsinformationen
- personenbezogene Daten

Ein einziger Fehler kann

- Datenverlust
- Datenmanipulation
- Imageschäden
- hohe Kosten

verursachen.

---

# Grundregel

**Vertraue niemals Benutzereingaben.**

Jede Eingabe muss

- validiert
- geprüft
- abgesichert

werden.

---

# Kapitel 330

# SQL Injection

Eine SQL Injection entsteht,

wenn Benutzereingaben direkt in SQL übernommen werden.

---

## Unsicher

```php
$sql = "SELECT * FROM kunden
WHERE name = '" . $_GET["name"] . "'";
```

Benutzer gibt ein

```
' OR 1=1 --
```

---

Ergebnis

```sql
SELECT *

FROM kunden

WHERE name = ''

OR 1=1
```

Jetzt werden

alle Kunden ausgegeben.

---

# Sicher

Immer Prepared Statements verwenden.

```php
$stmt = $pdo->prepare(

"SELECT * FROM kunden

WHERE name = ?"

);

$stmt->execute([

$_GET["name"]

]);
```

---

Oder mit benannten Parametern

```php
$stmt = $pdo->prepare(

"SELECT *

FROM kunden

WHERE name = :name"

);

$stmt->execute([

":name" => $_GET["name"]

]);
```

---

# Merksatz

**Benutzereingaben niemals direkt in SQL einfügen.**

---

# Kapitel 331

# Cross-Site Scripting (XSS)

Beim XSS wird

JavaScript

in Webseiten eingeschleust.

---

Benutzer speichert

```html
<script>

alert("Hacker")

</script>
```

---

Die Anwendung gibt dies ungefiltert aus.

Der Browser führt das Script aus.

---

Gefahren

- Session-Diebstahl
- Weiterleitungen
- Manipulation der Seite
- Datendiebstahl

---

# Schutz

Vor der Ausgabe

```php
echo htmlspecialchars(

$text,

ENT_QUOTES,

"UTF-8"

);
```

---

Beispiel

Eingabe

```html
<b>Hallo</b>
```

---

Ausgabe

```html
&lt;b&gt;Hallo&lt;/b&gt;
```

Das Script wird

nicht ausgeführt.

---

# Kapitel 332

# Input vs Output

Viele Anfänger filtern

beim Speichern.

Das reicht nicht.

---

Merksatz

```
Input

↓

validieren

↓

speichern

↓

Output

↓

escapen
```

---

Validieren

↓

Prüfen

---

Escapen

↓

sicher ausgeben

---

# Kapitel 333

# CSRF

Cross-Site Request Forgery

---

Problem

Ein Benutzer

ist angemeldet.

Ein Angreifer bringt ihn dazu,

eine fremde Anfrage auszuführen.

---

Beispiel

```
Überweisung

↓

1000 €

↓

ohne Wissen des Benutzers
```

---

# Lösung

CSRF-Token

Beim Formular

```php
$_SESSION["token"]

=

bin2hex(

random_bytes(32)

);
```

---

HTML

```html
<input

type="hidden"

name="token"

value="...">
```

---

Beim Absenden

Token vergleichen.

---

# Kapitel 334

# Command Injection

Gefährlich

```php
system(

"ping ".$_GET["host"]

);
```

---

Benutzer gibt ein

```
google.de

&& del *
```

oder unter Linux

```
google.de; rm -rf /
```

---

Folge

beliebige Systembefehle.

---

Schutz

Keine Benutzereingaben

direkt an

```
system()

exec()

shell_exec()
```

übergeben.

---

# Kapitel 335

# Directory Traversal

Problem

```php
$file = $_GET["file"];

include($file);
```

---

Benutzer

```
../../config.php
```

---

Jetzt können

beliebige Dateien gelesen werden.

---

Schutz

Whitelist verwenden.

```php
$allowed = [

"home",

"kontakt",

"impressum"

];
```

---

# Kapitel 336

# Datei-Uploads

Gefährlich

```php
move_uploaded_file(...)
```

ohne Prüfung.

---

Angreifer lädt hoch

```
shell.php
```

---

Danach

```
https://seite.de/uploads/shell.php
```

---

Folgen

Komplette Serverübernahme.

---

# Sicherer Upload

Prüfen

✓ Dateityp

✓ MIME-Type

✓ Dateigröße

✓ Dateiendung

✓ zufälliger Dateiname

✓ Speicherort außerhalb des Webroots (wenn möglich)

---

# Kapitel 337

# Sicherheits-Header

Wichtige Header

```
Content-Security-Policy

X-Frame-Options

X-Content-Type-Options

Referrer-Policy
```

---

PHP

```php
header(

"X-Frame-Options: DENY"

);
```

---

oder

```php
header(

"X-Content-Type-Options: nosniff"

);
```

---

# Kapitel 338

# HTTPS

HTTPS

verschlüsselt

die Kommunikation.

---

Ohne HTTPS

```
Browser

↓

Internet

↓

Server
```

Passwörter können abgefangen werden.

---

Mit HTTPS

```
Browser

↓

TLS

↓

Server
```

---

HTTPS ist heute

Pflicht.

---

# Kapitel 339

# OWASP Top 10

OWASP

=

Open Worldwide Application Security Project

---

Wichtige Risiken

| Risiko                      | Bedeutung                   |
|-----------------------------|-----------------------------|
| Broken Access Control       | falsche Berechtigungen      |
| Cryptographic Failures      | schwache Verschlüsselung    |
| Injection                   | SQL Injection               |
| Insecure Design             | schlechtes Design           |
| Security Misconfiguration   | falsche Serverkonfiguration |
| Vulnerable Components       | veraltete Bibliotheken      |
| Authentication Failures     | Login-Probleme              |
| Software Integrity Failures | manipulierte Software       |
| Logging Failures            | fehlende Protokollierung    |
| SSRF                        | Server Side Request Forgery |

---

Für die IHK besonders wichtig

✓ SQL Injection

✓ XSS

✓ CSRF

---

# Kapitel 340

# Validierung

Immer prüfen

```php
$email = filter_input(

INPUT_POST,

"email",

FILTER_VALIDATE_EMAIL

);
```

---

Zahl

```php
$age = filter_input(

INPUT_POST,

"age",

FILTER_VALIDATE_INT

);
```

---

Nie

nur auf HTML verlassen.

---

# Kapitel 341

# Beispielprojekt

Login

↓

Prepared Statements

↓

password_hash()

↓

CSRF-Token

↓

Session

↓

Rollenprüfung

↓

HTML-Ausgabe

↓

htmlspecialchars()

---

Damit werden

die häufigsten Angriffe verhindert.

---

# Kapitel 342

# Mini-Projekt

Erstellen Sie

ein Kontaktformular.

Anforderungen

✓ Prepared Statements

✓ CSRF-Schutz

✓ XSS-Schutz

✓ Validierung

✓ Sessions

✓ HTTPS

---

# Typische IHK-Fragen

## Wie verhindert man SQL Injection?

Durch Prepared Statements mit Platzhaltern.

---

## Wie verhindert man XSS?

Durch Escaping der Ausgabe mit

```php
htmlspecialchars()
```

---

## Was schützt ein CSRF-Token?

Vor unerlaubten Formularanfragen im Namen eines angemeldeten Benutzers.

---

## Warum HTTPS?

Zur Verschlüsselung der Datenübertragung.

---

## Was ist Directory Traversal?

Ein Angriff,

bei dem über Pfadangaben unberechtigt auf Dateien zugegriffen wird.

---

## Was prüft `FILTER_VALIDATE_EMAIL`?

Ob eine Eingabe eine gültige E-Mail-Adresse ist.

---

# Prüfungsfallen

❌ SQL per String-Verkettung erstellen.

❌ HTML ungefiltert ausgeben.

❌ Formulare ohne CSRF-Schutz.

❌ Dateiendungen ungeprüft akzeptieren.

❌ Benutzerrechte nur im Frontend prüfen.

❌ Nur clientseitige Validierung verwenden.

---

# Best Practices

✓ Prepared Statements verwenden.

✓ Ausgaben mit `htmlspecialchars()` escapen.

✓ Eingaben serverseitig validieren.

✓ HTTPS erzwingen.

✓ Sicherheits-Header setzen.

✓ Starke Passwörter und `password_hash()` verwenden.

✓ Bibliotheken regelmäßig aktualisieren.

✓ Prinzip der geringsten Rechte (Least Privilege) anwenden.

---

# Kapitel 343

# Arbeiten mit Dateien

Viele Anwendungen speichern Daten in Dateien.

Beispiele

- Log-Dateien
- CSV-Exporte
- Konfigurationsdateien
- JSON
- XML
- Uploads

---

Typischer Ablauf

```
Datei öffnen

↓

lesen oder schreiben

↓

Datei schließen
```

---

# Kapitel 344

# fopen()

Mit `fopen()` wird eine Datei geöffnet.

```php
$file = fopen("kunden.txt", "r");
```

---

## Wichtige Modi

| Modus | Bedeutung                         |
|-------|-----------------------------------|
| r     | Lesen                             |
| w     | Schreiben (Datei überschreiben)   |
| a     | Anhängen                          |
| x     | Neu erstellen                     |
| r+    | Lesen und Schreiben               |
| w+    | Lesen und Schreiben, Datei leeren |

---

Merksatz

```
r

↓

read

w

↓

write

a

↓

append
```

---

# Kapitel 345

# Datei lesen

```php
$file = fopen("kunden.txt", "r");

$content = fread(

    $file,

    filesize("kunden.txt")

);

fclose($file);

echo $content;
```

---

Ablauf

```
öffnen

↓

lesen

↓

schließen
```

---

# Kapitel 346

# Zeilenweise lesen

Besser für große Dateien.

```php
$file = fopen("kunden.txt", "r");

while(

    ($line = fgets($file)) !== false

){

    echo $line;

}

fclose($file);
```

---

Vorteil

Der Speicherverbrauch bleibt gering.

---

# Kapitel 347

# Datei schreiben

```php
$file = fopen("test.txt", "w");

fwrite(

    $file,

    "Hallo Welt"

);

fclose($file);
```

---

Existiert die Datei bereits,

wird sie überschrieben.

---

Anhängen

```php
$file = fopen("log.txt", "a");

fwrite(

    $file,

    "Neue Zeile\n"

);

fclose($file);
```

---

# Kapitel 348

# file()

Alle Zeilen auf einmal lesen.

```php
$lines = file("kunden.txt");

foreach($lines as $line){

    echo $line;

}
```

---

Jede Zeile

wird zu einem Array-Element.

---

# Kapitel 349

# file_get_contents()

Sehr praktisch.

```php
$content = file_get_contents(

    "text.txt"

);

echo $content;
```

---

Speichern

```php
file_put_contents(

    "test.txt",

    "Hallo"

);
```

---

Anhängen

```php
file_put_contents(

    "test.txt",

    "Neue Zeile\n",

    FILE_APPEND

);
```

---

# Kapitel 350

# CSV-Dateien

CSV bedeutet

```
Comma Separated Values
```

Beispiel

```
Max,25,München

Lisa,31,Hamburg

Tom,28,Köln
```

---

# CSV lesen

```php
$file = fopen(

    "kunden.csv",

    "r"

);

while(

    ($row = fgetcsv($file)) !== false

){

    print_r($row);

}

fclose($file);
```

---

Ergebnis

```php
[
    "Max",
    "25",
    "München"
]
```

---

# CSV schreiben

```php
$file = fopen(

    "kunden.csv",

    "w"

);

fputcsv(

    $file,

    ["Max",25,"München"]

);

fclose($file);
```

---

# Kapitel 351

# Praktisches CSV-Beispiel

Datei

```
Name,Alter

Max,25

Lisa,31
```

---

PHP

```php
$file = fopen(

    "personen.csv",

    "r"

);

while(

    ($person = fgetcsv($file)) !== false

){

    echo $person[0];

}

fclose($file);
```

---

# Kapitel 352

# JSON

JSON ist heute

das wichtigste Datenaustauschformat.

---

PHP → JSON

```php
$data = [

    "name"=>"Max",

    "age"=>25

];

echo json_encode($data);
```

---

Ausgabe

```json
{
    "name":"Max",
    "age":25
}
```

---

# JSON lesen

```php
$json = file_get_contents(

    "kunde.json"

);

$data = json_decode(

    $json,

    true

);

echo $data["name"];
```

---

# Kapitel 353

# XML

Früher sehr verbreitet.

Heute häufig

- Konfiguration
- Office-Dateien
- ältere Schnittstellen

---

Beispiel

```xml
<kunde>
    <name>Max</name>
</kunde>
```

---

Lesen

```php
$xml = simplexml_load_file(

    "kunde.xml"

);

echo $xml->name;
```

---

# Kapitel 354

# Verzeichnisse

Ordner erstellen

```php
mkdir("backup");
```

---

Existiert?

```php
if(

is_dir("backup")

){

}
```

---

Datei vorhanden?

```php
if(

file_exists("kunden.csv")

){

}
```

---

Datei löschen

```php
unlink(

"test.txt"

);
```

---

# Kapitel 355

# flock()

Mehrere Benutzer

könnten gleichzeitig schreiben.

---

Lösung

Dateisperre.

```php
$file = fopen(

"log.txt",

"a"

);

flock(

$file,

LOCK_EX

);

fwrite(

$file,

"Eintrag"

);

flock(

$file,

LOCK_UN

);

fclose($file);
```

---

LOCK_EX

↓

exklusive Sperre

---

LOCK_UN

↓

Sperre freigeben

---

# Kapitel 356

# Log-Dateien

Sehr häufig

in Unternehmen.

```php
file_put_contents(

"log.txt",

date("c")

." Login\n",

FILE_APPEND

);
```

---

Ausgabe

```
2025-08-05T14:30:11

Login
```

---

# Kapitel 357

# Fehlerbehandlung

Vor dem Lesen prüfen.

```php
if(

!file_exists("kunden.txt")

){

    die(

        "Datei fehlt"

    );

}
```

---

Oder

```php
try{

    ...

}catch(Exception $e){

}
```

---

# Kapitel 358

# Mini-Projekt

Erstellen Sie

eine Kundenverwaltung.

Import

```
kunden.csv
```

↓

Objekte erzeugen

↓

Array

↓

JSON speichern

↓

Export

```
kunden_export.csv
```

---

Zusätzlich

Log-Datei

```
import.log
```

---

# Typische IHK-Fragen

## Wozu dient `fopen()`?

Zum Öffnen einer Datei.

---

## Unterschied `w` und `a`?

`w`

↓

überschreibt.

`a`

↓

hängt an.

---

## Welche Funktion liest CSV?

```php
fgetcsv()
```

---

## Welche Funktion schreibt CSV?

```php
fputcsv()
```

---

## Welche Funktion liest komplette Dateien?

```php
file_get_contents()
```

---

## Welche Funktion schreibt komplette Dateien?

```php
file_put_contents()
```

---

## Wozu dient `flock()`?

Zum Sperren einer Datei, damit mehrere Prozesse nicht gleichzeitig schreiben.

---

# Prüfungsfallen

❌ Datei nicht schließen (`fclose()` vergessen).

❌ Modus `w` statt `a` verwenden und dadurch Daten überschreiben.

❌ CSV mit `explode()` statt `fgetcsv()` lesen (Probleme bei Anführungszeichen und Trennzeichen).

❌ Keine Fehlerprüfung bei Dateioperationen.

❌ Gleichzeitige Schreibzugriffe ohne `flock()`.

---

# Best Practices

✓ Immer `fclose()` aufrufen.

✓ Vor dem Lesen `file_exists()` prüfen.

✓ Für CSV `fgetcsv()` und `fputcsv()` verwenden.

✓ Für komplette Dateien `file_get_contents()` und `file_put_contents()` nutzen.

✓ Log-Dateien immer im Modus `a` öffnen.

✓ Bei mehreren Schreibzugriffen `flock()` einsetzen.

✓ Fehler sauber behandeln.

---

# Kapitel 359

# Wiederholung der OOP

Eine Klasse beschreibt den Bauplan.

Ein Objekt ist eine Instanz dieser Klasse.

```php
class Auto
{
    public string $marke;
}

$auto = new Auto();
```

---

# Die vier Säulen der OOP

| Prinzip     | Bedeutung                      |
|-------------|--------------------------------|
| Kapselung   | Daten schützen                 |
| Vererbung   | Eigenschaften übernehmen       |
| Polymorphie | verschiedene Implementierungen |
| Abstraktion | Wesentliches beschreiben       |

Diese vier Begriffe gehören zu den häufigsten IHK-Fragen.

---

# Kapitel 360

# Abstrakte Klassen

Manche Klassen sollen niemals direkt erzeugt werden.

Dann verwendet man

```php
abstract class
```

---

Beispiel

```php
abstract class Tier
{
    abstract public function laut(): string;
}
```

Folgendes ist nicht erlaubt

```php
$tier = new Tier();
```

---

Abgeleitete Klasse

```php
class Hund extends Tier
{
    public function laut(): string
    {
        return "Wuff";
    }
}
```

---

Vorteile

✓ gemeinsame Funktionalität

✓ gemeinsamer Bauplan

✓ teilweise Implementierung möglich

---

# Kapitel 361

# Interfaces

Ein Interface beschreibt ausschließlich

**was**

eine Klasse können muss.

Nicht

**wie**

---

```php
interface Fahrzeug
{
    public function fahren(): void;
}
```

---

Implementierung

```php
class Auto implements Fahrzeug
{
    public function fahren(): void
    {
        echo "Auto fährt";
    }
}
```

---

# Interface vs. abstrakte Klasse

| Interface | Abstrakte Klasse |
|------------|------------------|
| nur Vertrag | Vertrag + Code |
| keine Attribute | Attribute erlaubt |
| mehrere Interfaces möglich | nur eine Basisklasse |
| keine Implementierung (bis auf Default-Methoden ab PHP 8.4 nicht relevant) | Implementierung möglich |

---

# Kapitel 362

# Wann Interface?

Wenn verschiedene Klassen

dieselbe Fähigkeit besitzen.

Beispiel

```
Auto

Fahrrad

Motorrad
```

Alle können

```
fahren()
```

---

Nicht sinnvoll

```
Auto

Haus

Baum
```

---

# Kapitel 363

# Traits

PHP besitzt keine Mehrfachvererbung.

Stattdessen gibt es Traits.

---

Trait

```php
trait Logger
{
    public function log(string $text)
    {
        echo $text;
    }
}
```

---

Benutzung

```php
class Service
{
    use Logger;
}
```

---

Jetzt besitzt die Klasse

```
log()
```

---

Mehrere Traits

```php
class Service
{
    use Logger;

    use Mailer;
}
```

---

# Wann Traits?

Gemeinsamer Code

für mehrere Klassen.

---

# Kapitel 364

# final

Mit

```php
final
```

kann Vererbung verhindert werden.

---

Klasse

```php
final class Config
{

}
```

Nicht möglich

```php
class MyConfig extends Config
{

}
```

---

Methoden

```php
class Tier
{
    final public function schlafen()
    {

    }
}
```

Diese Methode darf

nicht überschrieben werden.

---

# Kapitel 365

# static

Normal

```php
$kunde->name;
```

---

Statisch

```php
Config::$version;
```

---

Beispiel

```php
class Config
{
    public static string $version = "1.0";
}

echo Config::$version;
```

---

Statische Methoden

```php
class Math
{
    public static function add($a,$b)
    {
        return $a+$b;
    }
}

echo Math::add(2,3);
```

---

# Wann static?

Wenn keine Objektinformationen benötigt werden.

---

# Kapitel 366

# self und static

```php
self::
```

bezieht sich

auf die aktuelle Klasse.

---

```php
static::
```

unterstützt

Late Static Binding.

---

Beispiel

```php
class A
{
    public static function who()
    {
        echo "A";
    }

    public static function test()
    {
        static::who();
    }
}

class B extends A
{
    public static function who()
    {
        echo "B";
    }
}

B::test();
```

Ausgabe

```
B
```

---

# Kapitel 367

# Magic Methods

PHP besitzt spezielle Methoden,

die automatisch aufgerufen werden.

---

Wichtige Magic Methods

| Methode | Aufgabe |
|----------|----------|
| `__construct()` | Konstruktor |
| `__destruct()` | Destruktor |
| `__toString()` | Objekt als String |
| `__get()` | unbekannte Eigenschaft lesen |
| `__set()` | unbekannte Eigenschaft schreiben |
| `__call()` | unbekannte Methode |
| `__invoke()` | Objekt wie Funktion aufrufen |
| `__clone()` | Klonen |

---

# Kapitel 368

# __toString()

```php
class Kunde
{
    public function __toString()
    {
        return "Max";
    }
}

$kunde = new Kunde();

echo $kunde;
```

Ausgabe

```
Max
```

---

# Kapitel 369

# __get() und __set()

```php
class Person
{
    private array $daten = [];

    public function __set($name, $wert)
    {
        $this->daten[$name] = $wert;
    }

    public function __get($name)
    {
        return $this->daten[$name] ?? null;
    }
}

$p = new Person();

$p->stadt = "Berlin";

echo $p->stadt;
```

---

# Kapitel 370

# __clone()

Standardmäßig kopiert PHP Objekte flach.

```php
$a = new Kunde();

$b = clone $a;
```

---

Eigene Logik

```php
public function __clone()
{
    echo "Objekt kopiert";
}
```

---

# Kapitel 371

# Objektvergleich

```php
$a == $b
```

Vergleicht

die Inhalte.

---

```php
$a === $b
```

Vergleicht

die Identität.

---

Beispiel

```php
$a = new Kunde();
$b = new Kunde();
$c = $a;
```

```
$a == $b

true
```

```
$a === $b

false
```

```
$a === $c

true
```

---

# Kapitel 372

# UML-Klassendiagramm

```
+----------------------+
| Kunde                |
+----------------------+
| - id : int           |
| - name : string      |
+----------------------+
| + getName()          |
| + setName()          |
+----------------------+
```

---

Sichtbarkeit

| Symbol | Bedeutung |
|---------|-----------|
| + | public |
| - | private |
| # | protected |

---

Beziehungen

```
Vererbung

Tier

▲

|

Hund
```

---

Interface

```
<<interface>>

Fahrzeug

▲

|

Auto
```

---

Assoziation

```
Kunde

──── Bestellung
```

---

Komposition

```
Haus

◆──── Zimmer
```

Zimmer existiert

nicht ohne Haus.

---

Aggregation

```
Verein

◇──── Mitglied
```

Mitglied existiert

auch ohne Verein.

---

# Kapitel 373

# Mini-Projekt

Erstellen Sie folgende Struktur.

```
interface Exportable

abstract class Dokument

class Rechnung

class Angebot

trait Logger

class PDFExporter
```

Anforderungen

- `Dokument` ist abstrakt
- `Exportable` definiert `export()`
- `Rechnung` implementiert `Exportable`
- `Logger` wird per Trait eingebunden
- `PDFExporter` nutzt statische Methoden

---

# Typische IHK-Fragen

## Unterschied Interface und abstrakte Klasse?

Interface

↓

definiert einen Vertrag.

Abstrakte Klasse

↓

liefert zusätzlich gemeinsame Implementierungen.

---

## Wann verwendet man ein Trait?

Wenn mehrere Klassen dieselbe Funktionalität teilen sollen, ohne zu vererben.

---

## Wozu dient `final`?

Zum Verhindern von Vererbung oder Überschreiben von Methoden.

---

## Unterschied `==` und `===` bei Objekten?

`==`

↓

vergleicht Inhalte.

`===`

↓

vergleicht, ob beide Variablen auf dasselbe Objekt zeigen.

---

## Wann verwendet man `static`?

Wenn Methoden oder Eigenschaften unabhängig von einer Objektinstanz verwendet werden.

---

# Prüfungsfallen

❌ Interface mit abstrakter Klasse verwechseln.

❌ Traits als Vererbung ansehen.

❌ `static` für objektabhängige Daten verwenden.

❌ `==` und `===` bei Objekten verwechseln.

❌ `final` übersehen.

---

# Best Practices

✓ Interfaces für Verträge verwenden.

✓ Abstrakte Klassen für gemeinsame Logik.

✓ Traits sparsam einsetzen.

✓ Statische Methoden nur bei zustandslosen Funktionen.

✓ Magic Methods nur verwenden, wenn sie echten Mehrwert bieten.

✓ UML-Diagramme lesen und zeichnen können.

---

# Kapitel 374

# Vom kleinen Script zur Anwendung

Anfänger schreiben häufig alles in eine Datei.

```php
<?php

$pdo = new PDO(...);

$sql = "...";

echo "...";

?>
```

---

Probleme

❌ unübersichtlich

❌ schlecht testbar

❌ schwer wartbar

❌ viel doppelter Code

---

Professionelle Anwendungen bestehen aus vielen Klassen.

---

# Kapitel 375

# Projektstruktur

Eine typische Struktur

```
project/

│

├── public/

│      index.php

│

├── src/

│      Controller/

│      Service/

│      Repository/

│      Model/

│      Config/

│

├── templates/

│

├── vendor/

│

└── composer.json
```

---

Jeder Ordner besitzt eine Aufgabe.

---

# Kapitel 376

# MVC wiederholt

```
Browser

↓

Router

↓

Controller

↓

Service

↓

Repository

↓

Datenbank

↓

Controller

↓

View

↓

Browser
```

---

Aufgaben

Model

↓

Daten

---

View

↓

Darstellung

---

Controller

↓

Steuerung

---

# Kapitel 377

# Repository Pattern

Repository kapselt

alle Datenbankzugriffe.

---

Nicht

```
Controller

↓

SQL
```

---

Sondern

```
Controller

↓

Repository

↓

SQL
```

---

Beispiel

```php
class CustomerRepository
{
    public function findAll()
    {

    }

    public function findById(int $id)
    {

    }

    public function save(Customer $customer)
    {

    }

    public function delete(int $id)
    {

    }
}
```

---

Vorteile

✓ SQL an einer Stelle

✓ leicht austauschbar

✓ gut testbar

---

# Kapitel 378

# Service Layer

Geschäftslogik gehört

nicht in den Controller.

---

Falsch

```
Controller

↓

Validierung

↓

Berechnung

↓

SQL
```

---

Richtig

```
Controller

↓

Service

↓

Repository
```

---

Beispiel

```php
class CustomerService
{

    public function createCustomer()

    {

    }

}
```

---

Service

übernimmt

- Validierung

- Berechnungen

- Regeln

---

# Kapitel 379

# Zusammenspiel

```
Browser

↓

Controller

↓

Service

↓

Repository

↓

PDO

↓

MySQL
```

---

Controller

kennt

keine SQL-Befehle.

---

Repository

kennt

keine HTML-Ausgabe.

---

Saubere Trennung.

---

# Kapitel 380

# Factory Pattern

Factory erzeugt Objekte.

---

Ohne Factory

```php
$pdo = new PDO(...);
```

---

Mit Factory

```php
$pdo = DatabaseFactory::create();
```

---

Beispiel

```php
class DatabaseFactory
{

    public static function create()

    {

        return new PDO(...);

    }

}
```

---

Vorteile

✓ zentrale Erzeugung

✓ Änderungen nur an einer Stelle

---

# Kapitel 381

# Dependency Injection

Schlechte Lösung

```php
class Service
{

    private $pdo;

    public function __construct()

    {

        $this->pdo = new PDO(...);

    }

}
```

---

Besser

```php
class Service
{

    public function __construct(

        PDO $pdo

    ){

        $this->pdo = $pdo;

    }

}
```

---

Jetzt

wird die Abhängigkeit

von außen geliefert.

---

Merksatz

```
Nicht selbst erzeugen

↓

übergeben lassen
```

---

# Kapitel 382

# Front Controller

Alle Anfragen

landen

in einer Datei.

```
public/index.php
```

---

Ablauf

```
Browser

↓

index.php

↓

Router

↓

Controller

↓

Response
```

---

Vorteile

✓ zentrale Kontrolle

✓ Middleware

✓ Routing

✓ Authentifizierung

---

# Kapitel 383

# Router

Router entscheidet

welcher Controller

aufgerufen wird.

---

Beispiel

```
GET

/products
```

↓

ProductController

---

```
GET

/customers
```

↓

CustomerController

---

Einfaches Beispiel

```php
switch($url){

case "/customers":

...

break;

}
```

---

# Kapitel 384

# Konfiguration

Nicht

```php
$host="localhost";

$user="root";
```

überall verteilen.

---

Besser

```
config/

database.php
```

---

Beispiel

```php
return [

"host"=>"localhost",

"db"=>"shop"

];
```

---

Benutzung

```php
$config = require

"config/database.php";
```

---

# Kapitel 385

# Entity

Model

```php
class Customer
{

    private int $id;

    private string $name;

}
```

---

Entity

enthält

nur Daten.

---

Keine SQL.

---

Keine HTML.

---

# Kapitel 386

# Repository arbeitet mit Entity

```php
$customer =

$repository->findById(5);

echo

$customer->getName();
```

---

Nicht

```php
echo

$row["name"];
```

---

Objekte

statt Arrays.

---

# Kapitel 387

# Vollständiger Ablauf

```
Browser

↓

Router

↓

CustomerController

↓

CustomerService

↓

CustomerRepository

↓

PDO

↓

MySQL

↓

Customer

↓

View

↓

Browser
```

---

# Kapitel 388

# Mini-Projekt

Erstellen Sie

eine Kundenverwaltung.

Ordner

```
Controller

Service

Repository

Model

Config

Views
```

---

Klassen

```
Customer

CustomerRepository

CustomerService

CustomerController

DatabaseFactory
```

---

Controller

ruft

Service

auf.

---

Service

ruft

Repository

auf.

---

Repository

arbeitet

mit PDO.

---

# Kapitel 389

# Typische IHK-Fragen

## Warum Repository?

SQL befindet sich an einer zentralen Stelle und ist leichter wartbar.

---

## Warum Service Layer?

Geschäftslogik wird vom Controller getrennt.

---

## Warum Dependency Injection?

Klassen werden unabhängiger, testbarer und leichter austauschbar.

---

## Warum Factory?

Objekterzeugung wird zentralisiert.

---

## Warum Front Controller?

Alle Anfragen laufen über einen zentralen Einstiegspunkt.

---

## Welche Aufgabe besitzt der Router?

Er ordnet URLs den passenden Controllern zu.

---

# Kapitel 390

# Architekturübersicht

```
Browser

↓

Front Controller

↓

Router

↓

Controller

↓

Service

↓

Repository

↓

PDO

↓

MySQL

↓

Repository

↓

Service

↓

Controller

↓

View

↓

Browser
```

---

# Prüfungsfallen

❌ SQL direkt im Controller.

❌ HTML im Repository.

❌ Businesslogik im Model.

❌ Mehrfaches Erzeugen derselben Datenbankverbindung.

❌ Konfigurationsdaten im Quellcode verteilen.

❌ Controller mit zu vielen Aufgaben überladen.

---

# Best Practices

✓ MVC konsequent einhalten.

✓ Repository für Datenzugriffe verwenden.

✓ Geschäftslogik in Services auslagern.

✓ Dependency Injection nutzen.

✓ Konfiguration zentral speichern.

✓ Entities schlank halten.

✓ Controller möglichst klein halten.

---

# Composer, Namespaces und Autoloading

# Kapitel 391

# Was ist Composer?

Composer ist der Standard-Paketmanager für PHP.

Vergleich

| Sprache    | Paketmanager   |
|------------|----------------|
| Java       | Maven / Gradle |
| JavaScript | npm            |
| Python     | pip            |
| PHP        | Composer       |

---

Mit Composer können

- Bibliotheken installieren
- Abhängigkeiten verwalten
- Klassen automatisch laden
- Versionen verwalten

---

# Kapitel 392

# Warum Composer?

Früher

```php
require "A.php";
require "B.php";
require "C.php";
require "D.php";
```

Bei großen Projekten wurden daraus hunderte Dateien.

---

Heute

```php
require "vendor/autoload.php";
```

Fertig.

---

# Kapitel 393

# Installation

Von

https://getcomposer.org

(oder über den Paketmanager des Betriebssystems).

---

Prüfen

```bash
composer --version
```

Beispiel

```
Composer version 2.8.4
```

---

# Kapitel 394

# composer.json

Jedes Projekt besitzt

```
composer.json
```

Beispiel

```json
{
    "name": "firma/shop",

    "description": "Webshop",

    "require": {

    }

}
```

---

Hier stehen

- Projektinformationen
- Abhängigkeiten
- Autoload
- PHP-Version

---

# Kapitel 395

# Paket installieren

Beispiel

```bash
composer require monolog/monolog
```

Composer

↓

lädt Paket

↓

installiert Abhängigkeiten

↓

erstellt Autoloader

---

Projekt

```
vendor/

composer.json

composer.lock
```

---

# Kapitel 396

# vendor-Verzeichnis

Nach der Installation entsteht

```
vendor/
```

Dort befinden sich

```
vendor/

autoload.php

composer/

monolog/

...
```

---

Eigene Änderungen im vendor-Ordner sollte man vermeiden.

---

# Kapitel 397

# Autoloading

Früher

```php
require

"Kunde.php";
```

---

Heute

```php
require

"vendor/autoload.php";
```

---

Danach genügt

```php
$kunde = new Kunde();
```

Composer lädt die Klasse automatisch.

---

# Kapitel 398

# Namespaces

Große Projekte besitzen tausende Klassen.

---

Problem

```
Customer

Customer

Customer
```

Mehrere Bibliotheken können dieselben Klassennamen besitzen.

---

Lösung

Namespaces.

---

# Kapitel 399

# Namespace definieren

```php
namespace App\Model;

class Customer
{

}
```

---

Benutzung

```php
use App\Model\Customer;

$c = new Customer();
```

---

Oder

```php
$c = new App\Model\Customer();
```

---

# Kapitel 400

# use

```php
use App\Service\OrderService;
```

Jetzt genügt

```php
$order = new OrderService();
```

---

Mehrere Klassen

```php
use App\Model\Customer;
use App\Model\Order;
use App\Service\MailService;
```

---

# Kapitel 401

# PSR-4

PSR bedeutet

```
PHP Standards Recommendation
```

PSR-4 beschreibt den Standard für Autoloading.

---

Beispiel

```
src/

Customer.php
```

Namespace

```php
namespace App;
```

---

Composer weiß dadurch, wo sich Klassen befinden.

---

# Kapitel 402

# composer.json mit PSR-4

```json
{

    "autoload": {

        "psr-4": {

            "App\\": "src/"

        }

    }

}
```

---

Danach

```bash
composer dump-autoload
```

---

Jetzt werden alle Klassen automatisch gefunden.

---

# Kapitel 403

# Projektstruktur

```
project

│

├── src

│      Customer.php

│      Order.php

│

├── vendor

│

├── public

│      index.php

│

├── composer.json

└── composer.lock
```

---

Customer.php

```php
namespace App;

class Customer
{

}
```

---

index.php

```php
require

"../vendor/autoload.php";

use App\Customer;

$c = new Customer();
```

---

# Kapitel 404

# composer.lock

Neben

```
composer.json
```

existiert

```
composer.lock
```

---

composer.json

↓

gewünschte Versionen

---

composer.lock

↓

tatsächlich installierte Versionen

---

Für Teams

wird

```
composer.lock
```

mit versioniert.

---

# Kapitel 405

# Semantic Versioning

Versionen

```
2.5.7
```

bestehen aus

```
Major

Minor

Patch
```

---

Beispiel

```
1.2.3
```

↓

```
1

2

3
```

---

Bedeutung

| Teil  | Bedeutung               |
|-------|-------------------------|
| Major | inkompatible Änderungen |
| Minor | neue Funktionen         |
| Patch | Fehlerbehebungen        |

---

# Kapitel 406

# Versionsangaben

```json
"php": "^8.2"
```

---

Bedeutung

```
>=8.2

<9.0
```

---

Weitere Beispiele

```
8.2.*

```

↓

alle Patch-Versionen.

---

```
>=8.2
```

↓

mindestens 8.2.

---

# Kapitel 407

# Wichtige Composer-Befehle

Installation

```bash
composer install
```

---

Update

```bash
composer update
```

---

Paket hinzufügen

```bash
composer require paket/name
```

---

Paket entfernen

```bash
composer remove paket/name
```

---

Autoloader neu erzeugen

```bash
composer dump-autoload
```

---

# Kapitel 408

# Packagist

Packagist ist das offizielle Paketarchiv.
Bekannte Pakete

- Monolog
- PHPUnit
- Twig
- Guzzle
- Doctrine
- Symfony Components

---

Installation

```bash
composer require guzzlehttp/guzzle
```

---

# Kapitel 409

# Mini-Projekt

Erstellen Sie eine neue Anwendung.

Ordner

```
src

public
```

---

composer.json

↓

PSR-4

↓

Namespace

↓

Autoload

↓

Customer-Klasse

↓

Order-Klasse

↓

Controller

↓

Autoload testen

---

# Typische IHK-Fragen

## Was ist Composer?

Ein Paketmanager und Abhängigkeitsverwalter für PHP.

---

## Wozu dient `composer.json`?

Zur Beschreibung des Projekts und seiner Abhängigkeiten.

---

## Unterschied zwischen `composer.json` und `composer.lock`?

`composer.json`

↓

gewünschte Abhängigkeiten.

`composer.lock`

↓

exakt installierte Versionen.

---

## Wozu dient PSR-4?

Zum standardisierten automatischen Laden von Klassen.

---

## Was macht `vendor/autoload.php`?

Es lädt Klassen automatisch, ohne dass jede Datei per `require` eingebunden werden muss.

---

## Was bedeutet `use`?

Importiert Klassen oder Namespaces, damit deren vollqualifizierter Name nicht jedes Mal ausgeschrieben werden muss.

---

# Prüfungsfallen

❌ `vendor/` manuell bearbeiten.

❌ `composer.lock` mit `composer.json` verwechseln.

❌ Namespace und Ordnerstruktur passen nicht zusammen.

❌ `vendor/autoload.php` vergessen.

❌ Klassen ohne Namespace in größeren Projekten verwenden.

---

# Best Practices

✓ Composer für jedes neue Projekt verwenden.

✓ PSR-4 konsequent einsetzen.

✓ Klassen logisch nach Funktionen organisieren.

✓ `composer.lock` im Team versionieren.

✓ Bibliotheken aktuell halten.

✓ Nur benötigte Pakete installieren.

✓ `vendor/` nicht manuell verändern.

---

# PHPUnit, Unit-Tests und Test-Driven Development (TDD)

---


# Kapitel 410

# Warum testen?

Software enthält Fehler. Je früher Fehler erkannt werden, desto günstiger ist ihre Behebung.

---

Ohne Tests

```
Code

↓

Deployment

↓

Kunde findet Fehler
```

---

Mit Tests

```
Code

↓

Test

↓

Fehler erkennen

↓

Deployment
```

---

# Vorteile

✓ höhere Qualität

✓ weniger Fehler

✓ sichere Änderungen

✓ einfachere Wartung

✓ bessere Dokumentation

---

# Kapitel 411

# Testarten

| Test             | Zweck                          |
|------------------|--------------------------------|
| Unit-Test        | einzelne Klasse testen         |
| Integrationstest | Zusammenspiel mehrerer Klassen |
| Systemtest       | komplette Anwendung            |
| Akzeptanztest    | Anforderungen prüfen           |

---

Merksatz

```
Unit

↓

eine Klasse

Integration

↓

mehrere Klassen

System

↓

gesamtes System
```

---

# Kapitel 412

# Unit-Test

Ein Unit-Test prüft
eine kleine Einheit.

Beispiel

```php
class Calculator
{
    public function add(int $a, int $b): int
    {
        return $a + $b;
    }
}
```

---

Test

```php
$calculator = new Calculator();

$result = $calculator->add(2,3);

echo $result;
```

Soll

```
5
```

sein.

---

# Kapitel 413

# PHPUnit

PHPUnit ist
das Standard-Testframework
für PHP.

Installation

```bash
composer require --dev phpunit/phpunit
```

---

Projekt

```
src/

tests/

vendor/
```

---

Tests liegen
im Ordner

```
tests
```

---

# Kapitel 414

# Erste Testklasse

```php
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{

}
```

---

Testmethode

```php
public function testAdd()
{

}
```

---

Namenskonvention

```
test...
```

oder

```php
#[Test]
```

(ab PHP 8 mit Attributen möglich)

---

# Kapitel 415

# assertEquals()

```php
public function testAdd()
{
    $calculator = new Calculator();

    $this->assertEquals(

        5,

        $calculator->add(2,3)

    );
}
```

---

Erwartung

```
5
```

↓

Testergebnis

```
OK
```

---

# Kapitel 416

# Wichtige Assertions

| Methode          | Bedeutung           |
|------------------|---------------------|
| assertEquals()   | Werte gleich        |
| assertSame()     | Wert und Typ gleich |
| assertTrue()     | muss wahr sein      |
| assertFalse()    | muss falsch sein    |
| assertNull()     | null erwartet       |
| assertNotNull()  | nicht null          |
| assertCount()    | Anzahl prüfen       |
| assertContains() | Element vorhanden   |
| assertEmpty()    | leer                |
| assertNotEmpty() | nicht leer          |

---

Beispiele

```php
$this->assertTrue(true);
```

---

```php
$this->assertFalse(false);
```

---

```php
$this->assertNull(null);
```

---

```php
$this->assertCount(3,$array);
```

---

# Kapitel 417

# assertEquals() vs assertSame()

```php
$this->assertEquals(

5,

"5"

);
```

Ergebnis

```
OK
```

---

```php
$this->assertSame(

5,

"5"

);
```

Ergebnis

```
Fehler
```

---

Merksatz

```
Equals

↓

Wert

Same

↓

Wert + Typ
```

---

# Kapitel 418

# Exceptions testen

Klasse

```php
throw new Exception(

"Fehler"

);
```

---

Test

```php
$this->expectException(

Exception::class

);
```

---

Danach

```php
$service->save();
```

---

# Kapitel 419

# Setup

Gemeinsame Initialisierung.

```php
protected function setUp(): void
{
    $this->calculator = new Calculator();
}
```

---

Nun
kann jeder Test
denselben Rechner benutzen.

---

# Kapitel 420

# Test Doubles

Große Anwendungen
verwenden oft
Datenbanken
oder Webservices.
Diese sollen
im Unit-Test
nicht verwendet werden.

---

Stattdessen
werden Test Doubles eingesetzt.

---

Arten

- Dummy
- Stub
- Mock
- Fake
- Spy

---

Für die IHK
reichen meist
Stub und Mock.

---

# Kapitel 421

# Stub

Ein Stub
liefert feste Werte.

```php
class CustomerRepositoryStub
{
    public function findById($id)
    {
        return new Customer();
    }
}
```

---

Damit
ist keine Datenbank nötig.

---

# Kapitel 422

# Mock

Ein Mock prüft,
ob Methoden aufgerufen wurden.

Beispiel

```
MailService

↓

send()
```

↓

wurde genau einmal aufgerufen.

---

PHPUnit erzeugt Mocks automatisch.

---

# Kapitel 423

# Test Driven Development

TDD arbeitet
nach folgendem Zyklus.

```
Red

↓

Green

↓

Refactor
```

---

Red

↓

Test schlägt fehl.

---

Green

↓

Minimalen Code schreiben.

---

Refactor

↓

Code verbessern.

---

# Beispiel

1. Test schreiben.

↓

Fehler.

---

2. Methode implementieren.

↓

Test erfolgreich.

---

3. Code verbessern.

↓

Test bleibt grün.

---

# Kapitel 424

# Code Coverage

Code Coverage
zeigt,
wie viel Code
durch Tests ausgeführt wurde.

---

Beispiel

```
80%
```

bedeutet, 80 %
des Codes
wurden getestet.

---

100 %
bedeutet
nicht automatisch
fehlerfreie Software.

---

# Kapitel 425

# Beispielprojekt

```
Calculator

↓

CalculatorTest

↓

assertEquals()

↓

assertSame()

↓

assertThrows()
```

---

Erweitern Sie
den Rechner
um
- Subtraktion
- Multiplikation
- Division

und schreiben Sie
für jede Methode
Tests.

---

# Kapitel 426

# Testen mit Composer

Tests starten

```bash
vendor/bin/phpunit
```

---

Oder

```bash
php vendor/bin/phpunit
```

---

Einzelnen Test starten

```bash
vendor/bin/phpunit tests/CalculatorTest.php
```

---

# Kapitel 427

# Teststruktur

```
project/
│
├── src/
│
├── tests/
│      CalculatorTest.php
│
├── vendor/
│
└── composer.json
```

---

Namensregel

```
Customer
↓
CustomerTest
```

---

# Typische IHK-Fragen

## Was ist ein Unit-Test?

Ein Test,
der eine einzelne Klasse oder Methode isoliert prüft.

---

## Wozu dient PHPUnit?

Zum automatisierten Testen von PHP-Anwendungen.

---

## Unterschied `assertEquals()` und `assertSame()`?

`assertEquals()`

↓

gleicher Wert.

`assertSame()`

↓

gleicher Wert und gleicher Datentyp.

---

## Was ist ein Mock?

Ein Testobjekt,
das das Verhalten anderer Objekte simuliert und überprüft.

---

## Was bedeutet TDD?

Test-Driven Development:
Zuerst den Test schreiben,
danach den Code implementieren.

---

## Was misst Code Coverage?

Den Anteil des Codes,
der durch Tests ausgeführt wurde.

---

# Prüfungsfallen

❌ `assertEquals()` und `assertSame()` verwechseln.

❌ Unit-Tests greifen auf echte Datenbanken zu.

❌ Mehrere Funktionen gleichzeitig testen.

❌ Tests voneinander abhängig machen.

❌ Keine eindeutigen Testnamen verwenden.

---

# Best Practices

✓ Kleine, unabhängige Tests schreiben.

✓ Eine Funktion pro Test prüfen.

✓ Aussagekräftige Testnamen verwenden.

✓ Tests regelmäßig automatisiert ausführen.

✓ Mocks und Stubs für externe Abhängigkeiten verwenden.

✓ Fehlerfälle ebenfalls testen.

✓ Tests zusammen mit dem Produktionscode pflegen.

---

# Clean Code, SOLID und professionelle Softwareentwicklung

---

# Kapitel 428

# Was ist Clean Code?

Clean Code bedeutet
**gut lesbarer, verständlicher und wartbarer Code.**
Programme werden häufiger gelesen als geschrieben.

---

Merksatz

```
Code wird einmal geschrieben, aber hundertmal gelesen.
```

---

**Schlechter** Code kostet Zeit.
**Guter** Code spart Zeit.

---

# Kapitel 429

# Eigenschaften von Clean Code

Guter Code ist

✓ verständlich

✓ einfach

✓ testbar

✓ wartbar

✓ erweiterbar

✓ eindeutig

---

Schlechter Code ist

❌ kompliziert

❌ doppelt

❌ unübersichtlich

❌ schwer testbar

---

# Kapitel 430

# Aussagekräftige Namen

Schlecht

```php
$a = 5;
$b = 10;
$c = $a + $b;
```

---

Besser

```php
$price = 5;
$tax = 10;
$totalPrice = $price + $tax;
```

---

Auch Klassen

```php
CustomerService
```

statt

```php
Service1
```

---

Methoden

```php
calculateTotalPrice()
```

statt

```php
calc()
```

---

# Kapitel 431

# Kleine Funktionen

Schlecht

```php
processEverything()
```

- Login
- Datenbank
- PDF
- Mail
- Log

alles in einer Methode.

---

Besser

```php
login()
createInvoice()
sendMail()
writeLog()
```

---

Eine Methode

↓

eine Aufgabe.

---

# Kapitel 432

# Kommentare

Kommentare erklären

**Warum**
nicht
**Was**.

---

Schlecht

```php
$i++;
```

```php
// Erhöhe i
```

---

Besser

```php
// Rabatt erst nach erfolgreicher Zahlung berechnen
```

---

Noch besser

```php
$numberOfCustomers++;
```

Kein Kommentar nötig.

---

# Kapitel 433

# DRY

DRY bedeutet

```
Don't Repeat Yourself
```

---

Schlecht

```php
echo $price * 1.19;

echo $amount * 1.19;

echo $cost * 1.19;
```

---

Besser

```php
function calculateVAT($value)
{
    return $value * 1.19;
}
```

---

Vorteile

✓ weniger Fehler

✓ einfacher wartbar

---

# Kapitel 434

# KISS

KISS bedeutet

```
Keep It Simple, Stupid
```

---

Nicht
komplizierte Lösungen.

---

Beispiel

Schlecht

```php
if(($a==true)?true:false)
```

---

Besser

```php
if($a)
```

---

Einfach gewinnt.

---

# Kapitel 435

# YAGNI

YAGNI bedeutet

```
You Aren't Gonna Need It
```

---

Nicht programmieren,
was vielleicht
irgendwann
gebraucht wird.

---

Schlecht

```
100 Funktionen
für spätere Erweiterungen
```

---

Besser

```
Nur das entwickeln,
was heute benötigt wird.
```

---

# Kapitel 436

# SOLID

SOLID besteht aus
fünf Prinzipien.

---

| Buchstabe | Bedeutung             |
|-----------|-----------------------|
| S         | Single Responsibility |
| O         | Open Closed           |
| L         | Liskov Substitution   |
| I         | Interface Segregation |
| D         | Dependency Inversion  |

---

Diese fünf Prinzipien gehören
zu den wichtigsten Architekturregeln.

---

# Kapitel 437

# S

Single Responsibility Principle

---

Jede Klasse
hat genau
eine Aufgabe.

---

Schlecht

```php
Customer
```

macht

- Login
- Rechnung
- PDF
- Datenbank
- Mail
---

Besser

```
CustomerRepository
CustomerService
MailService
InvoiceService
```
---

# Kapitel 438

# O

Open Closed Principle

---

Software soll
offen
für Erweiterungen,
aber
geschlossen
für Änderungen sein.

---

Beispiel

Neue Zahlungsart

↓

neue Klasse

↓

bestehender Code bleibt unverändert.

---

# Kapitel 439

# L

Liskov Substitution Principle

---

Unterklassen
müssen
Basisklassen
vollständig ersetzen können.

---

Beispiel

```
Tier

↓

Hund

↓

Katze
```

Beide
können überall
als
Tier
verwendet werden.

---

# Kapitel 440

# I

Interface Segregation Principle

---

Lieber
mehrere kleine Interfaces
als
ein riesiges.

---

Schlecht

```php
interface Everything
{
    save();
    print();
    mail();
    export();
    ...
}
```

---

Besser

```php
Printable
```

```php
Exportable
```

```php
MailSender
```

---

# Kapitel 441

# D

Dependency Inversion Principle

---

Nicht
von konkreten Klassen
abhängen.

---

Schlecht

```php
class Service
{
    private MySQLDatabase $db;
}
```

---

Besser

```php
class Service
{
    private DatabaseInterface $db;
}
```

---

Dadurch
kann später
MySQL
gegen PostgreSQL
getauscht werden.

---

# Kapitel 442

# Code Smells

Ein Code Smell
ist
ein Hinweis
auf schlechten Code.

---

Typische Code Smells

- lange Methoden
- riesige Klassen
- doppelter Code
- viele Parameter
- verschachtelte ifs
- Magic Numbers
- globale Variablen

---

# Magic Numbers

Schlecht

```php
$total = $price * 1.19;
```

---

Besser

```php
const VAT = 1.19;

$total = $price * VAT;
```

---

# Kapitel 443

# Refactoring

Refactoring
verbessert
den Code,
ohne
das Verhalten zu ändern.

---

Vorher

```
lange Methode
```

↓

Nachher

```
mehrere kleine Methoden
```

---

Vorher

```
doppelter Code
```

↓

Nachher

```
gemeinsame Methode
```

---

# Kapitel 444

# Beispiel Refactoring

Vorher

```php
if($customer != null)
{
    echo $customer->getName();
}
```

---

Nachher

```php
if($customer === null)
{
    return;
}

echo $customer->getName();
```

---

        Guard Clause

            ↓

    weniger Verschachtelung.

---

# Kapitel 445

# Guard Clauses

Schlecht

```php
if($user != null)
{
    if($user->isActive())
    {
        ...
    }
}
```

---

Besser

```php
if($user === null)
{
    return;
}

if(!$user->isActive())
{
    return;
}

...
```

---

# Kapitel 446

# Projektstruktur

```
Controller
↓
Service
↓
Repository
↓
Model
```

---

Jede Klasse
kennt
nur ihre Aufgabe.

---

# Kapitel 447

# Mini-Projekt

Refaktorieren Sie
eine Anwendung.
Vorher

```
Customer.php
1200 Zeilen
```

---

Nachher

```
CustomerController
CustomerService
CustomerRepository
CustomerValidator
CustomerMailer
```

---

# Typische IHK-Fragen

## Was bedeutet DRY?

Code soll nicht mehrfach geschrieben werden.

---

## Was bedeutet KISS?

Lösungen möglichst einfach halten.

---

## Was bedeutet YAGNI?

Nur Funktionen entwickeln,
die aktuell benötigt werden.

---

## Was bedeutet SOLID?

Fünf Prinzipien
für wartbare Software.

---

## Was ist Refactoring?

Verbesserung der Codequalität,
ohne das Verhalten zu verändern.

---

## Was ist ein Code Smell?

Ein Hinweis darauf,
dass der Code verbessert werden sollte.

---

# Prüfungsfallen

❌ Kommentare statt sprechender Namen.

❌ Riesige Klassen.

❌ SQL im Controller.

❌ Lange Methoden.

❌ Doppelte Logik.

❌ Viele verschachtelte `if`-Blöcke.

❌ Harte Zahlenwerte (Magic Numbers).

---

# Best Practices

✓ Klassen klein halten.

✓ Eine Aufgabe pro Klasse.

✓ Eine Aufgabe pro Methode.

✓ Aussagekräftige Namen verwenden.

✓ Konstanten statt Magic Numbers.

✓ Refactoring regelmäßig durchführen.

✓ SOLID-Prinzipien beachten.

✓ Code immer so schreiben, dass Kollegen ihn leicht verstehen können.

---

# IHK-Prüfungsvorbereitung I – Typische Prüfungsaufgaben und Lösungsstrategien

---

# Kapitel 448

# Wie sind IHK-Aufgaben aufgebaut?

Die IHK prüft nicht nur,
ob Sie programmieren können,
sondern auch,
ob Sie Code verstehen.

---

Typische Aufgabentypen

✓ Code analysieren

✓ Fehler finden

✓ Ausgabe bestimmen

✓ Code ergänzen

✓ SQL schreiben

✓ UML lesen

✓ Netzwerk berechnen

✓ Architektur erklären

---

Nicht geprüft wird

❌ Auswendiglernen großer Programme

---

# Kapitel 449

# Lösungsstrategie

Bearbeiten Sie Aufgaben immer in derselben Reihenfolge.

```
1.Aufgabe vollständig lesen

↓

2.Schlüsselbegriffe markieren

↓

3.Benötigtes Wissen bestimmen

↓

4.Lösung entwickeln

↓

5.Kontrollieren
```

---

Viele Punkte gehen verloren,
weil Aufgaben
zu schnell gelesen werden.

---

# Kapitel 450

# Code lesen

Beispiel

```php
$x = 5;

$y = 8;

echo $x + $y;
```

Frage

```
Ausgabe?
```

---

Lösung

```
13
```

---

Nicht raten.
Immer Schritt für Schritt.

---

# Kapitel 451

# Variablen verfolgen

Beispiel

```php
$a = 5;

$b = $a;

$a = 8;

echo $b;
```

---

Analyse

```
a = 5
↓
b = 5
↓
a = 8
↓
b bleibt 5
```

---

Antwort

```
5
```

---

# Kapitel 452

# Schleifen analysieren

```php
for($i=1;$i<=3;$i++)
{
    echo $i;
}
```

---

Durchlauf

```
i=1
↓
1
↓
i=2
↓
2
↓
i=3
↓
3
```

Ausgabe

```
123
```

---

# Kapitel 453

# Arrays

```php
$farben = [

"Rot",

"Blau",

"Grün"

];

echo $farben[1];
```

---

Antwort

```
Blau
```

---

Typische Falle
Index beginnt
bei

```
0
```

---

# Kapitel 454

# Funktionen

```php
function quad($x)
{
    return $x * $x;
}

echo quad(4);
```

---

Antwort

```
16
```

---

Frage:

    Wann endet die Funktion?

Antwort
    
Bei:
```php
return
```

---

# Kapitel 455

# OOP-Aufgabe

```php
class Hund
{
    public function bellen()
    {
        echo "Wuff";
    }
}

$hund = new Hund();

$hund->bellen();
```

---

Ausgabe

```
Wuff
```

---

Frage
Was macht

```
new
```

Antwort

    Ein Objekt erzeugen.

---

# Kapitel 456

# Vererbung

```php
class Tier
{
    public function essen()
    {
        echo "isst";
    }
}

class Hund extends Tier
{

}

$hund = new Hund();

$hund->essen();
```

---

Antwort

```
isst
```

---

Merksatz:
Unterklassen
erben
Methoden der Oberklasse.

---

# Kapitel 457

# SQL-Aufgabe

Tabelle

```
Kunde
    ID
    Name
    Ort
```

---

Frage

Alle Kunden aus Berlin.

---

Antwort

```sql
SELECT *
FROM Kunde
WHERE Ort='Berlin';
```

---

Typische Fehler

❌ = vergessen.

---

❌ Spaltenname falsch.

---

# Kapitel 458

# JOIN-Aufgabe

Tabellen

```
Kunde
Bestellung
```

---

Gesucht
Name + Bestellnummer.

---

Antwort

```sql
SELECT k.Name, b.Bestellnummer
FROM Kunde k
JOIN Bestellung b
ON k.ID=b.Kunde_ID;
```

---

# Kapitel 459

# WHERE

```sql
SELECT *
FROM Kunde
WHERE Ort='Hamburg';
```

---

Frage

    Welche Datensätze?

---

Antwort
Nur Kunden
mit
```
Hamburg
```

---

# Kapitel 460

# COUNT()

```sql
SELECT COUNT(*)
FROM Kunde;
```
---
Antwort:

    Anzahl aller Kunden.

---

Nicht

    Datensätze ausgeben.

---

# Kapitel 461

# GROUP BY

```sql
SELECT Ort, COUNT(*)
FROM Kunde
GROUP BY Ort;
```

---

Frage

Ergebnis?

---

    Für jeden Ort die Anzahl der Kunden.

---

# Kapitel 462

# if

```php
$x = 10;

if($x > 5)
{
    echo "Ja";
}
```

---

Antwort

```
Ja
```

---

# Kapitel 463

# switch

```php
$tag = 2;

switch($tag)
{
case 1:
echo "Mo";
break;

case 2:
echo "Di";
break;
}
```

Antwort

```
Di
```

---

# Kapitel 464

# while

```php
$i=1;

while($i<=3)
{
    echo $i;
    $i++;
}
```

Antwort

```
123
```

---

# Kapitel 465

# foreach

```php
$zahlen=[1,2,3];

foreach($zahlen as $z)
{
    echo $z;
}
```

Antwort

```
123
```

---

# Kapitel 466

# String

```php
$text="Hallo";

echo strlen($text);
```

Antwort

```
5
```

---

Frage

    Welche Funktion liefert die Stringlänge?

Antwort

```php
strlen()
```

---

# Kapitel 467

# Dateizugriff

```php
file_get_contents(
    "test.txt"
);
```

---

Frage

    Was passiert?

Antwort

    Komplette Datei wird gelesen.

---

# Kapitel 468

# PDO

```php
$stmt=$pdo->prepare(
"..."
);

$stmt->execute();
```

---

Frage

    Warum prepare?

---

Antwort

    Schutz vor SQL Injection.

---

# Kapitel 469

# HTML

```html
<form method="post">
```
---

Frage

    Welche PHP-Variable?

---

Antwort

```php
$_POST
```

---

GET?

```php
$_GET
```

---

# Kapitel 470

# Cookies

```php
setcookie(
"name",
"Max"
);
```

---

Frage

    Wo gespeichert?

Antwort

    Im Browser.

---

Session?

Antwort

    Auf dem Server.

---

# Kapitel 471

# HTTP

```
404
```

Antwort

```
Nicht gefunden
```

---

```
500
```

↓

    Serverfehler

---

```
200
```

↓

    OK

---

# Kapitel 472

# Mini-IHK-Test

## Aufgabe 1

```php
$x=3;
$x++;

echo $x;
```

Antwort?

---

Lösung

```
4
```

---

## Aufgabe 2

```php
$arr=[10,20,30];

echo $arr[2];
```

Antwort?

---

Lösung

```
30
```

---

## Aufgabe 3

```sql
SELECT COUNT(*)
FROM Kunde;
```

---

Antwort?

---

Anzahl aller Kunden.

---

## Aufgabe 4

```php
echo strlen("PHP");
```

---

Antwort?

```
3
```

---

## Aufgabe 5

Welche HTTP-Methode
legt Datensätze an?

---

Antwort

```
POST
```

---

# Kapitel 473

# Zeitmanagement

Empfehlung

```
Leichte Aufgaben
↓
zuerst
↓
schwere Aufgaben
↓
zum Schluss
```

---

Nicht
20 Minuten
an einer Aufgabe
festhängen.

---

# Kapitel 474

# Typische IHK-Fallen

❌ Arrayindex beginnt bei 1.

---

❌

```
==
```

und

```
=
```

verwechseln.

---

❌

```
&&

||

```

verwechseln.

---

❌ SQL ohne WHERE.

---

❌ `=` statt `==` im `if`.

---

❌ `COUNT(*)` mit `SUM()` verwechseln.

---

❌ `private` und `protected` vertauschen.

---

❌ Prepared Statements vergessen.

---

# Kapitel 475

# Prüfungsstrategie

Bei jeder Aufgabe fragen

```
Was wird gefragt?
↓
Welche Technik?
↓
Welche Funktion?
↓
Welche Ausgabe?
↓
Kontrolle
```

---

Nie
blind programmieren.

---

# Große IHK-Musterprüfung I – PHP, OOP und SQL

# Hinweise

Diese Musterprüfung orientiert sich am Stil der IHK.
Bearbeitungszeit:
**90 Minuten**
Maximal erreichbare Punkte:
**100 Punkte**

---

# Aufgabe 1 – Datentypen (5 Punkte)

Gegeben ist folgender Code:

```php
$a = 10;
$b = "20";
$c = $a + $b;

echo $c;
```

## Fragen

1. Welchen Datentyp besitzt `$a`?
2. Welchen Datentyp besitzt `$b`?
3. Welchen Wert besitzt `$c`?
4. Warum tritt kein Fehler auf?

---

## Lösung

1.

```
int
```

2.

```
string
```

3.

```
30
```

4.

PHP konvertiert numerische Strings bei arithmetischen Operationen automatisch in Zahlen (Type Juggling).

---

# Aufgabe 2 – Operatoren (5 Punkte)

Welche Ausgabe entsteht?

```php
$x = 7;

echo ++$x;
echo $x++;
echo $x;
```

---

## Lösung

```
889
```

Erklärung:

```
x=7

++x → 8

Ausgabe 8

x++ → Ausgabe 8

danach x=9

Ausgabe 9
```

---

# Aufgabe 3 – Schleifen (8 Punkte)

Welche Ausgabe entsteht?

```php
for($i=1;$i<=5;$i++)
{
    if($i % 2 == 0)
    {
        continue;
    }

    echo $i;
}
```

---

## Lösung

```
135
```

Gerade Zahlen werden durch `continue` übersprungen.

---

# Aufgabe 4 – Arrays (8 Punkte)

Gegeben:

```php
$farben = [
    "Rot",
    "Blau",
    "Grün",
    "Gelb"
];
```

Beantworten Sie:

1.

```php
echo $farben[2];
```

2.

Wie viele Elemente besitzt das Array?

3.

Welche Funktion liefert die Anzahl?

---

## Lösung

1.

```
Grün
```

2.

```
4
```

3.

```php
count()
```

---

# Aufgabe 5 – Funktionen (8 Punkte)

Schreiben Sie eine Funktion

```php
summe()
```

die zwei Zahlen addiert und das Ergebnis zurückgibt.

---

## Musterlösung

```php
function summe(int $a, int $b): int
{
    return $a + $b;
}
```

---

# Aufgabe 6 – OOP (10 Punkte)

Erstellen Sie eine Klasse

```
Produkt
```

mit

- Name
- Preis

sowie

- Konstruktor
- Getter
- Setter

---

## Musterlösung

```php
class Produkt
{
    private string $name;
    private float $preis;

    public function __construct(
        string $name,
        float $preis
    ){
        $this->name = $name;
        $this->preis = $preis;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getPreis(): float
    {
        return $this->preis;
    }

    public function setPreis(float $preis): void
    {
        $this->preis = $preis;
    }
}
```

---

# Aufgabe 7 – Vererbung (8 Punkte)

Gegeben

```php
class Tier
{
    public function laut()
    {
        echo "Tier";
    }
}
```

Erstellen Sie

```
Hund
```

welcher

```
Wuff
```

ausgibt.

---

## Lösung

```php
class Hund extends Tier
{
    public function laut()
    {
        echo "Wuff";
    }
}
```

---

# Aufgabe 8 – SQL SELECT (10 Punkte)

Tabelle

```
Kunde
ID
Name
Ort
```

Schreiben Sie eine SQL-Abfrage,
welche alle Kunden aus München liefert.

---

## Lösung

```sql
SELECT *
FROM Kunde
WHERE Ort='München';
```

---

# Aufgabe 9 – SQL JOIN (10 Punkte)

Tabellen

```
Kunde
ID
Name
```

```
Bestellung
ID
Kunde_ID
Datum
```

Geben Sie

Name
und
Datum
aus.

---

## Lösung

```sql
SELECT k.Name, b.Datum
FROM Kunde k
JOIN Bestellung b
ON k.ID=b.Kunde_ID;
```

---

# Aufgabe 10 – Prepared Statement (8 Punkte)

Warum verwendet man

```php
prepare()
```

anstelle eines normalen SQL-Strings?

---

## Lösung

Prepared Statements

- verhindern SQL-Injection
- trennen Daten und SQL
- verbessern häufig die Performance bei mehrfacher Ausführung
- erhöhen die Sicherheit

---

# Aufgabe 11 – Fehler finden (10 Punkte)

```php
$name = "Max"

echo $name
```

---

## Fehler

1. Semikolon fehlt

```php
$name = "Max";
```

2. Semikolon fehlt

```php
echo $name;
```

---

# Aufgabe 12 – Codeanalyse (10 Punkte)

```php
$x = 1;

while($x < 5)
{
    echo $x;
    $x++;
}
```

Welche Ausgabe entsteht?

---

## Lösung

```
1234
```

---

# Aufgabe 13 – PDO (10 Punkte)

Vervollständigen Sie den Code.

```php
$stmt = $pdo->____("SELECT * FROM Kunde");

$stmt->____();
```

---

## Lösung

```php
$stmt = $pdo->prepare(...);

$stmt->execute();
```

---

# Zusatzaufgabe (Bonus)

Warum sollte man SQL nicht direkt mit Benutzereingaben zusammensetzen?

Beispiel

```php
$sql =
"SELECT * FROM Kunde
WHERE Name='$name'";
```

---

## Lösung

Dies ermöglicht SQL-Injection.
Benutzer könnten eigene SQL-Befehle einschleusen.
Deshalb immer

```php
prepare()
+
execute()
```
verwenden.

---

# Punkteverteilung

| Aufgabe | Punkte |
|---------|-------:|
| 1       |      5 |
| 2       |      5 |
| 3       |      8 |
| 4       |      8 |
| 5       |      8 |
| 6       |     10 |
| 7       |      8 |
| 8       |     10 |
| 9       |     10 |
| 10      |      8 |
| 11      |     10 |
| 12      |     10 |
| 13      |     10 |
| Bonus   |     +5 |

Maximal:

**100 Punkte (+5 Bonus)**

---

# Bewertungsvorschlag

| Punkte   | Note            |
|----------|-----------------|
| 92–100   | Sehr gut        |
| 81–91    | Gut             |
| 67–80    | Befriedigend    |
| 50–66    | Ausreichend     |
| unter 50 | Nicht bestanden |

---

# Häufige Fehler

❌ Semikolons vergessen

❌ Arrayindex bei 1 beginnen

❌ `=` und `==` verwechseln

❌ `prepare()` vergessen

❌ Getter und Setter falsch schreiben

❌ `extends` mit `implements` verwechseln

❌ `count()` statt `sizeof()` nicht kennen (beides funktioniert, `count()` ist Standard)

---

# Lerntipps

- Lesen Sie jede Aufgabe vollständig.
- Markieren Sie Schlüsselwörter wie **implementieren**, **begründen**, **ausgeben**, **ergänzen**.
- Testen Sie Code gedanklich Zeile für Zeile.
- Schreiben Sie bei SQL zuerst `SELECT`, dann `FROM`, anschließend `JOIN` und zuletzt `WHERE`.
- Nutzen Sie bei OOP immer die Reihenfolge: Attribute → Konstruktor → Getter → Setter.