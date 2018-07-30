<?php
/**
 * Created by PhpStorm.
 * User: alexey
 * Date: 30.07.2018
 * Time: 23:03
 */

namespace App\Services;

use Symfony\Component\Filesystem\Filesystem;

/**
 * Class FileManager
 *
 * @package App\Services
 */
class FileManager
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

    /**
     * @param string $string
     *
     * @return string
     */
    public function run(string $code)
    {
        if (!$this->tempDirExist()) {
            $this->createTempDir();
        }

        $filepath = $this->save($code);

        return $filepath;
    }

    /**
     * @param $string
     *
     * @return string
     */
    protected function save(string $code)
    {
        $filepath = $this->getFilePath();
        $this->fileSystem->touch($filepath);

        $this->fileSystem->appendToFile($filepath, $code);

        return $filepath;
    }

    /**
     * @return void
     */
    protected function createTempDir()
    {
        $this->fileSystem->mkdir(self::TEMP_DIR, 0700);
    }

    /**
     * @return boolean
     */
    protected function tempDirExist()
    {
        return $this->fileSystem->exists(self::TEMP_DIR);
    }

    /**
     * @param $filename
     *
     * @return boolean
     */
    protected function fileExist($filename)
    {
        return $this->fileSystem->exists(self::TEMP_DIR);
    }

    /**
     * @return string
     */
    public function getFilePath()
    {
        return self::TEMP_DIR . $this->generateName();
    }

    /**
     * @param $filename
     *
     * @return boolean
     */
    public function delete($filename)
    {
        $this->fileSystem->remove($filename);

        return !$this->fileExist($filename);
    }

    /**
     * @return string
     */
    public function generateName()
    {
        return uniqid() . '.php';
    }


}