<?php

use Jason\TestCase;

class ExampleTest extends TestCase
{
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
