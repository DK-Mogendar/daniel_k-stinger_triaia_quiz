# Docker für die lokale Webentwicklung: ein grundlegender LEMP-Stack (Linux, Nginx, MySQL, PHP)

1. Als erstes habe ich die Dokumentation (Presentationen) angeschaut und Studiert.

   https://docs.google.com/presentation/d/1wcAz6EP01cF9UkrrBhp-n_BlQQyKJi14/edit#slide=id.p1

   https://docs.google.com/presentation/d/15FACFwE7WgUO6bS3V0vtpbxubvlr7H-g/edit

2. Dann habe ich mich noch auf W3Scools schlau gemacht.

   https://www.w3schools.com/mysql/mysql_where.asp

3. Figmamockup:
   Dann habe ich das Figma Mockup angelegt (zum schluss noch angepasst)

   https://www.figma.com/file/J1kBP2g1Z1z5gdY5r1dqOD/Triva-Quiz?node-id=0%3A1&t=z3647AJYZAHe7kmo-1

   Habe am Anfang richtige Probleme gehabt. Aber als ich die Presentationen nochmals durch arbeitete und einige Recherchen gemacht habe. 
   Sowie w3Scools einbezog gings recht gut.

4. Habe mir den Code von Chris aus dem Discord geholt und damit meinen Code 
   auf Fehler überprüft und vervollständigt und angepasst.

5. Habe mich der Optik gewidmet und Contend gesucht.

6. Arbeiten mit Bootstrap und CSS für die Responsieve Seit.

7. Debuging und Finishing

8. Ich werde zu einem Späteren Zeipunkt noch die Datenbank mit den Fragen 
   Meiner Schulkollegen vervollständigen. 
   So das auch alle eingepfegten Kategorien vonktionieren. Zur Zeit sid diese im Code auskommentiert.

9. Hinweis:

   Zur zeit geht nur Amimals die restlichen Fragegruppen sind im Code auskommentiert.(funktional)
   ich muss noch die Datenbank vervollständigen. Werde sie mir von Schul-Kollengen holen und sie noch hinzufügen.

10. Hinweis 2:

    Die libary habe ich in Visualcode auch noch abgelegt. Sind unter img zu finden.
    
11. Miro Retrospektieve: 

    https://miro.com/welcomeonboard/UzkzVTNxMHNnZm83eWdwQkZieUlhVHlwWnZsOFNkdW9TOUNKWHdodUR6REZsbmlqVmZOUE9hazh1MVJoTFRuNXwzNDU4NzY0NTQxMDIyOTY2NjEwfDI=?share_link_id=693965148097


## Inhalt

Dieser Zweig enthält einen grundlegenden LEMP-Stack, der auf Docker ausgeführt und von Docker Compose orchestriert wird, einschließlich:

- Ein Container für Nginx;
- Ein Container für PHP;
- Ein Container für MySQL;
- Ein Container für phpMyAdmin;

## Voraussetzungen

Stellen Sie sicher, dass [Docker Desktop für Mac oder PC](https://www.docker.com/products/docker-desktop) installiert ist und ausgeführt wird, oder gehen Sie [hierher](https://docs.docker.com/install /), wenn Sie ein Linux-Benutzer sind. Sie benötigen außerdem ein Terminal, auf dem [Git] (https://git-scm.com/) ausgeführt wird.

Dieses Setup verwendet auch den Port 8000 von localhost für Nginx, stellen Sie also sicher, dass er verfügbar ist.

## Gebrauchsanweisung

Klonen Sie das Repository und ändern Sie das aktuelle Verzeichnis für das Stammverzeichnis des Projekts:

```
$ git-Klon https://github.com/opportunity-zh/opp-php-mysql.git

$ cd opp-php-mysql
```

Führen Sie den folgenden Befehl aus:

```
$ docker-compose up -d
```

Dies kann ein wenig dauern, da einige Docker-Images möglicherweise heruntergeladen werden müssen.

## Erläuterung

Die vom Setup verwendeten Bilder werden in [`docker-compose.yml`](https://github.com/opportunity-zh/opp-php-mysql/docker-compose.yml) aufgelistet und konfiguriert.

Beim erstmaligen Erstellen und Starten der Container basierend auf den Images wird automatisch eine MySQL-Datenbank mit dem Namen „library“ erstellt (Sie können in der Beschreibung des MySQL-Dienstes in „docker-compose.yml“ einen anderen Namen für die MYSQL_DATABASE auswählen).

Die Datenbankdaten werden in einem eigenen lokalen Verzeichnis über das Volume „db_data“ gespeichert, das in den MySQL-Container eingehängt wird. Eine phpMyAdmin-Schnittstelle ist unter [localhost:8080](http://localhost:8080) verfügbar (die Datenbankanmeldeinformationen sind webDev / opport2022).

## Aufräumen

So stoppen Sie die Container:

```
$ docker-compose stop
```

Um die Behälter zu zerstören:

```
$ docker-compose down
```

So vernichten Sie die Container und die zugehörigen Volumes:

```
$ docker-compose down -v
```

So entfernen Sie alles, einschließlich Bilder und verwaiste Container:

```
$ docker-compose down -v --rmi all --remove-orphans
```