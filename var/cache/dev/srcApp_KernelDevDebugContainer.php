<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCaQVIgg\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCaQVIgg/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCaQVIgg.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCaQVIgg\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerCaQVIgg\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'CaQVIgg',
    'container.build_id' => 'f163a5f5',
    'container.build_time' => 1588047804,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCaQVIgg');
