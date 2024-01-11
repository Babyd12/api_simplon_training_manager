<?php

namespace Container8piwW5f;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_JsonSchema_TypeFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.json_schema.type_factory' shared service.
     *
     * @return \ApiPlatform\JsonSchema\TypeFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'JsonSchema'.\DIRECTORY_SEPARATOR.'TypeFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'JsonSchema'.\DIRECTORY_SEPARATOR.'TypeFactory.php';

        $container->privates['api_platform.json_schema.type_factory'] = $instance = new \ApiPlatform\JsonSchema\TypeFactory(($container->privates['api_platform.resource_class_resolver'] ?? self::getApiPlatform_ResourceClassResolverService($container)));

        $instance->setSchemaFactory(($container->privates['api_platform.hydra.json_schema.schema_factory'] ?? $container->load('getApiPlatform_Hydra_JsonSchema_SchemaFactoryService')));

        return $instance;
    }
}
