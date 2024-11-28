<?php
// Inicia a sessão
session_start();

// Destroi todas as variáveis da sessão
session_unset();

// Destroi a sessão completamente
session_destroy();

// Redireciona o usuário para a página inicial
header("Location: index.php");
exit;
?>
