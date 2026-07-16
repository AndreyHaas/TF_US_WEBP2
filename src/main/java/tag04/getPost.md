## GET vs. POST – Vergleich

### GET
- Daten in der **URL** sichtbar
- Begrenzte Länge (~2048 Zeichen)
- Kann gebookmarkt werden
- **Unsicher** für sensible Daten
- Verwendung: Suchanfragen, Filter, Sortierung

### POST
- Daten im **HTTP-Body** (nicht sichtbar)
- Keine Größenbeschränkung
- Nicht book-markbar
- **Sicherer** für sensible Daten
- Verwendung: Login, Formulare, Datei-Uploads

---

## Code-Beispiele

### GET-Formular
```html
<form action="search.php" method="get">
    <input type="text" name="q">
    <input type="submit">
</form>
```
**URL:** `search.php?q=Suchbegriff`

### POST-Formular
```html
<form action="login.php" method="post">
    <input type="text" name="username">
    <input type="password" name="password">
    <input type="submit">
</form>
```
**URL:** `login.php` (keine sichtbaren Daten)

---

## PHP-Empfang

**GET:**
```php
$name = $_GET['name'];
```

**POST:**
```php
$name = $_POST['name'];
```

---

## Zusammenfassung

| Kriterium       | GET | POST |
|----------------|-----|------|
| Daten sichtbar | ✅ ja | ❌ nein |
| Länge begrenzt | ✅ ja | ❌ nein |
| Bookmark       | ✅ ja | ❌ nein |
| Sicherheit     | ❌ niedrig | ✅ höher |
| Cache          | ✅ ja | ❌ nein |