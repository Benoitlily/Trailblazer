<!-- header styles -->

<?php
   $localFonts = apply_filters('get_local_fonts', '');
?>
<?php if ($localFonts) : ?> 
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/<?php echo $localFonts; ?>" media="screen" type="text/css" />
<?php else : ?>
   <?php endif; ?>
<link id="u-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
<style> .u-header {
  background-image: none;
}
.u-header .u-sheet-1 {
  min-height: 149px;
}
.u-header .u-btn-1 {
  border-style: none;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1px;
  background-image: none;
  margin: 79px 0 0 auto;
}
.u-header .u-image-1 {
  width: 64px;
  height: 39px;
  margin: -39px auto 0 29px;
}
.u-header .u-logo-image-1 {
  width: 100%;
  height: 100%;
}
.u-header .u-menu-1 {
  margin: -37px auto 27px;
}
.u-header .u-nav-1 {
  font-size: 0.875rem;
  letter-spacing: 0px;
  font-weight: 600;
  text-transform: none;
}
.u-block-4fcd-19 {
  box-shadow: 2px 2px 8px 0 rgba(128,128,128,1);
}
.u-header .u-nav-2 {
  font-size: 1.25rem;
}
.u-block-4fcd-20 {
  box-shadow: 2px 2px 8px 0 rgba(128,128,128,1);
}
@media (max-width: 1199px) {
  .u-header .u-sheet-1 {
    min-height: 150px;
  }
  .u-header .u-btn-1 {
    margin-top: 32px;
    margin-right: auto;
    margin-left: 388px;
  }
  .u-header .u-image-1 {
    margin-top: 5px;
    margin-left: 0;
  }
  .u-header .u-menu-1 {
    width: auto;
    margin-top: -36px;
    margin-right: 29px;
    margin-bottom: 29px;
  }
}
@media (max-width: 991px) {
  .u-header .u-btn-1 {
    margin-top: 76px;
    margin-left: auto;
  }
  .u-header .u-image-1 {
    margin-top: -39px;
  }
}</style>
