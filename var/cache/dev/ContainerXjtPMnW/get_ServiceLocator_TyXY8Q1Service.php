<?php

namespace ContainerXjtPMnW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TyXY8Q1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.tyXY8Q1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.tyXY8Q1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'repository' => ['privates', 'App\\Repository\\IngredientRepository', 'getIngredientRepositoryService', true],
        ], [
            'paginator' => '?',
            'repository' => 'App\\Repository\\IngredientRepository',
        ]);
    }
}
