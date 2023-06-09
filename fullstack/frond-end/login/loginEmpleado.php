<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
<div class="container-m">
        <div class="section1">
           
         <div class="d-flex justify-content-center align-items-center logo">
        </div>
            <div class="d-flex justify-content-center align-items-center"><h1 style="font-weight: 800;">BIENVENIDOS</h1></div>
            <div  class="d-flex justify-content-center align-items-center" >
                <form action="logearse.php" method="POST">
                    <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                        <input 
                          type="text"
                          id="email"
                          name="email"
                          class="form-control"  
                        />
                    </div>
                    <div class="mb-3">
                    <label for="password" class="form-label">Password </label>
                        <input 
                          type="password"
                          id="password"
                          name="password"
                          class="form-control"  
                        />
                    </div>
                 
                    <input type="submit" class="btn btn-primary" value="logearse" name="logearse">
                  </form>      
            </div>
      
        </div>
        <div class="section2" id="section2">
             <div class="d-flex justify-content-star " >
                <h1 style="font-weight: 800;font-size:larger;"> Nuevo Registro</h1></div>
          
                
             <div  class="d-flex justify-content-center align-items-center" >
                
                <form action="registrarse.php" method="POST">
                    <h1 class="m-5" style="font-weight: 800;">REGISTRAR USUARIO</h1>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input 
                          type="mail"
                          id="email"
                          name="email"
                          class="form-control"  
                        />
                      </div>
                    <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                        <input 
                          type="text"
                          id="username"
                          name="username"
                          class="form-control"  
                        />
                    </div>
                    <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                        <input 
                          type="password"
                          id="password"
                          name="password"
                          class="form-control"  
                        />
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <input type="submit" class="btn btn-primary" value="registrarse" name="registrarse">
                  </form>

            </div>
                  


                 
         
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>