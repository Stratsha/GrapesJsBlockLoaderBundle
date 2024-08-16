<?php

declare(strict_types=1);

namespace MauticPlugin\GrapesJsBlockLoaderBundle\Integration;

use Mautic\IntegrationsBundle\Integration\BasicIntegration;
use Mautic\IntegrationsBundle\Integration\ConfigurationTrait;
use Mautic\IntegrationsBundle\Integration\Interfaces\BasicInterface;

class GrapesJsBlockLoaderIntegration extends BasicIntegration implements BasicInterface
{
    use ConfigurationTrait;

    public const NAME         = 'grapesjsblockloader';
    public const DISPLAY_NAME = 'GrapesJS Block Loader';

    public function getName(): string
    {
        return self::NAME;
    }

    public function getDisplayName(): string
    {
        return self::DISPLAY_NAME;
    }

    public function getIcon(): string
    {
        return 'plugins/GrapesJsBlockLoaderBundle/Assets/img/grapesjsbuilder.png';
    }
}
