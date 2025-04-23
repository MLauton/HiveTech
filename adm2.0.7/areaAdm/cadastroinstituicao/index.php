<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <img src="./img/fundinho.jpg" alt="" class="img">



    <div class="container">



        <div class="center">

            <div class="ladinho">




                <div class="form">
                    <form action="../instituicao/controler.php" method="post">

                        <div id="sessao1" class="forms">
                            <div class="textoEsq">

                                <h2>Olá, Seja Bem Vindo! passo 1-4</h2>

                            </div>

                            <div class="linhaTenue">
                                <div class="linha"></div>
                            </div>

                            <div class="containerInputs">
                                <div class="tamanhoInput">
                                    <input class="esconde" type="text" name="nome" placeholder="Nome" required>
                                </div>

                                <div class="tamanhoInput">
                                    <input class="esconde" type="text" name="cnpj" placeholder="CNPJ" required>
                                </div>

                                <div class="tamanhoInput">
                                    <input class="esconde" type="email" name="email" placeholder="E-mail" required>
                                </div>

                                <div class="tamanhoInput">
                                    <input class="esconde" type="telefone" name="numero" placeholder="Telefone">
                                </div>
                            </div>

                            <button class="btn btns" type="button" id="proximo">Próximo</button>

                        </div>
                        <div id="sessao2" class="forms">
                            <div class="textoEsq">

                                <h2>Insira o endereço passo 2-4</h2>

                            </div>

                            <div class="linhaTenue">
                                <div class="linha"></div>
                            </div>

                            <div class="containerInputs">
                                <div class="tamanhoInput">
                                    <input type="file" name="" id="" required>
                                </div>

                                <div class="tamanhoInput">
                                    <input type="file" name="" id="" required>
                                </div>

                                <div class="tamanhoInput">
                                    <input type="file" name="" id="" required>
                                </div>

                                <div class="tamanhoInput">
                                    <input class="esconde" type="link" name="link" placeholder="Link do site">
                                </div>
                            </div>


                            <div class="containerBtn">
                                <button class="btns" type="button" id="voltar">Voltar</button>
                                <button class="btn btns" type="button" id="proximo">Próximo</button>
                            </div>

                        </div>

                        <div id="sessao3" class="forms">
                            <div class="textoEsq">

                                <h2>passo 3-4</h2>

                            </div>

                            <div class="linhaTenue">
                                <div class="linha"></div>
                            </div>

                            <div class="containerInputs">
                                <div class="tamanhoInput">
                                    <textarea name="" id=""></textarea>
                                </div>

                                <div class="tamanhoInput">
                                    <label for="textarea">Caracteristica 1</label>
                                    <textarea name="" id=""></textarea>
                                </div>

                                <div class="tamanhoInput">
                                    <label for="textarea">Caracteristica 1</label>
                                    <textarea name="" id=""></textarea>
                                </div>

                                <div class="tamanhoInput">
                                    <label for="textarea">Caracteristica 1</label>
                                    <textarea name="" id=""></textarea>
                                </div>

                                <div class="tamanhoInput">
                                    <label for="textarea">Caracteristica 1</label>
                                    <textarea name="" id=""></textarea>
                                </div>
                            </div>

                            <div class="containerBtn">
                                <button class="btns" type="button" id="voltar">Voltar</button>
                                <button class="btn btns" type="button" id="proximo">Próximo</button>
                            </div>

                        </div>

                        <div id="sessao4" class="forms">
                            <div class="textoEsq">

                                <h2>passo 4-4</h2>

                            </div>

                            <div class="linhaTenue">
                                <div class="linha"></div>
                            </div>

                            <div class="containerInputs">
                                <div class="tamanhoInput">
                                    <input class="esconde" type="text" name="cep" placeholder="cep" required>
                                </div>

                                <div class="tamanhoInput">
                                    <input class="esconde" type="text" name="logradouro" placeholder="logradouro" required>
                                </div>

                                <div class="tamanhoInput">
                                    <input class="esconde" type="text" name="numero" placeholder="numero" required>
                                </div>

                                <div class="tamanhoInput">
                                    <input class="esconde" type="text" name="bairro" placeholder="bairro" required>
                                </div>

                                <div class="tamanhoInput">
                                    <input class="esconde" type="text" name="cidade" placeholder="cidade" required>
                                </div>

                                <div class="tamanhoInput">
                                    <input class="esconde" type="text" name="estado" placeholder="estado" required>
                                </div>

                                <div class="tamanhoInput">
                                    <input class="esconde" type="text" name="complemento" placeholder="complemento" required>
                                </div>
                                
                            </div>

                            <div class="containerBtn">
                                <button class="btns" type="button" id="voltar">Voltar</button>
                                <button class="btn btns" type="button" id="proximo">Próximo</button>
                            </div>

                        </div>
                    </form>
                </div>

            </div>

        </div>

    </div>


    <script src="./js/forms.js"></script>

</body>

</html>