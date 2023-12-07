<?php

namespace Foo {
    interface InterfaceFoo {}
}

namespace Bar {
    new class implements \Foo\InterfaceFoo {};
}

namespace {
    foreach (get_declared_classes() as $class) {
        if (!str_contains($class, '@anonymous')) {
            continue;
        }
        echo 'Class: ', $class, PHP_EOL;
        echo 'Namespace: ', (new ReflectionClass($class))->getNamespaceName(), PHP_EOL;
    }
}
