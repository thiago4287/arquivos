<?php

//$file = fopen("log.txt", "w+");              //Cria o arquivo (caminho do arquivo, métodos de acesso - read, write...)

$file = fopen("nomes.txt", "a+");              //a+ - manté arquivo atual e insere novo valor no final

fwrite($file, "Maria da Graça". "\r\n");     //Isere dados no arquivo criado (arquivo, dados)

fclose($file);                                //Fecha o arquivo

echo "Arquivo criado com sucesso!";          
?>