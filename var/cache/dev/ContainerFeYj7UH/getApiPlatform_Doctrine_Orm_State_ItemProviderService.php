<?php

namespace ContainerFeYj7UH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Doctrine_Orm_State_ItemProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.doctrine.orm.state.item_provider' shared service.
     *
     * @return \ApiPlatform\Doctrine\Orm\State\ItemProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Common/State/LinksHandlerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Orm/State/LinksHandlerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Orm/State/ItemProvider.php';

        return $container->privates['api_platform.doctrine.orm.state.item_provider'] = new \ApiPlatform\Doctrine\Orm\State\ItemProvider(($container->privates['api_platform.metadata.resource.metadata_collection_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_MetadataCollectionFactory_CachedService()), ($container->services['doctrine'] ?? $container->getDoctrineService()), new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['api_platform.doctrine.orm.query_extension.eager_loading'] ?? $container->load('getApiPlatform_Doctrine_Orm_QueryExtension_EagerLoadingService'));
        }, 1));
    }
}
