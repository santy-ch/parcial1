@extends('layouts.app')
@section('botones')
    <a href={{route('pedidos.index')}} type="button" class="btn btn-outline-dark btn-rounded text-black" data-mdb-ripple-color="dark"> REGRESAR</a>
@endsection

@section('content')
<div align="center">
    <h4><a href="">OFERTAS Y DESCUENTOS</a></h4>
    <h2>Nike, Adidas, Puma o Superga: varios modelos de zapatillas de marca en rebajas</h2><br>
    <h4>ZAPATOS DE HOMBRE</h4>
</div>   

<div class="carousel-inner py-4">
  <!-- Single item -->
  <div class="carousel-item active">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="card">
            <img
              src="https://elpais.com/elpais/imagenes/2020/01/07/escaparate/1578393787_794117_1578409521_sumario_grande.jpg"
              class="card-img-top img-thumbnail"
              alt="..."
            />
            <div class="card-body" align="center">
              <h5 class="card-title">Nike</h5>
              <p class="card-text">
                Se trata de una propuesta para quienes buscan un modelo de estilo casual, 
                por ejemplo, para llevar al trabajo. Están disponibles en números desde el 40,5 
                al 48, se cierran con cordones e incluyen la marca en amarillo en un lateral. La 
                parte exterior está elaborada en cuero autentico 100% y llevan una suela gruesa de goma
              </p><br>
              <a href="#!" class="btn btn-primary">Comprar</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 d-none d-lg-block">
          <div class="card">
            <img
              src="https://ep01.epimg.net/elpais/imagenes/2020/01/07/escaparate/1578393787_794117_1578409432_sumario_normal_recorte1.jpg"
              class="card-img-top img-thumbnail"
              alt="..."
            />
            <div class="card-body" align="center">
              <h5 class="card-title">Mustang</h5>
              <p class="card-text">
                Un modelo urbano, atemporal y muy versátil equipado con suela anti-deslizante 
                y un forro interior en contraste de color. En un lateral llevan también bordada 
                la M característica de la marca. Se cierran con cordones y están ahora rebajadas 
                en eBay, donde se pueden comprar en colores como negro, burdeos y gris. Los números 
                disponibles varían del 40 al 45
              </p>
              <a href="#!" class="btn btn-primary">Comprar</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 d-none d-lg-block">
          <div class="card">
            <img
              src="https://ep01.epimg.net/elpais/imagenes/2020/01/07/escaparate/1578393787_794117_1578409463_sumario_normal_recorte1.jpg"
              class="card-img-top img-thumbnail"
              alt="..."
            />
            <div class="card-body" align="center">
              <h5 class="card-title">New Balance</h5>
              <p class="card-text">
                Otro ejemplo de calzado deportivo que comenzó siendo exclusivo de los lugares
                 de entrenamiento y que ahora abarrota las calles es este modelo de New Balance. 
                 Con una suela muy cómoda, combina en el diseño exterior el cuero y los revestimientos 
                 sintéticos. Se pueden adquirir en nueve colores distintos en números desde el 36 al 47
              </p>
              <a href="#!" class="btn btn-primary">Comprar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="row" style="height: 130ch" align="center">
    <div class="col align-self-end" >
        <div class="card">
          <img
            src="https://ep01.epimg.net/elpais/imagenes/2020/01/07/escaparate/1578393787_794117_1578409369_sumario_normal_recorte1.jpg"
            class="card-img-top img-thumbnail"
            alt="..."
          />
          <div class="card-body">
            <h5 class="card-title">Adidas</h5>
            <p class="card-text">
              Ideales para renovar el calzado de los corredores habituales. 
              Con horma clásica, suela de goma con refuerzo en el talón y 
              en el mediopié, están recomendadas para un entrenamiento multideporte. 
              Incluye también una mediasuela ligera y la parte superior está elaborada
               en malla y piel sintética. Se pueden adquirir en colores como rojo, azul
                marino, gris o negro en números que van desde la 40 a la 44, aunque no 
                todos están disponibles en todos los colores.
            </p>
            <a href="#!" class="btn btn-primary">Comprar</a>
          </div>
        </div>
    </div>
    <div class="col align-self-end">
        <div class="card">
          <img
            src="https://ep01.epimg.net/elpais/imagenes/2020/01/07/escaparate/1578393787_794117_1578409401_sumario_normal_recorte1.jpg"
            class="card-img-top img-thumbnail"
            alt="..."
            style="height: 30ch"
          />
          <div class="card-body">
            <h5 class="card-title">Puma</h5>
            <p class="card-text">
              Se trata de una propuesta para quienes buscan un modelo de estilo casual,
               por ejemplo, para llevar al trabajo. Están disponibles en números desde el
                40,5 al 48, se cierran con cordones e incluyen la marca en amarillo en un 
                lateral. La parte exterior está elaborada en cuero autentico 100% y llevan
                 una suela gruesa de goma
            </p>
            <a href="#!" class="btn btn-primary">Comprar</a>
          </div>
        </div>
    </div>
    <div class="col align-self-end">
        <div class="card">
          <img
            src="https://ep01.epimg.net/elpais/imagenes/2020/01/07/escaparate/1578393787_794117_1578409301_sumario_normal_recorte1.jpg"
            class="card-img-top img-thumbnail"
            alt="..."
          />
          <div class="card-body">
            <h5 class="card-title">Kappa</h5>
            <p class="card-text">
              Quienes estén buscando calzado para hacer deporte, pueden optar por esta 
              propuesta técnica perfecta para los entrenamientos. Están recomendadas tanto
               para hombre como para mujer, la suela es de goma y la parte superior, decorada
                con el logo de Kappa, está confeccionada en poliester y poliuretano. Se pueden
                 comprar ahora rebajadas en eBay en dos combinaciones de colores: azul marino/gris
                  y negro/naranja
            </p><br>
            <a href="#!" class="btn btn-primary">Comprar</a>
          </div>
        </div>
    </div>
  </div> 

</div>
</div>
<div align="center">
  <h4><a href="">OFERTAS Y DESCUENTOS</a></h4>
  <h4>ZAPATOS DE MUJER</h4>
</div>
<div class="row" style="height: 50ch" align="center">
    <div class="col align-self-end" >
        <div class="card">
          <img
            src="https://ep01.epimg.net/elpais/imagenes/2020/01/07/escaparate/1578393787_794117_1578409548_sumario_normal_recorte1.jpg"
            class="card-img-top img-thumbnail"
            alt="..."
          />
          <div class="card-body">
            <h5 class="card-title">Asics</h5>
            <p class="card-text">
              Una gran oportunidad para quienes buscan calzado específico para el running
               y con una buena sujección. Son unas deportivas versátiles con un empeine sin
                costuras y más ligeras que el modelo anterior. Aseguran una pisada estable, 
                incluyen una horma SpEVAfoam, y una suela interior Ortholite. Se pueden adquirir 
                a un precio de rebaja en números desde el 36 al 39,5 y en color rosa.
            </p><br><br><br><br><br>
            <a href="#!" class="btn btn-primary">Comprar</a>
          </div>
        </div>
    </div>
    <div class="col align-self-end">
        <div class="card">
          <img
            src="https://ep01.epimg.net/elpais/imagenes/2020/01/07/escaparate/1578393787_794117_1578409611_sumario_normal_recorte1.jpg"
            class="card-img-top img-thumbnail"
            alt="..."
            style="height: 30ch"
          />
          <div class="card-body">
            <h5 class="card-title">Nike</h5>
            <p class="card-text">
              Se trata de otra propuesta para los amantes del deporte, en este caso de la marca Nike, 
              que se caracteriza por una suela gruesa con relieve anti-deslizante. Además de garantizar
               una amortiguación ultrasuave, incluye una banda regulable en el puente para lograr un sujección
                acorde a cada tipo de pie. El exterior están confeccionadas con una malla ligera para fomentar
                 la transpiración. Los números disponibles van desde el 37 al 41 y se puede elegir entre el modelo en negro y el blanco
            </p>
            <a href="#!" class="btn btn-primary">Comprar</a>
          </div>
        </div>
    </div  style="height: 100ch">
    <div class="col align-self-end">
        <div class="card">
          <img
            src="https://ep01.epimg.net/elpais/imagenes/2020/01/07/escaparate/1578393787_794117_1578472502_sumario_normal_recorte1.jpg"
            class="card-img-top img-thumbnail"
            alt="..."
          />
          <div class="card-body">
            <h5 class="card-title">Reebok</h5>
            <p class="card-text">
              Se trata de un modelo de la mítica firma de calzado deportivo Reebook ideal para cualquier
               ocasión. Están elaboradas en cuero y tienen una altura de tacón de un centímetro. La suela 
               está elaborada en goma para mayor comodidad y agarre
            </p><br><br><br><br><br><br><br><br>
            <a href="#!" class="btn btn-primary">Comprar</a>
          </div>
        </div>
    </div>
  </div> 
  
  <br><br><br><br><br><br><br><br><br><br>
  <footer class="bg-light text-center">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Form -->
      <section class="">
        <form action="">
          <!--Grid row-->
          <div class="row d-flex justify-content-center">
            <!--Grid column-->
            <div class="col-auto">
              <p class="pt-2">
                <strong>Suscribete a nuestra pagina!!</strong>
              </p>
            </div>
            <!--Grid column-->
  
            <!--Grid column-->
            <div class="col-md-5 col-12">
              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" id="form5Example2" class="form-control" />
                <label class="form-label" for="form5Example2">Email address</label>
              </div>
            </div>
            <!--Grid column-->
  
            <!--Grid column-->
            <div class="col-auto">
              <!-- Submit button -->
              <button type="submit" class="btn btn-primary mb-4">
                Subscribe
              </button>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </form>
      </section>
      <!-- Section: Form -->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2021 Copyright:
      <a class="text-dark" href="">CALZADO_zatis.com</a>
    </div>
    <!-- Copyright -->
  </footer>
@endsection