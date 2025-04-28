<?php view('partials/head.php') ?>
<?php view('partials/nav.php') ?>
<?php view('partials/banner.php', ['heading' => $heading]) ?>

<main>
<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p><?= htmlspecialchars($note['description'])?></p>
        <a href="/notes">Go To Notes</a>
    </div>
</main>

<?php view('partials/footer.php') ?>