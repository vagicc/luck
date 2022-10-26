<?php

/***
 *|----------------------------
 *| MyController.php
 *|----------------------------
 *| 核心控制器
 *| 问题：  
 *|------------------------------------------------------------------------
 *| Author:临来笑笑生     Email:luck@elapse.date     Modify: 2020.05.12
 *|------------------------------------------------------------------------
 * ***/

namespace App\Controllers;

use App\Models\NewsModel;     //加载数据模型

class Luck extends MyController
{
    public function index()
	{

		//SELECT * FROM `article` ORDER BY `id` desc LIMIT 13

		$articleModel = new \App\Models\ArticleModel();
		$articleModel->orderBy('id desc');

		$this->data['total'] = $articleModel->countAllResults(false);
		$this->data['list'] = $articleModel->paginate(config('Pager')->perPage);
		$this->data['pager'] = $articleModel->pager;

		return $this->view('luck/index');
	}

    public function index_old()
    {
        echo APPPATH . '/Views/luck.php';
        if (!file_exists(APPPATH . '/Views/luck.php')) {
            // exit('不存在视图aaa');
        }
        $data['title'] = '幸运的';

        return $this->view('luck/index', $data);
    }

    public function listNews()
    {
        exit('app==');
        $model = new NewsModel();
        $data['news'] = $model->getNews();
        $data['title'] = '新闻列表';

        echo view('templates/header', $data);
        echo view('news/index', $data);
        echo view('templates/footer');
    }

    public function newsView($slug = null)
    {
        $model = new NewsModel();
        $data['news'] = $model->getNews($slug);
        if (empty($data['news'])) {
            exit('出错了，没有查找 到！！o');
        }

        $data['title'] = $data['news']['title'];

        echo view('templates/header', $data);
        echo view('news/view', $data);
        echo view('templates/footer');
    }

    public function createNews()
    {

        // print_r($this->request->uri);exit; 



        $timer = new \CodeIgniter\Debug\Timer();
        $timer = \Config\Services::timer();
        $logger = service('logger');
        $logger = single_service('logger');

        // echo env('database.default.database');exit;

        helper('form');
        $model = new NewsModel();

        if (!$this->validate([
            'title' => 'required|min_length[3]|max_length[255]',
            'body'  => 'required'
        ])) {
            echo view('templates/header', ['title' => '发布一条新闻']);
            echo view('news/create');
            echo view('templates/footer');
        } else {
            $update = [
                'title' => $this->request->getVar('title'),
                'slug'  => url_title($this->request->getVar('title'), '-', TRUE),
                'body'  => $this->request->getVar('body'),
            ];

            // $model->save($update);

            if (!$model->save($update)) {
                // 'withInput'方法意味着"原有的数据"需要被存储。
                return redirect()->back()->withInput();
            }

            echo $model->getInsertID();   //输出插入的ID 
            echo '<hr>';
            echo $model->getLastQuery();   //返回最近一次运行的SQl语句

            echo view('news/success');
        }

        // exit('处理数据');
    }
}
