<?php 

	/**
	* CRUD 
	* C = create, R = read, U = update, D = delete
	*/
	interface iOperacionesCRUD
	{
		public function registraBD($query);
		public function consultaBD($query);
		public function consultaBDC($query, $campo);
		public function actualizaBD($query);
		public function eliminaBD($query);
	}

 ?>