<?php   
    
    if(isset($_POST['submit']))
    {
    //print_r($_POST['nome']);
    //print_r($_POST['email']);
    //print_r($_POST['senha']);
    //print_r($_POST['idade']);
    //print_r($_POST['altura']);
    //print_r($_POST['peso']);
    //print_r($_POST['sexo']);
    //print_r($_POST['rotina']);

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $idade = $_POST['idade'];
    $altura = $_POST['altura'];
    $peso = $_POST['peso'];
    $sexo = $_POST['sexo'];
    $rotina = $_POST['rotina']; 
    
    $result = mysqli_query($conexao, "INSERT INTO form1(nome,email,senha,idade,altura,peso,sexo,rotina)
    VALUES ('$nome','$email','$senha','$idade','$altura','$peso','$sexo','$rotina')");

    header('Location: login.php');  
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form1.css">
    <title>Document</title>

</head>
<body>
    <div class="esquerda">
        <h1>Preencha o Formulário <br>e faça parte da nossa academia</h1>
        <img src="Workout.gif" alt="agachameto" class="esquerda-imagem">
    </div>
    <div class="content">
        <h1>Formulário</h1>
        <form id="form" action="form.php" method="POST">
            <div>
                <input type="text" name="nome" placeholder="Digite seu nome" class="inputs required" oninput="nameValidate()">
                <span class="span-required"> Nome deve ter no mínimo 3 caracteres</span>
            </div>
            <div>
                <input type="email" name="email" placeholder="Digite seu email" class="inputs required" oninput="emailValidate()">
                <span class="span-required"> Digite um email válido</span>
            </div>
            <div>
                <input type="password" name="senha" placeholder="Senha" class="inputs required" oninput="mainPasswordValidate()">
                <span class="span-required"> Digite uma senha com no mínimo 8 caracteres</span>
            </div>
            <div>
                <input type="number" name="idade" placeholder="Idade" class="inputs required">
                <span class="span-required"> Digite sua Idade</span>
            </div>
            <div>
                <input type="number" name="peso" placeholder="Peso em Kg" class="inputs required">
                <span class="span-required"> Digite seu Peso</span>
            </div>
            <div>
                <input type="number" name="altura" placeholder="Altura" class="inputs required">
                <span class="span-required"> Digite sua Altura</span>
            </div>

            
            <p class="titulo2">Sexo:</p>
            <div class="box-select">
                <div>
                    <input  type="radio" name="sexo" id="m" value="m"  name="sexo">
                    <label for="m">Masculino</label>
                </div>
                <div>
                    <input  type="radio" name="sexo" id="f" value="f"  name="sexo">
                    <label for="f">Feminino</label>
                </div>
                <div>
                    <input  type="radio" name="sexo" id="o" value="o"  name="sexo">
                    <label for="o">Outro</label>
                </div>

            </div>
            <p class="titulo2">Considerando a sua rotina de exercícios físicos:</p>
            <div class="box-select">
                <div>
                    <input  type="radio" name="rotina" id="1" value="1"  name="atividades">
                    <label for="1">Nenhuma</label>
                </div>
                <div>
                    <input  type="radio" name="rotina" id="2" value="2"  name="atividades">
                    <label for="2">Intensa</label>
                </div>
                <div>
                    <input  type="radio" name="rotina" id="3" value="3"  name="atividades">
                    <label for="3">Moderada</label>
                </div>
            </div>    
                <button type="submit" name="submit" class="required">Enviar</button>
        </form>
    </div>
</body>
<script>
    const form = document.getElementById('form');
    const campos = document.querySelectorAll('.required');
    const spans = document.querySelectorAll('.span-required');
    const emailRegex = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
    //form.addEventListener('submit', (event) => 
    //{
    //    event.preventDefault();
   //     nameValidate();
   //     emailValidate();
   //     mainPasswordValidate();
  //      resetInput(form);
   //     
   // }
   // );
    


    function nameValidate(){
       if(campos[0].value.length < 3)
       {
            setError(0);
       }
       else
       {
            removeError(0)
       }
    }

    function setError(index){
        campos[index].style.border = '2px solid #e63636';
        spans[index].style.display = 'block';
    }

    function removeError(index){
        campos[index].style.border = '';
        spans[index].style.display = 'none';
    }

    function emailValidate(){
        if(!emailRegex.test(campos[1].value))
        {
            setError(1);
        }
        else
        {
            removeError(1)
        }
    }

    function mainPasswordValidate(){
        if(campos[2].value.length < 8)
        {
            setError(2);
        }
        else
        {
            removeError(2)
        }
    }
    
</script>
</html>