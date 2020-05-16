<?php namespace App\Controllers;

use App\Models\BlogModel;

class Blog extends BaseController
{
	
    public function post($slug){

        $model = new BlogModel();
        $data['post'] = $model->getPosts($slug);

        echo view('templates/header', ['cache' => 1000]);
        echo view('blog/post', $data);
        echo view('templates/footer');

    }

    public function create(){

        helper(['form', 'url']);
        $model = new BlogModel();

        if(!$this->validate([
            'title' => 'required|min_length[3]|max_length[255]',
            'body' => 'required'
            
        ])){
            echo view('templates/header', ['cache' => 1000]);
            echo view('blog/create');
            echo view('templates/footer');
    
        } else {

            $model->save(

                [
                    'title' => $this->request->getVar('title'),
                    'body' => $this->request->getVar('body'),
                    'slug' => url_title($this->request->getVar('title')),
                ]
            );

            $session = \Config\Services::session();
            $session->setFlashdata('success', 'New post created');
            
            return redirect()->to('/blog/public');

        }
    }
	//--------------------------------------------------------------------

}
