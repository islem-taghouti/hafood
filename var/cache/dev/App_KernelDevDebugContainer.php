<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTaxlgZD\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTaxlgZD/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTaxlgZD.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTaxlgZD\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerTaxlgZD\App_KernelDevDebugContainer([
    'container.build_hash' => 'TaxlgZD',
    'container.build_id' => '831238f4',
    'container.build_time' => 1674303971,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTaxlgZD');
