<?php
/**
 * Created by PhpStorm.
 * User: Vesela.Ferdinandova
 * Date: 5/18/2018
 * Time: 3:11 PM
 */

namespace App\Converter\Domain;


use App\Converter\Exceptions\InvalidArgumentException;

class JsonInput implements Input
{
    /**
     * @var array
     */
    private $input;

    /**
     * JsonInput constructor.
     * @param FileInterface $file
     * @throws InvalidArgumentException
     */
    public function __construct(FileInterface $file)
    {
        if ($file->getExtension() !== JsonFile::EXTENSION) {
             throw new InvalidArgumentException('Provided file is not valid json file');
        }
        $this->input = json_decode($file->getContent(), true);
    }

    public function getHeader()
    {
        // TODO: Implement getHeader() method.
    }

    public function getRows()
    {
        // TODO: Implement getRow() method.
    }
}