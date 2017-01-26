
gastronomia = "public/img/imagens/gastronomia/";
ecoturismo = "public/img/imagens/ecoturismo/";
negocios = "public/img/imagens/negocios/";
saude = "public/img/imagens/saude/";
paisagistico = "public/img/imagens/paisagistico/";
religioso = "public/img/imagens/religioso/";
imagem = ["image1", "image2", "image3", "image4", "image5", "image6", "image7", "image8"];
imagemAtual = 0;
imagemAtual1 = 0;
imagemAtual2 = 0;
imagemAtual3 = 0;
imagemAtual4 = 0;

escolhidas = "";

function sortear() {
    imagemAtual = Math.floor((Math.random() * 8));
    imagemAtual1 = Math.floor((Math.random() * 8));
    imagemAtual2 = Math.floor((Math.random() * 8));
    imagemAtual3 = Math.floor((Math.random() * 8));
    imagemAtual4 = Math.floor((Math.random() * 8));
    imagemAtual5 = Math.floor((Math.random() * 8));


    document.getElementById("img").src = gastronomia + imagem[imagemAtual] + ".jpg";
    document.getElementById("img1").src = ecoturismo + imagem[imagemAtual] + ".jpg";
    document.getElementById("img2").src = negocios + imagem[imagemAtual] + ".jpg";
    document.getElementById("img3").src = saude + imagem[imagemAtual] + ".jpg";
    document.getElementById("img4").src = paisagistico + imagem[imagemAtual] + ".jpg";
    document.getElementById("img5").src = religioso + imagem[imagemAtual] + ".jpg";

    document.getElementById("img6").src = gastronomia + imagem[imagemAtual1] + ".jpg";
    document.getElementById("img7").src = ecoturismo + imagem[imagemAtual1] + ".jpg";
    document.getElementById("img8").src = negocios + imagem[imagemAtual1] + ".jpg";
    document.getElementById("img9").src = saude + imagem[imagemAtual1] + ".jpg";
    document.getElementById("img10").src = paisagistico + imagem[imagemAtual1] + ".jpg";
    document.getElementById("img11").src = religioso + imagem[imagemAtual1] + ".jpg";

    document.getElementById("img12").src = gastronomia + imagem[imagemAtual2] + ".jpg";
    document.getElementById("img13").src = ecoturismo + imagem[imagemAtual2] + ".jpg";
    document.getElementById("img14").src = negocios + imagem[imagemAtual2] + ".jpg";
    document.getElementById("img15").src = saude + imagem[imagemAtual2] + ".jpg";
    document.getElementById("img16").src = paisagistico + imagem[imagemAtual2] + ".jpg";
    document.getElementById("img17").src = religioso + imagem[imagemAtual2] + ".jpg";

    document.getElementById("img18").src = gastronomia + imagem[imagemAtual3] + ".jpg";
    document.getElementById("img19").src = ecoturismo + imagem[imagemAtual3] + ".jpg";
    document.getElementById("img20").src = negocios + imagem[imagemAtual3] + ".jpg";
    document.getElementById("img21").src = saude + imagem[imagemAtual3] + ".jpg";
    document.getElementById("img22").src = paisagistico + imagem[imagemAtual3] + ".jpg";
    document.getElementById("img23").src = religioso + imagem[imagemAtual3] + ".jpg";

    document.getElementById("img24").src = gastronomia + imagem[imagemAtual4] + ".jpg";
    document.getElementById("img25").src = ecoturismo + imagem[imagemAtual4] + ".jpg";
    document.getElementById("img26").src = negocios + imagem[imagemAtual4] + ".jpg";
    document.getElementById("img27").src = saude + imagem[imagemAtual4] + ".jpg";
    document.getElementById("img28").src = paisagistico + imagem[imagemAtual4] + ".jpg";
    document.getElementById("img29").src = religioso + imagem[imagemAtual4] + ".jpg";
}

function getValues() {
    var numero = document.forms[0];
    var txt = "";
    var i;
    for (i = 0; i < numero.length; i++) {
        if (numero[i].checked) {
            txt = txt + numero[i].value + " ";
        }
    }
    document.getElementById("resultado").value = txt;

    $(".numero").each(function () {
        if ($(this).prop("checked")) {
            escolhidas = "";
            $("#" + $(this).attr("name") + "Dados").val("");
            escolhidas += $(this).attr("value");
            $("#" + $(this).attr("name") + "Dados").val(escolhidas);
        }
    });

    $(document).ready(function () {
        $("a.numero1").click(function () {
            $("#div1").fadeOut();
            $("#div2").fadeIn();
        });

        $("a.numero2").click(function () {
            $("#div2").fadeOut();
            $("#div3").fadeIn();
        });

        $("a.numero3").click(function () {
            $("#div3").fadeOut();
            $("#div4").fadeIn();
        });

        $("a.numero4").click(function () {
            $("#div4").fadeOut();
            $("#div5").fadeIn();

        });

        $("a.numero5").click(function () {
            $("#div5").fadeOut();

        });

    });
}