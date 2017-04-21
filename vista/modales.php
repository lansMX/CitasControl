<?php 

	require_once 'controlador/formularioContacto.php';

	/**
	* Clases modales	
	*/
	class modales extends formularioContacto
	{
		
		function modalForm($valores, $method, $action, $trigger, $nota="")
		{
			//formulario($valores, $method, $action
			$fCont = new formularioContacto();
			$modal = "";
			
			$modal = '<div id="id_m_'.$trigger.'" class="modal fade" role="dialog">'.
			  '<div class="modal-dialog">'.
				'<!-- Modal content-->'.
			    '<div class="modal-content">'.
			      '<div class="modal-header">'.
			        '<button type="button" class="close" data-dismiss="modal">&times;</button>'.
			        '<h4 class="modal-title">'.$trigger.'</h4>'.
			      '</div>'.
			      '<div class="modal-body">'.
			        $fCont->formulario($valores, $method, $action).
			        '<p style="color:#f00;">'.$nota.'</p>'.
			      '</div>'.
			      '<div class="modal-footer">'.
			        '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>'.
			      '</div>'.
			    '</div>'.
			  '</div>'.
			'</div>';
			//$modal = $fCont->formulario($valores, $method, $action);
			return $modal;
		}
	}	

 ?>