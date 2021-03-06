<?php 
    $applicationFormPDF     = Asset::getById(25);
     $headerImage           = $this->image("careers_header");
?>

<?php if ($this->editmode): ?>
    <p>Place main header image here</p>
    <?= $headerImage ?>
<?php else : ?>
    <div class="careers__header" style="background-image: url('<?= $headerImage->getThumbnail('header_images'); ?>');">-</div>
<?php endif; ?>

<div class="container">
    <div class="container__inner">
        <div class="careers">
            <div class="careers__left main">
                <div class="careers__left__content">
                    <div class="careers__left__content__title">
                        Current Vacancies
                    </div>
                    <div class="careers__left__content__box">
                        <div class="careers__left__content__box--row">
                            <div class="form-wrapper">
                                <h5>Search by postcode:</h5>
                                <form>
                                    <input type="text" name="postcode_search" id="postcode_search" placeholder="Enter postcode">
                                    <button class="search-submit" type="submit" role="button">Search</button>
                                </form>
                            </div>
                            <div class="form-wrapper">
                                <h5>Search by home:</h5>
                                <form>
                                    <select name="home_search" id="home_search">
                                        <option value="">Select</option>
                                        <option value="0">Abbeyvale Care Centre, Hartlepool</option>
                                        <option value="1">Ashwood Court, Sunderland</option>
                                    </select>
                                </form>
                            </div>
                            <div class="form-wrapper">
                                <h5>Search by vacancy:</h5>
                                <form>
                                    <select name="vacancy_search" id="vacancy_search">
                                        <option value="">Select</option>
                                        <option value="0">Abbeyvale Care Centre, Hartlepool</option>
                                        <option value="1">Ashwood Court, Sunderland</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                        <div class="careers__left__content__box--row">
                            <div class="careers__left__content__box--result">
                                <p>
                                    Cook<br />
                                    Craigend Gardens<br />
                                    30 hours, days - Permanent<br />
                                    Closing date: 00/00/00
                                </p>
                            </div>
                            <div class="careers__left__content__box--result">
                                <p>
                                    Cook<br />
                                    Craigend Gardens<br />
                                    30 hours, days - Permanent<br />
                                    Closing date: 00/00/00
                                </p>
                            </div>
                        </div>
                        <div class="careers__left__content__box--row">
                            <div class="careers__left__content__box--result">
                                <p>
                                    Cook<br />
                                    Craigend Gardens<br />
                                    30 hours, days - Permanent<br />
                                    Closing date: 00/00/00
                                </p>
                            </div>
                            <div class="careers__left__content__box--result">
                                <p>
                                    Cook<br />
                                    Craigend Gardens<br />
                                    30 hours, days - Permanent<br />
                                    Closing date: 00/00/00
                                </p>
                            </div>
                        </div>
                        <div class="careers__left__content__box--row-pagination">
                            <ul>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5...</a></li>
                                <li><a href="#">16</a></li>
                                <li><a href="#">></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar">
                <?= $this->inc(Document_Snippet::getByPath('/snippets/volunteer')); ?>
                
                <?= $this->inc(Document_Snippet::getByPath('/snippets/training')); ?>

                <?= $this->inc(Document_Snippet::getByPath('/snippets/apply-online')); ?>
                
                <?= $this->inc(Document_Snippet::getByPath('/snippets/download-form')); ?>

                <?= $this->inc(Document_Snippet::getByPath('/snippets/job-alerts')); ?>
            </div>
        </div>
    </div>
</div>