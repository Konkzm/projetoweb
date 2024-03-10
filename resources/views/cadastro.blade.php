<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN MJR TECH</title>
    <!-- LINK BOOTSRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- link para máscara de formatação cpf -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"
        integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"
        integrity="sha512-0XDfGxFliYJPFrideYOoxdgNIvrwGTLnmK20xZbCAvPfLGQMzHUsaqZK8ZoH+luXGRxTrS46+Aq400nCnAT0/w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <picture>
        <style>
            *{
                margin: 0%;
                padding: 0%;
                border-radius: 0%;
            }
            
            body{
                background-image: url("./img/FUNDO.png");
            }
        </style>
    </picture>
    
    <main>
        
        <header>
            <nav>
                <img src="img/MJR LOGO.png" alt="LOGO" class="rounded mx-auto d-block">
            </nav>
        </header>

        <section>
            <form action="./home.html" class ="w-25 p-5 rounded mx-auto d-block fs-5 " >
                
               <style>
                form{
                    margin-top:-200px;
                }
                
                label , #login {
                 color: rgb(214, 107, 74);
                 font-family: Comic Sans MS;
                }

                input{
                    font-family: Comic Sans MS;
                }

                #ntenho{
                    color: rgb(221, 61, 61);
                    font-family: Comic Sans MS;
                }
               </style>
               
                <p id="login" class="fs-2 text-center mb-1">CADASTRO:</p>

                <label class="fs-2 d-flex flex-column mb-1">Cpf*</label>
                <input required type="text" class=" cpf w-100 text-center" placeholder="000.000.000-00">

                <label class="fs-2 d-flex flex-column mb-1">Senha*</label>
                <input required type="password" class="w-100 text-center" placeholder="Senha">

            <div class="btn-group w-100 mt-4" style="gap: 20px;">
                <button type="submit" class="btn btn-outline-success w-50">ENVIAR</button>
                <button type="reset" class="btn btn-outline-danger w-50 ">LIMPAR</button>
            </div>

                    <a href="login" class="text-decoration-none"><p id="ntenho" class="fs-2 text-center mb-1 mt-5 ">VOLTAR</p></a>
            </form>

        </section>

        <footer>

        </footer>


        <!-- SCRIPT PARA MÁSCARA DE FORMATAÇÃO CPF -->
        <script>
            $('.cpf').mask('000.000.000-00', { reverse: true });
        </script>
        <!-- SCRIPT BOOTSTRAP -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    </main>

</body>
</html>