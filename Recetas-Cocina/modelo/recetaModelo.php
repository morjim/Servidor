<?php
/**	Listar	todas	las	recetas	disponibles	con	su	nombre	y	tiempo	de	preparación.	
 * Añadir	una	nueva	receta	indicando	los	ingredientes	y	pasos.	
 * Filtrar	recetas	por	tiempo	de	preparación	o	tipo	(vegetariana,	postres,	etc.).	
 * Eliminar	recetas	no	deseadas.	 */

 class recetaModel{
  private $recetas =[];

  public function __construct(){
    $this->recetas =[
        ['nombre'=>'Tortilla de Patatas', 'tiempo' => 30],
        ['nombre'=>'Tortilla de Espinacas', 'tiempo' => 20]]
  }
    public function getRecetas(){
        return $this->recetas;
    }

    public function addRecetas(){
        $nombre = count($this->recetas)+1;
        $this->recetas[] = ['nombre'=>$nombre, 'tiempo'=>$tiempo];
    }
 }



?>