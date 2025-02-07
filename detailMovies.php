<?php require("header.php"); ?>
<?php require("fonctions.php"); ?>

<?php  
// $popularMovies = genreMovies(); 
//var_dump($_GET["id"]);
if ( isset($_GET['id']) AND !empty($_GET['id'])){ 
    $id = $_GET['id'];
    $detail = detailMovies($id); 
    //echo"<pre>";
   // print_r($detail);
    //echo"</pre>";
 $video= getVideo($id);
 //echo"<pre>";
 //print_r($video);
 //echo"</pre>";
 $actors=getActors($id);
 echo"<pre>";
 print_r($actors);
 echo"</pre>";
}
// elseif( isset($_GET['']) AND !empty($_GET[''])){ 
//     $id = $_GET[''];
//     $genres = genreMovies($id); 
// }
?>
<div class="album py-5 bg-body-tertiary">
  <div class="container">
     <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2  g-2">
     
        <div class="d-flex align-items-stretchl">
          <div class="card shadow-sm ">
            <img src="<?php echo 'https://image.tmdb.org/t/p/w500/'.$detail['poster_path']; ?>" >
            <div class="card-body lh-sm d-flex flex-column">
           
              <p class=" lh-sm">
                <strong><?php echo $detail['title']; ?></strong>
              </p>
              <p class=" lh-sm">
              <U> Date de sortie  :   
            <?php echo $detail['release_date']; ?> </U>
              </p>
              <p class=" lh-sm">
                Résumé :   
            <?php echo $detail['overview']; ?>
              </p>
              
             <button type="button" class="btn btn-primary mt-auto">View</button>
            </div>
          </div>
        </div>

        <iframe width="672" height="378" src="https://www.youtube.com/embed/<?= $video[0]['key']?>" frameborder="0" allowfullscreen></iframe>
          
          
          <div class="container">
       <h4>Les acteurs</h4>
     <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
     <?php foreach(array_slice($actors,0,8) as $actor) : ?>  
        <div class="d-flex align-items-stretchl">
          <div class="card shadow-sm ">
            <img src="<?php echo 'https://image.tmdb.org/t/p/w780/'.$actor['profile_path']; ?>" >
            <div class="card-body lh-sm d-flex flex-column">
              <p class=" lh-sm">
                <strong><?php echo $actor['name']; ?></strong>
              </p>
              <button type="button" class="btn btn-primary mt-auto"><a class="dropdown-item" href="detailActors.php?id=<?php echo $actor['id']?>">View</a></button>
            </div>
          </div>
        </div>
     <?php endforeach; ?>
    </div>
  </div>
</div>
    </div>
  </div>
</div>

<?php require("footer.php"); ?>