<?php


namespace App\LiteEmbed;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class LiteEmbed extends AbstractExtension
{
    public function getFunctions(): array
    {
        $safe = [
            'is_safe' => ['html'],
        ];

        return [
            new TwigFunction('lite_embed', [$this, 'liteEmbed'], $safe),
        ];
    }

    public function liteEmbed(string $link): ?string
    {
        $id = $this->getYoutubeId($link);
        if ($id) {
            return $this->youtubeEmbed($id);
        }

        $id = $this->getVimeoId($link);
        if ($id) {
            return $this->liteVimeoEmbed($id);
        }

        return null;
    }

    public function getYoutubeId(string $link): ?string
    {
        preg_match_all('/^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#&?]*).*/', $link, $matches);
        if (!empty($matches[7])) {
            return $matches[7][0];
        }
        return null;
    }

    public function youtubeEmbed(string $id): string
    {
        return sprintf('<lite-youtube videoid="%s"></lite-youtube>', $id);
    }

    public function getVimeoId(string $link): ?string
    {
        preg_match_all('/(http|https)?:\/\/(www\.|player\.)?vimeo\.com\/(?:channels\/(?:\w+\/)?|groups\/([^\/]*)\/videos\/|video\/|)(\d+)(?:|\/\?)/', $link, $matches);
        if (!empty($matches[4])) {
            return $matches[4][0];
        }
        return null;
    }

    public function liteVimeoEmbed(string $id): string
    {
        return sprintf('<lite-vimeo videoid="%s"></lite-vimeo>', $id);
    }
}