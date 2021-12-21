

<x-layout>

  <x-navbar/>
  
  <form action="{{route('login')}}" method="POST">
    @csrf
    <div class="container">
      <div class="row vh-100 align-items-center justify-content-center">
        <div class="col-6 card p-5">
           <form>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Indirizzo mail</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="Password1">
              </div>
              <button type="submit" class="btn btn-primary">Accedi</button>
              <a href="/register">Non hai un account?Registrati</a>
           </form>
        </div>
      </div>
    </div>







  </form>
  
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif

</x-layout>