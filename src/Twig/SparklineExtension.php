<?php
namespace OncologySupport\Sparkline\Twig;

use Davaxi\Sparkline;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\ContainerInterface;
use Psr\Container\NotFoundExceptionInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class SparklineExtension extends AbstractExtension
{
    public function getFunctions(): array
    {
        return [
            new TwigFunction('sparkline', [$this, 'sparkline']),
        ];
    }

    public function sparkline(array $data, int $width = null, int $height = null): string
    {
        ob_start();
        $sparkline = new Sparkline();
        $sparkline->setData($data);
        if ($width) {
            $sparkline->setWidth($width);
        }
        if ($height) {
            $sparkline->setHeight($height);
        }

        $sparkline->display();
        $sparkline->destroy();
        return '<img src="data:image/png;base64,'.base64_encode(ob_get_clean()).'" alt="sparkline"/>';
    }
}
