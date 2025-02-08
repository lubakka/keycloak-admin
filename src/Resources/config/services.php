<?php declare(strict_types=1);

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Lubakka\KeycloakAdmin\KeycloakAdminManager;

return function (ContainerConfigurator $container) {
    $parameters = $container->parameters();
    $services = $container->services();

    $services
        ->set('keycloak_admin_manager', KeycloakAdminManager::class)
    ;
};