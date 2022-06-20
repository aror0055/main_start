<?php
include 'header.php';
$index = $_GET["index"];
//echo $index;
?>
<div class="row g-5">
    <div class="col-md-8">
      
      <article class="blog-post">
        <h2 class="blog-post-title mb-1"><?php echo $posts[$index]["title"]; ?></h2>
        <p class="blog-post-meta"><?php echo $posts[$index]["published"]; ?> by <a href="#"><?php echo $posts[$index]["author"]; ?></a></p>

        <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
        <ul>
          <li>First list item</li>
          <li>Second list item with a longer description</li>
          <li>Third list item to close it out</li>
        </ul>
        <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout.</p>
      </article>

  </div>
</div>
<?php
setcookie('category', $posts[$index]["category"]);
include 'footer.php'
?>