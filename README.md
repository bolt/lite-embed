# Lite Embed Extension

Author: Dennis Meiderwijk, Bob den Otter

A lightweight extension to display Youtube and Vimeo embeds.

Installation:

```bash
composer require bolt/lite-embed
```

After installation, in your twig file, you can use the `{{ lite_embed() }}` function to add your Youtube and Vimeo links

`{{ lite_embed('https://www.youtube.com/watch?v=dQw4w9WgXcQ') }}`

`{{ lite_embed('https://vimeo.com/10551329') }}`

A special thanks to [luwes](https://github.com/luwes) for his [lite-vimeo-embed](https://github.com/luwes/lite-vimeo-embed) and 
[paulirish](https://github.com/paulirish) for his [lite-youtube-embed](https://github.com/paulirish/lite-youtube-embed) 

## Running PHPStan and Easy Codings Standard

First, make sure dependencies are installed:

```
COMPOSER_MEMORY_LIMIT=-1 composer update
```

And then run ECS:

```
vendor/bin/ecs check src
```
