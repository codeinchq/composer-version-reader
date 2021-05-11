<?php
/******************************************************************************
 * Copyright (c) 2021 Code Inc. - All Rights Reserved                         *
 * Unauthorized copying of this file, via any medium is strictly prohibited   *
 * Proprietary and confidential                                               *
 * Visit https://www.codeinc.co for more information                          *
 ******************************************************************************/

declare(strict_types=1);

namespace CodeInc\ComposerVersionReader;

use RuntimeException;


/**
 * Class ComposerVersionReader
 *
 * @package CodeInc\ComposerVersionReader
 * @copyright 2021 Code Inc. <https://www.codeinc.co>
 * @author Joan Fabrégat <joan@codeinc.co>
 */
class ComposerVersionReader
{
    /**
     * Reads the version entry from the composer.json file.
     *
     * @param string $basePath Directory of the composer.json file
     * @return string|null
     * @throws RuntimeException
     */
    public static function readVersion(string $basePath): ?string
    {
        if (!$composer = file_get_contents($basePath.'/composer.json')) {
            throw new RuntimeException("Unable to read 'composer.json'.");
        }
        if (!$json = json_decode($composer)) {
            throw new RuntimeException("Unable to parse the content of 'composer.json'.");
        }
        return $json->version ?? null;
    }
}