<?php

namespace Services;
use drzewaDbBundle\Entity\Users;
use Doctrine\ORM\EntityManager;

class TokenAuthService{
	
	private $em;
	
	public function __construct(EntityManager $em){
		$this->em = $em;
	}
	
	public function checkUser($token){
		$user = new Users();
		$user = $this->em->getRepository('drzewaDbBundle:Users')->findOneBy(array('token' => $token));
		
		if($token && $user && $user->getTokenExpire() && $user->getTokenExpire()->
			format('Y-m-d H:i:s') > date('Y-m-d H:i:s', time())){
			return true;
		}
		return false;
	}
}