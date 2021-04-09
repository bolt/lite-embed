<?php


namespace App\LiteEmbed;


use Bolt\Extension\BaseExtension;

class Extension extends BaseExtension
{
    public function getName(): string
    {
        return 'Lite Embed';
    }

    public function initialize(): void
    {
        $this->addWidget(new LiteEmbedWidget());

        $this->addTwigNamespace('liteembed-extension');
    }
}