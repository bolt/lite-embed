# Lite Embed Extension

Author: Dennis Meiderwijk, Bob den Otter

A lightweight extension to display Youtube and Vimeo embeds.

Installation:

```bash
composer require bolt/lite-embed
```

After installation, in your twig file, you can do:

{example link)

`{{ lite_embed('https://www.youtube.com/watch?v=dQw4w9WgXcQ') }}`

or

{example link)

`{{ lite_embed('https://vimeo.com/10551329') }}`


## Running PHPStan and Easy Codings Standard

First, make sure dependencies are installed:

```
COMPOSER_MEMORY_LIMIT=-1 composer update
```

And then run ECS:

```
vendor/bin/ecs check src
```
