<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Lubakka\KeycloakAdmin\KeycloakAdminManager;

class KeycloakAdminManagerTest extends TestCase
{
    public function testHello(): void
    {
        $package = new KeycloakAdminManager();
        $this->assertEquals('Hello from KeycloakAdminManager!', $package->hallo());
    }
}