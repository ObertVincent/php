<?php 

$currentPageTitle ='Nos Pizzas';

// Le fichier header.php est inclus dans la page
require_once(__dir__.'/partials/header.php');
 // Récupérer la liste des pizzas
 $query = $db->query('select * from pizza ');
 $pizzas = $query->fetchAll();

?>

<main class="container">

    <h1 class="page-title">Liste des pizzas</h1>
    <div class="fond">
    <div class="row">
        <?php 
        foreach ($pizzas as $pizza) { ?>
        
            <div class="col-md-3">
                <div class="card">
                <div class="category">
                            <?php echo $pizza['category']; ?>
                        </div>
                    <div class="card-img-top-container">
                        <img class="card-img-top card-img-top-zoomeffect" src="<?php echo $pizza['image']; ?>" alt="<?php echo $pizza['name']; ?>">
                        <div class="card-price">
                            <?php echo formatPrice($pizza['price'].'€'); ?>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $pizza['name']; ?>
                        </h5>
                        <a href="pizza_single.php?id=<?php echo $pizza['id'];?>" class="btn btn-danger">Commandez</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</main>

<?php 
 //Le fichier footter.php est inclus sur la page
 require_once(__DIR__.'/partials/footer.php');?>