<?php
namespace AppBundle\Listener;

use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpFoundation\Response;

class MaintenanceListener {
	
	private $actif;
	private $templating;
	
	public function __construct($actif,$templating){
		$this->actif=$actif;
		$this->templating=$templating;	
	}
	
	public function onKernelResponse(FilterResponseEvent $event){
		if(!$event->isMasterRequest()){
			return;
		}
		
		if ($this->actif){
			$response=$this->modeMaintenance($event->getResponse());
			$event->setResponse($response);
		}
		return;
	}
	
	protected function modeMaintenance(Response $response){
		$content=$this->templating->render('blog/maintenance.html.twig');
		$response->setContent($content);
		return $response;
	}
}