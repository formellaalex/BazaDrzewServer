<?php

namespace Services;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;


class JSONSerializerService {
	
	public function getSerializer(){
		return new Serializer(array(new GetSetMethodNormalizer()), array('json' => new JsonEncoder()));
	}

}