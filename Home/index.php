
<?php require_once 'header.php'?>

<section class="Main">
        <div class="container">
            <div class="row">
                <?php include_once (__DIR__ .'/../Home/leftnav.php');?>
                <section class="col-9" id="right">
                    <?php include_once 'slidebar.php'; ?>
                    <?php include_once 'sanphamt11.php';  ?>    
            </div>
            <div class="main-p">
                <?php include_once 'pcbanchay.php'; ?>
            </div>
            <div class="main-product">
                <?php include_once 'uudailaptop.php'; ?>
            </div>
            <div class="main-product">
              <?php include_once 'manhinhkhuyenmai.php';?>
            </div>

            <div class="main-product">
                <?php include_once 'pc-workstation.php'; ?>
    
            <div class="main-product">
                <?php include_once (__DIR__ .'/../Home/banphimgamin.php'); ?>
            </div>
            <div class="main-product">
                <?php include_once 'chuotgaming.php'; ?>
            </div>
            <hr>
            <div class="row" id="selling">
                <?php include_once 'emailenter.php'; ?>
            </div>

            </div>  
        </div>
</section>
    <!------End-Main-->
<?php include_once 'footer.php' ?>