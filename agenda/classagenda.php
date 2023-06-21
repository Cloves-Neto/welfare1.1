<?php


class Agenda{
            private $espec;


// Busca médico 
    
public function buscaMedico(){

        require "../conexao.php";

        $query = "SELECT * FROM `medico`" ;

        $buscarDados = $conexao->query($query);

        $buscarDados->execute();

        return $buscarDados;
}

// Data 
    public function dataCount(){
        // Inicio função datalist
        $inicio = new DateTime(); //chama a data atual é atualizada diariamente 
        $fim = new DateTime('+30 days'); // chama a data atual +1 ano de intervalo e retorna um array

        $periodo = new DatePeriod($inicio, new DateInterval('P1D'), $fim);
        $data = [];
        foreach($periodo as $item){
            $data[] = $item->format('d/m/Y');
        }
        return $data; 
    }



}




?>