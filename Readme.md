# Laravel cheat sheet

`ssh -v`

## Environnement 
- var d’environnements dans .bash_profile par défaut sinon dans le fichier .env

## Routing : Routes/web.php
- Routing comme dans Slim
- Chaque route fait ref à un controller + une fonction e.g => Controller@function ou une fonction anonyme

## Dossiers
- Src/AppBundle c’est App
- Bootstrap/app import des fichiers de routes etc. par exemple

- Tout se fait via des commandes
- Middleware => code à executer avant / après la requête.

## Utile 
- Tinker
- dd(); dump+die()

## MVC
- Model -> tout faire par les commandes 
    - Mutator qui sont des sortes de getter / setter avec un mot clé « Attribute »
    - Relation => Fonction qui retourne une relation, Has many, belongs to, avec Pivot qui est une table de liaison
    - WithTimestamps => ajoute created_at / updated_at automatiquement
- Controller => artisan make:controller 
    - Acces au model => juste le nom du model::find (1) en static
    - REquete SQL directement dans le controller ou dans le model si réutilisé
    - Return view(+nomDeVue, [$data])  => nomdevue.blade.php => juste ‘nomdevue’ 
    - Return string => return une réponse HTTP avec la string
    - Return Array  => automatiquement en JSON
- View 
    - {{ $data }}
    - fonction => @function
