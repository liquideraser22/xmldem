<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://xmlexercise1.herokuapp.com/rss.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("movie");
?>
 <div class="title">
 <h1>Movies</h1>
 </div>
 <div class="title">

 <div class="wrapper">
 <?php
 foreach( $content as $data )
 {?>
     <div class="border">
     <?php
     $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
     $actor = $data->getElementsByTagName("actor")->item(0)->nodeValue;
     $genre = $data->getElementsByTagName("genre")->item(0)->nodeValue;
     $director = $data->getElementsByTagName("director")->item(0)->nodeValue;
     echo "<ul><h2>$title - $actor</h2>
              <ul>
                  <li>genre: $genre </li>
                  <li>director: $director </li>
              </ul>
          </ul>";
    ?>
     </div>
  <?php
 }
?>
</div>
</div>
<style>

    .title{
        display: flex;
        justify-content: center;
    }
    .wrapper{
        display: flex;
        flex-direction: column;
        border: 2px solid blue;
        width: 30rem;
        border-radius: 10px;
    }
    .border{
        border: 1px solid blue;
        max-width: 50rem;
        border-radius: 10px;
        background-color: grey;
    }
</style>
