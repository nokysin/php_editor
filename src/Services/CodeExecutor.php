<?php
/**
 * Created by PhpStorm.
 * User: alexey
 * Date: 30.07.2018
 * Time: 23:56
 */

namespace App\Services;

/**
 * Class CodeExecutor
 * @package App\Services
 */
class CodeExecutor
{
    const TEMP_DIR = '/tmp/php_editor/';

    /**
     * @var Filesystem
     */
    private $fileSystem;

    public function __construct($fileSystem)
    {
        $this->fileSystem = $fileSystem;
    }

    public function execute($filepath)
    {
        
    }
}