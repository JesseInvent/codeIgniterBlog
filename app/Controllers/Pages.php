<?php namespace App\Controllers;

use App\Models\BlogModel;

class Pages extends BaseController
{
	public function index()
	{

        $model = new BlogModel();
        $data['news'] = $model->getPosts();
        echo view('templates/header', ['cache' => 1000]);
        echo view('pages/home', $data);
        echo view('templates/footer');

    }

    public function showme($pages = 'home'){

        if(!is_file(APPPATH.'/Views/pages/'.$pages.'.php')){

            //throw 404
            throw new \CodeIgniter\Exceptions\PageNotFoundException($pages);

        }

        echo view('templates/header', ['cache' => 1000]);
        echo view('pages/'.$pages);
        echo view('templates/footer');

    }

	//--------------------------------------------------------------------

}
