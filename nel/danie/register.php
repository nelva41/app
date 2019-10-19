<html>
    <head>
        <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
        <title>Inscription</title>
    </head>
    <body background="images/globe.jpg" style="background-size : cover;">
        <form action="Controllers/UtilisateurDAO.php" method="POST">
        <div class="row" style="top: 50%; left: 50%; position: absolute; transform: translate(-50%, -60%); box-sizing: border-box;"> 
            <div class="col-sm-4"> 
                <div class="card" style="border-radius:20px; width:400px;">
                    <div class="card-body"> 
                            <form method="POST" action="login.php">
                             <div class="form-group"> 
                                <h3 class="card-title" style="text-align: center; margin-bottom: 15px;"> <b> Inscription </b></h3>
                               <input type="text" class="form-control" id="exampleInputNom" name="Nom"
                               aria-describedby="nomHelp" placeholder="Nom" style="border: none; margin-top: 15px;
                                border-bottom: 1px solid  rgb(214, 58, 110);"  required> 
                             </div> 
                             <div class="form-group"> 
                                <input type="text" placeholder="Prenom" class="form-control" id="exampleInputPrenom" name="Prenom"
                                style="border: none; border-bottom: 1px solid  rgb(214, 58, 110); margin-top: 5px; margin-bottom: 10px;" required> 
                             </div>
                             <div class="form-group"> 
                                    <input type="email" placeholder="Email" class="form-control" id="exampleInputEmail" name="Compte"
                                    style="border: none; border-bottom: 1px solid  rgb(214, 58, 110); margin-top: 5px; margin-bottom: 10px;" required> 
                             </div> 
                             <div class="form-group"> 
                                    <input type="tel" placeholder="Numero de telephone" class="form-control" id="exampleInputTel" name="Telephone"
                                    style="border: none; border-bottom: 1px solid  rgb(214, 58, 110); margin-top: 5px; margin-bottom: 10px;" required> 
                             </div>
                             <div class="form-group"> 
                                    <input type="password" placeholder="Mot de passe" class="form-control" id="exampleInputPassword1" name="MotDePasse"
                                    style="border: none; border-bottom: 1px solid  rgb(214, 58, 110); margin-top: 5px; margin-bottom: 10px;" required> 
                             </div>
                             <div class="form-group"> 
                                    <input type="password" placeholder="Confirmer le mot de passe" class="form-control" id="exampleInputConfirmPassword1" 
                                    style="border: none; border-bottom: 1px solid  rgb(214, 58, 110); margin-top: 5px; margin-bottom: 10px;" required> 
                             </div>
                             
                             <div class="form-group" style="align: center;"> 
                             <input type="submit" value="         Valider        " style="margin-left: 50px; margin-bottom: 5px; text-align: center;  margin-top: 10px;" class="btn btn-primary"> 
                             </div> 
                             <div class="form-group" > 
                                    <a href="login.php" style="font-size:14px; color: rgb(168, 89, 53); text-align: center;"> 
                                        Vous avez déjà un compte? Connectez-vous!</a>
                             </div> 
                            </form> 
                    </div> 
                </div> 
            </div> 
        </div>
        </form>
        

        <!--start header 
        
        -->
         
          <!--end header 
        
        -->
          
          
  
          <!--start body -->
          
         
         



          <!--end body -->
          
          
          
          <!--start footer -->
         
                                    
          <!--end footer -->
          
          

        <script src="js/jquery-3.3.1.slim.min.js"></script> 
        <script src="js/popper.min.js"></script> 
        <script src="js/bootstrap.min.js" ></script>
    </body>
</html>


