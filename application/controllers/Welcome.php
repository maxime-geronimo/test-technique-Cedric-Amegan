<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	function __construct() {
		parent::__construct();
		$this->load->model('News', 'news');
		$this->load->model('Comments', 'comments');
	}

	/**
	 * page du fil d'actualites
	 *
	 */
	public function showALl() {
		$data['news'] = $this->news->getAllNews();
		$data ['comments'] = $this->comments->countComment();
		$data ['countcomments'] = $this->comments->countComments();

		$data = array(
			'news' => $data['news'],
			'comments' => $data['comments'],
			'countcomments' => $data['countcomments'],
		);

		$this->load->view('accueil', $data);
	}

}
