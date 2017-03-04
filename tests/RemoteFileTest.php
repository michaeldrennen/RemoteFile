<?php
use PHPUnit\Framework\TestCase;
use MichaelDrennen\RemoteFile\RemoteFile;

class RemoteFileTest extends TestCase {
    public function testInvalidUrl() {
        $remoteFileSize = RemoteFile::getFileSize('notValidUrl');
    }

}