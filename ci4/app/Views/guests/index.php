<h2><?= esc($name) ?></h2>

<?php if (! empty($guests) && is_array($guests)): ?>

    <?php foreach ($guests as $guests_item): ?>

        <h3><?= esc($guests_item['name']) ?></h3>

        <div class="main">
            <?= esc($guests_item['email']) ?>
        </div>
        <p><a href="./guests/<?= esc($guests_item['name'], 'url') ?>">View article</a></p>

    <?php endforeach ?>

<?php else: ?>

    <h3>No Guests</h3>

    <p>Unable to find any guests for you.</p>

<?php endif ?>