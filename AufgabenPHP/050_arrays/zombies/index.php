<?php

// ======================================================
// PHP Aufgaben - Arrays 
// Zombies Edition
// Themen: Arrays, Werte speichern, ausgeben, ändern,
// hinzufügen, zählen, durchlaufen
// Jede Aufgabe ist als Kommentar formuliert
// Du kannst direkt unter jeder Aufgabe deinen Code schreiben
// ======================================================


// ------------------------------------------------------
// LEVEL 1 - Erste Zombie-Arrays
// Thema: einfache Arrays erstellen
// ------------------------------------------------------


// Aufgabe 1:
// Erstelle ein Array mit dem Namen $ueberlebende.
// Speichere darin diese Namen:
// "Alex", "Mia", "Leon"
// Gib das komplette Array aus.


// Aufgabe 2:
// Erstelle ein Array mit dem Namen $waffen.
// Speichere darin:
// "Axt", "Baseballschläger", "Pistole"
// Gib das komplette Array aus.


// Aufgabe 3:
// Erstelle ein Array mit dem Namen $orte.
// Speichere darin:
// "Bunker", "Supermarkt", "Krankenhaus"
// Gib das komplette Array aus.


// Aufgabe 4:
// Erstelle ein Array mit dem Namen $gegner.
// Speichere darin:
// "Walker", "Runner", "Boss-Zombie"
// Gib das komplette Array aus.


// Aufgabe 5:
// Erstelle ein Array mit dem Namen $items.
// Speichere darin:
// "Medipack", "Munition", "Konserven"
// Gib das komplette Array aus.


// ------------------------------------------------------
// LEVEL 2 - Einzelne Werte aus Arrays auslesen
// Thema: Zugriff per Index
// ------------------------------------------------------


// Aufgabe 6:
// Erstelle ein Array $ueberlebende mit:
// "Alex", "Mia", "Leon"
// Gib nur den ersten Wert aus.


// Aufgabe 7:
// Erstelle ein Array $waffen mit:
// "Axt", "Pistole", "Messer"
// Gib nur den zweiten Wert aus.


// Aufgabe 8:
// Erstelle ein Array $orte mit:
// "Bunker", "Tankstelle", "Polizeistation"
// Gib nur den dritten Wert aus.


// Aufgabe 9:
// Erstelle ein Array $gegner mit:
// "Walker", "Runner", "Brute"
// Gib den ersten und den dritten Wert aus.


// Aufgabe 10:
// Erstelle ein Array $vorrat mit:
// "Wasser", "Konserven", "Batterien"
// Gib nur den letzten Wert aus.


// ------------------------------------------------------
// LEVEL 3 - Werte im Array verändern
// Thema: Array-Inhalte überschreiben
// ------------------------------------------------------


// Aufgabe 11:
// Erstelle ein Array $ueberlebende mit:
// "Alex", "Mia", "Tom"
// Ändere "Tom" zu "Leon".
// Gib danach das Array aus.


// Aufgabe 12:
// Erstelle ein Array $waffen mit:
// "Stock", "Pistole", "Axt"
// Ändere "Stock" zu "Baseballschläger".
// Gib danach das Array aus.


// Aufgabe 13:
// Erstelle ein Array $orte mit:
// "Bunker", "Haus", "Krankenhaus"
// Ändere "Haus" zu "Supermarkt".
// Gib danach das Array aus.


// Aufgabe 14:
// Erstelle ein Array $gegner mit:
// "Walker", "Hund", "Ratte"
// Ändere "Ratte" zu "Runner".
// Gib danach das Array aus.


// Aufgabe 15:
// Erstelle ein Array $items mit:
// "Wasser", "Brot", "Tuch"
// Ändere "Brot" zu "Konserven".
// Gib danach das Array aus.


// ------------------------------------------------------
// LEVEL 4 - Neue Werte hinzufügen
// Thema: Arrays erweitern
// ------------------------------------------------------


// Aufgabe 16:
// Erstelle ein Array $ueberlebende mit:
// "Alex", "Mia"
// Füge "Leon" hinzu.
// Gib danach das Array aus.


// Aufgabe 17:
// Erstelle ein Array $waffen mit:
// "Axt", "Pistole"
// Füge "Messer" hinzu.
// Gib danach das Array aus.


// Aufgabe 18:
// Erstelle ein Array $gegner mit:
// "Walker", "Runner"
// Füge "Boss-Zombie" hinzu.
// Gib danach das Array aus.


// Aufgabe 19:
// Erstelle ein Array $orte mit:
// "Bunker", "Supermarkt"
// Füge "Krankenhaus" hinzu.
// Gib danach das Array aus.


// Aufgabe 20:
// Erstelle ein Array $items mit:
// "Medipack", "Munition"
// Füge "Konserven" hinzu.
// Gib danach das Array aus.


// ------------------------------------------------------
// LEVEL 5 - Anzahl der Array-Werte
// Thema: count()
// ------------------------------------------------------


// Aufgabe 21:
// Erstelle ein Array $ueberlebende mit 4 Namen.
// Gib aus, wie viele Überlebende im Array sind.


// Aufgabe 22:
// Erstelle ein Array $waffen mit 5 Waffen.
// Gib aus, wie viele Waffen im Array sind.


// Aufgabe 23:
// Erstelle ein Array $gegner mit 3 Gegnertypen.
// Gib aus, wie viele Gegner im Array sind.


// Aufgabe 24:
// Erstelle ein Array $orte mit 6 Orten.
// Gib aus, wie viele Orte im Array sind.


// Aufgabe 25:
// Erstelle ein Array $vorrat mit 4 Dingen.
// Gib aus, wie viele Werte im Array sind.


// ------------------------------------------------------
// LEVEL 6 - Arrays mit foreach durchlaufen
// Thema: alle Werte ausgeben
// ------------------------------------------------------


// Aufgabe 26:
// Erstelle ein Array $ueberlebende mit 4 Namen.
// Gib alle Namen mit foreach einzeln aus.


// Aufgabe 27:
// Erstelle ein Array $waffen mit 4 Waffen.
// Gib alle Waffen mit foreach einzeln aus.


// Aufgabe 28:
// Erstelle ein Array $orte mit 4 Orten.
// Gib alle Orte mit foreach einzeln aus.


// Aufgabe 29:
// Erstelle ein Array $gegner mit 4 Gegnertypen.
// Gib alle Gegner mit foreach einzeln aus.


// Aufgabe 30:
// Erstelle ein Array $items mit 4 Gegenständen.
// Gib alle Gegenstände mit foreach einzeln aus.


// ------------------------------------------------------
// LEVEL 7 - Arrays mit Sätzen ausgeben
// Thema: foreach + Text
// ------------------------------------------------------


// Aufgabe 31:
// Erstelle ein Array $ueberlebende mit:
// "Alex", "Mia", "Leon"
// Gib mit foreach für jeden Namen aus:
// "<Name> kämpft ums Überleben!"


// Aufgabe 32:
// Erstelle ein Array $waffen mit:
// "Axt", "Pistole", "Messer"
// Gib mit foreach für jede Waffe aus:
// "Du hast eine <Waffe> gefunden!"


// Aufgabe 33:
// Erstelle ein Array $gegner mit:
// "Walker", "Runner", "Boss-Zombie"
// Gib mit foreach für jeden Gegner aus:
// "Ein <Gegner> nähert sich!"


// Aufgabe 34:
// Erstelle ein Array $orte mit:
// "Bunker", "Supermarkt", "Krankenhaus"
// Gib mit foreach für jeden Ort aus:
// "Du betrittst <Ort>."


// Aufgabe 35:
// Erstelle ein Array $items mit:
// "Medipack", "Munition", "Konserven"
// Gib mit foreach für jedes Item aus:
// "Du hast <Item> gefunden!"


// ------------------------------------------------------
// LEVEL 8 - Assoziative Arrays
// Thema: Schlüssel und Werte
// ------------------------------------------------------


// Aufgabe 36:
// Erstelle ein assoziatives Array $ueberlebender.
// Speichere:
// "name" => "Alex"
// "waffe" => "Axt"
// "leben" => 80
// Gib das komplette Array aus.


// Aufgabe 37:
// Erstelle ein assoziatives Array $gegner.
// Speichere:
// "name" => "Boss-Zombie"
// "staerke" => 300
// "typ" => "Mutiert"
// Gib das komplette Array aus.


// Aufgabe 38:
// Erstelle ein assoziatives Array $item.
// Speichere:
// "name" => "Medipack"
// "wirkung" => "Heilung"
// "anzahl" => 3
// Gib das komplette Array aus.


// Aufgabe 39:
// Erstelle ein assoziatives Array $ort.
// Speichere:
// "name" => "Bunker"
// "sicher" => true
// "vorrat" => "hoch"
// Gib das komplette Array aus.


// Aufgabe 40:
// Erstelle ein assoziatives Array $mission.
// Speichere:
// "ziel" => "Vorräte holen"
// "ort" => "Supermarkt"
// "status" => "offen"
// Gib das komplette Array aus.


// ------------------------------------------------------
// LEVEL 9 - Werte aus assoziativen Arrays auslesen
// Thema: Zugriff über Schlüssel
// ------------------------------------------------------


// Aufgabe 41:
// Erstelle ein Array $ueberlebender mit:
// "name" => "Mia"
// "waffe" => "Pistole"
// "leben" => 70
// Gib nur den Namen aus.


// Aufgabe 42:
// Erstelle ein Array $gegner mit:
// "name" => "Runner"
// "staerke" => 90
// "ort" => "Straße"
// Gib nur den Ort aus.


// Aufgabe 43:
// Erstelle ein Array $item mit:
// "name" => "Munition"
// "anzahl" => 25
// "selten" => true
// Gib nur die Anzahl aus.


// Aufgabe 44:
// Erstelle ein Array $ort mit:
// "name" => "Krankenhaus"
// "gefahr" => "hoch"
// "zugang" => "schwierig"
// Gib nur die Gefahr aus.


// Aufgabe 45:
// Erstelle ein Array $mission mit:
// "ziel" => "Bunker sichern"
// "dauer" => "2 Stunden"
// "status" => "läuft"
// Gib nur den Status aus.


// ------------------------------------------------------
// BOSSFIGHT - Arrays kreativ anwenden
// Thema: Kombinationen
// ------------------------------------------------------


// Aufgabe 46:
// Erstelle ein Array mit 5 Überlebenden.
// Gib den ersten und den letzten Namen aus.


// Aufgabe 47:
// Erstelle ein Array mit 5 Gegnertypen.
// Ersetze den dritten Gegner durch "Titan-Zombie".
// Gib danach das Array aus.


// Aufgabe 48:
// Erstelle ein Array mit 4 Items.
// Füge ein fünftes Item hinzu.
// Gib danach alle Items mit foreach aus.


// Aufgabe 49:
// Erstelle ein assoziatives Array für einen Überlebenden mit:
// Name, Waffe, Leben, Aufgabe
// Gib alle Werte einzeln aus.


// Aufgabe 50:
// Erstelle ein assoziatives Array für einen Gegner mit:
// Name, Typ, Stärke, Ort
// Gib alle Werte einzeln aus.


// ------------------------------------------------------
// ULTRA-BOSS - Eigene Zombie-Arrays
// Thema: kreativ werden
// ------------------------------------------------------


// Aufgabe 51:
// Erstelle dein eigenes Array mit 5 Orten der Apokalypse.
// Gib alle Orte aus.


// Aufgabe 52:
// Erstelle dein eigenes Array mit 5 Überlebenden.
// Gib alle Namen aus.


// Aufgabe 53:
// Erstelle dein eigenes Array mit 5 Waffen.
// Gib nur die zweite und vierte Waffe aus.


// Aufgabe 54:
// Erstelle dein eigenes assoziatives Array für einen Boss-Zombie.
// Wähle mindestens 4 Eigenschaften.


// Aufgabe 55:
// Erstelle dein eigenes assoziatives Array für einen Überlebenden.
// Wähle mindestens 4 Eigenschaften.


// ------------------------------------------------------
// EXTRA - Freiwillige Zusatzaufgaben
// ------------------------------------------------------


// Zusatzaufgabe 56:
// Erstelle ein Array mit 6 Items.
// Gib nur die Items aus, die du für eine Überlebensmission mitnehmen würdest.


// Zusatzaufgabe 57:
// Erstelle ein Array mit 5 Gegnertypen.
// Gib jeden Gegner mit einem Satz aus:
// "Achtung: <Gegner> wurde entdeckt!"


// Zusatzaufgabe 58:
// Erstelle ein Array mit 4 Heilitems.
// Gib alle Heilitems einzeln aus.


// Zusatzaufgabe 59:
// Erstelle ein assoziatives Array für einen sicheren Ort.
// Speichere Name, Gefahr, Vorräte und Status.


// Zusatzaufgabe 60:
// Erstelle ein eigenes Überlebens-Profil als assoziatives Array.
// Beispiel:
// Name, Lieblingswaffe, Sicherer Ort, Aufgabe, Vorrat


?>