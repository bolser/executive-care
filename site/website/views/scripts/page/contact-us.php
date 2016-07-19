<?php
$contactUsOpeningTimes = $this->input("contact-us_opening_times");
$contactUsEnquiryHeader = $this->wysiwyg("contact-us-header");
?>
<div class="container">
    <div class="container__inner">
        <div class="contact-us">
            <div class="sidebar contact">
                <div class="contact-us__address">
                    <div class="contact-us__address__title">
                        Executive Care Homes
                    </div>
                    <div class="contact-us__telephone-numbers">
                        <?php while ($this->block("contentblock")->loop()) { ?>
                            <div class="contact-us__telephone-numbers--name">
                                <?= $this->input("homename", [
                                    'placeholder' => 'Home name',
                                ]); ?>
                            </div>
                            <div class="contact-us__telephone-numbers--number">
                                <?php if ($this->editmode): ?>
                                    <?= $this->input("homenumber", [
                                        'placeholder' => 'Telephone',
                                    ]); ?>

                                <?php else: ?>
                                    <a href="tel:<?= $this->input("homenumber")->text; ?>"><?= $this->input("homenumber")->text; ?></a>
                                <?php endif; ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="contact-us__left main">
                <ul class="tabs">
                    <li><a id="enquiry_tab" href='#enquiry'>Make an enquiry</a></li>
                    <li><a id="brochure_tab" href='#brochure'>Request a brochure</a></li>
                </ul>
                <div class="tab" id="enquiry">
                    <div class="contact-us__left__header">
                        <?= $contactUsEnquiryHeader; ?>
                    </div>
                    <form enctype="application/x-www-form-urlencoded" action="" method="post" id="enquiry_form">
                        <div class="tab__left field-wrap">
                            <?= $this->enquiryForm->enquiry_name ?>
                        </div>
                        <div class="tab__right field-wrap">
                            <?= $this->enquiryForm->enquiry_email ?>
                        </div>
                        <div class="tab__left field-wrap">
                            <?= $this->enquiryForm->enquiry_number ?>
                        </div>
                        <div class="tab__right field-wrap">
                            <?= $this->enquiryForm->enquiry_address ?>
                        </div>
                        <div class="tab__controls">
                            <div class="field-wrap">
                                <?= $this->enquiryForm->enquiry_message ?>
                            </div>
                            <?= $this->enquiryForm->enquiry_opt_in ?>
                            <label for="enquiry_opt_in">I would like to hear about the latest news and upcoming
                                events</label>
                            <br/>
                            <?= $this->enquiryForm->enquiry_send_brochure ?>
                            <label for="enquiry_send_brochure">I would like to receive a brochure through the
                                post</label>
                            <?= $this->enquiryForm->enquiry_submit ?>
                        </div>
                    </form>
                </div>
                <div class="tab" id="brochure">
                    <form enctype="application/x-www-form-urlencoded" action="" method="post" id="brochure_form">
                        <div class="tab__left select-wrap">
                            <?= $this->brochureForm->care_home_options ?>
                        </div>
                        <div class="tab__right select-wrap">
                            <?= $this->brochureForm->delivery_method_options ?>
                        </div>
                        <div class="tab__left field-wrap">
                            <?= $this->brochureForm->brochure_name ?>
                        </div>
                        <div class="tab__right field-wrap">
                            <?= $this->brochureForm->brochure_email ?>
                        </div>
                        <div class="tab__left field-wrap">
                            <?= $this->brochureForm->brochure_number ?>
                        </div>
                        <div class="tab__right field-wrap">
                            <?= $this->brochureForm->brochure_address ?>
                        </div>
                        <div class="tab__controls">
                            <div class="field-wrap">
                                <?= $this->brochureForm->brochure_message ?>
                            </div>
                            <?= $this->brochureForm->brochure_opt_in ?>
                            <label for="brochure_opt_in">I would like to hear about the latest news and upcoming
                                events</label>
                            <?= $this->brochureForm->brochure_submit ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>