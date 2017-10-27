<?php
/**
 * Created by IntelliJ IDEA.
 * User: cedde
 * Date: 26/10/2017
 * Time: 9:24 PM
 */

class News extends CI_Model {

	protected $table = 'news';

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	/**
	 * @return mixed
	 * selection de tous les articles ordonnes par date
	 */
	public function getAllNews() {
		return $this->db->select('*')
			->from($this->table)
			->order_by('date','asc')
			->get()
			->result();
	}

}
