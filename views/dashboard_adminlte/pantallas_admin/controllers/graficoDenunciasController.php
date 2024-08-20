<?php
require_once '../models/GraficoDenunciasModel.php';



        $grafico = new graficoModel();
        $datos = $grafico->cargarGrafico(); 

        $data = array();
        $labels = array();
        $values = array();


        foreach ($datos as $reg) {
             $labels[] = $reg['tipo'];
             $values[] = $reg['cantidad']; 
        }

        $datos = array(
             "labels" => $labels,
             "data" => $values
        );



        
        echo json_encode($datos);
     

   

?>