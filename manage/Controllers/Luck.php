<?php

namespace App\Controllers;

use App\Models\NewsModel;     //加载数据模型

class Luck extends FortuneController
{
    public function index()
    {
        return $this->view('love/index');
    }
}
