<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKONBxOP\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKONBxOP/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKONBxOP.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKONBxOP\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerKONBxOP\App_KernelDevDebugContainer([
    'container.build_hash' => 'KONBxOP',
    'container.build_id' => '68a570fe',
    'container.build_time' => 1610465764,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKONBxOP');
