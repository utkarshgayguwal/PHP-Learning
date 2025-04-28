<?php require 'views/partials/head.php'?>
<?php require 'views/partials/nav.php'?>
<?php require 'views/partials/banner.php'?>

<main>

    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

    <?php foreach ($notes as $note) {
            echo "<li><a href='/note?id={$note['id']}'>" . htmlspecialchars($note['description']) . '</a></li>';
    }?>

    <div class="mx-auto max-w-7xl">
    
    <div class="mt-6 flex items-center justify-start gap-x-6">
    <button class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><a href="/note-create">Create Note</a></button>
  </div>
    </div>
    </div>
</main>

<?php require 'views/partials/footer.php'?>
