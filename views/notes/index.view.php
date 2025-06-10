<?php require 'views/partials/head.php' ?>
<?php require 'views/partials/nav.php' ?>
<?php require 'views/partials/banner.php' ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <p>Notes page</p>
 

      <?php foreach ($notes as $note): ?>
        <div class="bg-white shadow-md rounded px-8 py-6 mt-4">
          <a href="/note?id=<?= $note['id'] ?>" class="text-2xl font-bold mb-2"><?= htmlspecialchars($note['body']) ?></a>
        </div>
      <?php endforeach; ?>


      <a href="/note/create" class="mt-4 inline-flex items-center gap-2 rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500">Create Note</a>
      
    </div>
  </main>

<?php require 'views/partials/foot.php' ?>