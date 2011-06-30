<fb:login-button perms="email"></fb:login-button>

<h1>Registrar</h1>

<?php echo $form->renderFormTag(url_for('user/register'), array('name' => 'signup')); ?>
  <table>
    <?php echo $form;?>
  </table>

  <input type="submit" name="register" value="Registrar" />
 </form>
