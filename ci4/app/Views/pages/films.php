<div class="container-1">
    <h1 id="film-wall">Wall of Films</h1>
    <?php foreach ($films as $film): ?>
    <h2 id="<?= esc($film['slug']) ?>"><?= esc($film['title']) ?> - <?= esc($film['userName']) ?></h2>
    <div style="margin-bottom: 2rem;">
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