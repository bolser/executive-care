<?php
    echo $this->snippetEditModeStyles();
    $title = $this->input("title");
    $content = $this->textarea("content");
    $link = $this->link("link");
?>

<?php if ($this->editmode) : ?>
    <p>Add the contact page link here</p>
    <?= $link; ?>
<?php endif; ?>

<div class="sidebar__panel">
    <div class="sidebar__panel--open-days">
        <div class="sidebar__panel--open-days-image"></div>
        <div class="sidebar__panel--content">
            <h3><?= $title; ?></h3>
            <p><?= $content; ?></p>
            <?php if ($link !== null) : ?>
                <a href="<?= $link->getHref(); ?>" class="sidebar__panel--button"><?= $link->getText(); ?></a>
            <?php endif; ?>
        </div>
    </div>
</div>