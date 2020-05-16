<section>
<?php
$session = \Config\Services::session();
?>
<?php if(isset($session->success)): ?>
  <div class="alert alert-success text-center alert-dissmissible fade show mb-0" role="0">
  <?= $session->success ?>
    <button type="button" class="close" data-dismiss="alert"  aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php endif; ?>
<div class="jumbotron">

  <div class="container">
      <h1 class="display-4">Blog</h1>
      <p class="lead">CodeIgniter is an awesome frameworks for creating fast websites</p>
      <hr class="my-4">
      <p>Hey, checkout my first web app built with CodeIgniter 4</p>
      <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </div>
  
</div>

</section>

<section class="blog-section">

  <div class="container">

    <?php if($news):  ?>

      <?php foreach ($news as $newsItem): ?>

        <h3><a href="blog/<?= $newsItem['slug']?>"><?= $newsItem['title'] ?></a></h3>

      <?php endforeach; ?>

    <?php else: ?>

      <p class="text-center">No posts found</p>

    <?php endif; ?>

  </div>

</section>