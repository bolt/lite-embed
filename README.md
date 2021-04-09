# Lite Embed Extension

Author: Dennis Meiderwijk, Bob den Otter

[Todo]

Installation:

```bash
composer require bolt/lite-embed
```


## Running PHPStan and Easy Codings Standard

First, make sure dependencies are installed:

```
COMPOSER_MEMORY_LIMIT=-1 composer update
```

And then run ECS:

```
vendor/bin/ecs check src
```
