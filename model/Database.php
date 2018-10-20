<?php
class Database{
	private $host = 'localhost';
	private $username = 'root';
	private $password = '';
	private $database = 'blog';

	protected $connection;

	public function __construct(){
		if (!isset($this->connection)) {
			$this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

			if (!$this->connection) {
				echo 'Tidak bisa menghubungkan ke database.';
				exit;
			}
		}

		return $this->connection;
	}
}
?>