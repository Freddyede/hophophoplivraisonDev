<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZxRx8iy\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZxRx8iy/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZxRx8iy.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZxRx8iy\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZxRx8iy\App_KernelDevDebugContainer([
    'container.build_hash' => 'ZxRx8iy',
    'container.build_id' => '72096943',
    'container.build_time' => 1610466023,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZxRx8iy');
