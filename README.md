Englisch
# Docker for local web development: a basic LEMP stack (Linux, Nginx, MySQL, PHP)

## Content

This branch contains a basic LEMP stack running on Docker and orchestrated by Docker Compose, including:

- A container for Nginx;
- A container for PHP;
- A container for MySQL;
- A container for phpMyAdmin;

## Prerequisites

Make sure [Docker Desktop for Mac or PC](https://www.docker.com/products/docker-desktop) is installed and running, or head [over here](https://docs.docker.com/install/) if you are a Linux user. You will also need a terminal running [Git](https://git-scm.com/).

This setup also uses localhost's port 8000 for Nginx, so make sure it is available.

## Directions of use

Clone the repository and change the current directory for the project's root:

```
$ git clone https://github.com/opportunity-zh/opp-php-mysql.git

$ cd opp-php-mysql
```

Run the following command:

```
$ docker-compose up -d
```

This may take a little bit of time, as some Docker images might need downloading.

## Explanation

The images used by the setup are listed and configured in [`docker-compose.yml`](https://github.com/opportunity-zh/opp-php-mysql/docker-compose.yml).

When building and starting the containers based on the images for the first time, a MySQL database named `library` is automatically created (you can pick a different name for the MYSQL_DATABASE in the MySQL service's description in `docker-compose.yml`).

The database data is persisted in its own local directory through the volume `db_data`, which is mounted onto MySQL's container. A phpMyAdmin interface is available at [localhost:8080](http://localhost:8080) (the database credentials are webDev / opport2022).

## Cleaning up

To stop the containers:

```
$ docker-compose stop
```

To destroy the containers:

```
$ docker-compose down
```

To destroy the containers and the associated volumes:

```
$ docker-compose down -v
```

To remove everything, including images and orphan containers:

```
$ docker-compose down -v --rmi all --remove-orphans
```
Deutsch




# Docker für die lokale Webentwicklung: ein grundlegender LEMP-Stack (Linux, Nginx, MySQL, PHP)

https://www.figma.com/file/J1kBP2g1Z1z5gdY5r1dqOD/Triva-Quiz?node-id=0%3A1&t=z3647AJYZAHe7kmo-1

Habe am Anfang richtige Probleme gehabt. Aber als ich die Presentationen nochmals durch arbeitete und einige Recherchen gemacht habe. Sowie w3Scools einbezog gings recht gut.

Hinweis:

Zur zeit geht nur amimals die restlichen Gruppen sind im Code auskommentiert.
Muss noch die Datenbank vervollständigen. Werde sie mir von Kollengen holen und sie noch hinzufügen.







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