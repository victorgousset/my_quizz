<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKxx1QtJ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKxx1QtJ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKxx1QtJ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKxx1QtJ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerKxx1QtJ\App_KernelDevDebugContainer([
    'container.build_hash' => 'Kxx1QtJ',
    'container.build_id' => '0e4f25f7',
    'container.build_time' => 1587402172,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKxx1QtJ');