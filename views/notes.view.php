<?php require 'partials/head.php' ?>
<?php require 'partials/nav.php' ?>

<?php require 'partials/banner.php' ?>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <p>Notes page</p>
 

      <?php foreach ($notes as $note): ?>
        <div class="bg-white shadow-md rounded px-8 py-6 mt-4">
          <a href="/note?id=<?= $note['id'] ?>" class="text-2xl font-bold mb-2"><?= $note['body'] ?></a>
        </div>
      <?php endforeach; ?>

    </div>
  </main>

<?php require 'partials/foot.php' ?>