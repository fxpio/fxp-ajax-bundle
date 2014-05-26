<?php

/**
 * This file is part of the Sonatra package.
 *
 * (c) François Pluchino <francois.pluchino@sonatra.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonatra\Bundle\AjaxBundle\Tests\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Sonatra\Bundle\AjaxBundle\SonatraAjaxBundle;
use Sonatra\Bundle\AjaxBundle\DependencyInjection\SonatraAjaxExtension;

/**
 * Tests case for Extension.
 *
 * @author François Pluchino <francois.pluchino@sonatra.com>
 */
class SonatraAjaxExtensionTest extends \PHPUnit_Framework_TestCase
{
    public function testExtensionExist()
    {
        $container = $this->createContainer();

        $this->assertTrue($container->hasExtension('sonatra_ajax'));
    }

    public function testExtensionLoader()
    {
        $container = $this->createContainer();

        $this->assertTrue($container->hasDefinition('sonatra_ajax.event_subscriber'));
    }

    protected function createContainer()
    {
        $configs = array();
        $container = new ContainerBuilder();

        $bundle = new SonatraAjaxBundle();
        $bundle->build($container);

        $extension = new SonatraAjaxExtension();
        $container->registerExtension($extension);
        $extension->load($configs, $container);

        $container->getCompilerPassConfig()->setOptimizationPasses(array());
        $container->getCompilerPassConfig()->setRemovingPasses(array());
        $container->compile();

        return $container;
    }
}
