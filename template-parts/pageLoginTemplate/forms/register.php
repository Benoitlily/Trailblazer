<form action="<?php echo wp_registration_url(); ?>" method="post" class="u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 10px;">
        <div class="u-form-group u-form-name">
          <label for="username-a30d" class="u-label" name=""><?php _e( 'Username' ); ?></label>
          <input type="text" placeholder="<?php _e( 'Username' ); ?>" id="username-a30d" name="user_login" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required="">
        </div>
        <div class="u-form-group u-form-password">
          <label for="email-a30d" class="u-label" name=""><?php _e( 'Email' ); ?></label>
          <input type="text" placeholder="<?php _e( 'Email' ); ?>" id="email-a30d" name="user_email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required="">
        </div>
        
        <div class="u-align-left u-form-group u-form-submit">
          <a href="#" class="u-btn u-btn-submit u-button-style"><?php _e( 'Register' ); ?></a>
          <input type="submit" value="submit" class="u-form-control-hidden">
        </div>
      </form>
<?php
$pathToLinkTemplates = get_template_directory() . '/template-parts/' . $pageLogin_custom_template . '/links/';
if (file_exists($pathToLinkTemplates . 'login.php')) {
	include_once $pathToLinkTemplates . 'login.php';
}
if (file_exists($pathToLinkTemplates . 'register.php')) {
	include_once $pathToLinkTemplates . 'lostpassword.php';
}