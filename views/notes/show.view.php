<?php require  base_path('views/partials/head.php') ?>
<?php require  base_path('views/partials/nav.php') ?>
<?php require  base_path('views/partials/banner.php') ?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <p>Single Note</p>


    <div class="bg-white rounded px-8 py-6 mt-4">
      <a href="/notes" class="text-2xl font-bold mb-2"><?= $note['body'] ?></a>
    </div>

  </div>
</main>

<?php require  base_path('views/partials/foot.php') ?>