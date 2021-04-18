<?php
declare(strict_types=1);


namespace App\Controller\Admin;

use Cake\Controller\Controller;


class AppController extends Controller
{
    
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        //loading auth component
        $this->loadComponent('Auth');
        //allow method in auth component
        $this->Auth->allow(['login']);

        $this->set('username',$this->Auth->user('username'));

        /*
         * Enable the following component for recommended CakePHP form protection settings.
         * see https://book.cakephp.org/4/en/controllers/components/form-protection.html
         */
        //$this->loadComponent('FormProtection');
    }
}
