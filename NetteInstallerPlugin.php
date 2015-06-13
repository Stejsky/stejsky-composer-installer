<?php

namespace NetteInstaller;


use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class NetteInstallerPlugin implements PluginInterface
{
	public function activate(Composer $composer, IOInterface $io)
	{
		$installer = new NetteInstaller($io, $composer);
		$composer->getInstallationManager()->addInstaller($installer);
	}
}