@extends('layouts.app')
@section('botones')
    <a href={{route('pedidos.index')}} type="button" class="btn btn-outline-dark btn-rounded text-black" data-mdb-ripple-color="dark"> REGRESAR</a>
@endsection

@section('content')
<div align="center">
    <h4><a href="">OFERTAS Y DESCUENTOS</a></h4>
    <h2>Nike, Adidas, Puma o Superga: 15 modelos de zapatillas de marca en rebajas</h2>
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
              class="card-img-top"
              alt="..."
            />
            <div class="card-body" align="center">
              <h5 class="card-title">Nike</h5>
              <p class="card-text">
                Se trata de una propuesta para quienes buscan un modelo de estilo casual, 
                por ejemplo, para llevar al trabajo. Están disponibles en números desde el 40,5 
                al 48, se cierran con cordones e incluyen la marca en amarillo en un lateral. La 
                parte exterior está elaborada en cuero autentico 100% y llevan una suela gruesa de goma
              </p>
              <a href="#!" class="btn btn-primary">Comprar</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 d-none d-lg-block">
          <div class="card">
            <img
              src="https://ep01.epimg.net/elpais/imagenes/2020/01/07/escaparate/1578393787_794117_1578409432_sumario_normal_recorte1.jpg"
              class="card-img-top"
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
              class="card-img-top"
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
  
  <div class="carousel-item">
    <div class="container">
      <div class="row">
        <div class="">
          <div class="card">
            <img
              src="https://mdbootstrap.com/img/new/standard/nature/184.jpg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up the bulk
                of the card's content.
              </p>
              <a href="#!" class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>

        <div class="col-lg-8 d-none d-lg-block">
          <div class="card">
            <img
              src="https://mdbootstrap.com/img/new/standard/nature/185.jpg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up the bulk
                of the card's content.
              </p>
              <a href="#!" class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 d-none d-lg-block">
          <div class="card">
            <img
              src="https://mdbootstrap.com/img/new/standard/nature/186.jpg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up the bulk
                of the card's content.
              </p>
              <a href="#!" class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Single item -->
  <div class="carousel-item">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
          <div class="card">
            <img
              src="https://mdbootstrap.com/img/new/standard/nature/187.jpg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up the bulk
                of the card's content.
              </p>
              <a href="#!" class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
          <div class="card">
            <img
              src="https://mdbootstrap.com/img/new/standard/nature/188.jpg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up the bulk
                of the card's content.
              </p>
              <a href="#!" class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
          <div class="card">
            <img
              src="https://mdbootstrap.com/img/new/standard/nature/189.jpg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up the bulk
                of the card's content.
              </p>
              <a href="#!" class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Inner -->
</div>
<!-- Carousel wrapper -->

    
@endsection