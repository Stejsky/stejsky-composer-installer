<?php
/**
 *  Basic Composer Installer for Nette.
 *  @author Jakub Stejskal, jakub@stejsky.com
 *  @version 1.0
 */

namespace Composer\Installers;


class NetteInstaller extends \Composer\Installers\BaseInstaller
{

	protected $locations = array(
		'module'    => 'app/{$name}/',
	);

} 