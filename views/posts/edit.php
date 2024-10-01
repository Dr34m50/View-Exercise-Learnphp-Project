<?php view('partials/header') ?>

<main class="container">
  <form method="POST" action="/admin/posts/edit?id=<?=$post->id?>">
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input name="title" type="text" class="form-control" id="title" value="<?=$post->title?>" placeholder="Title here ..." >
    </div>
    <div class="mb-3">
      <label for="body" class="form-label">Content</label>
      <textarea name="body" class="form-control" id="body" rows="3"><?=$post->body?></textarea>
    </div>
    <div class="mb-3">
      <input type="submit" class="btn btn-primary">
    </div>
  </form>
</main>

<?php view('partials/footer') ?>