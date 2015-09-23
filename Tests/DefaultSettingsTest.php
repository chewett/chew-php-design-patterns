<?php

require_once '../src/DefaultSettings.php';

/**
 * Class DefaultSettingsTest
 * Simple test to ensure DefaultSettings works
 *
 * @author Christopher Hewett <chewett@hotmail.co.uk>
 */
class DefaultSettingsTest extends PHPUnit_Framework_TestCase {

    /**
     * Here we dont pass in the $options parameter, so it uses the default one array()
     */
    public function testNormalCase() {
        $text = DefaultSettings::returnHello("bob");
        $this->assertEquals("Hello bob", $text);
    }

    /**
     * Here we pass a single option in to override, It should only return Hello
     */
    public function testNoName() {
        $text = DefaultSettings::returnHello("bob", ["noName" => true]);
        $this->assertEquals("Hello", $text);
    }

    /**
     * Here we pass in a different option to see if that works
     */
    public function testOnlyName() {
        $text = DefaultSettings::returnHello("bob", ["noHello" => true]);
        $this->assertEquals("bob", $text);
    }

    /**
     * Here we pass in both options, both should be used and work
     */
    public function testReturnNothing() {
        $text = DefaultSettings::returnHello("bob", ["noName" => true, "noHello" => true]);
        $this->assertEquals("", $text);
    }

}
