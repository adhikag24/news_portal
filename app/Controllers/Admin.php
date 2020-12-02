<?php
namespace App\Controllers;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 *
 * @package CodeIgniter
 */

use CodeIgniter\Controller;
use App\Models\M_news;

class Admin extends Controller
{

	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = ['form', 'url'];

	/**
	 * Constructor.
	 */
    public function __construct() {
 
        $this->news = new M_news();
    }
 
	
    
    public function index()
    {
		echo view('admin/template/header');
		echo view('admin/dashboard');
		echo view('admin/template/footer');
	}
	
	public function news()
	{
		echo view('admin/template/header');
		echo view('admin/news');
		echo view('admin/template/footer');
	}

	public function create_news()
	{
		session();
		$data = [
			'validation' => \Config\Services::validation()
		];
		echo view('admin/template/header');
		echo view('admin/insert_news', $data);
		echo view('admin/template/footer');
	}

	public function insert_news()
	{

		$input = $this->validate([
            'title' => 'required|trim',
            'content' => 'required'
        ]);

 
        if (!$input) {
			$validation = \Config\Services::validation();
			return redirect()->to('/admin/create_news')->withInput()->with('validation',$validation);
        } else {
			$post = $this->request->getPost();

			$data = [
                'news_title' => $post['title'],
                'news_content'  => $post['content'],
				'news_slug'  => $post['slug'],
			];          
			
			$this->news->insertNews($data);
			session()->setFlashdata('pesan','');
            return $this->response->redirect(site_url('/admin/news'));
		}
	}
}
