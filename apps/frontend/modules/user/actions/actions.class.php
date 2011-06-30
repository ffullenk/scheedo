<?php

/**
 * user actions.
 *
 * @package    scheedo
 * @subpackage ffullenk
 * @author     ffullenk
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class userActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    //$this->forward('default', 'module');
  }
  public function executeEdit(sfWebRequest $request)
  {
     $this->forward404Unless($usuario = $this->getUser()->getProfile());
    $this->form = new EditUserProfileForm($usuario);
  }
    public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($usuarioProfile = $this->getUser()->getProfile());
    $this->form = new EditUserProfileForm($usuarioProfile);

    $this->processForm($request, $this->form);

    
  }
  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $usuario = $form->save();

      $this->redirect('@homepage');
    }
  }
  
  public function executeRegister(sfWebRequest $request)
  {
    if($this->getUser()->isAuthenticated())
    {
      $this->redirect('@homepage');
	  }
    else
    {
      $this->form = new RegisterForm();
      $params = $request->getParameter('signup');
      if($request->isMethod('post'))
      {
        $this->form->bind($params);
        if($this->form->isValid())
        {
          $this->form->save();
      
          $user = $this->form->getObject();
      
          //se crea la fila correspondiente al perfil del usuario
          $profile = $user->getProfile();
          //ademas se asigna por defecto el grupo de miembros (member) al 
          //usuario que se acaba de registrar
          $user->addGroupByName('usuario');
          $user->save();
      
          //auto login y redireccion al homepage
          $this->getUser()->signIn($this->form->getObject());
          $this->redirect('@homepage');
        }
      }
    }
}
}