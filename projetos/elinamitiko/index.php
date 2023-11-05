<?php 
  require '../utils/acessos.php';
  $novo = new Acesso();
  $linkSite ='elianamitiko.com.br';
  $novo->registrar($linkSite);
  $qtdeAcessos = $novo->getIpAcessos($linkSite);
 
 ?>

<!DOCTYPE html>
<html lang="pt-BR" >

<head><meta http-equiv="Content-Type" content="text/html;">
    
    <title>Eliana Mitiko | Personalizados em Papel | WhatsApp: (44) 9.9772-4251</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet">
    <link rel="icon" href="assets/logo.JPG" type="image/x-icon" />
    <style>
            @import url('https://fonts.googleapis.com/css2?family=Pacifico&family=Poiret+One&display=swap');
    </style>
</head>

<body>
       
    <div class="container">
    <div class="col-xs-12">
            <div class="text-center" style="padding-top: 30px; ">
                 <font face="Poiret One" size="60" style="color: #ffffff">eliana mitiko</font><br><font face="Welcome1"  color="black" size="20">ersonalizado</font>  
            </div>
    </div>
    </div>


    <div class="container">
    <div class="col-xs-12">
            <div class="text-center">
                <div style="padding-bottom: 30px;">
                    <button id="whats" onclick="location.href='https://wa.me/554497724251'" type="button" class="btn btn-outline-light shake" style="width: 80%; padding-top:10px; padding-bottom:10px; font-weight: 800;"> <font face="Poiret One" size="5"> <i class="fa fa-whatsapp"></i> Orçamentos e Pedidos</font><br><font face="Poiret One">(Fale comigo no WhatsApp)</font></button>
                </div>
                <div style="padding-bottom: 30px;">
                    <button id="whats" onclick="location.href='https://wa.me/c/554497724251'" type="button" class="btn btn-outline-light  " style="width: 80%; padding-top:10px; padding-bottom:10px; font-weight: 800;"> <font face="Poiret One" size="5"> <i class="fa fa-shopping-bag"></i> Catálogo de Produtos</font></button>
                </div>
                <div style="padding-bottom: 30px;">
                    <button onclick="location.href='https://www.elo7.com.br/elianamitikoam'" type="button" class="btn btn-outline-light swing" style="width: 80%; padding-top:10px; padding-bottom:10px; font-weight: 600;" target="_blank"><font face="Poiret One" size="5"><i class="fa fa-shopping-bag"></i> Loja na ELO7</font><br><font face="Poiret One"  >(Arquivos Digitais ScanNCut e Silhouette)</font></button>
                </div>
                <div style="padding-bottom: 30px;">
                    <button onclick="location.href='https://shopee.com.br/elianamitiko.personalizados'" type="button" class="btn btn-outline-light swing" style="width: 80%; padding-top:10px; padding-bottom:10px; font-weight: 600;"><font face="Poiret One" size="5"><i class="fa fa-shopping-bag"></i> Loja na Shopee</font></button>
                </div>    
                <div style="padding-bottom: 30px;">
                    <button onclick="location.href='https://instagram.com/elianamitiko.personalizados'" type="button" class="btn btn-outline-light swing" style="width: 80%; padding-top:10px; padding-bottom:10px; font-weight: 600;"><font face="Poiret One" size="4"><i class="fa fa-instagram"></i> @elianamitiko.personalizados </font></button>
                </div>    
                <div style="padding-bottom: 30px;">
                    <button onclick="location.href='https://www.facebook.com/elianamitikoam'" type="button" class="btn btn-outline-light swing" style="width: 80%; padding-top:10px; padding-bottom:10px; font-weight: 600;"><font face="Poiret One" size="5"><i class="fa fa-facebook"></i> @elianamitikoam</font></button>
                </div>     
               
            </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</body>

</html>