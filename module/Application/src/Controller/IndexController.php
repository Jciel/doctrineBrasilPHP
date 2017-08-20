<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Application\Document\User;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    private $sm;

    function __construct($sm)
    {
        $this->sm = $sm;
    }

    public function indexAction()
    {
        $documentManager = $this->sm->get('doctrine.documentmanager.odm_default');

//        $newUser = new User();
//
//        $newUser->setNome("Jociel Souza");
//        $newUser->setEmail("teste@gmail.com");
//        $newUser->setIdade(25);
//
//        $documentManager->persist($newUser);
//        $documentManager->flush();


        $user = $documentManager->find(User::class, "5999fb484d1d3443c01cd4f1");

        var_dump($user);
        exit;

        return new ViewModel();
    }
}
