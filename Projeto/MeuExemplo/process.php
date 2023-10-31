<?php
  include('connection.php');
?>

<?php
//2: Recuperar os valores do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];

//3: Inserir os valores no banco de dados
$sql = "INSERT INTO exemp (nome, email) VALUES ('$nome', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Inserção bem-sucedida!";
} else {
    echo "Erro na inserção: " . $conn->error;
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
