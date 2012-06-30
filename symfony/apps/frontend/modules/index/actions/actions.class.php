<?php

/**
 * index actions.
 *
 * @package    sf_sandbox
 * @subpackage index
 * @author     SKiPP
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class indexActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $user = $this->getUser();
    if ($user->isAuthenticated())
    {
      return $this->redirect('/admin/backend.php/point');
    }

    $this->login_form = new sfGuardFormSignin();

    $this->registration_form = new sfGuardRegisterForm();
  }
}
