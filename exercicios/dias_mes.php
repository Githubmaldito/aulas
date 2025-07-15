<!-- Dado um mês (1-12), 
 use match para retornar quantos dias ele tem. -->
 <?php
 $calendario = 'fevereiro';
 $meses = match ($calendario){
    'janeiro' => 'Janeiro tem 31 dias',
    'fevereiro' => 'Fevereiro tem 28 dias',
    'marçe' => 'Março tem 31 dias',
    'abril' => 'Abril tem 30 dias',
    'maio' => 'Maio tem 30 dias',
    'junho' => 'Junho tem 30 dias',
    'julho' => 'Julho tem 30 dias',
    'agosto' => 'Agosto tem 30 dias',
    'setembro' => 'Setembro tem 30 dias',
    'outubro' => 'Outubro tem 30 dias',
    'novembro' => 'Novembro tem 30 dias',
    'dezembro' => 'Dezembro tem 30 dias',
 };
 echo'<br>';
 
 echo $meses;
 
 ?>