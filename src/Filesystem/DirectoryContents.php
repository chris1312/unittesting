<?php

namespace MyProject\Filesystem;

use SplFileInfo;

class DirectoryContents
{
    public function calculateFileSize(string $path): int
    {
        $totalSize = 0;

        foreach ($this->getFilesList($path) as $fileName => $size) {
            $totalSize += $size;
        }

        return $totalSize;
    }

    private function getFilesList(string $path): array
    {
        $fileSizeMap = [];

        foreach (new \DirectoryIterator($path) as $fileInfo) {
            /** @var SplFileInfo $fileInfo */
            if (!$fileInfo->isFile()) {
                continue;
            }

            $index = $fileInfo->getFilename();
            $fileSizeMap[$index] = $fileInfo->getSize();
        }

        return $fileSizeMap;
    }
}
