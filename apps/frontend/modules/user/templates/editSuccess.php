<h1>Editar Perfil</h1>

<?php echo $form->renderFormTag(url_for('user/update'), array('name' => 'edit')); ?>
  <table>
    <?php echo $form;?>
  </table>

  <input type="submit" name="edit" value="Guardar" />
 </form>
