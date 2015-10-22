<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class SiteController extends AppController
{
	public function beforeFilter(Event $event)
	{
		parent::beforeFilter($event);
		$this->loadComponent('CBIR');
	}
	public function index()
    {

    }
}