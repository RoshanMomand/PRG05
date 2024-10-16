![test](https://pbs.twimg.com/media/Ft9JycZWwAIqS84?format=png&name=small)

## 09-10-2024

* Opdrachten van les 3 gemaakt
* Routes & Controllers geoefend.

## 11-10-2024

* **Thema's onderzocht:**
    * Forum voor laravel om vragen te stellen en te beantwoorden
    * League of legends personages toevoegen en informatie erover schrijven
    * Social Media platform (Instagram,Facebook)
    * Boeken die je hebt gelezen toevoegen
    * Film/Series etc die je hebt gekeken toevoegen
        * Met een review systeem
    * ERD basis tabel maken op basis van gekozen onderwerp

## ERD Books Blog:

<img alt="ERD-Basis tabellen" height="300" src="/documentatie/erd-begin.png" width="400"/>

## 12-10-2024

* **Experimenteren met kennis van les 3**

## Optional Parameters

Stel je hebt een blog over boeken en die hebben allemaal een specifieke ID.<br>
En iemand zou de id aanpassen in de url, dan zou optional parameters helpen om geen fout melding te geven en de persoon
terug sturen naar
alle blogs.

## Resources Methods

Dit zorgt ervoor dat je een gehele CRUD functionaliteit hebt mocht je gebruik maken van een CRUD.<br>
Deze type controller zorgt ook dat alle parameters worden doorgegeven in de functies<br>
Het enige wat jij hoeft te doen is alleen in de template de juiste routes op te noemen<br>
In plaats van meerdere Routes te hebben wordt het gecombineerd tot 1 geheel en hoef je niet meerdere Routes te typen.

## 14-10-2024 Les 4

* Gewerkt met Components en layouts
* Anchortags in de navbar dynamisch gemaakt met een layout
* Index pagina met components gevuld
* Navbar, Navbarlinks , Footer components gemaakt
* Styling in de navbar components gedaan

<img alt="ERD-Basis tabellen"  src="/documentatie/index-components.png" height="200" width="800"/>
<img alt="ERD-Basis tabellen"  src="/documentatie/styling-navbar-components.png" height="300" width="700"/>

### Feedback ERD:

* Tabelnamen aanpassen
    * Books_blog naar blogs
    * Ratings naar blog_user
* Blogs naar een veel op 1 relatie veranderen
* Voor de rest een goeie ERD
* Status kolom toevoegen aan Blogs - Publish / Unpublish

## 15-10-2024

* HTML Form gehardcoded
* Create / Store functionaliteit toegevoegd aan de pagina
* Crud Tutorial gekeken over het maken en opslaan van gegevens naar de database

<img alt="ERD-Basis tabellen"  src="/documentatie/create-form.png" height="400" width="1000"/>
<img alt="ERD-Basis tabellen"  src="/documentatie/Beveiliging-validate.png" height="300" width="500"/>

#### Opmerkingen:

CSRF is verplicht bij een form. Dit zorgt voor een beveiliging voor bepaalde injecties<br>
Denk aan verwijderen of wijzigen van de database. Toegang tot gegevens van de database<br>
Het beschermt je tegen veel ongewenste acties.

### Crud Tutorial:

* [Crud Tutorial & Nog veel meer](https://www.youtube.com/watch?v=cDEVWbz2PpQ&ab_channel=LearnWebCode)

## 16-10-2024

* Delete functionaliteit toegevoegd
* Laravel tutorial herlopen
* Images vanuit de public folder toegevoegd:
    * [Link voor het images toe kunnen voegen](https://stackoverflow.com/questions/36441679/how-do-i-add-images-in-laravel-view)
    * [Documentatie voor het images toevoegen op je storate](https://laravel.com/docs/10.x/filesystem)
* image_link type naar blob veranderd
* Layouts maken voor dashboard als gebruiker is ingelogd dat je of een anchor of een button tag hebt



