<?php

/**
 * distritos actions.
 *
 * @package    base_de_datos
 * @subpackage distritos
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class distritosActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->distritoss = Doctrine_Core::getTable('Distritos')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->distritos = Doctrine_Core::getTable('Distritos')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->distritos);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new DistritosForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new DistritosForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($distritos = Doctrine_Core::getTable('Distritos')->find(array($request->getParameter('id'))), sprintf('Object distritos does not exist (%s).', $request->getParameter('id')));
    $this->form = new DistritosForm($distritos);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($distritos = Doctrine_Core::getTable('Distritos')->find(array($request->getParameter('id'))), sprintf('Object distritos does not exist (%s).', $request->getParameter('id')));
    $this->form = new DistritosForm($distritos);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($distritos = Doctrine_Core::getTable('Distritos')->find(array($request->getParameter('id'))), sprintf('Object distritos does not exist (%s).', $request->getParameter('id')));
    $distritos->delete();

    $this->redirect('distritos/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $distritos = $form->save();

      $this->redirect('distritos/edit?id='.$distritos->getId());
    }
  }
}
