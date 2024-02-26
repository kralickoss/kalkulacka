#KALKULAČKA

## Pavel Králíček


## Kalkulačka vytvořená použitím php


1. HTML Struktura:
  - "<!DOCTYPE html>" definuje typ dokumentu.
  - "<html lang="en">" zahajuje HTML dokument s nastavením jazyka na angličtinu.
  - "<head>" obsahuje metadata a odkazy na externí soubory, jako je stylový list (style.css).
  - "<body>" obsahuje vizuální obsah stránky.
  
2. Nadpis a Formulář:
  - "<h1>" obsahuje nadpis "Kalkulačka".
  - "<form>" obsahuje formulář pro zadání čísel a výběr operace.
  - Formulář odesílá data na stejný skript (<?php echo $_SERVER['PHP_SELF']; ?>) po stisknutí tlačítka "Spočítat".
    
3. PHP Skript (skript.php):
  - Na konci HTML kódu je zahrnut externí PHP soubor (skript.php), který obsahuje logiku pro výpočet operací.

4. Hlavní PHP Skript:
  - Po ukončení HTML kódu následuje hlavní PHP skript pro zpracování formuláře po odeslání.
  - Kontroluje se, zda formulář byl odeslán metodou POST.
  - Získávají se hodnoty z formuláře ($number1, $number2, $operation).
  - Provede se kontrola, zda zadané hodnoty jsou čísla.
  - Provede se požadovaná matematická operace a výsledek je zobrazen.

5. CSS Styly (style.css):
  - Obsahuje stylování pro vizuální vzhled stránky.
  - Nastavuje font, barvy, velikosti, okraje a stíny pro různé části stránky.

Celkově kód vytváří jednoduchou kalkulačku s uživatelsky přívětivým rozhraním a základní bezpečnostní kontrolou vstupních dat.
