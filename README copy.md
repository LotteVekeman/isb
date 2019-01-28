# Memory Monday

Zorg ervoor dat deze map in je MAMP htdocs zit.

We vertrekken van een eindresultaat van in de module FRD3:

- webpack project met php
- progressive enhancement van eenvoudige searchfunctie

Na `yarn` uit te voeren om de dependencies te installeren, voer je `yarn dev` uit om webpack te starten. Start ook je MAMP server en surf naar de src map van het project (bvb http://localhost:8888/memory-monday/soccersearch/src/)

Doe een view source in je browser. Je ziet dat de javascript code ingeladen wordt van op poort 8080 en er geen css file gekoppeld is. In development mode gebruiken we namelijk de javascript code van op webpack (die op zijn beurt ook css code koppelt).

## Disable javascript filter

We zullen het filtersysteem uitbreiden met een country filter. Voorlopig disable je de javascript functionaliteit door een return te zetten in je init functie:

```javascript
const init = () => {
  return;
  if ($filterForm) {
    $filterForm.addEventListener(`submit`, handleSubmitFilterForm);
  }
};
```

Zo kunnen we ons eerst focussen op het php gedeelte. Het moet mogelijk zijn om te filteren op ofwel naam, ofwel land, ofwel beide samen (afhankelijk van de velden die ingevuld werden).

## Optionele parameters in DAO

We zullen de search functie van de PlayerDAO aanpassen en een extra optionele parameter definieren voor het land:

```php
public function search($max=10, $name = '', $nationality = ''){
```

De WHERE conditie van de query moet dynamisch opgebouwd worden afhankelijk van de meegegeven parameters. Er zijn 4 scenarios:

- er wordt geen name en geen nationality meegegeven (query zonder WHERE)
- er wordt een name, maar geen nationality meegegeven (query met WHERE op name)
- er wordt geen name, maar wel nationality meegegeven (query met WHERE op nationality)
- er wordt zowel een name als nationality meegegeven (query met WHERE op name en nationality)

Eigenlijk willen we de SQL query dynamisch uitbreiden met WHERE parameters. Je kan dit eigenlijk makkelijk oplossen door altijd een WHERE te voorzien, die geen impact heeft. Bvb:

```php
$sql = "SELECT * FROM `players` WHERE 1"
```

De `WHERE 1` is een WHERE conditie die niets doet.

Vervolgens kun je dan per mogelijke extra parameter een if blok toevoegen, waarin je de $sql variabele uitbreidt. Bijvoorbeeld:

```php
if (!empty($name)) {
  $sql .= " AND `Name` LIKE :name";
}
if (!empty($nationality)) {
  $sql .= " AND `Nationality` = :nationality";
}
```

ook het binden van de variable moet je dan in een if blok zetten, ipv deze standaard te binden:

```php
if (!empty($name)) {
  $stmt->bindValue(':name','%'.$name.'%');
}
if (!empty($nationality)) {
  $stmt->bindValue(':nationality', $nationality);
}
```

De volledige DAO functie ziet er uiteindelijk als volgt uit:

```php
public function search($max=10, $name = '', $nationality = ''){
  $sql = "SELECT * FROM `players` WHERE 1";

  if (!empty($name)) {
    $sql .= " AND `Name` LIKE :name";
  }
  if (!empty($nationality)) {
    $sql .= " AND `Nationality` = :nationality";
  }

  $sql .= " ORDER BY `Overall` DESC LIMIT :max";

  $stmt = $this->pdo->prepare($sql);
  if (!empty($name)) {
    $stmt->bindValue(':name','%'.$name.'%');
  }
  if (!empty($nationality)) {
    $stmt->bindValue(':nationality', $nationality);
  }
  $stmt->bindValue(':max', $max);
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
```

Test het filteren. Je zou nu de 4 verschillende scenarios correct moeten kunnen runnen.

## AJAX terug enablen

Haal de early return terug weg uit je init functie. Door dat we in onze AJAX search de fetch url opbouwen op basis van het formulier, zou deze instant moeten werken, met de nieuwe functionaliteiten.

## Deployen op je hosting

1. Maak een production build van je project via `yarn prod`
2. Pas in je dist/dao/DAO.php je database settings aan naar deze van je Combell hosting
3. Zet de dist map via SFTP op je hosting
4. Zorg dat ook de database in je combell account is geimporteerd
