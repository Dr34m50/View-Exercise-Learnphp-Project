<?php view('partials/header') ?>

<main class="container">
    <h1><?= htmlspecialchars($post->title) ?></h1>
    <p><?= htmlspecialchars($post->body) ?></p>

    <div class="mb-3">
        <a href="/admin/posts/edit?id=<?= $post->id ?>" class="btn btn-secondary">Edit</a>
        <a href="/admin/posts/delete?id=<?= $post->id ?>" class="btn btn-danger">Delete</a>
        <a href="/admin/posts" class="btn btn-primary">Back to Posts</a>
    </div>
</main>

<?php view('partials/footer') ?>
