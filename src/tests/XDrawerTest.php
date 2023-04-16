<?php
use PHPUnit\Framework\TestCase;

require_once "classes/XDrawer.php";

final class XDrawerTest extends TestCase
{
    public function testDrawsXCorrectly(): void
    {
        $x_obj = ".*...*.\n..*.*..\n...*...\n..*.*..\n.*...*.\n";
        $this->assertEquals(
            $x_obj,
            XDrawer::get_object()
        );
    }
    public function testGetObjectReturnTypeIsString(): void
    {
        $this->assertIsString(
            XDrawer::get_object()
        );
    }
}