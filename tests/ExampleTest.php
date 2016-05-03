<?php

use Jason\TestCase;

class ExampleTest extends TestCase
{
    protected function getJasonAddress()
    {
        return "http://localhost:4321";
    }

    protected function getBasePath()
    {
        return realpath(__DIR__ . "/../");
    }

    public function testHasNormalResponse()
    {
        $page = $this->visit("http://localhost:5432");

        $this->assertContains("hello world", $page->body);
    }

    public function testHasModifiedResponse()
    {
        $page = $this->visit("http://localhost:5432")->run("document.write('modified')");

        $this->assertContains("modified", $page->body);
    }
}
