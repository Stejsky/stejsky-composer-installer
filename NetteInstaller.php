<?php
/**
 *  Basic Composer Installer for Nette.
 *  @author Jakub Stejskal, jakub@stejsky.com
 *  @version 1.0
 */

namespace NetteInstaller;

use Composer\Installer\LibraryInstaller;
use Composer\Package\PackageInterface;

class NetteInstaller extends LibraryInstaller
{


	/**
	 * {@inheritDoc}
	 */
	public function getPackageBasePath(PackageInterface $package)
	{
		return 'app/'.substr($package->getPrettyName(), 23);
	}

	/**
	 * {@inheritDoc}
	 */
	public function supports($packageType)
	{
		return 'nette-module' === $packageType;
	}

} 