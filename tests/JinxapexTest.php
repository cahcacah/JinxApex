<?php
/**
 * Tests for JinxApex
 */

use PHPUnit\Framework\TestCase;
use Jinxapex\Jinxapex;

class JinxapexTest extends TestCase {
    private Jinxapex $instance;

    protected function setUp(): void {
        $this->instance = new Jinxapex(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Jinxapex::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
