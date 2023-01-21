<?php

namespace ContainerXjtPMnW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EKooU3WService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.EKooU3W' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.EKooU3W'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'recipeRepository' => ['privates', 'App\\Repository\\RecipeRepository', 'getRecipeRepositoryService', true],
        ], [
            'recipeRepository' => 'App\\Repository\\RecipeRepository',
        ]);
    }
}
