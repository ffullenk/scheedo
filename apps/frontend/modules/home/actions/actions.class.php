<?php

/**
 * home actions.
 *
 * @package    scheedo
 * @subpackage home
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class homeActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
     $class = sfConfig::get('app_sf_guard_plugin_signin_form', 'sfGuardFormSignin');
	 $this->form = new $class();
  }
}
