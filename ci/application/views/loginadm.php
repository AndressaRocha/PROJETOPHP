<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body style="background-color: #F6F6F6;">
        <div style="border: groove; padding: 15px; width: fit-content; margin-left: 30%; margin-top: 10%; background-color: #FFF;" >
            <h1 style=" margin: 0px; font-family: arial, sans serif;">Entre com o login de Administrador</h1>
            <form action="/ci/index.php/adm/auth" method="post" class="formulario" style="padding-left: 30px;">
                    <label class="form-login"><spam style="font-size: 24px; font-family:arial, sans-serif">EMAIL: </spam></label> <input type="email" name="email"
                    style=" width: 40%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;"/><br><br>
                    <label class="form-login"><spam style="font-size: 24px; font-family:arial, sans-serif">SENHA:  </spam></label><input type="password" name="senha"
                    style=" width: 30%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;"/><br><br>
                    <input type="submit" class="btn btn-primary btn-xl-1 js-scroll-trigger" 
                    style="font-family: Arial; color: #ffffff; font-size: 20px; background: #3498db; padding: 10px 20px 10px 20px; margin-left: 40%;"/>
            </form>
        </div>
    </body>
</html>