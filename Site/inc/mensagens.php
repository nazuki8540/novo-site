<div
                class="bs-toast toast toast-placement-ex m-2"
                role="alert"
                aria-live="assertive"
                aria-atomic="true"
                data-delay="2000"
              >
<?php 

if(!empty($_GET['erro'])){
  

  switch ($_GET['erro']) {
      case '1':
        echo '
        <div style="margin-bottom: auto;margin-top:10px;" class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <i class="bx bx-bell me-2"></i>
            <div class="me-auto fw-semibold">Item cadastrado com sucesso!</div>
            <small> </small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Seu item foi cadastrado com sucesso!
          </div>
        </div>';
          break;
      case '2':
          echo'
        <div style="margin-bottom: auto;margin-top:10px;" class="bs-toast toast fade show bg-primary" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <i class="bx bx-bell me-2"></i>
            <div class="me-auto fw-semibold">Bootstrap</div>
            <small> </small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Fruitcake chocolate bar tootsie roll gummies gummies jelly beans cake.
          </div>
        </div>';
        break;
        case '3':
          echo'
        <div style="margin-bottom: auto;margin-top:10px;" class="bs-toast toast fade show bg-secondary" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <i class="bx bx-bell me-2"></i>
            <div class="me-auto fw-semibold">Logado com sucesso! </div>
            <small> </small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Seja bem vindo!
          </div>
        </div>';
        break;
        case '4':
          echo'

        <div style="margin-bottom: auto;margin-top:10px;" class="bs-toast toast fade show bg-danger" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <i class="bx bx-bell me-2"></i>
            <div class="me-auto fw-semibold">Dados incorretos</div>
            <small> </small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Por favor verifique os dados inseridos!
          </div>
        </div>';
        break;
        case '5':
          echo'

        <div style="margin-bottom: auto;margin-top:10px;" class="bs-toast toast fade show bg-danger" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <i class="bx bx-bell me-2"></i>
            <div class="me-auto fw-semibold">Bootstrap</div>
            <small> </small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Fruitcake chocolate bar tootsie roll gummies gummies jelly beans cake.
          </div>
        </div>';
        break;
        case '6':
          echo '

        <div style="margin-bottom: auto;margin-top:10px;" class="bs-toast toast fade show bg-warning" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <i class="bx bx-bell me-2"></i>
            <div class="me-auto fw-semibold">Bootstrap</div>
            <small> </small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Fruitcake chocolate bar tootsie roll gummies gummies jelly beans cake.
          </div>
        </div>';
        break;
        case '7':
          echo'
        <div style="margin-bottom: auto;margin-top:10px;" class="bs-toast toast fade show bg-info" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <i class="bx bx-bell me-2"></i>
            <div class="me-auto fw-semibold">Bootstrap</div>
            <small> </small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Fruitcake chocolate bar tootsie roll gummies gummies jelly beans cake.
          </div>
        </div>';
        break;
        case '8':
          echo'
        <div style="margin-bottom: auto;margin-top:10px;" class="bs-toast toast fade show bg-dark" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <i class="bx bx-bell me-2"></i>
            <div class="me-auto fw-semibold">Bootstrap</div>
            <small> </small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Fruitcake chocolate bar tootsie roll gummies gummies jelly beans cake.
          </div>
        </div>
      ';
          break;
      
      
  }
}


?>
</div>