<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGG51JcX\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGG51JcX/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGG51JcX.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGG51JcX\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerGG51JcX\App_KernelDevDebugContainer([
    'container.build_hash' => 'GG51JcX',
    'container.build_id' => 'bd576547',
    'container.build_time' => 1679248239,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGG51JcX');
