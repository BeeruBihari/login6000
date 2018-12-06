<?php $o__admin = new admin(); ?>
<?php $o__user = new user(); ?>
<?php $aa__dashBoardPagesCount = $o__admin->getAdminPages(); ?>
<?php //$aa__dashBoardUserCount = $o__user->getUserDetailsByType('Newusercount');                                         ?>
<?php //$aa__dashBoardCategoryCount = $o__admin->getAdminCategory();                                         ?>
<?php //$aa__dashBoardOurClientCount = $o__admin->getAdminOurClient();                                         ?>
<?php $aa__dashBoardLanguageCount = $o__admin->getAdminLanguage(); ?>
<?php $aa__dashBoardtherapistCount = $o__admin->getItems(); ?>
<?php $aa__dashBoardpageCount = $o__admin->getcountPage(); ?>

<?php $aa__dashBoardcategoryCount = $o__admin->getCategory(); ?>

<?php $aa__dashBoardbookingCount = $o__admin->getAdminBooking(); ?>
<?php $aa__dashBoardretailerCount = $o__admin->getAdminRetailer(); ?>
<?php $aa__dashBoardtherapyCount = $o__admin->getTotaltherapy(); ?>
<?php $aa__dashBoardinvoiceCount = $o__admin->getTotalInvoices(); ?>
<?php $aa__dashBoardquatationCount = $o__admin->getTotalQuataions(); ?>

<?php $aa__dashBoardsTockCount = $o__admin->getThirdpartyStock(); ?>
<?php $aa__dashBoardsliderCount = $o__admin->getAdminSlider(); ?>
<?php $aa__dashBoardagentCount = $o__admin->getAgentRes(); ?>
<?php $aa__dashBoardtransaction = $o__admin->getAdminTransaction(); ?>
<?php $aa__dashBoardraw = $o__admin->getAdmindraw(); ?>
<?php $aa__dashBoardFaqCount = $o__admin->getAdminFaq(); ?>
<?php $aa__dashBoardTestimonialCount = $o__admin->getAdminTestimonial(); ?>
<?php $aa__dashBoardOrderCount = $o__admin->getAdminOrder(); ?>
<?php $aa__dashBoardSettingsCount = $o__admin->getAdminSettings(); ?>
<?php $aa__dashBoardpackageCount = $o__admin->getAdminPackage(); ?>

<?php $aa__booking = $o__admin->getBooking(); ?>

<div class="dash_board_top_menu">
    <div class="row-fluid">

        <div class="span2">
            <a href="index.php?action=pageview" title="<?php echo $aa__dashBoardpageCount->countpage; ?> <?php echo (($aa__dashBoardpageCount->countpage > 1) ? "Page" : "Pages"); ?>">
                <em><?php echo $aa__dashBoardpageCount->countpage; ?></em>
                <strong><?php echo (($aa__dashBoardpageCount->countpage > 1) ? "Page" : "Pages"); ?></strong>
            </a>
            <a href="index.php?action=pageadd" title="<?php echo $aa__dashBoardpageCount->countpage; ?> <?php echo (($aa__dashBoardpageCount->countpage > 1) ? "Page" : "Pages"); ?>" />
            Add    
            </a><br>
            <a href="index.php?action=pageview" title="<?php echo $aa__dashBoardpageCount->countpage; ?> <?php echo (($aa__dashBoardpageCount->countpage > 1) ? "Page" : "Pages"); ?>" />
            View    
            </a>

        </div>

        <div class="span2">
            <a href="index.php?action=itemview" title="<?php echo $aa__dashBoardtherapistCount->countitem; ?> <?php echo (($aa__dashBoardCatCount->countitem > 1) ? "Item" : "Items"); ?>">
                <em><?php echo $aa__dashBoardtherapistCount->countitem; ?></em>
                <strong><?php echo (($aa__dashBoardtherapistCount->countitem > 1) ? "Item" : "Items"); ?></strong>
            </a>
            <a href="index.php?action=itemadd" title="<?php echo $aa__dashBoardmemberCount->countitem; ?> <?php echo (($aa__dashBoardmemberCount->countitem > 1) ? "Item" : "Items"); ?>" />
            Add    
            </a><br>
            <a href="index.php?action=itemview" title="<?php echo $aa__dashBoardmemberCount->countitem; ?> <?php echo (($aa__dashBoardmemberCount->countitem > 1) ? "Item" : "Items"); ?>" />
            View    
            </a>

        </div>
       
        <div class="span2">
            <a href="index.php?action=clientview" title="<?php echo $aa__dashBoardtherapistCount->countitem; ?> <?php echo (($aa__dashBoardCatCount->countitem > 1) ? "Client" : "Clients"); ?>">
                <em><?php echo $aa__dashBoardtherapistCount->countitem; ?></em>
                <strong><?php echo (($aa__dashBoardtherapistCount->countitem > 1) ? "Client" : "Clients"); ?></strong>
            </a>
            <a href="index.php?action=clientadd" title="<?php echo $aa__dashBoardmemberCount->countitem; ?> <?php echo (($aa__dashBoardmemberCount->countitem > 1) ? "Client" : "Clients"); ?>" />
            Add    
            </a><br>
            <a href="index.php?action=clientview" title="<?php echo $aa__dashBoardmemberCount->countitem; ?> <?php echo (($aa__dashBoardmemberCount->countitem > 1) ? "Client" : "Clients"); ?>" />
            View    
            </a>

        </div>
        
        <div class="span2">
            <a href="index.php?action=categoryview" title="<?php echo $aa__dashBoardcategoryCount->countitem; ?> <?php echo (($aa__dashBoardCatCount->countitem > 1) ? "Category" : "Category"); ?>">
                <em><?php echo $aa__dashBoardcategoryCount->countcategory; ?></em>
                <strong><?php echo (($aa__dashBoardtherapistCount->countitem > 1) ? "Category" : "Category"); ?></strong>
            </a>
            <a href="index.php?action=categoryadd" title="<?php echo $aa__dashBoardmemberCount->countitem; ?> <?php echo (($aa__dashBoardmemberCount->countitem > 1) ? "Category" : "Category"); ?>" />
            Add    
            </a><br>
            <a href="index.php?action=categoryview" title="<?php echo $aa__dashBoardmemberCount->countitem; ?> <?php echo (($aa__dashBoardmemberCount->countitem > 1) ? "Category" : "Category"); ?>" />
            View    
            </a>

        </div>
       
        
         
       
       
  


        <?php /*  <div class="span2">
          <a href="index.php?action=categoryview" title="<?php echo $aa__dashBoardCategoryCount->countCategory; ?> <?php echo (($aa__dashBoardCategoryCount->countCategory > 1) ? "Categories" : "Category"); ?>" />
          <i><img src="<?php echo Ficons; ?>/categories_tp_icon.png" alt="Categories" title="Categories" /></i>
          <em><?php echo $aa__dashBoardCategoryCount->countCategory; ?></em>
          <strong><?php echo (($aa__dashBoardCategoryCount->countCategory > 1) ? "Categories" : "Category"); ?></strong>
          </a>
          </div> */ ?>


        <?php /* <div class="span2">
          <a href="index.php?action=ourclientview" title="<?php echo $aa__dashBoardOurClientCount->countOurClient; ?> <?php echo (($aa__dashBoardOurClientCount->countOurClient > 1) ? "Our Clients" : "Our Client"); ?>" />
          <i><img src="<?php echo Ficons; ?>/client_module.png" alt="Our Client" title="Our Clients" /></i>
          <em><?php echo $aa__dashBoardOurClientCount->countOurClient; ?></em>
          <strong><?php echo (($aa__dashBoardOurClientCount->countOurClient > 1) ? "Our Clients" : "Our Client"); ?></strong>
          </a>
          </div> */ ?>




    </div>
</div>
<?php unset($aa__dashBoardPagesCount, $aa__dashBoardUserCount, $aa__dashBoardProductCount, $aa__dashBoardFaqCount, $aa__dashBoardTestimonialCount, $aa__dashBoardSettingsCount); ?>