<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use App\Models\PostModel; // Load Model di sini

abstract class BaseController extends Controller
{
    protected $helpers = ['auth', 'url'];

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);

        // Mengambil data artikel untuk fitur search global
        $postModel = new PostModel();
        $all_posts = $postModel->select('title, slug')->where('status', 'published')->findAll();

        // Menyuntikkan data ke seluruh view secara otomatis
        \Config\Services::renderer()->setData(['all_posts' => $all_posts]);
    }
}