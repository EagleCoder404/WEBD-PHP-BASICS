<?php
$data[["book_id"=>1,"book_name"=>"Pride and the Prejudice"],
["book_id"=>2,"book_name"=>"Emma"],
["book_id"=>3,"book_name"=>"Moby Dick"],
["book_id"=>4,"book_name"=>"American Gods"],
["book_id"=>5,"book_name"=>"I Am Legend"]]
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?foreach($data as $book) { ?>
      <!-- loop start -->
      <div class="book" id=<?=$book['book_id']?> >

        <h1> <?=$book['book_name']?> </h1>

        <a href="bookmark.php?book_id=<?=$book['book_id']?>">Bookmark It</a>

      </div>
      <!-- Loop end -->
    <? } ?>
  </body>
</html>
