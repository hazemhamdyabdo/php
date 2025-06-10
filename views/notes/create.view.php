<?php require  base_path('views/partials/head.php') ?>
<?php require  base_path('views/partials/nav.php') ?>
<?php require  base_path('views/partials/banner.php') ?>
<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

    <form method="POST">
      <div class="col-span-full">
        <label for="body" class="block text-sm/6 font-medium text-gray-900">Body</label>
        <div class="mt-2">
          <textarea name="body" id="body" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2
           focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"><?= $_POST['body'] ?? '' ?></textarea>
          <?php if (isset($errors['body'])): ?>
            <p class="mt-2 text-sm text-red-600"><?= $errors['body'] ?></p>
          <?php endif; ?>
        </div>
        <p class="mt-3 text-sm/6 text-gray-600"> Write a few sentences about yourself.</p>
      </div>
      <button type="submit" class="mt-4 inline-flex items-center gap-2 rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500">Submit</button>
    </form>
</main>

<?php require  base_path('views/partials/foot.php') ?>