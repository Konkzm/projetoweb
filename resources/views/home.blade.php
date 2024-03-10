<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME MJR TECH</title>
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
            * {
                margin: 0%;
                padding: 0%;
                border-radius: 0%;
            }

            body {
                background-image: url("./img/FUNDO.png");
            }
        </style>
    </picture>

    <main>
        <header>
            <nav>
                <img src="img/MJR LOGO.png" alt="LOGO" class="rounded mx-auto d-block" style="height: 70vh;">
            </nav>
        </header>

        <section class="produtos-geral">

            <style>
                /* Efeito de aumento quando o mouse passa sobre as imagens */
                #produtos:hover {
                    transform: scale(1.12);
                    /* Aumenta o tamanho em 5% */
                }

                #produtos {
                    flex: 1;
                    margin: 10px;
                    text-align: center;
                    transition: transform 0.2s;
                    /* Adiciona uma transição suave no tamanho da imagem */
                }

            </style>
            
            <div class="d-flex justify-content-around overflow-hidden" style="margin-top: -40px;">
            
                <a href="placadevideo.html"><img id="produtos" src="img/placadevideo.png" alt="" style="height: 30vh;"></a>
                
                <a href="cpu.html"><img id="produtos" src="img/cpu.png" alt="" style="height: 30vh;"></a>

                <a href="placamae.html"><img id="produtos" src="img/placamae.png" alt="" style="height: 30vh;"></a>

                <a href="fontes.html"><img id="produtos" src="img/fontes.png" alt="" style="height: 30vh;"></a>
            </div>
        </section>

        <footer>

        </footer>

        <!-- SCRIPT BOOTSTRAP -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    </main>

</body>

</html>