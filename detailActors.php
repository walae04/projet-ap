<?php require("header.php"); ?>
<?php require("fonctions.php"); ?>

<?php  
// $popularMovies = genreMovies(); 
//var_dump($_GET["id"]);
if ( isset($_GET['id']) AND !empty($_GET['id'])){ 
    $id = $_GET['id'];
    $genres = genreMovies($id); 
// echo "<pre>";
// print_r($genres);
// echo "<pre>";

$detailactors= detailActors($id);
 //echo "<pre>";
 //print_r($detailactors);
//echo "<pre>";
}
$topMoviesActors= topMoviesActors($id);
//echo "<pre>";
// print_r($detailactors);
//echo "</pre>";
?>
 
 
<div class="album py-5 bg-body-tertiary">
  <div class="container">
     <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-2">
     <?php // if (!empty($actors['profile_path'])): ?>
        <div class="d-flex align-items-stretchl">
          <div class="card shadow-sm ">
            <img src="<?php echo 'https://image.tmdb.org/t/p/w500/'.$detailactors['profile_path']; ?>" >
            <div class="card-body lh-sm d-flex flex-column">
              <p class=" lh-sm">
                <strong><?php echo $detailactors['name']; ?></strong>
              </p>
              <p class=" lh-sm">
                <?php echo $detailactors['biography']; ?>
              </p>
             
            </div>
          </div>
        </div>
        <?php //endif ; ?>

     

    </div>
  </div>


  <div class="container">
       <h4>Les films :</h4>
     <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
     <?php foreach(array_slice($topMoviesActors,0,8) as $movie) : ?>  
        <div class="d-flex align-items-stretchl">
          <div class="card shadow-sm ">
            <img src="<?php echo 'https://image.tmdb.org/t/p/w780/'.$movie['poster_path']; ?>" >
            <div class="card-body lh-sm d-flex flex-column">
              <p class=" lh-sm">
                <strong><?php echo $movie['title']; ?></strong>
              </p>
              <button type="button" class="btn btn-primary mt-auto"><a class="dropdown-item" href="detailMovies.php?id=<?php echo $movie['id']?>">View</a></button>
            </div>
          </div>
        </div>
     <?php endforeach; ?>
    </div>
  </div>
</div>


</div>

<?php require("footer.php"); ?>