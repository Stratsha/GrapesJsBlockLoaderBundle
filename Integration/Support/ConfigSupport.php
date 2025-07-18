<?php

declare(strict_types=1);

namespace MauticPlugin\GrapesJsBlockLoaderBundle\Integration\Support;

use Mautic\IntegrationsBundle\Integration\DefaultConfigFormTrait;
use Mautic\IntegrationsBundle\Integration\Interfaces\ConfigFormInterface;

class ConfigSupport extends GrapesJsBlockLoaderIntegration implements ConfigFormInterface
{
    use DefaultConfigFormTrait;
}
