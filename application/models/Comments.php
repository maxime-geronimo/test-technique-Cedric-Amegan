<?php
/**
 * Created by IntelliJ IDEA.
 * User: cedde
 * Date: 26/10/2017
 * Time: 9:24 PM
 */

class Comments extends CI_Model {

	protected $table = 'comments';
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	/**
	 * @return mixed
	 * selection de tous les commentaires
	 */
	public function getAllComments() {
		return $this->db->select('*')
			->from($this->table)
			->order_by('date', 'asc')
			->get()
			->result();
	}

	/**
	 * @return mixed
	 * compteur de commentaires
	 */
	public function countComments() {
		$query = $this->db->query('SELECT * FROM comments');
		return $query->num_rows();
	}

	protected $id = 1;

	/**
	 * @return mixed
	 * compteur de commentaire par id d'articles
	 * TODO
	 */
	public function countComment() {
		return $this->db->select('*')
			->from($this->table)
			->where('id_news', $this->id)
			->get()
			->result();
	}
}
