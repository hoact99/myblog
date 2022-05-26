<!DOCTYPE html>
<html lang="en">

<head>
    
    <?php $this->render('includes/meta'); ?>
    <?php $this->render('includes/style'); ?>

    <title><?= $title; ?></title>
    
</head>

<body>
    <div id="wrapper">

        <?php $this->render('partials/header'); ?>
        <!--/. NAV TOP  -->

        <?php $this->render('partials/sidebar'); ?>
        <!-- /. NAV SIDE  -->

        <div id="page-wrapper">
            <div id="page-inner">

            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">
                        <?= $title; ?>
                    </h1>
                </div>
            </div>

            <?php
                if (!empty($_SESSION['message'])) {
            ?>
            <div class="alert alert-success">
                <i class="fa fa-check"></i>
                <strong><?php echo $_SESSION['message']; ?></strong>
            </div>
            <?php
                    unset($_SESSION['message']);
                }
            ?>



                <?php $this->render($content, $sub_content); ?>

				<?php $this->render('partials/footer'); ?>

            </div>
            <!-- /. PAGE INNER  -->
            
        </div>
        <!-- /. PAGE WRAPPER  -->

    </div>
    <!-- /. WRAPPER  -->
    
    <?php $this->render('includes/script'); ?>

</body>

</html>