<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

abstract class BaseController extends Controller
{
    protected $fileCache;
    protected $redisCache;

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);

        $this->redisCache = $this->makeCacheDriver('predis');
        $this->fileCache  = $this->makeCacheDriver('file');
    }

    protected function makeCacheDriver(string $handler = 'file')
    {
        $config = new \Config\Cache();
        $config->handler = $handler;
        return \Config\Services::cache($config, false);
    }
}