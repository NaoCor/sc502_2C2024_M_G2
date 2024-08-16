<?php
require_once '../models/ReservaModel.php'; 


        $reserva = new Reserva();
        $reservas = $reserva->listarTodosDb();
        $data = array();
        foreach ($reservas as $reg) {
           
            
           
    
            $data[] = array(
                "0" => $reg->getidReserva(),
                "1" => $reg->getnombreCharla(),
                "2" => $reg->getnombre(),
                "3" => $reg->getprimerApellido(), 
                "4" => $reg->getcedula(),
                "5" => $reg->getcorreo(),
                "6" =>$reg ->getentradas(),
                "7" =>$reg ->gettotal(),
               
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
