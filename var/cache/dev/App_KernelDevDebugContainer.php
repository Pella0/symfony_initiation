<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerATvuMkx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerATvuMkx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerATvuMkx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerATvuMkx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerATvuMkx\App_KernelDevDebugContainer([
    'container.build_hash' => 'ATvuMkx',
    'container.build_id' => '38af1ca4',
    'container.build_time' => 1650009488,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerATvuMkx');
