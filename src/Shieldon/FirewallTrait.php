<?php declare(strict_types=1);
/*
 * This file is part of the Shieldon package.
 *
 * (c) Terry L. <contact@terryl.in>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Shieldon;

/*
 * @since 3.0.0
 */
trait FirewallTrait
{
    /**
     * Shieldon instance.
     *
     * @var object
     */
    protected $shieldon;

    /**
     * Configuration data of Shieldon.
     *
     * @var array
     */
    protected $configuration;

    /**
     * If status is false and then Sheldon will stop working.
     *
     * @var boolean
     */
	protected $status = true;
	
	/**
	 * The configuation file's path.
	 *
	 * @var string
	 */
	protected $directory = '/tmp';

	/**
	 * The filename of the configuration file.
	 *
	 * @var string
	 */
    protected $filename = 'config.firewall.json';
    
    /**
	 * Get the Shieldon instance.
	 *
	 * @return object
	 */
	public function getShieldon(): object
	{
		return $this->shieldon;
	}

	/**
	 * Get the configuation settings.
	 *
	 * @return array
	 */
	public function getConfiguration(): array
	{
		return $this->configuration;
	}

	/**
	 * Get the directory where the data stores.
	 *
	 * @return string
	 */
	public function getDirectory(): string
	{
		return $this->directory;
	}

	/**
	 * Get the filename where the configuration saves.
	 *
	 * @return string
	 */
	public function getFileName(): string
	{
		return $this->filename;
	}
}
