# Test-technique
1) Retourner tous les éléments book

/library[book]


2) Retourner tous les éléments title ayant comme parent un élément book avec un attribut type égal à roman
/library[book/attribute::]

3) Retourner le nombre d'éléments book ayant un attribut type égal à bd
/library[book/attribute::type = bd]

4) Que renvoie la requête XPath suivante :  /library/library/ancestor-or-self::library
Tous les noeuds library


# Auto-évaluation
J'ai essayé de répondre au question mais je suis pas sur du résultat je n'avais utilisé Xpath

Pour la partie projet j('ai installe le projet les dépendances nécessaires créer 2 controlleur 1 pour la page d'accueil et pour gérer les personnes . J'ai créer l'entité personne avec les différentes propriétes . Créer la base de données et modfier le schéma de celle ci créer le formulaire mis la contarinte pour que l'age ne dépasse pas 150 ans. Créer la vue 
création d'une personne .Ensuite j'ai créer une méthode dans le repositoty personneRepository pour récupérer toute les personnes triés par leur niom de famille en ordre croissant alphabétique .Et enfin vérifier que cela fonctionne.
