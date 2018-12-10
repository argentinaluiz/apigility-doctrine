<?php
 return [
 	'doctrine' => [
         'driver' => [
             'Super_driver' => [
                 'class' => \Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
                 'cache' => 'array',
                 'paths' => [
                     './module/teste/src/V1/Entity',
                 ],
             ],
             'orm_default' => [
                 'drivers' => [
                     'Super' => 'Super_driver',
                 ],
             ],
         ],
     ],
];