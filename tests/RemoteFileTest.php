<?php
use PHPUnit\Framework\TestCase;
use MichaelDrennen\RemoteFile\RemoteFile;

class RemoteFileTest extends TestCase {
    public function testInvalidUrl() {
        $url = 'invalidUrl';
        $remoteFileSize = RemoteFile::getFileSize($url);
        $this->assertEquals($remoteFileSize, -1);
    }

    public function testDarthPlagueisTheWiseUrlInBytes() {
        $url = 'https://raw.githubusercontent.com/michaeldrennen/RemoteFile/master/darthPlagueisTheWise.txt';
        $remoteFileSize = RemoteFile::getFileSize($url);
        $this->assertEquals($remoteFileSize, 747);
    }

    public function testHumanReadableResultUnder1kB() {
        $url = 'https://raw.githubusercontent.com/michaeldrennen/RemoteFile/master/darthPlagueisTheWise.txt';
        $remoteFileSize = RemoteFile::getHumanReadableFileSize($url);
        $this->assertEquals($remoteFileSize, '747B');
    }

}