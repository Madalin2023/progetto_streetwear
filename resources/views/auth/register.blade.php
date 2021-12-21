

<x-layout>
 
  <x-navbar/>
  
  <form action="{{route('register')}}" method="POST">
    @csrf
    <div class="container">
      <div class="row vh-100 align-items-center justify-content-center">
        <div class="col-6">
           <form>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Indirizzo mail</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome Utente</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="UserNameHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="Password1">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Conferma Password</label>
                <input type="password" class="form-control" name="password_confirmation" id="repeatPassword1">
              </div>
              <button type="submit" class="btn btn-primary">Registrati</button>
              <a href="/login">Hai gia un account?Accedi</a>
           </form>
        </div>
      </div>
    </div>
  </form>

</x-layout>