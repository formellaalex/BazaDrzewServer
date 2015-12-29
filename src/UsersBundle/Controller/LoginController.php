<?php

namespace UsersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use drzewaDbBundle\Entity\Users;
use \DateTime;
use \DateInterval;
class LoginController extends Controller
{
	
	public function signInAction(){

		$response = new Response();
		if (isset($_SERVER['PHP_AUTH_USER'])) {
		    $isUser = $this->findUserByLogPassw($_SERVER['PHP_AUTH_USER'],sha1($_SERVER['PHP_AUTH_PW']));
			if($isUser){
				$token = $this->tokenGen(15);
				$response->headers->set('token',$token);

				$this->addToken($token,$isUser->getIdusers());
				$response->setStatusCode(200);
				return $response;
			}
		}
		else{
			
			header('WWW-Authenticate: Basic realm="BasicAuth"');
		}
		$response->setStatusCode(401);
		return $response;
		
	}

	public function checkTokenAction(Request $request){
		$response = new Response();
		if($this->get('TokenAuthService')->checkUser($request->headers->get('token'))){
			$response->setStatusCode(200);
			return $response;
		}
		
		$response->setStatusCode(401);
		return $response;
	}
	
	public function signOutAction(){
		
		return new Response("Wylogowano");
	}


	private function tokenGen($length)
	{
		$keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $str = '';
	    $max = mb_strlen($keyspace, '8bit') - 1;
	    for ($i = 0; $i < $length; ++$i) {
	        $str .= $keyspace[rand(0, $max)];
	    }
	    return $str;
	}

	private function addToken($token, $id){
		$date = new DateTime();
		$date->add(new DateInterval("P1D"));
		$user = new Users();
		$user = $this->getDoctrine()
        ->getRepository('drzewaDbBundle:Users')
        ->findOneBy(array('idusers' => $id));
		$user->setToken($token);	
		$user->setTokenExpire($date);	
		$entityManager = $this->getDoctrine()->getManager();
		$entityManager->merge($user);
		$entityManager->flush();
	}

	private function findUserByLogPassw($login, $passw){
		return $this->getDoctrine()
                ->getRepository('drzewaDbBundle:Users')
                ->findOneBy(array('login' => $login, 'upassword' => $passw));
	}
}
