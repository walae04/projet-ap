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
 echo "<pre>";
 print_r($detailactors);
echo "<pre>";
}
?>
<div class="album py-5 bg-body-tertiary">
  <div class="container">
     <div class="row row-cols-1 row-cols-sm-2 row-cols-md-6 g-6">
     <?php foreach($detailactors as $detailactor) : ?>  
        <div class="d-flex align-items-stretchl">
          <div class="card shadow-sm ">
            <img src="<?php echo 'https://image.tmdb.org/t/p/w780/'.$detailactor['poster_path']; ?>" >
            <div class="card-body lh-sm d-flex flex-column">
              <p class=" lh-sm">
                <strong><?php echo $detailactor; ?></strong>
              </p>
             <button type="button" class="btn btn-primary mt-auto"><a class="dropdown-item" href="detailActors.php?id=<?php echo $detailactor['id']?>">View</a></button>
            </div>
          </div>
        </div>
     <?php endforeach; ?>
    </div>
  </div>
</div>

<?php require("footer.php"); ?>