<?php
    echo $this->snippetEditModeStyles();
    $title = $this->input("title", [ "width" => 100]);
    $content = $this->textarea("content");
    $link = $this->link("link");
?>

<?php if ($this->editmode) : ?>
    <p>Add the contact page link here</p>
    <?= $link; ?>
<?php endif; ?>

<div class="sidebar__panel">
    <div class="sidebar__panel--volunteer">
        <div class="sidebar__panel--volunteer-image"></div>
        <div class="sidebar__panel--content">
            <h3><?= $title; ?></h3>
            <p><?= $content; ?></p>
            <?php if ($link !== null) : ?>
                <a href="<?= $link->getHref(); ?>" class="sidebar__panel--button right"><?= $link->getText(); ?></a>
            <?php endif; ?>
        </div>
    </div>
</div>