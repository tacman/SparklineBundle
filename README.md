# SparklineBundle

`SparklineBundle` eases the use of the Davaxi/Sparkline php library in your Symfony application by
providing Twig extensions and PHP objects to do the heavy lifting. The bundle uses the 
[Sparkline libarary](https://github.com/davaxi/Sparkline).

## Documentation

## License

SparklineBundle is released under the MIT License. See the bundled [LICENSE](LICENSE) file for details.

## Installation

Applications that use Symfony Flex
----------------------------------

Open a command console, enter your project directory and execute:

```console
$ composer require oncology-support/sparkline-bundle
```

Applications that don't use Symfony Flex
----------------------------------------

### Step 1: Download the Bundle

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```console
$ composer require oncology-support/sparkline-bundle
```

### Step 2: Enable the Bundle

Then, enable the bundle by adding it to the list of registered bundles
in the `config/bundles.php` file of your project:

```php
// config/bundles.php

return [
    // ...
    OncologySupport\Sparkline\OncologySupportSparklineBundle::class => ['all' => true],
];
```

### Step 3: Use it!

This bundle allows you to insert a sparkline graph directly into your twig templates by
passing an array of values that will be inserted into a sparkline graph. Note the use of
the `|raw` pipe function! This is important.

```php
    {{ sparkline([2,3,10,8,23,14,9,12,0,0,14])|raw }}
```

This will generate a sparkline image like so:
<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAAAUCAYAAAAa2LrXAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAD40lEQVRYhdWYPUwbdxjGf5yIDxsOJ2BAjlWrHiJZFSRSJauDMxB3gsUZWqupUqSypQKlExnIyFDYUCoiFlhQqQpC9VDThagDng51AA9OvVS2bGpjPs7Gsg/MuQNgATEfNsQWv/Huf/o/99zz3vve1RUKhQI14kAr8OOfG4x8acIoCrWScS3qa7WxP5zFPRsFYC2u4v3WcitNrIliRdUY9CWQRAGXzUAgofL5238JJNRayLkWNTFwbHmLsLLPDw4j4z1tjLhaUVQN9y9RfKFMLSRVTNUN9IezTK7s4LA08PxhMwBuexNTTzvQgL6FdSZXdqotq2LqqtlEFFXjyXSE7dwB8x4z96XTr+Bgco+XixvE0nmedTXzpre9WtIqpqoJPFm6Z80DsJt0zHvM2E06ZtdSdE9HUFStmhLLpmoGlirdUkiiwJzHjNveVGwuY/6tasksiwOtUJ0Svqx0z2NmNcXo8jYAVuMdhpwtfNMllbUv8FHGozH/FmPLW9UxcHgpyeTKDq8e37swfaVIqxozq2km5MPG4rTqGXK24LTqS65XVI3FfzL4Qrv4Qhm++kxi4Iu7dLaL176PY45nWIel4XoG+sNZ/JEsvQ8azxV4crMpd0fFomPpPBOygje4C8CzrmaGnC18YjxMsy+UYTGUYXYtVbzGYWlAjuYwigJ/v/j0RpJ4tpoqNvA4widxWvU4rXo620W62kWaG4SKSvci5FiOt7KCHM0B0PugEX84WyxXl82Ay6bHZTMgiQLe4C6v323S2S7eyNfOoC/B7FqKEVcrbntT+QYqqsbgH3F8ocxRQ5CQoyrvN/eKN3WMURRQVK2i0r0Mb3CXCVkhls5jN+lw2xtx2QwlH9Lrd5t4g7vXHo18oQx9C+u4bAbGe9qAMufAQEKlb+G/o1HkLi8cxg/WyLEc75N7BJP7yNEc3z2Sbty8k8TS+Sslu98bR47mGHrcwpCzpex9Ikqe7ukwjTqBeY8Z6SjJVzbw17U0w0sbaMCIqxWXzVC2iFqSVjX6vXGCyT1+7u0oq5sDuGej+MNZpp524LjfUDx+pRfC8FKSAV8cs1TPvMd868yDw/lyvKcNSRQY8MXL+nExubKDP5zl+cPmU+bBBQlUVI1AXGV4KUkgoeK2N/HKea8Y3dtKMLnH17+tYxQF/vreWuzi5xFIqHRPR7CbdMx5zB+crxtd3ixElDxhZR84HDvO8jGaQC0ppzN3T0cIJFTmjj4xz1LX+lPoVAIdlsOISjoBu0nHE5u+5IW3ndHlbWZWU1iNd85NoZLTCCTUCwNU5w2mChap/kZmtNuGHMvR/3v8wjWXVd//dx3WbhEuF70AAAAASUVORK5CYII=" alt="sparkline">
