
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="estilo_login1.css">
</head>
<body>
    <form class="login" action="testlogin.php" method="post">
        <div class="esquerda">
            <h1>faça seu login <br>E faça parte da nossa academia</h1>
            <img src="Workout.gif" alt="agachameto" class="esquerda-imagem">
        </div>
        <div class="direita">
            <div class="card-login">
                <div class="texto">
                    <label for="Usuario" class="label" class="required" oninput="emailValidate()">Usuario</label>
                    <input type="email" name="email">
                    <span class="span-required"> Digite um email válido</span>
                </div>
                <div class="texto">
                    <label for="senha" class="label" class="required" oninput="mainPasswordValidate()">Senha</label>
                    <input type="password" name="senha">
                    <span class="span-required"> Digite uma senha com no mínimo 8 caracteres</span>
                </div>

                <div id="click">
                    <p>Não tem conta clique <a href="form.php">aqui</a></p>
                </div>
                
                <button name= "submit" type= "submit" class="btn-login">Login</button>
            </div>
        </div>

    </main>

</body>
<script>   
    const form = document.getElementById('form');
    const campos = document.querySelectorAll('.required');
    const spans = document.querySelectorAll('.span-required');
    const emailRegex = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
    //form.addEventListener('submit', (event) => 
    //{
    //    event.preventDefault();
    //    nameValidate();
   //     emailValidate();
    //    mainPasswordValidate();
    //    resetInput(form);
    //    
    //}
    //);
    



    function setError(index){
        campos[index].style.border = '2px solid #e63636';
        spans[index].style.display = 'block';
    }

    function removeError(index){
        campos[index].style.border = '';
        spans[index].style.display = 'none';
    }

    function emailValidate(){
        if(!emailRegex.test(campos[0].value))
        {
            setError(0);
        }
        else
        {
            removeError(0)
            console.log('erro');
        }
    }

    function mainPasswordValidate(){
        if(campos[1].value.length < 8)
        {
            setError(1);
        }
        else
        {
            removeError(1)
        }
    }



</script>
</html>