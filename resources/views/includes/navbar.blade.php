@section('navbar')
<nav class="navbar navbar-dark bg-dark">
<h3><a href="{{action('poetcontroller@show',['id'=>$user->poetcode])}}">Inicio</a></h3>  
</nav>
  @show
