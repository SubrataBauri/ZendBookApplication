<?php

/* 
 * @author: Subrata Bauri
 */
     
namespace BookList;
    
class Module{
    public function gitAutoloaderConfig() {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespace' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
        
    public function gitConfig() {
        return include __DIR__ . '/config/module.config.php';
    }
}
