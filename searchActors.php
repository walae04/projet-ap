<?php require("header.php"); ?>
<?php require("fonctions.php"); ?>

<?php  
// $popularMovies = genreMovies(); 
 //var_dump($_GET["id"]);
//if ( isset($_GET['id']) AND !empty($_GET['id'])){ 
 // $id = $_GET['id'];

//$detailactors= detailActors($id);
//$actors=getActors($id);
$query = $_GET['query'];
$searchActors =searchActors($query);
//echo "<pre>";
 //print_r($searchActors);
//echo "</pre>";

?>
 

<div class="album py-5 bg-body-tertiary">
  <div class="container">

     <div class="row row-cols-1 row-cols-sm-2 row-cols-md-6 g-6">
     <?php foreach($searchActors as $actors) : ?>  
      <?php  if (!empty($actors['profile_path'])): ?>
        <div class="d-flex align-items-stretchl">
          <div class="card shadow-sm ">
            <img src="<?php echo 'https://image.tmdb.org/t/p/w780/'.$actors['profile_path']; ?>" >
            <div class="card-body lh-sm d-flex flex-column">
              <p class=" lh-sm">
                <strong><?php echo $actors['name']; ?></strong>
              </p>
              <button type="button" class="btn btn-primary mt-auto"><a class="dropdown-item" href="detailActors.php?id=<?php echo $actors['id']?>">View</a></button>
            </div>
          </div>
        </div>
        <?php endif ; ?>
     <?php endforeach; ?>
 
    </div>
  </div>
  
</div>

<?php require("footer.php"); ?>

