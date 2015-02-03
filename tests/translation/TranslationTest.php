<?php

use Symfony\Component\Translation\Translator;
use Symfony\Component\Translation\MessageSelector;
use Symfony\Component\Translation\Loader\ArrayLoader;


class TranslationTest extends PHPUnit_Framework_TestCase
{

    function testTranslations()
    {
        $translator = new Translator('en_UK', new MessageSelector());
        $translator->addLoader('array', new ArrayLoader());
        $translator->addResource('array', array(
            'test.key' => 'Test key',
        ), 'en_UK');

        $this->assertEquals('Test key', $translator->trans('test.key'));

    }

}