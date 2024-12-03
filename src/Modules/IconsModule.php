<?php

namespace UksusoFF\WebtreesModules\Icons\Modules;

use Fisharebest\Webtrees\Module\AbstractModule;
use Fisharebest\Webtrees\Module\ModuleCustomInterface;
use Fisharebest\Webtrees\Module\ModuleCustomTrait;
use Fisharebest\Webtrees\Module\ModuleGlobalInterface;
use Fisharebest\Webtrees\Module\ModuleGlobalTrait;
use Fisharebest\Webtrees\View;

class IconsModule extends AbstractModule implements ModuleCustomInterface, ModuleGlobalInterface
{
    use ModuleCustomTrait;
    use ModuleGlobalTrait;

    public const CUSTOM_VERSION = '0.2';

    public const CUSTOM_WEBSITE = 'https://github.com/UksusoFF/webtrees-mdi';

    public function boot(): void
    {
        View::registerNamespace($this->name(), $this->resourcesFolder() . 'views/');
    }

    public function title(): string
    {
        return 'Material Design Icons';
    }

    public function description(): string
    {
        return 'This module replace icons with Material Design Icons.';
    }

    public function customModuleAuthorName(): string
    {
        return 'UksusoFF';
    }

    public function customModuleVersion(): string
    {
        return self::CUSTOM_VERSION;
    }

    public function customModuleSupportUrl(): string
    {
        return self::CUSTOM_WEBSITE;
    }

    public function resourcesFolder(): string
    {
        return __DIR__ . '/../../resources/';
    }

    public function headContent(): string
    {
        return view("{$this->name()}::style", [
            'path' => $this->assetUrl('build/module.min.css'),
        ]);
    }
}
