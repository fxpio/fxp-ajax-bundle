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
use Fxp\Bundle\AjaxBundle\DependencyInjection\Configuration;
use Symfony\Component\Config\Definition\Processor;

/**
 * Tests case for Configuration.
 *
 * @author François Pluchino <francois.pluchino@gmail.com>
 */
class ConfigurationTest extends TestCase
{
    public function testDefaultConfig()
    {
        $processor = new Processor();
        $config = $processor->processConfiguration(new Configuration(), [[]]);

        $this->assertEquals(
                array_merge([], self::getBundleDefaultConfig()),
                $config
        );
    }

    protected static function getBundleDefaultConfig()
    {
        return [
            'ajax_id_parameter' => 'ajax_id',
        ];
    }
}
