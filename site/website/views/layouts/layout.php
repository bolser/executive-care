<?php
$documentKey = ($this->document->getId() === 1) ? 'home' : $this->document->getKey();
?>
<!DOCTYPE html>
<html>
   <?php
      require('includes/head.php');
      $homePage = Document::getById(1);
   ?>
   <body>
      <header class="site-header">
         <div class="container">
            <div class="site-header__logo">
               <a href="<?= $homePage; ?>"><img src="/website/static/images/logos/executive-care-logo.png" alt="Executive Care" /></a>
            </div>
            <div class="site-header__contact">
               <div class="site-header__contact-details">
                  <div class="site-header__email">
                     <i class="site-header__contact-email-icon"></i>
                     <a href="mailto:<?= $this->config->infoemail; ?>"><?= $this->config->infoemail; ?></a>
                  </div>
               </div>
            </div>
         </div>
      </header>

      <nav class="site-navigation">
         <div class="container">
            <?php require('includes/nav.php'); ?>
         </div>
      </nav>

      <div class="site-content" id="<?= $documentKey ?>">
         <?= $this->layout()->content ?>
      </div>

      <footer class="site-footer">
         <div class="container">
            <?= $this->inc(Document_Snippet::getByPath('/snippets/footer')); ?>
         </div>
      </footer>
   </body>

   <?php require('includes/js.php'); ?>
   <?php require('includes/footer.php'); ?>
</html>
