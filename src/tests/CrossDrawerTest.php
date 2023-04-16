<?php
use PHPUnit\Framework\TestCase;

require_once "classes/CrossDrawer.php";

final class CrossDrawerTest extends TestCase
{
    public function testDrawsCrossCorrectly(): void
    {
        $cross = "...*...\n.*****.\n...*...\n...*...\n...*...\n";
        $this->assertEquals(
            $cross,
            CrossDrawer::get_object()
        );
    }
    public function testGetObjectReturnTypeIsString(): void
    {
        $this->assertIsString(
            CrossDrawer::get_object()
        );
    }
}