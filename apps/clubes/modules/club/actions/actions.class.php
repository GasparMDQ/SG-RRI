<?php

/**
 * club actions.
 *
 * @package    base_de_datos
 * @subpackage club
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class clubActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->clubess = Doctrine_Core::getTable('Clubes')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->clubes = Doctrine_Core::getTable('Clubes')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->clubes);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ClubesForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ClubesForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($clubes = Doctrine_Core::getTable('Clubes')->find(array($request->getParameter('id'))), sprintf('Object clubes does not exist (%s).', $request->getParameter('id')));
    $this->form = new ClubesForm($clubes);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($clubes = Doctrine_Core::getTable('Clubes')->find(array($request->getParameter('id'))), sprintf('Object clubes does not exist (%s).', $request->getParameter('id')));
    $this->form = new ClubesForm($clubes);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($clubes = Doctrine_Core::getTable('Clubes')->find(array($request->getParameter('id'))), sprintf('Object clubes does not exist (%s).', $request->getParameter('id')));
    $clubes->delete();

    $this->redirect('club/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $clubes = $form->save();

      $this->redirect('club/edit?id='.$clubes->getId());
    }
  }
}
