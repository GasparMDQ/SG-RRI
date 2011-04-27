<?php

/**
 * aims actions.
 *
 * @package    base_de_datos
 * @subpackage aims
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class aimsActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->aimss = Doctrine_Core::getTable('Aims')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->aims = Doctrine_Core::getTable('Aims')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->aims);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new AimsForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new AimsForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($aims = Doctrine_Core::getTable('Aims')->find(array($request->getParameter('id'))), sprintf('Object aims does not exist (%s).', $request->getParameter('id')));
    $this->form = new AimsForm($aims);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($aims = Doctrine_Core::getTable('Aims')->find(array($request->getParameter('id'))), sprintf('Object aims does not exist (%s).', $request->getParameter('id')));
    $this->form = new AimsForm($aims);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($aims = Doctrine_Core::getTable('Aims')->find(array($request->getParameter('id'))), sprintf('Object aims does not exist (%s).', $request->getParameter('id')));
    $aims->delete();

    $this->redirect('aims/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $aims = $form->save();

      $this->redirect('aims/edit?id='.$aims->getId());
    }
  }
}
