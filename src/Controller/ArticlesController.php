<?php
/**
 * Zend Backend (http://stepzero.solutions/)
 *
 * ArticlesController
 *
 * PHP version 5
 *
 * @category Module
 * @package  ZbeHome
 * @author   Don Nuwinda <nuwinda@gmail.com>
 * @license  GPL http://stepzero.solutions
 * @link     http://stepzero.solutions
 */
namespace ZbeHome\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Articles Controller Class
 *
 * @category Controller
 * @package  ZbeCore
 * @author   Don Nuwinda <nuwinda@gmail.com>
 * @license  GPL http://stepzero.solutions
 * @link     http://stepzero.solutions
 */
class ArticlesController extends AbstractActionController
{
    /**
    * Index action
    *
    * @return object
    */
    public function indexAction()
    {
        return new ViewModel();
    }
}
