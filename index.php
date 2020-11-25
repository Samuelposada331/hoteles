<!DOCTYPE html>
<html>
<head>

  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="open-iconic/font/css/open-iconic-bootstrap.min.css">
    

    <title>hoteles</title>
  
</head>


  <?php  ?>

<header>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Hoteles</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="about.html">Nosotros</a></li>
          <li class="nav-item"><a class="nav-link" href="precios.html">Precios</a></li>
          <li class="nav-item"><a class="nav-link" href="terms.html">Términos y condiciones</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.html">Contacto</a></li>
           <li id="modonocturno" class="nav-item"><a class="nav-link"><span class="oi oi-eye"></span></li>
        </ul>
      </div>
    </nav>

    <div class="banner">
      <img src="images/banner_playa.jpg" class="img-fluid" alt="responsive image" style="width: 100%; height: 400px;">
      <h2 class=" display-4 " style="margin: 40px;" id="title">HOTELES</h2>
    </div>
      
</header>

<body>

    <!-- Container-->

    <div class="container-fluid" id="container">

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">Home</li>
        </ol>
      </nav>
      <div class="row">
        <div class="col-sm-4">
          <button class="btn btn-outline-success" type="bitton" data-toggle="collapse" data-target="#funciona" aria-expanded="false" aria-controls="multiCollapse1">¿Como funciona?</button>
        </div>
        <div class="col-sm-4">
          <button class="btn btn-outline-success" type="bitton" data-toggle="collapse" data-target="#reserva" aria-expanded="false" aria-controls="multiCollapse2">¿Donde puedo reservar?</button>
        </div>
        <div class="col-sm-4">
          <button class="btn btn-outline-success" type="bitton" data-toggle="collapse" data-target="#pago" aria-expanded="false" aria-controls="multiCollapse3">¿Como pago?</button>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4 collapse multi-collapse" id="funciona">
          <p>
            <h3>¿Como funciona?</h3>
            <p>Busca los hoteles de acuerdo a tu preferencia.</p>
          </p>  
        </div>
        <div class="col-sm-4 collapse multi-collapse" id="reserva">
          <p>
            <h3>¿Donde puedo reservar?</h3>
            <p>Eliges la ciudad que te interese y luego realizas la reserva con tus datos.</p>
          </p>
        </div>
        <div class="col-sm-4 collapse multi-collapse" id="pago">
          <p>
            <h3>¿Como pago?</h3>
            <p>Utiliza el metodo de pago virtual favorito.</p>
          </p>
        </div> 
      </div>
      <hr>

   

     <!-- Container-->

     <div id="catalogo" class="d-flex flex-wrap flex-row-reverse">
        <div class="card card-hotel d-flex flex-column justify-content-between ml-2">
          <img src="images/acqua.jpg" class="card-img-top" alt="responsive-image">
          <div class="card-body">
            <h5 class="card-title" data-toggle="tooltip" data-placement="top" title="Las primeras reservas llevan un suvenir">Hotel Acqua Medellín</h5>
            <h6 class="card-subtitle text-muted">Medellín</h6>
            <p class="card-text">hotel sencillo con habitaciones modernas y desayuyno continental gratuito.</p>
          </div>
          <div>
           <button type="button" class="btn btn-outline-success btn-reserva" data-toggle="modal1" data-target="#reserva">Saber mas</button>
          </div>
        </div>
        <div class="card card-hotel d-flex flex-column justify-content-between ml-2">
          <img src="images/ibis.jpg" class="card-img-top" alt="responsive-image">
          <div class="card-body">
            <h5 class="card-title" data-toggle="tooltip" data-placement="top" title="precios rebajados por temporaada">Hotel Ibis Medellín</h5>
            <h6 class="card-subtitle text-muted">Medellín</h6>
            <p class="card-text">Hotel económico y funcional con habitaciones básicas, un sofisticado bar y amplio restaurante.</p>
          </div>
          <div>
            <button type="button" class="btn btn-outline-success btn-reserva" data-toggle="modal2" data-target="#reserva" data-toggle="popover" title="reservaciones" data-content="consulta las reservas disponibles">Saber mas</button>
          </div>
        </div>
        
        <div class="card card-hotel d-flex flex-column justify-content-between ml-2">
          <img src="images/movich1.jpg" class="card-img-top" alt="responsive-image">
          <div class="card-body">
            <h5 class="card-title" data-toggle="tooltip" data-placement="top" title="Nuevas habitaciones disponibles">Movich Las Lomas Hotel <span class="badge badge-success">Nuevo</span></h5>
            <h6 class="card-subtitle text-muted">Medellín</h6>
            <p class="card-text">Hotel con piscina exterior, restaurante internacional, spa y habitaciones y suites, algunas con balcón.</p>
          </div>
          <div>
            <button type="button" class="btn btn-outline-success btn-reserva" data-toggle="modal3" data-target="#reserva">Saber mas</button>
          </div>
        </div>

        <div class="card card-hotel d-flex flex-column justify-content-between ml-2">
          <img src="images/carlton.jpg" class="card-img-top" alt="responsive-image">
          <div class="card-body">
            <h5 class="card-title" data-toggle="tooltip" data-placement="top" title="Las primeras reservas llevan un suvenir">Hotel Dann Carlton Medellín</h5>
            <h6 class="card-subtitle text-muted">Medellín</h6>
            <p class="card-text">Torre de apartamentos con habitaciones de estilo clásico, piscina y terraza en la azotea.</p>
          </div>
          <div>
            <button type="button" class="btn btn-outline-success btn-reserva" data-toggle="modal4" data-target="#reserva">Saber mas</button>
          </div>
        </div>

        <div class="card card-hotel d-flex flex-column justify-content-between ml-2">
          <img src="images/casa_mosaico.jpg" class="card-img-top" alt="responsive-image">
          <div class="card-body">
            <h5 class="card-title" data-toggle="tooltip" data-placement="top" title="Ultimas reservas">Casa Mosaico Hotel Boutique</h5>
            <h6 class="card-subtitle text-muted">Medellín</h6>
            <p class="card-text">Hotel colonial con habitaciones, suites y una cabaña de estilo bohemio, un spa, un bar y un restaurante</p>
          </div>
          <div>
            <button type="button" class="btn btn-outline-success btn-reserva" data-toggle="modal5" data-target="#reserva20">Saber mas</button>
          </div>
        </div>
      </div>

       </div>

      <!---Modal--->

      <div class="modal fade" id="reserva1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"><!--Duda-->
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Contacto con el hotel</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Tu email</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Mensaje</label>
                  <textarea class="form-control" id="message-text"></textarea>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-success">Enviar</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="reserva2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"><!--Duda-->
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Contacto con el hotel</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Tu email</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Mensaje</label>
                  <textarea class="form-control" id="message-text"></textarea>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-success">Enviar</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="reserva3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"><!--Duda-->
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Contacto con el hotel</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Tu email</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Mensaje</label>
                  <textarea class="form-control" id="message-text"></textarea>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-success">Enviar</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="reserva4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"><!--Duda-->
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Contacto con el hotel</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Tu email</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Mensaje</label>
                  <textarea class="form-control" id="message-text"></textarea>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-success">Enviar</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="reserva5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"><!--Duda-->
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Contacto con el hotel</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Tu email</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Mensaje</label>
                  <textarea class="form-control" id="message-text"></textarea>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-success">Enviar</button>
            </div>
          </div>
        </div>
      </div>

      <!---Footer--->

      <footer>
        <div class="row container-fluid">
          <div class="col-sm-4 d-flex flex-column">
            <a href="http://www.twitter.com">twitter</a>
            <a href="http://www.facebook.com">Facebook</a>
            <a href="http://www.instagram.com">instagram</a>
          </div>

          <div class="col-sm-4 d-flex flex-column">
           <address>
             <h4>oficina central</h4>
             <p><span class="oi oi-home footer-address-icon"></span>Medellin-Colombia</p>
             <p><span class="oi oi-inbox footer-address-icon"></span>contacto@guiahoteles.com</p>
             <p><span class="oi oi-phone footer-address-icon"></span>+57 320 643 6693</p>
           </address>
         </div> 

         <div class="col-sm-4 d-flex flex-column align-items-end">
          <a href="nosotros.html">Nosotros</a>
          <a href="precios.html">Precios</a>
          <a href="term.html">Terminos y condiciones</a>
        </div>
      </div>
    </footer>
    <script src="jquery/dist/jquery.min.js"></script>
    <script src="popper.js/dist/umd/popper.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/aldd.js"></script>
</body>

</html>