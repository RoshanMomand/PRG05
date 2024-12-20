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

## 17-10-2024

* Genres tabel & blog_genre tussen tabel
* Gebruik maken seeders & factory gemaakt met de genre tabel
* [Factory & Seeders](https://www.youtube.com/watch?v=69YoTKzcTSg&ab_channel=CodewithBurt)
* Single Blog Post genre Weergeven

## 18-10-2024

* My blogs op de profiel laten zien
    * En kunnen verwijderen

## 19-10-2024

* Update pagina functioneel maken
* Blog->genres in de post verzoek verwerken
* Edit & Delete alleen laten zien als de user die is ingelogd & bestaat

## 21-10-2024

* blog & genre id koppelen met de koppel tabel in de create form
* Genres kunnen update in de form

## 22-10-2024

* Zoek functie toevoegen
    * Genre zoek functie toevoegen
    * [Zoek functie tutorial](!https://www.youtube.com/watch?v=uEsd-5f-7KA&ab_channel=Bluebird) & [Documentatie]()
* Filter functie toevoegen

## 23-10-2024

* Admin role
    * Dashboard
        * ALL USERS BLOG
        * ALL GENRES -> Adding genres -> editing genres
        * ALL USERS -> editing

## 24-10-2024

* Admin Dashboard afmaken zie dag 23-10-2024
    * Admin autorisatie toegevoegd
        * [Documentatie voor Middleware](https://laravel.com/docs/11.x/middleware#main-content)
    * Blogs data ophalen in de vorm van rijen
    * Genres data ophalen in de vorm van rijen
        * Nieuwe genres kunnen toevoegen
        * Genres kunnen editen
        * Genres kunnen verwijderen
    * Users data ophalen in de vorm van rijen
        * Users kunnen verwijderen
* Checkbox oude value weergeven
    * [Stackoverflow om oude checkbox te weergeven](https://stackoverflow.com/questions/39521726/how-to-show-old-data-of-dynamic-checkbox-in-laravel)

## 27-10-2024

* Edit form aanmaken voor admin
* Update functionaliteit toevoegen voor de admin
* Nieuwe Genre Kunnen toevoegen.
* Genre kunnen verwijderen.
* Blogs weergeven op profiel, bekijken, editen en verwijderen

## 29-10-2024

* Blogs Publishen en Unpublishen
* Login_count gemaakt
    * [Docs + Chatgpt(klein beetje hulp)](https://laravel.com/docs/11.x/session#regenerating-the-session-id)

## 30-10-2024

* Project Na lopen
    * Code netter en efficienter maken
    * Styling van t project toepassen (optioneel)

* Security OWASP + validatie systemen dubbelchecken
    * Data veilig in de formulier zetten
    * Concretere validatie toevoegen
