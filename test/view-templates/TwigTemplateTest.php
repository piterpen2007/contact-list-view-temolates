<?php

namespace EfTech\FrameworkTest\Infrastructure\ViewTemplate;

use EfTech\ContactList\Infrastructure\ViewTemplate\TwigTemplate;
use EfTech\ContactList\Infrastructure\ViewTemplate\ViewTemplateInterface;
use PHPUnit\Framework\TestCase;

class TwigTemplateTest extends TestCase
{
    /**
     * Тестирование рендеринга с помощью движка, использующего шаблонизатор twig
     *
     * @return void
     */
    public function testRender(): void
    {
        /** @var ViewTemplateInterface $viewTemplate */
        $viewTemplate = new TwigTemplate(__DIR__ . '/data/');

        $actualResult = $viewTemplate->render('simple.template.twig', ['userName' => 'Dan']);

        $this->assertEquals("Hello, Dan", $actualResult);
    }

}
