<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    
body {
    font-family: 'Montserrat';
    font-style: Italic;
    /* background-image: url("https://images.pexels.com/photos/255379/pexels-photo-255379.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"); */
    background-color: aliceblue;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    padding:20px;
    
  }
  
  .header {
    text-align: center;
    padding: 20px;
    font-size:20px;
  }
  
  /* Responsive layout - makes a two column-layout instead of four columns */
  @media (max-width: 800px) {
    .column {
      flex: 46%;
      max-width: 46%;
    }
  }
  
.card-deck{
    justify-content: center;
}

.card-footer{
    justify-content: center;
}
  .card {
    opacity: 0.8;
    filter: alpha(opacity=60);
    max-width: 28%;
  }
  .card-title {
    font-weight:bold;
    text-align: center;
  }
  .card-text {
    text-align: justify;
  }
  
  .modal-header {
    background-image: linear-gradient(#7FDBFF,white);
  }
  .modal-footer {
    background-image: linear-gradient(white,#7FDBFF);
  }
  #left-panel-link {
    position: relative;
    left: 5%;
    background-color: #555;
    color: white;
    font-size: 16px;
    padding: 12px 20px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
  }
  #right-panel-link {
    position: absolute;
    right: 10%;
    background-color: #555;
    color: white;
    font-size: 16px;
    padding: 12px 20px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
  }
  .sep {
    height: 25px;
  }
  </style>
  </head>
  <body>
  
    <!-- Header -->
  <div class="header">
    <img src="{{ asset('black') }}/img/logo.jpeg" alt="cu">
  </div>

  <!-- Photo Grid -->
      <!-- Row 1 -->
  <div class="card-deck">
      <div class="card">
        <form action="{{route('calc.hour')}}" method="post" enctype="multipart/form-data">
          @csrf
        {{-- <img class="card-img-top" src="http://www.orseu-concours.com/451-615-thickbox/selor-test-de-raisonnement-abstrait-niveau-a.jpg" alt="Company logo"> --}}
        <h3 class="mt-5" style="text-align: center" >Bem vindo(a) ao aplicativo de calculo dos valores de adicional noturno e feriados da rede de hospitais universitários</h3>
        <hr>
        <div class="card-body">
          <h5 class="card-title">Informe seus dados</h5>
          <ul class="list-group">
            <li class="list-group-item list-group-item-success">
                
                  <i class="fa fa-briefcase"style="font-size:20px;"></i> Selecione o código <select class="btn" name="cars" id="cars">
                    <option value="volvo">T6578</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                  </select></li>
            <li class="list-group-item list-group-item-success"><i class="fa fa-user"style="font-size:20px;"></i>Insalubridade<input class="btn" name="insalubridade" type="number">%</li>
            <li class="list-group-item list-group-item-success"><i class="fa fa-map-marker"style="font-size:20px;"></i>Horas feriado <input class="btn" name="horasFeriado" type="number"></li>
            <li class="list-group-item list-group-item-success"><i class="fa fa-clock-o"style="font-size:20px;"></i>Qtd plantoes <input class="btn" name="qtdPlantoes" type="number"></li>
            <li class="list-group-item list-group-item-success"><i class="fa fa-clock-o"style="font-size:20px;"></i>Carga horaria <input class="btn" name="cargaHoraria" type="number"></li>
          </ul>
          <div style="text-align: center">
            <button class="btn"  type="submit">Calcular</button>
          </div>
         
        </div>
        <div class="card-footer" style="justify-content: center;">
          {{-- <button type="button" class="btn" id="left-panel-link" type="submit" >Calcular</button> --}}
          @if (isset($receiveF) || isset($receiveAd) )
          <h4>Valor a receber de Horas feriado = {{$receiveF}} </h4>
          <h4>Valor a receber de Adicional noturn = {{$receiveAd}} </h4>
          @endif
          
        </form>
</button>
        </div>
      </div>
      
        
  <div class="sep"></div>

<!--Modal 1-->
  {{-- <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title 1</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div> --}}
</div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>

</html>