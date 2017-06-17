<?php
namespace HtLeagueOauthClientModuleTest;

use HtLeagueOauthClientModule\Module;

class ModuleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers \HtLeagueOauthClientModule\Module::getConfig
     * @covers \HtLeagueOauthClientModule\Module::getAutoloaderConfig
     */
    public function testConfigIsArray()
    {
        $module = new Module();
        $this->assertInternalType('array', $module->getConfig());
        $this->assertInternalType('array', $module->getAutoloaderConfig());
    }
}