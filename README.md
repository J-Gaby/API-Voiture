# API-Voiture

## Imoprter la bdd
Crées une bdd "voitures" puis importer la table "info" dnas celle-ci.

## Renommer le fichier(fichier .zip) en : voitures

## Accés
les voitures sont détaillés comme ci dessous :
  - marque
  - modele
  - gamme
  - prix

Toutes les données sont accéssibles et modifiables dans l'ordre donné ci-dessus, depuis l'URL en ajoutant à la suite les liens disponibles ci-dessous.
exemple : localhost/voitures/create.php?marque=valeur1&modele=valeur2&gamme=valeur3&prix=valeur4

Chemin : localhost/voitures
puis :
      /info : afficher tout
      /create.php? : permet d'ajouter des voitures
      /read.php? : permet de trier en fonction de la valeur demander
      /update.php? : permet de modifier les valeurs
      /delete.php? : pour effacer à partir d'un id
