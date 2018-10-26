<?php 
// Le fichier header.php est inclus dans la page
require_once(__dir__.'/partials/header.php');?>

<h1>Ajouter une pizza venue d'ailleurs !</h1>
<?php 
		
		$names = null;
        $description = null;
        $category = null;
        $price =null;
		if (!empty($_POST)) { 
		    $names = $_POST['names'];
            $description = $_POST['description'];
            $category = $_POST['category'];
            $price =$_POST['price'];
		}
	?>
<main class="container">
    <form method="POST">
        <label class="descript">Nom:</label>
        <input type="text" name="names" placeholder="nom de la pizza">
        <br>
        <div class="form-group">
            <label class="imgadd" for="image">Image:</label>
            <input type="file">
        </div>
        <label class="imgadd">Prix:</label>

        <input name="price" class="custom-slider range" type="range" min="5" max="19.99" step="0.01">
        <output class="price"></output><span class="price">€</span>
        <br>
        <select name="category">
            <option for='__'>
            <option for="Coté Obscur">Coté Obscur
            <option for="Coté Lumineux">Coté Lumineux
            <option for="Chasseurs de primes">Chasseurs de primes
        </select>
        <?php if (strlen($category) === '__') {
		    	$isValid = false;
		        echo 'Choisir votre categorie';
		    }
        ?>
        <div class="form-group">
            <label class="descript" for="description">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
        </div>
        
        <button class="btn btn-success">Envoyer</button>
    </form>
</main>
<div class="verif">
    <?php 
if (!empty($_POST)) {
            $isValid = true;
            if (empty($names)) {
				$isValid = false;
		        echo 'Vous n\'avez pas rempli le nom de la pizza <br />';
            }

            if (empty($category) === '__') {
		    	$isValid = false;
		        echo 'Choisir votre categorie';
            }
            if (empty($description)) {
		    	$isValid = false;
		        echo 'Merci de noter les ingrédients de la pizza';
            }
            if (empty($price) <= 5) {
                $isValid = false;
                echo 'Le prix doit être entre 5€ et 19.99€';

            }
		    if ($isValid) {
			    echo 'La pizza a été ajouter avec succes';
			}

		}
	?>
</div>
<?php 
 //Le fichier footter.php est inclus sur la page
 require_once(__DIR__.'/partials/footer.php');?>