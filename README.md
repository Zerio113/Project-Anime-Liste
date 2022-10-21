b# Project-Anime-Liste
API Manga search

# Atelier de professionnalisation n°3 - Collector

![Logo "Collector"](logo.svg)

* 🕓 Durée : 2~3 mois
* 🤝 Réalisation : En groupe

## 🧰 Compétences mobilisées

* Utilisation d'un gestionnaire de versions pour son code
* Usage de l'HTML et du CSS pour créer des pages statiques
* Déployer un service
* Vérifier les conditions de la continuité d’un service informatique
* Analyser les objectifs et les modalités d’organisation d’un projet
* Planifier les activités
* Évaluer les indicateurs de suivi d’un projet et analyser les écarts
* Accompagner les utilisateurs dans la mise en place d’un service

## 🏁 Objectifs

Développer un projet coordonné en groupe, tout en ayant une liberté créative sur le sujet principal.

## 💻 Outils

* Un gestionnaire de versions : GitHub, GitLab...
* Un tableau de tâches Kanban : [GitHub Projects](https://github.com/features/issues), [GitLab Issues Boards](https://docs.gitlab.com/ee/user/project/issue_board.html), [Trello](https://trello.com/fr)...
* Un générateur de documents PDF : Pandoc

---

## Énoncé

Le but est de réaliser une **application web** adaptée à un usage sur écran étroit (smartphone). La navigation doit se faire à l'aide de plusieurs pages côté back-end, et l'expérience utilisateur doit être enrichie côté front-end à l'aide de JavaScript. Le choix des langage et des framework ou bibliothèques est entièrement libre, tant que cela reste bien sûr du domaine du web.

Les différents documents produits et rendus au format **PDF** devront toujours préciser :

* La mention "ESIEE-IT - BTS SIO SLAM 2023 - AP n°3 Collector"
* Le nom réel du projet
* Les participants du groupe
* La version du document (1.0, 1.1, 2.0...)
* La date de création du document

### ▶️ Fonctionnalités du projet

* Proposer la création d'un compte utilisateur à un visiteur, afin ensuite de pouvoir gérer une **collection** d'**éléments**
* Proposer un formulaire de recherche de ces **éléments**, avec un **affichage** des résultats et la possibilité de les **trier** et de les **filtrer** selon des critères cohérents
* Permettre de **collectionner** des résultats en les ajoutant à la liste personnelle de l'utilisateur connecté
* Pouvoir **consulter** la liste personnelle de n'importe quel autre utilisateur

### ▶️ Choix des éléments

Le choix de ces **éléments** à gérer vous revient entièrement. Pour cela, il vous faudra choisir parmi l'une de ces **API**, qui seront la source de données de votre projet.

* [MyAnimeList](https://myanimelist.net/clubs.php?cid=13727) : chercher un manga/anime à partir d'un nom
* [Nominatim (OpenStreetMap)](https://nominatim.org/release-docs/latest/api/Overview/) : chercher un lieu, à partir de son nom, son adresse ou sa position
* [OpenFoodFacts](https://world.openfoodfacts.org/data) : chercher les informations nutritionnelles d'un produit, à partir de son nom ou d'un code-barres
* [MediaWiki (Wikipédia)](https://www.mediawiki.org/wiki/API:Main_page) : chercher un article Wikipédia, à partir de son nom
* [TheCocktailDB](https://www.thecocktaildb.com/api.php) : chercher la composition d'un cocktail, à partir de son nom ou de l'un de ses ingrédients
* [Marvel](https://developer.marvel.com/) : chercher un personnage de comics, à partir de son nom ou par comic d'origine
* [PokéAPI](https://pokeapi.co/) : chercher un Pokémon, à partir de son nom ou de son type

---

## ① Constitution du groupe et du cahier des charges

Tout d'abord, il vous faudra constituer des groupes de travail. Ensuite, il vous faudra choisir l'une des API proposées afin de déterminer le sujet de votre application servant à **collecter des éléments**.

Partant de là, vous rédigerez un court **cahier des charges** écrit au format **Markdown**, qui reprendra les fonctionnalités du projet ci-dessus mais en les adaptant en fonction de l'API choisie. N'hésitez pas à rajouter des informations quand au **but** et à l'**usage** de votre projet.

Une fois terminé, le cahier des charges devra être exporté au format **PDF**.

---

## ② Planning du projet

Le temps de développement de cet atelier étant limité, il vous faudra correctement **découper en tâches** la réalisation de ce projet afin de les répartir entre les membres du groupe. L'usage d'un tableau de tâches Kanban est obligatoire pour créer et organiser ces tâches.

---

## ③ Charte graphique

Pour produire une réalisation de qualité, vous devrez d'abord réaliser une **charte graphique**.

Ce document, que vous pouvez réaliser avec **Word** ou **PowerPoint** par exemple, vous servira de référence lors du design et du développement de votre projet. Il devra récapituler toutes les choses suivantes :

* Logo "couleur" au format **SVG** ou au format **PNG** sur fond transparent
* Logo "noir" au format **SVG** ou au format **PNG** sur fond transparent
* Logo "blanc" au format **SVG** ou au format **PNG** sur fond transparent
* Palette de couleurs principales
* Police de titres et police de texte
* Un set d'icônes (FontAwesome, Bootstrap Icons...)

Une fois terminé, la charte graphique devra être exportée au format **PDF**.

---

## ④ Modélisation des données

Afin de garder trace des utilisateurs de votre application ainsi que des éléments qu'ils auront collectés, il vous faudra modéliser une **base de données**.

* Si vous faites appel à un **ORM**, il vous faudra écrire le code source correspondant aux modèles nécessaires.
* Dans le cas contraire, il vous faudra représenter d'abord votre base de données à l'aide d'un **MCD** ou d'un **MPD**, puis écrire les lignes SQL correspondant à la création de la base de données et de ses tables.

---

## ⑤ Développement

En suivant le planning défini à l'avance et selon la charte graphique définie, vous développerez votre application web.

N'oubliez pas de commencer d'abord par le **fonctionnel** de votre application avant de passer au peaufinage ! Visez d'abord un prototype à peu près fonctionnel avec le minimum requis, avant de passer à des ajouts ergonomiques, puis enfin aux derniers détails.

---

## ⑥ Documentation utilisateur

Après avoir réalisé votre projet, il vous faudra ensuite rédiger une **documentation** afin d'expliquer à d'éventuels utilisateurs l'usage de votre application web.

N'hésitez pas à y insérer de nombreuses captures d'écran annotées de votre application web, et en pensant par exemple aux cas d'usage les plus communs. Il n'est cependant pas nécessaire d'expliquer le moindre pixel de votre application, bien sûr.

Elle devra être écrite en **Markdown**, avant d'être convertie au format **PDF** à l'aide de [Pandoc](https://pandoc.org/).

