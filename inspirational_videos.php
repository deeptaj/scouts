<?php $page_title = 'Project Access > Inspiration'; ?>
<?php
    require 'bin/functions.php';
    require 'db_configuration.php';
    include('header.php');
    $page = "inspiration.php";
?>

<style>
/* First make sure the video thumbnail images are responsive. */

img {
    max-width: 100%;
    height: auto;
  }
  
  /* 
  This is the starting grid for each video with thumbnails 4 across for the largest screen size.
  It's important to use percentages or there may be gaps on the right side of the page. 
  */

  .video {
    background: #fff;
    padding-bottom: 20px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15);
    width: 20%; /* Thumbnails 4 across */
    margin: 1%;
    float: left;
  }

   /* 
   These keep the height of each video thumbnail consistent between YouTube and Vimeo.
   Each can have thumbnail sizes that vary by 1px and are likely break your layout. 
   */

  .video figure {
    height: 0;
    padding-bottom: 56.25%;
    overflow: hidden;

    .video figure a {
      display: block;
      margin: 0;
      padding: 0;
      border: none;
      line-height: 0;
    }
  }

  /* Media Queries - This is the responsive grid. */

  @media (max-width: 1024px) {
    .video {
      width: 31.333%; /* Thumbnails 3 across */
    }
  }

  @media (max-width: 600px) {
    .video {
      width: 48%; /* Thumbnails 2 across */
    }
  }

  @media (max-width: 360px) {
    .video {
      display: block;
      width: 96%; /* Single column view. */
      margin: 2%; /* The smaller the screen, the smaller the percentage actually is. */
      float: none;
    }
  }

  /* These are my preferred rollover styles. */

  .video img {
    width: 100%;
    opacity: 1;
  }

  .video img:hover, .video img:active, .video img:focus {
    opacity: 0.75;
  }
</style>


<body>

<?php

 // youtube video link we get from the table:  http://www.youtube.com/watch=v?pzHKrZbWLC8
 // what we need to put in HREF:  //www.youtube.com/embed/pzHKrZbWLC8
 // and the video thumbnail:   http://i3.ytimg.com/vi/pzHKrZbWLC8/maxresdefault.jpg

 // construct the query
 $sql1 = "SELECT * FROM `inspiration` WHERE `media_type`='video'";

 // or condition is added to trap any errors in the sql query
 // without that or condition, $result_set will be a boolean (false) instead of a an object
 $result_set = mysqli_query($db,$sql1) or die($db->error);

 while($row_data = $result_set->fetch_assoc()){
     $title = $row_data["title"];
    $resource_url=$row_data["resource_url"];
    $video_id = explode("?v=", $resource_url);
    $video_id = $video_id[1];
    $video_embed = "http://www.youtube.com/embed/".$video_id;
    $thumbnail="http://img.youtube.com/vi/".$video_id."/hqdefault.jpg";

    echo '<article class="video">
    <figure>
      <a class="fancybox fancybox.iframe" href='. $video_embed.'>
      <img class="videoThumb" src='. $thumbnail.'></a>
    </figure>
    <h5 class="videoTitle">'.$title.'</h2>
  </article>';
 }

?>

 <!-- <article class="video">
    <figure>
      <a class="fancybox fancybox.iframe" href="//www.youtube.com/embed/pzHKrZbWLC8">
      <img class="videoThumb" src="//i3.ytimg.com/vi/pzHKrZbWLC8/mqdefault.jpg"></a>
    </figure>
    <h2 class="videoTitle">Mesopotamia</h2>
  </article> -->


</body>


<script
    src="http://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>

  <script src="js/jquery.fancybox.min.js"></script>

  <script>
    $(document).ready(function() {
      $('.fancybox').fancybox({
        padding   : 0,
        maxWidth  : '100%',
        maxHeight : '100%',
        width   : 560,
        height    : 315,
        autoSize  : true,
        closeClick  : true,
        openEffect  : 'elastic',
        closeEffect : 'elastic'
      });
    });
  </script>

</html>
