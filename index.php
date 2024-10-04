<?php
    require_once "Pessoa.class.php";
    require_once "Aluno.class.php";
    require_once "Instrutor.class.php";
    require_once "Telefone.class.php";
    require_once "Treino.class.php";
    require_once "Aparelho.class.php";

    $instrutor = new Instrutor ('Fisiculturista', 'Renato', '123.123.123-123', 14, '985490687');
    $aluno = new Aluno ('Problema nos dois joelhos', '02/10/2000', 'Joelma', '456.456.456-456', 14, '97886754');
    $aparelho = new Aparelho ('Flexora');
    $treino = new Treino (3, 20, $instrutor, $aluno, $aparelho);

///////////////////////////////////////////////////////////////////////////////

    echo "<h3>Treino</h3>";
    echo "Nome aluno: {$treino -> getAluno() -> getNome()} <br>";
    echo "CPF aluno: {$treino -> getAluno() -> getCpf()} <br>";

    echo "<h4>Telefones do Aluno</h4>";
    foreach($treino -> getAluno() -> getTelefone() as $telefone){
        echo "({$telefone -> getDdd()}) {$telefone -> getNumero()} <br>";
    }

    echo '<br>---------------------------------------------<br>';
////////////////////////////////////////////////////////////////////////////////

    echo "<h3>Treino</h3>";
    echo "Nome Instrutor: {$treino -> getInstrutor() -> getNome()} <br>";
    echo "CPF Instrutor: {$treino -> getInstrutor() -> getCpf()} <br>";

    echo "<h4>Telefones do Instrutor</h4>";
    foreach($treino -> getInstrutor() -> getTelefone() as $telefone){
        echo "({$telefone -> getDdd()}) {$telefone -> getNumero()} <br>";
    }

    echo '<br>---------------------------------------------<br>';
////////////////////////////////////////////////////////////////////////////////

    echo "<br>";

    echo "Aparelho: {$treino -> getAparelho() -> getDescritivo()} <br>";
    echo "Séries: {$treino -> getSeries()} <br>";
    echo "Repetições: {$treino -> getRepeticoes()} <br>";
?>