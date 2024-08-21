<?php
require_once '../models/charlaModel.php'; 


        $charla = new Charla();
        $charlas = $charla->listarTodosDb();
        $data = array();
        foreach ($charlas as $reg) {
           
            
           
    
            $data[] = array(
                "0" => $reg->getidCharla(),
                "1" => $reg->getNombreCharla(),
                "2" => $reg->getFecha(),
                "3" => $reg->getHora(),
                "4" => $reg->getCosto(), 
                "5" => $reg->getTipo(),
                "6" => $reg->getDuracion(),
                "7" =>$reg ->getFormato(),
                "8" =>$reg ->getObjetivo(),
                "9" =>$reg ->getDescripcionCorta(),
                "10" =>$reg ->getConsiste(),
                "11" =>$reg ->getFoto(),
               
            );
        }
        $resultados = array(
            "sEcho" => 1, 
            "iTotalRecords" => count($data), 
            "iTotalDisplayRecords" => count($data), 
            "aaData" => $data
        );
        echo json_encode($resultados);
      
   

?>
