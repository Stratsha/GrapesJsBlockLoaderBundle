<?php

declare(strict_types=1);

use Mautic\CoreBundle\DependencyInjection\MauticCoreExtension;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return function (ContainerConfigurator $configurator): void {
    $services = $configurator->services()
        ->defaults()
        ->autowire()
        ->autoconfigure()
        ->public();

    $excludes = [
        'node_modules',
    ];

    $services->load('MauticPlugin\\GrapesJsBlockLoaderBundle\\', '../')
        ->exclude('../{'.implode(',', array_merge(MauticCoreExtension::DEFAULT_EXCLUDES, $excludes)).'}');
    
    // Basic definitions with name, display name and icon
    $services->alias('mautic.integration.grapesjsblockloader', MauticPlugin\GrapesJsBlockLoaderBundle\Integration\GrapesJsBlockLoaderIntegration::class);
    
    // Provides the form types to use for the configuration UI
    $services->alias('grapesjsblockloader.integration.configuration', MauticPlugin\GrapesJsBlockLoaderBundle\Integration\Support\ConfigSupport::class);
    
    // Tells Mautic what themes it should support when enabled
    $services->alias('grapesjsblockloader.integration.builder', MauticPlugin\GrapesJsBlockLoaderBundle\Integration\Support\BuilderSupport::class);
};
