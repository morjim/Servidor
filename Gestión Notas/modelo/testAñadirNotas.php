<?php
class LoginTest extends PHPUnit_Framework_TestCase{
    public function testVerificacitionAddNotas (){

          // Crear una instancia del modelo de notas
          $notasModel = new notasModel();

          // Verificar que inicialmente existen dos notas
          $this->assertCount(2, $notasModel->getNotas());
  
          // Llamar al método deleteNota para eliminar la nota con id 1
          $notasModel->deleteNota(1);
  
          // Verificar que después de eliminar, solo queda una nota
          $this->assertCount(1, $notasModel->getNotas());
  
          // Asegurarse de que la nota con id 1 ya no está presente
          $notas = $notasModel->getNotas();
          $this->assertNotContains(['id' => 1, 'content' => 'Nota 1'], $notas);
  
          // Verificar que la nota con id 2 sigue presente
          $this->assertContains(['id' => 2, 'content' => 'Nota 2'], $notas);
    
    }



}


?>
