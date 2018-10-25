<?php 
// Le fichier header.php est inclus dans la page
require_once(__dir__.'/partials/header.php');?>

<?php
 $id = isset($_GET['id']) ? $_GET['id']:0;
 $query = $db->query('SELECT * FROM pizza WHERE id ='.$id);
 $pizza = $query->fetch();
 //*Renvoyer l'utilisateur sur une 404 si la pizza n'existe pas
 if ($pizza === false) {
     htt_response_code(404);
     require_once(__dir__.'/partials/header.php');?>
     <h1>404. Redirection dans 5 secondes....</h1>
     <script>
         setTimeout(function (){
             wondow.location = 'pizza_list.php';
         }, 5000)

    </script>
     <?php require_once(__DIR__.'/partials/footer.php');
 }
 
 ?>
 
<main class="container">

    <h1 class="titleofpizza">La pizza</h1>
    <div class="row">
        <div class="col-md-6">
            <img class="img-fluid imgofpizza" src="<?php echo $pizza['image']; ?>" alt="<?php echo $pizza['name']; ?>">
        </div>
        <div class="col-md-6">
            <h5 class="nameofpizza">
                <?php echo $pizza['name']; ?>
            </h5>
            <h4 class="descriptif">Descriptif de la pizza</h4>
            <div class="descriptif">
            <?php echo $pizza['Description']; ?>
            <?php echo $pizza['size']; ?>
            </div>
            <div class="priceofpizza">
                <?php echo formatPrice($pizza['price'].'€'); ?>
            </div>
            <a href="#" class="btn btn-danger">Commandez</a>
        </div>
    </div>
</main>

<?php 
 //Le fichier footter.php est inclus sur la page
 require_once(__DIR__.'/partials/footer.php');?>