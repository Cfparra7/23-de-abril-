<!DOCTYPE html5>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" >
</head>
<body>
       <form action="" method="GET">
           <br>
             <div class="container">
                 <div class="row">
                      <div class="col-md-8 col-md-offset-2">
                          <div class="panel panel-primary">
                              <div class="panel-heading">
                                   Calculadora Basica SENA
                              </div>
                              <div class="panel-body">
                                  <div class="row">
                                      <div class="col-md-6">
                                          <label for="">Numero 1</label>
                                          <input type="number" value="" class="form-control" name="numero1" id="numero1" required>
                                      </div>
                                    
                                      <div class="col-md-6">
                                          <label for="">Numero 2</label>
                                          <input type="number" value="" class="form-control" name="numero2" id="numero1" required>
                                      </div>
                                  </div>
                                  <hr>
                                   <button type="submit" class="btn btn-primary pull-right">Sumar</button>
                                   <button type="submit" class="btn btn-danger pull-right">Restar</button>
                                </div>
                          </div>
                      </div>
                 </div>
             </div>
       </form>
       <div class="container">
           <div class="row">
               <div class="col-md-8 col-md-offset-2">
                  <div class="alert alert-success">
                    El resultado de la suma es: <strong>resultado</strong>
                  </div>
               </div>
           </div>
       </div>
</body>
</html>
<?php
    print('hello world');
?>