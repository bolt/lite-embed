<?php


namespace App\LiteEmbed;


use Bolt\Widget\BaseWidget;
use Bolt\Widget\CacheAwareInterface;
use Bolt\Widget\CacheTrait;
use Bolt\Widget\Injector\AdditionalTarget;
use Bolt\Widget\Injector\RequestZone;
use Bolt\Widget\StopwatchAwareInterface;
use Bolt\Widget\StopwatchTrait;
use Bolt\Widget\TwigAwareInterface;

class LiteEmbedWidget extends BaseWidget implements TwigAwareInterface, CacheAwareInterface, StopwatchAwareInterface
{
    use CacheTrait;
    use StopwatchTrait;

    protected $name = 'Lite Embed Widget';
    protected $target = AdditionalTarget::END_OF_BODY;
    protected $priority = 200;
    protected $template = '@liteembed-extension/widget.html.twig';
    protected $zone = RequestZone::FRONTEND;
    protected $cacheDuration = -1800;
}