<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerB8jehvc\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerB8jehvc/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerB8jehvc.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerB8jehvc\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerB8jehvc\appProdProjectContainer([
    'container.build_hash' => 'B8jehvc',
    'container.build_id' => '0305fa60',
    'container.build_time' => 1622750622,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerB8jehvc');