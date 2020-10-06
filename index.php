<!DOCTYPE html>
<html>
    <head>
        <title>Questionário</title>
    </head>
    <body>
        <?php
            if(isset($_POST['acao'])){
                $respostas = array('20','Douglas','programação');
                $pontuacao = 0;
                $index = 0;
                foreach ($_POST as $key => $value){
                    if($key != 'acao'){
                        if($respostas[$index] == $value){
                            $pontuacao++;
                        }
                        $index++;
                    }
                    
                }
                echo '<h2>O seu resultado final foi: </h2>'.$pontuacao.'/'.($index);
            }        
        ?>
        <form method="post">
            <p>Quantos anos você tem?</p>
            <span>20</span> <input type="radio" name="pergunta1" value="20">
            <br />
            <span>30</span> <input type="radio" name="pergunta1" value="30">
            <br />
            <span>40</span> <input type="radio" name="pergunta1" value="40">
            <br />
            <hr>
            <p>Qual seu nome?</p>
            <span>Douglas</span> <input type="radio" name="pergunta2" value="Douglas">
            <br />
            <span>Floki</span> <input type="radio" name="pergunta2" value="Floki">
            <br />
            <span>July</span> <input type="radio" name="pergunta2" value="July">
            <br />
            <hr>
            <p>O que você gosta de fazer?</p>
            <span>esportes</span> <input type="radio" name="pergunta3" value="esportes">
            <br />
            <span>programação</span> <input type="radio" name="pergunta3" value="programação">
            <br />
            <span>comer</span> <input type="radio" name="pergunta3" value="comer">
            <br />
            <hr>
            <input type="submit" name="acao" value="Enviar">
        </form>
    </body>
</html>