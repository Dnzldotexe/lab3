<h2><?= esc($name) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action=" <?php echo site_url('guests'); ?> " method="post">
    <?= csrf_field() ?>

    <label for="name">Name</label>
    <input type="input" name="name" value="<?= set_value('name') ?>">
    <br>

    <label for="email">Email</label>
    <input type="email" name="email" value="<?= set_value('email') ?>">
    <br>

    <label for="website">Website</label>
    <input type="text" name="website" value="<?= set_value('website') ?>">
    <br>

    <label for="comment">Comment</label>
    <textarea name="comment" cols="45" rows="4"><?= set_value('comment') ?></textarea>
    <br>

    <input type="submit" name="submit" value="Create news item">
</form>