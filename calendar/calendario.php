<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Salão Beleza Real</title>
    <!-- carregar o CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300"> 
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous"> <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <link rel="stylesheet" href="calendd.css"> 

    <script>
        document.documentElement.className = "js";
        var supportsCssVars = function() {
            var e, t = document.createElement("style");
            return t.innerHTML = "root: { --tmp-var: bold; }", document.head.appendChild(t), e = !!(window.CSS && window.CSS.supports && window.CSS.supports("font-weight", "var(--tmp-var)")), t.parentNode.removeChild(t), e
        };
        supportsCssVars() || alert("Please view this in a modern browser such as latest version of Chrome or Microsoft Edge.");
    </script>

</head>

<body>
<form action="agenda.php"method="post" enctype="multipart/form-data">
    <select class="form-control" name="diaSem" id="diaSem" onclick="semana()">
        <option value="nulo">Opções...</option>
        <?php
        $i = 0;
        for ($x = 0; $x < 5; $x++) {
            $diasemana = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado');
            $data = date('Y-m-d');
            $diasemana_numero = date('w', strtotime('+' . $i . ' day', strtotime($data)));

            if ($diasemana[$diasemana_numero] == 'Sabado') {
                $i = $i + 2;
                $amanha = new DateTime('+' . $i . ' day');
                $i++;
                $dia = $amanha->format('d/m');
        ?>
                <option value="<?php echo $amanha->format('d/m'); ?>"><?php echo $amanha->format('d/m'); ?></option>
            <?php
            } else {
                $amanha = new DateTime('+' . $i . ' day');
                $i++;
                $dia = $amanha->format('d/m');
            ?>
                <option value="<?php echo $amanha->format('d/m'); ?>"><?php echo $amanha->format('d/m'); ?></option>
        <?php
            }
        }
        ?>
    </select>
    <div id="conteudo"></div>
    <button type='submit' class="btn-warning">Confirmar</button>
    </form>
    <script src="../js/jquery-3.2.1.min.js"></script>
<script src="../js/jquery-migrate-3.0.0.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/jquery.waypoints.min.js"></script>
<script src="../js/jquery.stellar.min.js"></script>
<script src="../js/jquery.magnific-popup.min.js"></script>
<script src="../js/magnific-popup-options.js"></script>
<script>
function semana() {

var diaSem = document.getElementById("diaSem");

if (diaSem.value === "nulo"){

    $('.horariosAtual').hide();
    $('.proxDias').hide();

}else if (diaSem.value === "<?php echo date('d/m')?>"){
    $('.horariosAtual').toggle('hide');
    $('.proxDias').hide();
}else {
    $('.proxDias').toggle('hide');
    $('.horariosAtual').hide();
}

}
function horaHoje() {
    $('.confirmacao').show();

}
function horaProx() {
$('.confirmacao').show();

}
</script>
    <script>
        
function semana() {

var diaSem = document.getElementById("diaSem");

if (diaSem.value === "nulo"){

    $('.horariosAtual').hide();
    $('.proxDias').hide();

}else if (diaSem.value === "<?php echo date('d/m')?>"){
    $('.horariosAtual').toggle('hide');
    $('.proxDias').hide();
}else {
    $('.proxDias').toggle('hide');
    $('.horariosAtual').hide();
}

}
</script>
<script>
    $(document).ready(function(e) {
        $("body").delegate("#diaSem", "change", function(data){
            //Pegando o valor do select
            var valor = $(this).val();
            //Enviando o valor do meu select para ser processado e
            //retornar as informações que eu preciso
            $("#conteudo").load("horarioDisp.php?parametro="+ valor);

        });
    });
</script>
</body>
</html>