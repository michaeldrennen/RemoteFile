<?php
use PHPUnit\Framework\TestCase;
use MichaelDrennen\RemoteFile\RemoteFile;

class HumanFileSizeTest extends TestCase {

    public function testInvalidInputString() {
        $this->expectException(TypeError::class);
        RemoteFile::humanFileSize('asdf');
    }

    public function testKilobyte(){
        $bytes = 1024;
        $humanReadableString = RemoteFile::humanFileSize($bytes);
        $this->assertEquals($humanReadableString, '1.00kB');
    }

}