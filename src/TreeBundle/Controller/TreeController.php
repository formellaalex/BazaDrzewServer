<?php

namespace TreeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use drzewaDbBundle\Entity\TreeObjects;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class TreeController extends Controller
{
	
	public function indexAction($name)
	{
		return $this->render('TreeBundle:Default:index.html.twig', array('name' => $name));
	}

	public function testAction(){
		print_r(getallheaders());
		print_r(headers_list());
		print_r($_GET);
		echo file_get_contents("php://input");
	}
	
	
	public function getTreesAction(Request $request){
		$response = new Response();
		//if($this->get('TokenAuthService')->checkUser($request->headers->get('token'))){
			//$trees = new TreeObjects();
			$em = $this->getDoctrine()->getManager();
			$qb = $em->createQueryBuilder();
			$repository = $this->getDoctrine()
			->getRepository('drzewaDbBundle:TreeObjects');
			// ->findAll();
			$query = $qb->select('u.nameLatin, u.namePolish, u.city, u.adddate')->from('drzewaDbBundle:TreeObjects', 'u')->getQuery();
		    $trees = $query->getResult();
			$json= $this->get('JSONSerializerService')->getSerializer()->serialize($trees, 'json');
			$response->setStatusCode(200);
			$response->setContent($json);
			return $response;
		// }
		// $response->setStatusCode(401);
		// return $response;
		
	}
	
	
	public function getTreeAction($id, Request $request){
		$response = new Response();
		if($this->get('TokenAuthService')->checkUser($request->headers->get('token'))){
			$tree = new TreeObjects();
			$tree = $this->getDoctrine()->getRepository('drzewaDbBundle:TreeObjects')->find($id);
			$json= $this->get('JSONserializerService')->getSerializer()->serialize($tree, 'json');
			$response->setStatusCode(200);
			$response->setContent($json);
			return $response;
		}
		$response->setStatusCode(401);
		return $response;
			
	}
	
	public function addTreeAction(Request $request){
		$response = new Response();
		if($this->get('TokenAuthService')->checkUser($request->headers->get('token'))){
			
			$tree = new TreeObjects();
			//$params = json_decode($content, true); 
			$tree->setLocationLatitude($request->get('lat'));
			$tree->setLocationLongitude($request->get('lon'));
			$tree->setNameLatin($request->get('name_latin'));
			$tree->setNamePolish($request->get('name_polish'));
			$tree->setAdddate(new \DateTime($request->get('add_date')));
			//$tree->setAktualizacja($request->get('aktualizacja'));
			$log = new Logger('name');
			$log->pushHandler(new StreamHandler('your.log', Logger::WARNING));

			// add records to the log
			$log->addWarning($request->getContent());
			$em = $this->getDoctrine()->getManager();
			try{
				$em->persist($tree);
				
				$em->flush();
				$response->setStatusCode(200);

			}
			catch(Exception $ex){

				$response->setStatusCode(500);
			}
		}
		$response->setStatusCode(401);
		return $response;
		
	}

	public function deleteTreeAction($id){
		$response = new Response();
		if($this->get('TokenAuthService')->checkUser($request->headers->get('token'))){
			$tree = new TreeObjects();
			$tree = $this->getDoctrine()->getRepository('drzewaDbBundle:TreeObjects')->find($id);
			$em = $this->getDoctrine()->getManager();
			try{
				$em->remove($tree);
				$em->flush();
				$response->setStatusCode(200);

			}
			catch(Exception $ex){

				$response->setStatusCode(500);
			}
			return $response;
		}
		$response->setStatusCode(401);
		return $reponse;
	}

	public function updateTreeAction($id){
		$response = new Response();
		if($this->get('TokenAuthService')->checkUser($request->headers->get('token'))){
			$tree = new TreeObjects();
			$tree = $this->getDoctrine()->getRepository('drzewaDbBundle:TreeObjects')->find($id);
			$em = $this->getDoctrine()->getManager();
			try{
				$em->persist($tree);
				$em->flush();
				$response->setStatusCode(200);

			}
			catch(Exception $ex){

				$response->setStatusCode(500);
			}
			return $response;
		}
		$response->setStatusCode(401);
		return $response;
	}

}
