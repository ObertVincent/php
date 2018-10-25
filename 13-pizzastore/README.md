# Pizza Store PDO SQL

 - Récupérer un backup de la BDD pizzastore
 - L'intérêt est de pouvoir recréer la structure de la base à tout moment.

Au niveau du PHP, on va créer quelques fichiers / dossier :

- config/database.php -> Connection à la base de données en PDO, sera inclus dans tous les fichiers PHP
- config/config.php -> stocke toutes les variables globales
- partials/header.php -> le header du site à inclure dans toutes les pages (Bootstrap CDN)
- partials/footer.php -> le footer du site à inclure dans toutes les pages
- index.php -> la page d'accueil du site
- pizza_list.php -> Lister toutes les pizzas de la base de données
- pizza_single.php -> la page d'une pizza seule


Au niveau du front.

- assets/ -> contiendra le css, le js, les images
- assets/css/style.css
- assets/js/script.js
- assets/img/

Fonctionnalité supplémentaire
- Formulaire d'ajout d'une pizza
- Créer la page pizza_add.php (Permettra d'ajouter une pizza côté administrateur)
- Ne pas oublier header et le footer
- Ajouter un titre "Ajouter une pizza"
- Ajouter un formulaie avec les champs suivants:
- Nom: saisie libre
- Prix: entre 5 et 19.99
- Image: Saisie libre 
- Description: Saisie libre
- Catégories: Select
- Bouton
- Traitement du formulaire (vérifier les données)
- Ajouter la pizza dans la base avec une requête quand on clique sur le bouton 
- Modifier le champ description (text) et catégorie (varchar ou enum) dans la table pizza.


