<?php
$careHome        = $this->careHome;
$recommendation  = $this->recommendations;
$googleMapsUrl   = 'https://www.google.com/maps/preview/@' . $careHome->getLat() . ',' . $careHome->getLon() . ',13z';
$nearbyHomes     = $this->nearbyHomes;
?>

<div class="our-care__header">-</div>
<div class="container">
    <div class="container__inner">
        <div class="our-homes">
            <div class="our-homes__left">
                <div class="our-homes__left__title">
                    Welcome to
                </div>
                <div class="our-homes__left__content">

                    <img class="our-homes__left__content__headerimage"
                         src="<?= $this->careHomeImage($careHome); ?>"/>

                    <div class="our-homes__left__content__wrapper">
                        <div class="our-homes__left__content__box">
                            <?= $careHome->getDescription(); ?>
                        </div>
                        <?= $this->partial("partial/care-homes/letter-from-the-manager.php", ["careHomeObject" => $careHome]); ?>

                        <?= $this->partial("partial/care-homes/life-here-at-the-home.php", ["careHomeObject" => $careHome]); ?>

                        <?= $this->partial("partial/care-homes/gallery.php", ["careHomeObject" => $careHome]); ?>

                        <?= $this->partial("partial/care-homes/ratings-and-report.php", [
                            "careHomeObject"  => $careHome,
                            "recommendations" => $recommendations,
                        ]); ?>
                    </div>
                </div>
                <br/>

                <div class="our-homes__left__title">
                    Others nearby
                </div>
                <div class="our-homes__left__nearby">
                    <div class="nearby-homes-slider">
                        <?php if (isset($nearbyHomes)) : ?>
                            <?php foreach ($nearbyHomes as $careHome) : ?>
                                <div class="slide">
                                    <img src="<?= $careHome->getHomeImage() ?>" />
                                    <?= $careHome->getTitle(); ?><br />
                                    <?= round($careHome->distance, 2) ?> miles away
                                    <a href="<?= $careHome->getKey() ?>">Find out more</a>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="sidebar">
                <div class="map-container">
                    <div id="careHomeMap"
                         class="map"
                         data-id="<?= $careHome->getId() ?>"
                         data-lat="<?= $careHome->getLat() ?>"
                         data-lon="<?= $careHome->getLon() ?>">
                    </div>
                    <div class="address">
                        <h2>How to find us</h2>
                        <?= $careHome->getTitle() ?>
                        <?= $careHome->getAddress() ?>
                        <?= $careHome->getPostcode() ?>

                        <a href="<?= $googleMapsUrl ?>" target="_blank">Find us</a>
                    </div>
                </div>

                <div class="sidebar__buttons get-in-touch">
                    <a href="/contact-us?carehome=<?= $careHome->getId() ?>" alt="Get in touch with us">
                        Get in touch
                    </a>
                </div>

                <?= $this->inc(Document_Snippet::getByPath('/snippets/request-brochure')); ?>

                <?= $this->inc(Document_Snippet::getByPath('/snippets/vacancies')); ?>

                <?= $this->inc(Document_Snippet::getByPath('/snippets/news-and-events')); ?>

                <?php if (null !== $recommendation): ?>
                    <div class="sidebar__panel">
                        <div class="sidebar__panel--recommendation">
                            <div class="sidebar__panel--recommendation-image"></div>
                            <div class="sidebar__panel--content full-width-panel heightMatch">
                                <h3><?= $recommendation['title']; ?></h3>
                                <small><?= $recommendation['pubDate']; ?> by <?= $recommendation['author']; ?></small>
                                <p><?= $recommendation['description']; ?></p>
                                <a href="<?= $recommendation['link']; ?>" target="_blank">
                                    Continue reading
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
</div>
