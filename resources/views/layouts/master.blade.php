<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projek Akhir</title>
    @include('Partials.style')
  </head>
  <body>
    <br>
    <br>
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-o shadow rounded px-5 py-5">
        @yield('content')
    </div>
          </div>
              </div>
                    </div>
    @include('sweetalert::alert')                
    @include('Partials.script')
  </body>
</html>