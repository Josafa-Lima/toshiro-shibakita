<html>
<head><title>Microsservicos PHP - DIO</title></head>
<body>

<?php
ini_set('display_errors', 1);
header('Content-Type: text/html; charset=utf-8');

echo '<h2>Microsservicos Docker - Desafio DIO</h2>';
echo 'Versao PHP: ' . phpversion() . '<br>';

// Melhorado: usa variaveis de ambiente (mais seguro que IP fixo)
$servername = getenv('MYSQL_HOST') ?: '172.31.0.37';
$username   = getenv('MYSQL_USER') ?: 'root';
$password   = getenv('MYSQL_PASS') ?: 'Senha123';
$database   = getenv('MYSQL_DB')   ?: 'meubanco';

$link = new mysqli($servername, $username, $password, $database);

if (mysqli_connect_errno()) {
    die('Erro de conexao: ' . mysqli_connect_error());
}

$valor_rand1 = rand(1, 999);
$valor_rand2 = strtoupper(substr(bin2hex(random_bytes(4)), 1));
$host_name   = gethostname();

$query = "INSERT INTO dados (AlunoID, Nome, Sobrenome, Endereco, Cidade, Host)
          VALUES ('$valor_rand1','$valor_rand2','$valor_rand2',
                  '$valor_rand2','$valor_rand2','$host_name')";

if ($link->query($query) === TRUE) {
    echo '<b>Registro inserido com sucesso!</b><br>';
    echo 'Container/Host: ' . $host_name;
} else {
    echo 'Erro: ' . $link->error;
}
?>

</body>
</html>