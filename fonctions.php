<?php

require_once("get-proxy.php");// au lycée pour faire des requêtes https vous avons besoin d'indiquer le proxy


    //fonction qui retourne dans un tableau asociatif les 20 films les plus populaires 
    function popularMovies(){
        $key = "da63548086e399ffc910fbc08526df05";
        $url = "https://api.themoviedb.org/3/movie/popular?api_key=$key&language=fr-FR";
        $response = getProxy($url);
        //$response = file_get_contents("https://api.themoviedb.org/3/movie/popular?api_key=$key&language=fr-FR");
       
        $result = json_decode($response, true);
        return $result['results'];
      }

      function topMovies(){
        $key = "da63548086e399ffc910fbc08526df05";
        $url = "https://api.themoviedb.org/3/movie/top_rated?api_key=$key&language=fr-FR";
        $response = getProxy($url);
        //$response = file_get_contents("https://api.themoviedb.org/3/movie/popular?api_key=$key&language=fr-FR");
       
        $result = json_decode($response, true);
        return $result['results'];
      }
      function genreMovies($arg){
        $key = "da63548086e399ffc910fbc08526df05";
        $url = "https://api.themoviedb.org/3/discover/movie?api_key=$key&language=fr-FR&with_genres=$arg";
        $response = getProxy($url);
        //$response = file_get_contents("https://api.themoviedb.org/3/movie/popular?api_key=$key&language=fr-FR");
       
        $result = json_decode($response, true);
        return $result['results'];
      }
      function detailMovies($movieId){
        // $movieId =2;
        $key = "da63548086e399ffc910fbc08526df05";
        $url = "https://api.themoviedb.org/3/movie/$movieId?api_key=$key&language=fr-FR";
        $response = getProxy($url);
        //$response = file_get_contents("https://api.themoviedb.org/3/movie/popular?api_key=$key&language=fr-FR");
       
        $result = json_decode($response, true);
        // var_dump($result);
        return $result;
       
      }
      function getVideo($arg){
        $key = "da63548086e399ffc910fbc08526df05";
        $url = "https://api.themoviedb.org/3/movie/$arg/videos?api_key=$key&language=fr-FR";
        $response = getProxy($url);
        //$response = file_get_contents("https://api.themoviedb.org/3/movie/popular?api_key=$key&language=fr-FR");
       
        $result = json_decode($response, true);
        return $result['results'];
      }
      function getActors($arg){
        $key = "da63548086e399ffc910fbc08526df05";
        $url = "https://api.themoviedb.org/3/movie/$arg/credits?api_key=$key";
        $response = getProxy($url);
        //$response = file_get_contents("https://api.themoviedb.org/3/movie/popular?api_key=$key&language=fr-FR");
       
        $result = json_decode($response, true);
        return $result['cast'];
      }
      function detailActors($arg){
        $key = "da63548086e399ffc910fbc08526df05";
        $url = "https://api.themoviedb.org/3/person/$arg?api_key=$key&language=fr-FR";
        $response = getProxy($url);
        //$response = file_get_contents("https://api.themoviedb.org/3/movie/popular?api_key=$key&language=fr-FR");
       
        $result = json_decode($response, true);
        return $result;
      }
      function searchMovies($word){
        $key = "da63548086e399ffc910fbc08526df05";
        $url =" https://api.themoviedb.org/3/search/movie?api_key=$key&query=$word";
        $response = getProxy($url);
        //$response = file_get_contents("https://api.themoviedb.org/3/movie/popular?api_key=$key&language=fr-FR");
       
        $result = json_decode($response, true);
        return $result;
      }
?>

