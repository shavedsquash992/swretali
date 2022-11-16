<?php
include_once('conexao.php');
if($conexao){
    $texto= "CREATE DATABASE ".$_POST['nomebanco'];    
    $acao = $conexao->prepare($texto);
    try {        
        $acao->execute();
        echo "Banco ".$_POST['nomebanco']." criado com sucesso.";
    } catch (PDO $th) {echo $th.getMessage();}}
$dbname = $_POST['nomebanco'];
try {
    $conexao = new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);
    echo "<br>Banco ".$dbname." conectado com sucesso";} catch (PDOException $th) {}
?>
<form action="criartabela.php" method="post">    
    <label>Dados da Tabela: </label><input type="text" name="tabela" id="tabela" placeholder="Nome da Tabela"><br>
    <label>Campo 1: </label><input type="text" name="campo1" id="campo1" placeholder="Coluna 1"><label>Tipo 1: </label><input type="text" name="tipo" id="tipo" placeholder="INT(11)"><br>
    <label>Campo 2: </label><input type="text" name="campo2" id="campo2" placeholder="Coluna 2"><label>Tipo 2: </label><input type="text" name="tipo2" id="tipo2" placeholder="INT(11)"><br>
    <label>Campo 3: </label><input type="text" name="campo3" id="campo3" placeholder="Coluna 3"><label>Tipo 3: </label><input type="text" name="tipo3" id="tipo3" placeholder="INT(11)"><br>
    <label>Campo 4: </label><input type="text" name="campo4" id="campo4" placeholder="Coluna 4"><label>Tipo 4: </label><input type="text" name="tipo4" id="tipo4" placeholder="INT(11)"><br>
    <label>Campo 5: </label><input type="text" name="campo5" id="campo5" placeholder="Coluna 5"><label>Tipo 5: </label><input type="text" name="tipo5" id="tipo5" placeholder="INT(11)"><br>
    <input type="hidden" name="banco" value="<?php echo $_POST['nomebanco']; ?>">
    <input type="submit" value="Enviar">
</form>