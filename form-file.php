<h1>Мои настройки</h1>

<form method="post" action="options.php">  
	
  <?php settings_fields( 'my-settings-group' ); ?>
  <?php do_settings_sections( 'my-settings-group' ); ?>

  <!-- <div class="nav-tab-wrapper">
    <a href="#" class="nav-tab">Test1</a>
    <a href="#" class="nav-tab">Тест 22</a>
  </div> -->
  <table class="form-table">
    <tr valign="top">
    <th scope="row">Ссылка на Facebook</th>
    <td><input type="text" name="facebook_link" value="<?php echo esc_attr( get_option('facebook_link') ); ?>" /></td>
    </tr>
       
    <tr valign="top">
    <th scope="row">Ссылка на Instagram</th>
    <td><input type="text" name="instagram_link" value="<?php echo esc_attr( get_option('instagram_link') ); ?>" /></td>
    </tr>

    <tr valign="top">
    <th scope="row">Код Google Analytics</th>
    <td><input type="text" name="google_analytics" value="<?php echo esc_attr( get_option('google_analytics') ); ?>" /></td>
    </tr>

  </table>
    <?php submit_button(); ?>
</form>