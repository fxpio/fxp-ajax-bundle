<?php

/*
 * This file is part of the Fxp package.
 *
 * (c) François Pluchino <francois.pluchino@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fxp\Bundle\AjaxBundle\Tests\DependencyInjection;

use PHPUnit\Framework\TestCase;
use Fxp\Bundle\AjaxBundle\DependencyInjection\FxpAjaxExtension;
use Fxp\Bundle\AjaxBundle\FxpAjaxBundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * Tests case for Extension.
 *
 * @author François Pluchino <francois.pluchino@gmail.com>
 */
class FxpAjaxExtensionTest extends TestCase
{
    public function testExtensionExist()
    {
        $container = $this->createContainer();

        $this->assertTrue($container->hasExtension('fxp_ajax'));
    }

    public function testExtensionLoader()
    {
        $container = $this->createContainer();

        $this->assertTrue($container->hasDefinition('fxp_ajax.event_subscriber'));
    }

    protected function createContainer()
    {
        $configs = [];
        $container = new ContainerBuilder();

        $bundle = new FxpAjaxBundle();
        $bundle->build($container);

        $extension = new FxpAjaxExtension();
        $container->registerExtension($extension);
        $extension->load($configs, $container);

        $container->getCompilerPassConfig()->setOptimizationPasses([]);
        $container->getCompilerPassConfig()->setRemovingPasses([]);
        $container->compile();

        return $container;
    }
}
