<?php

/**
 * distritos actions.
 *
 * @package    Sistema de Gestion - Rotaract Rotary e Interact
 * @subpackage distritos
 * @author     Gaspar Zaragoza
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class distritosActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->distritos = Doctrine_Core::getTable('distritos')
      ->createQuery('a')
      ->addOrderBy('a.distrito ASC')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->distrito = Doctrine_Core::getTable('distritos')->find(array($request->getParameter('id')));
    
    $this->pager = new sfDoctrinePager(
        'Clubes',
        sfConfig::get('app_max_clubes_por_distrito')
    );
    $this->pager->setQuery($this->distrito->getClubesDistritoQuery());
    $this->pager->setPage($request->getParameter('page', 1));
    $this->pager->init();

    $this->forward404Unless($this->distrito);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new distritosForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new distritosForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($distritos = Doctrine_Core::getTable('distritos')->find(array($request->getParameter('id'))), sprintf('Object distritos does not exist (%s).', $request->getParameter('id')));
    $this->form = new distritosForm($distritos);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($distritos = Doctrine_Core::getTable('distritos')->find(array($request->getParameter('id'))), sprintf('Object distritos does not exist (%s).', $request->getParameter('id')));
    $this->form = new distritosForm($distritos);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($distritos = Doctrine_Core::getTable('distritos')->find(array($request->getParameter('id'))), sprintf('Object distritos does not exist (%s).', $request->getParameter('id')));
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
