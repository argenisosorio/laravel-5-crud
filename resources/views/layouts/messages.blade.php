@if(Session::has('info'))
  <div id="alert-message" class="alert alert-success alert-dismissible fade show" role="alert">
    {{ Session::get('info') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

  <script>
    // Obtener el elemento del mensaje de alerta
    var alertMessage = document.getElementById('alert-message');

    // Programar la eliminación del mensaje después de 4 segundos
    setTimeout(function() {
      alertMessage.remove();
    }, 4000);
  </script>
@endif
