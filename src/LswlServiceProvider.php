<?php

/**
 * (c) linshaowl <linshaowl@163.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Lswl\ApiLang;

use Illuminate\Support\ServiceProvider;

class LswlServiceProvider extends ServiceProvider
{
    /**
     * @var string
     */
    protected $apiTranslationsDir;

    public function boot()
    {
        $this->apiTranslationsDir = __DIR__ . '/../resources/lang';

        // 加载语言
        $this->loadTranslationsFrom($this->apiTranslationsDir, 'lswl-api-lang');

        // 发布文件
        $this->publishFiles();
    }

    /**
     * 发布文件
     */
    protected function publishFiles()
    {
        // 发布语言文件
        $this->publishes(
            [
                $this->apiTranslationsDir => resource_path('lang/vendor/lswl-api-lang'),
            ],
            'lswl-api-lang'
        );
    }
}
