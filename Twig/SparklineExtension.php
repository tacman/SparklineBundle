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
    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function getFunctions()
    {
        return array(
            new TwigFunction('sparkline', [$this, 'showSparkline']),
        );
    }

    public function getName()
    {
        return 'sparkline_extension';
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function showSparkline()
    {
        $this->container->get(Sparkline::class)->display();
    }
}
