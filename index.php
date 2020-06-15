
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de binário para decimal</title>
    <link rel="stylesheet" href=".\css\style.css">
</head>
<body>
    <!-- Conteudo-->
    <div class="container">
        <div class= "titulo"> Conversão de Binário para Decimal </div>
        <div class="calculadora">
            <!-- Formulario -->
            <div class="form-conversao">
                <form action="" method="POST">
                    <p><input type="text" name="binario" placeholder="Número em binário" maxlength="24" required autofocus class="nBinario" value=""><p>
                    <p><input type="submit" name="converte" class="botao" value="Converter"></p>
                </form>
            </div>
            <!-- Fim do formulário  -->

            <!-- Resultado  -->
            <div class="resultado">
                <div class="convertido">
                    <?php

                        $resultadofinal;
                        $invalido;
                        $i;

                        //Após o click do botão 'binario'
                        if(isset($_POST['binario'])){ 

                        $numero = ($_POST['binario']);
                        //A quantidade de caracteres inseridos é atrabuída ao contador. Subtrai-se 1, porque serão usadas as posições dos caracteres, onde a contagem começa do 0, ou seja, o primeiro caractere está na posição 0.
                        $i = strlen($numero) - 1; 

                            $invalido = 0;
                            //Validação de cada caracter, para conferir se o número inserido é binário
                            do {

                                if ($numero[$i] == "0" || $numero[$i] == "1"){
                                    $i--;

                                }
                                else{
                                    $i--;
                                    $invalido++;


                                }
                            }while ($i >= 0);

                            if($invalido >= 1){
                                $resultadofinal = "Inválido";
                            }else{
                                $resultadofinal = bindec($_POST['binario']);
                            }

                        echo $resultadofinal;
                        }
                    ?>
                </div>
            </div>
            <!-- Fim do resultado  -->
        </div>
        <!-- Fim da calculadora  -->
    </div>
    <!-- Fim Conteudo  -->
</body>
</html>