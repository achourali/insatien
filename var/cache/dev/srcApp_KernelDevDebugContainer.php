<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQJB2PHm\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQJB2PHm/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQJB2PHm.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQJB2PHm\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerQJB2PHm\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'QJB2PHm',
    'container.build_id' => 'd117a1c3',
    'container.build_time' => 1588548600,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQJB2PHm');
