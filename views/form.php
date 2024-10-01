<?php include 'partials/header.php'; ?>

<main class="container">
  <?php if($email): ?>
    <h1>Email: <?=$email?></h1>
  <?php endif ?>
<form method="POST" action="/form">

<div class="mb-3">
  <label for="email" class="form-label">Email address</label>
  <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
</div>
<div class="mb-3">
  <input type="submit" class="btn btn-primary">
</div>
</form>

</main>

<?php include 'partials/footer.php'; ?>