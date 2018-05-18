<?php
/**
 * Created by PhpStorm.
 * User: Vesela.Ferdinandova
 * Date: 5/18/2018
 * Time: 3:32 PM
 */

namespace App\Converter\Domain;


use App\Converter\Exceptions\InvalidArgumentException;

class JsonFile implements FileInterface
{
    const EXTENSION = 'json';

    private $extension;
    /**
     * @var string
     */
    private $filePath;

    /**
     * JsonFile constructor.
     * @param string $filePath
     * @throws InvalidArgumentException
     */
    public function __construct(string $filePath)
    {
        $ext = pathinfo($filePath, PATHINFO_EXTENSION);
        if ($ext !== self::EXTENSION) {
            throw new InvalidArgumentException('Provided file is not valid json file');
        }
        $this->extension = $ext;
        $this->filePath = $filePath;
    }

    /**
     * @return string
     */
    public function getExtension(): string
    {
        return $this->extension;
    }

    /**
     * @return bool|string
     */
    public function getContent()
    {
        return file_get_contents($this->filePath);
    }
}