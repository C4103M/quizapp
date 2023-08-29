<?php


include("conexao.php");



$pagina = filter_input(INPUT_GET, "pagina", FILTER_SANITIZE_NUMBER_INT);

if (!empty($pagina)) {
    
    $conn = conecta_mysql();
    $query = "SELECT * FROM questoes";
    
    $conn->set_charset("utf8mb4");  
    $result = $conn->query($query);
    
    // Prepara o array para o formato JSON
    $questoes_array = array();
    $i = 1;
    
    while ($row = $result->fetch_assoc()) {
        $questao = array(
            "id" => $row["id"],
            "pergunta" => $row["pergunta"],
            "alternativa_a" => $row["alternativa_a"],
            "alternativa_b" => $row["alternativa_b"],
            "alternativa_c" => $row["alternativa_c"],
            "alternativa_d" => $row["alternativa_d"],
            "resposta_correta" => $row["resposta_correta"]
        );
        
        $questoes_array["questao" . $i] = $questao;
        $i++;
    }
    
    // Fecha a conexão
$conn->close();

// Converte o array em formato JSON
$json_data = json_encode(array("questoes" => $questoes_array), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

// Escreve o JSON em um arquivo
// $file_path = "questoes.json";
// file_put_contents($file_path, $json_data);

// echo "Arquivo JSON criado com sucesso!";
echo $json_data;

}
