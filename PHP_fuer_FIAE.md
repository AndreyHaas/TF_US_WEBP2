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
