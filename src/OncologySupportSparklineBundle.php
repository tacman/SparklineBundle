<?php

namespace OncologySupport\Sparkline;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class SparklineBundle.
 *
 * @author Ernest Hymel
 */
class OncologySupportSparklineBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
