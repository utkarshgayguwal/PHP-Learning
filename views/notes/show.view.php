<?php view('partials/head.php') ?>
<?php view('partials/nav.php') ?>
<?php view('partials/banner.php', ['heading' => $heading]) ?>

<main>
<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p><?= htmlspecialchars($note['description'])?></p>
        <div style="display: flex; gap: 1rem;">
            <a class="bg-indigo-600 mt-4 text-white px-4 py-2 rounded" href="/notes">Go To Notes</a>
            <form action="/note-delete" method="POST">
                <input type="hidden" name="id" value="<?= $note['id'] ?>">
                <button class='bg-red-500 mt-4 text-white px-4 py-2 rounded' type="submit">Delete</button>
            </form>
        </div>
    </div>
</main>


<?php view('partials/footer.php') ?>