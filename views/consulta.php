<?php
    date_default_timezone_set('America/Sao_Paulo');

    $titulo = "Consulta";
    include("includes/head.php");

    $id = $_GET['id'];
    $lista = [
        [ 'id' => 1, 'nome' => 'Ulysses', 'idade' => '24', 'telefone' => '996120819', 'email' => 'werlichborgesulysses@gmail.com' ],
        [ 'id' => 2, 'nome' => 'Maria', 'idade' => '43', 'telefone' => '996120843', 'email' => 'maria@gmail.com' ],
        [ 'id' => 3, 'nome' => 'João', 'idade' => '32', 'telefone' => '996120865', 'email' => 'joao@gmail.com' ],
    ];

    $listaFiltrada = array_filter( $lista, function ( $obj ) use ( $id ) { return $obj['id'] == $id; })  ;
    if ( !empty($listaFiltrada) ){
        foreach ($listaFiltrada as $pessoa){
?>
    <h4>Informações encontradas: </h4>
    <p>Nome: <?php echo $pessoa['nome'] ?> </p>
    <p>Idade: <?php echo $pessoa['idade'] ?> </p>
    <p>Telefone: <?php echo $pessoa['telefone'] ?> </p>
    <p>E-mail: <?php echo $pessoa['email'] ?> </p>
<?php
        }
    } else {
        echo "Informação não encontrada";
    }
    
    $nome_usuario = "Ulysses Werlich Borges";
    include("includes/footer.php");
?>