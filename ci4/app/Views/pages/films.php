<div class="container-1">
    <h1 id="film-wall">Wall of Films</h1>
    <?php foreach ($films as $film): ?>
    <h3><?= esc($film['title']) ?> - <?= esc($film['userName']) ?></h3>
    <div>
        <div id="films-container">
            <div class="films">
                <a href="">
                    <img src="<?= esc($film['posterOne']) ?>" alt="poster">
                </a>
                <p><?= esc($film['filmOne']) ?></p>
            </div>
            <div class="films">
                <a href="">
                    <img src="<?= esc($film['posterTwo']) ?>" alt="poster">
                </a>
                <p><?= esc($film['filmTwo']) ?></p>
            </div>
            <div class="films">
                <a href="">
                    <img src="<?= esc($film['posterThree']) ?>" alt="poster">
                </a>
                <p><?= esc($film['filmThree']) ?></p>
            </div>
            <div class="films">
                <a href="">
                    <img src="<?= esc($film['posterFour']) ?>" alt="poster">
                </a>
                <p><?= esc($film['filmFour']) ?></p>
            </div>
        </div>
    </div>
    <?php endforeach ?>
</div>