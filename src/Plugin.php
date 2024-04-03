<?php

declare(strict_types=1);


namespace Codewithkyrian\OnnxruntimeDownloaderPlugin;

use Composer\Composer;
use Composer\EventDispatcher\EventSubscriberInterface;
use Composer\Installer\PackageEvents;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
use Composer\Script\ScriptEvents;
use OnnxRuntime\Vendor;

class Plugin implements PluginInterface, EventSubscriberInterface
{
    protected Composer $composer;
    protected IOInterface $io;

    public function activate(Composer $composer, IOInterface $io): void
    {
        $this->composer = $composer;
        $this->io = $io;
    }

    public function deactivate(Composer $composer, IOInterface $io)
    {
    }

    public function uninstall(Composer $composer, IOInterface $io)
    {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            PackageEvents::POST_PACKAGE_INSTALL => ['checkOnnxRuntime', 10],
            PackageEvents::POST_PACKAGE_UPDATE => ['checkOnnxRuntime', 10],
            ScriptEvents::POST_INSTALL_CMD => ['checkOnnxRuntime', 10],
            ScriptEvents::POST_UPDATE_CMD => ['checkOnnxRuntime', 10]
        ];
    }

    public function checkOnnxRuntime(): void
    {
        Vendor::check();
    }
}