<?php
/**
 * Akeeba Engine
 *
 * @package   akeebaengine
 * @copyright Copyright (c)2006-2022 Nicholas K. Dionysopoulos / Akeeba Ltd
 * @license   GNU General Public License version 3, or later
 */

namespace Joomla\Plugin\Filesystem\S3\Library\Exception;

// Protection against direct access
defined('_JEXEC') or die();

use Exception;
use RuntimeException;

class CannotOpenFileForWrite extends RuntimeException
{
	public function __construct(string $file = "", int $code = 0, Exception $previous = null)
	{
		$message = "Cannot open $file for writing";

		parent::__construct($message, $code, $previous);
	}

}
