<?php
/**
 *  Basic Composer Installer for Nette.
 *  @author Jakub Stejskal, jakub@stejsky.com
 *  @version 1.0
 */

namespace Stejsky\Composer;

use Composer\Installer\LibraryInstaller;
use Composer\Package\PackageInterface;

class NetteInstaller extends LibraryInstaller
{


	/**
	 * {@inheritDoc}
	 */
	public function getInstallPath(PackageInterface $package)
	{
		$moduleName  = $package->getPrettyName();
		$moduleName  = preg_replace("#^stejsky/#", "", $moduleName);
		$splitedName = preg_split("/-/", $moduleName);
		$moduleName  = "";
		foreach ($splitedName as $namePart) {
			$moduleName .= ucfirst(strtolower($namePart));
		}
		return 'application/app/modules/' . $moduleName;
	}


	/**
	 * {@inheritDoc}
	 */
	public function supports($packageType)
	{
		return 'nette-module' === $packageType;
	}

} 