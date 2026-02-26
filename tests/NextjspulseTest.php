<?php
/**
 * Tests for NextjsPulse
 */

use PHPUnit\Framework\TestCase;
use Nextjspulse\Nextjspulse;

class NextjspulseTest extends TestCase {
    private Nextjspulse $instance;

    protected function setUp(): void {
        $this->instance = new Nextjspulse(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nextjspulse::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
