<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKQhtxgh\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKQhtxgh/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKQhtxgh.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKQhtxgh\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerKQhtxgh\App_KernelDevDebugContainer([
    'container.build_hash' => 'KQhtxgh',
    'container.build_id' => '5b33040f',
    'container.build_time' => 1678714307,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKQhtxgh');