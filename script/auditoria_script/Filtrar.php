<?php
use App\Entity\Auditoria;

$queryDisc = "select DISTINCT(disciplina) FROM itensauditoria WHERE disciplina != '' AND disciplina != 'TESTE'   ORDER BY disciplina ASC;";
$queryStat = "select DISTINCT(situacao) FROM itensauditoria WHERE situacao != '' AND situacao != 'TESTE' ORDER BY situacao ASC;";

$querydisciplina = mysqli_query($conexao, $queryDisc);
$queryStatus = mysqli_query($conexao, $queryStat);

$FiltroId = filter_input(INPUT_GET, 'projeto_id', FILTER_SANITIZE_STRING);
$DiscId = filter_input(INPUT_GET, 'disciplina', FILTER_SANITIZE_STRING);
$StatusId = filter_input(INPUT_GET, 'status', FILTER_SANITIZE_STRING);


      $condicoes=[
         strlen($FiltroId) ? 'projeto_id = '.$FiltroId : null,
         strlen($DiscId) ? 'disciplina LIKE "'.$DiscId.'"' : null,
         strlen($StatusId) ? 'situacao LIKE "'.$StatusId.'"' : null
      ];
      $condicoes = array_filter($condicoes);

      // WHERE
      $where =implode(' AND ', $condicoes);

      $auditorias = Auditoria::getAuditorias($where.' ORDER BY ultima_modificacao DESC');

if(!isset($FiltroId)){

   header('Location: index.php');

}
