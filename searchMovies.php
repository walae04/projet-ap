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
$searchMovies = searchMovies($query);
echo "<pre>";
 print_r($searchMovies);
echo "<pre>";
}
?>
 

<div class="album py-5 bg-body-tertiary">
  <div class="container">
     <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-2">
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
             <button type="button" class="btn btn-primary mt-auto"><a class="dropdown-item" href="detailActors.php?id=<?php echo $detailactor['id']?>">View</a></button>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>

<?php require("footer.php"); ?>