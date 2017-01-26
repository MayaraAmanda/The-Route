<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <title>Cadastrar Perfil</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body onload="sortear();">
    <style>
    </style>
    <div class="container">

        <h1>Identificação do usuário</h1>
        <form action="~/Profiles/CreatePost" id="form" method="post" enctype="multipart/form-data">
            USUÁRIO:
            
            Preferências:<br /><br />

            <!-- Primeira DIV -->
            <div class="row divImagens" id="div1">
                <div class="col-md-2">
                    <label>
                        <a class="numero1"><img id="img" src="" class="img-thumbnail img-check" /></a>
                        <input type="radio" name="numeroDiv1" value="1" class="numero" onclick="getValues()" hidden><br>
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <a class="numero1"><img id="img1" src="" class="img-thumbnail img-check" /></a>
                        <input type="radio" name="numeroDiv1" value="2" class="numero" onclick="getValues()" hidden><br>
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <a class="numero1"><img id="img2" src="" class="img-thumbnail img-check" /></a>
                        <input type="radio" name="numeroDiv1" value="3" class="numero" onclick="getValues()" hidden><br>
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <a class="numero1"><img id="img3" src="" class="img-thumbnail img-check" /></a>
                        <input type="radio" name="numeroDiv1" value="4" class="numero" onclick="getValues()" hidden><br>
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <a class="numero1"><img id="img4" src="" class="img-thumbnail img-check" /></a>
                        <input type="radio" name="numeroDiv1" value="5" class="numero" onclick="getValues()" hidden><br>
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <a class="numero1"><img id="img5" src="" class="img-thumbnail img-check" /></a>
                        <input type="radio" name="numero" value="6" class="numero" onclick="getValues()" hidden><br>
                    </label>
                </div>
            </div>
            <!-- Segunda DIV -->
            <div class="row divImagens" id="div2" hidden>
                <div class="col-md-2">
                    <label>
                        <a class="numero2"><img id="img6" src="" class="img-thumbnail img-check" /></a>
                        <input type="radio" name="numeroDiv2" value="1" class="numero" onclick="getValues()" hidden><br>
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <a class="numero2"><img id="img7" src="" class="img-thumbnail img-check" /></a>
                        <input type="radio" name="numeroDiv2" value="2" class="numero" onclick="getValues()" hidden><br>
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <a class="numero2"><img id="img8" src="" class="img-thumbnail img-check" /></a>
                        <input type="radio" name="numeroDiv2" value="3" class="numero" onclick="getValues()" hidden><br>
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <a class="numero2"><img id="img9" src="" class="img-thumbnail img-check" /></a>
                        <input type="radio" name="numeroDiv2" value="4" class="numero" onclick="getValues()" hidden><br>
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <a class="numero2"><img id="img10" src="" class="img-thumbnail img-check" /></a>
                        <input type="radio" name="numeroDiv2" value="5" class="numero" onclick="getValues()" hidden><br>
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <a class="numero2"><img id="img11" src="" class="img-thumbnail img-check" /></a>
                        <input type="radio" name="numeroDiv2" value="6" class="numero" onclick="getValues()" hidden><br>
                    </label>
                </div>
            </div>

            <!-- TERCEIRA DIV -->
            <div class="row divImagens" id="div3" hidden>
                <div class="col-md-2">
                    <label>
                        <a class="numero3"><img id="img12" src="" class="img-thumbnail img-check" /></a>
                        <input type="radio" name="numeroDiv3" value="1" class="numero" onclick="getValues()" hidden><br>
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <a class="numero3"><img id="img13" src="" class="img-thumbnail img-check" /></a>
                        <input type="radio" name="numeroDiv3" value="2" class="numero" onclick="getValues()" hidden><br>
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <a class="numero3"><img id="img14" src="" class="img-thumbnail img-check" /></a>
                        <input type="radio" name="numeroDiv3" value="3" class="numero" onclick="getValues()" hidden><br>
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <a class="numero3"><img id="img15" src="" class="img-thumbnail img-check" /></a>
                        <input type="radio" name="numeroDiv3" value="4" class="numero" onclick="getValues()" hidden><br>
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <a class="numero3"><img id="img16" src="" class="img-thumbnail img-check" /></a>
                        <input type="radio" name="numeroDiv3" value="5" class="numero" onclick="getValues()" hidden><br>
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <a class="numero3"><img id="img17" src="" class="img-thumbnail img-check" /></a>
                        <input type="radio" name="numeroDiv3" value="6" class="numero" onclick="getValues()" hidden><br>
                    </label>
                </div>
            </div>

            <!-- QUARTA DIV -->
            <div class="row divImagens" id="div4" hidden>
                <div class="col-md-2">
                    <label>
                        <a class="numero4"><img id="img18" src="" class="img-thumbnail img-check" /></a>
                        <input type="radio" name="numeroDiv4" value="1" class="numero" onclick="getValues()" hidden><br>
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <a class="numero4"><img id="img19" src="" class="img-thumbnail img-check" /></a>
                        <input type="radio" name="numeroDiv4" value="2" class="numero" onclick="getValues()" hidden><br>
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <a class="numero4"><img id="img20" src="" class="img-thumbnail img-check" /></a>
                        <input type="radio" name="numeroDiv4" value="3" class="numero" onclick="getValues()" hidden><br>
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <a class="numero4"><img id="img21" src="" class="img-thumbnail img-check" /></a>
                        <input type="radio" name="numeroDiv4" value="4" class="numero" onclick="getValues()" hidden><br>
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <a class="numero4"><img id="img22" src="" class="img-thumbnail img-check" /></a>
                        <input type="radio" name="numeroDiv4" value="5" class="numero" onclick="getValues()" hidden><br>
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <a class="numero4"><img id="img23" src="" class="img-thumbnail img-check" /></a>
                        <input type="radio" name="numeroDiv4" value="6" class="numero" onclick="getValues()" hidden><br>
                    </label>
                </div>
            </div>

            <!-- QUINTA DIV -->
            <div class="row divImagens" id="div5" hidden>
                <div class="col-md-2">
                    <label>
                        <a class="numero5"><img id="img24" src="" class="img-thumbnail img-check" /></a>
                        <input type="radio" name="numeroDiv5" value="1" class="numero" onclick="getValues()" hidden><br>
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <a class="numero5"><img id="img25" src="" class="img-thumbnail img-check" /></a>
                        <input type="radio" name="numeroDiv5" value="2" class="numero" onclick="getValues()" hidden><br>
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <a class="numero5"><img id="img26" src="" class="img-thumbnail img-check" /></a>
                        <input type="radio" name="numeroDiv5" value="3" class="numero" onclick="getValues()" hidden><br>
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <a class="numero5"><img id="img27" src="" class="img-thumbnail img-check" /></a>
                        <input type="radio" name="numeroDiv5" value="4" class="numero" onclick="getValues()" hidden><br>
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <a class="numero5"><img id="img28" src="" class="img-thumbnail img-check" /></a>
                        <input type="radio" name="numeroDiv5" value="5" class="numero" onclick="getValues()" hidden><br>
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <a class="numero5"><img id="img29" src="" class="img-thumbnail img-check" /></a>
                        <input type="radio" name="numeroDiv5" value="6" class="numero" onclick="getValues()" hidden><br>
                    </label>
                </div>
            </div>

            <input type="submit" id="cadastrar" value="Cadastrar" />
            <input type="text" id="resultado" name="resultado" size="50" hidden>

        </form>
    </div>
    <script src="public/js/profiles.js"></script>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
