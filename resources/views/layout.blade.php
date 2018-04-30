
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Posting</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

  </head>

  <body>

    <header>
      <div class="navbar navbar-dark bg-dark box-shadow nav nav-tabs">
        <div class="container d-flex justify-content-between">

            <li class="nav-item">
                <a class="navbar-brand" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="navbar-brand" href="/add_post">Add New</a>
            </li>

        </div>
      </div>

    </header>

    <main role="main">

      <div class="album py-5 bg-light">
        <div class="container">

          @yield('content')

        </div>
      </div>

    </main>

  </body>
</html>
