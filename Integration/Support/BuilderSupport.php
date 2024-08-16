<?php

declare(strict_types=1);

namespace MauticPlugin\GrapesJsBlockLoaderBundle\Integration\Support;

use Mautic\IntegrationsBundle\Integration\Interfaces\BuilderInterface;
use MauticPlugin\GrapesJsBlockLoaderBundle\Integration\GrapesJsBlockLoaderIntegration;

class BuilderSupport extends GrapesJsBlockLoaderIntegration implements BuilderInterface
{
    /**
     * @var string[]
     */
    private array $featuresSupported = ['email', 'page'];

    public function isSupported(string $featureName): bool
    {
        return in_array($featureName, $this->featuresSupported);
    }
}
