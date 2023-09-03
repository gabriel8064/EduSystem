<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Loguin</title>
    <link rel="stylesheet" type="text/css" href="css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/font_aw6/css/all.css"/>
    <link rel="stylesheet" type="text/css" href="./assets/font_aw6/css/fontawesome.css"/>
   
  </head>
  <style> 
   * {
	padding: 0;
	margin: 0;
	
}
   
h1 {
	text-align: center;
	padding: 12px;
	color: rgb(206, 203, 203)
}

    body{
      background-color: rgb(30,144,255);
      width: 100%;
	    height:110%;
      color: black;
    }
      #img-bg {
    
        height:100%;
        width: 100%;
        background-position:center;
        background-repeat: no-repeat;
        background-size: cover;
      background-attachment: fixed;
      }

      .bad {
              margin-bottom:0px;
            margin-top: -750px;
             text-align:center;
             width:80%;
             margin-left: 200px;
            height: 50px;
             padding-left: 20px;
             
              background-color: #a22;
             color: #fff
        }
.box{
  margin-bottom: 100px;
}
    
    </style>
     
    
    
  <body id="img-bg">
    
  <section class="hero is-fullheight" >
    <div class="hero-body">
      <div class="container">
        <div class="columns is-centered">
              <div class="column is-4 mt-6">
                  <!----------- Caja contenedora del Login ------------>
                  <div class="box">
                    <figure class="image is-3by2">
                      <img src="images/zyro-image.png">
                    </figure>
                      <div class="field">
                        <form action=validar.php method="POST">
                        <label class="label">Usuario </label>
                        <p class="control has-icons-left has-icons-right">
                          <input class="input" type="text" name="usuario" id="usuario" placeholder="ej. nomd12" required>
                          <span class="icon is-small is-left">
                            <i class="fas fa-user"></i>
                          </span>
                        </p>
                      </div>

                      <div class="field">
                        <label class="label">Contraseña </label>
                        <p class="control has-icons-left has-icons-right">
                          <input class="input" name="password" id="password" type="password" placeholder="****" required>
                          <span class="icon is-small is-left">
                            <i class="fas fa-lock"></i>
                          </span>
                        </p>
                      </div>
                      <label class="checkbox">
                        <input type="checkbox" onclick="mostrar()"> Mostrar contraseña
                      </label>
                      <div class="buttons is-right">
                        <input class="button is-info is-3" name ="registrarse" type="submit" value="Ingresar">
                      </div>
                      </form>
                  </div>
              </div>
        </div>
      </div>
    </div>
  </section>
  
  </body>
</html>
<script type="text/javascript">
  function mostrar() {
     var tipo = document.getElementById("password");
     if(tipo.type == 'password'){
      tipo.type ='text';
      }
     else 
     {
      tipo.type = 'password';

     }

  }

</script>