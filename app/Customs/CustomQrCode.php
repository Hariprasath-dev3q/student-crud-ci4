<?php
namespace App\Customs;
require_once ROOTPATH . '/vendor/autoload.php';

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

class CustomQrCode
{
    public function qrcode(string $data)
    {
        $qrCode = new QrCode(
            data: $data,
            size: 150,
            margin: 10
        );
        $writer = new PngWriter();
        $result = $writer->write($qrCode, logo: null, label: null, options: []);
        return 'data:' . $result->getMimeType() . ';base64,' . base64_encode($result->getString());
    }
}
