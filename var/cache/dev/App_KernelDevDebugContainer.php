<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXwP4YWv\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXwP4YWv/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXwP4YWv.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXwP4YWv\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXwP4YWv\App_KernelDevDebugContainer([
    'container.build_hash' => 'XwP4YWv',
    'container.build_id' => '9196a4d4',
    'container.build_time' => 1588265153,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXwP4YWv');
