<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view("includes/head"); ?>
</head>

<body class="menubar-left menubar-unfold menubar-light theme-primary">
<!--============= start main area -->

<!-- APP NAVBAR ==========-->
<?php $this->load->view("includes/navbar"); ?>
<!--========== END app navbar -->

<!-- APP ASIDE ==========-->
<?php $this->load->view("includes/aside"); ?>
<!--========== END app aside -->

<!-- navbar search -->
<?php $this->load->view("includes/navbar-search"); ?>

<!-- END navbar search -->

<!-- APP MAIN ==========-->
<main id="app-main" class="app-main">
    <div class="wrap">
        <section class="app-content">
         <?php $this->load->view("dashboard_v/content"); ?>
        </section><!-- #dash-content -->
    </div><!-- .wrap -->
    <!-- APP FOOTER -->
    <?php $this->load->view("includes/footer"); ?>
    <!-- /#app-footer -->
</main>
<!--========== END app main -->



<!-- SIDE PANEL -->
<?php $this->load->view("includes/right-aside"); ?>
<!-- /#side-panel -->

<?php $this->load->view("includes/include_script.php"); ?>
</body>
</html>