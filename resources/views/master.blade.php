<!DOCTYPE html>
<html>
<head>
        <title>Codefee</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/cd4110fb6e.js" crossorigin="anonymous"></script>
        <style>
        /*Hide spinner in input number*/
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }

        /* Firefox */
        input[type=number] {
        -moz-appearance:textfield;
        }  

        div {
  margin: 10px;
}
        </style>
</head>

<body>

        <div class="container">
                <div class="card">
                    <div class="card-body">
                    

                    <header>
                            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                <a class="navbar-brand" href="/blog">Codefee</a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="/blog/tentang" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Tentang
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/blog/kontak">Kontak</a>
                                        <a class="dropdown-item" href="/blog/service">Service</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="/blog/admin">Data Admin</a>
                                    </li>
                                    
                                </div>
                                </nav>
                        </header>
                        <hr/>
                        <br/>

                        <br/>

                        <h3> @yield('judul_halaman')</h3>

                        <!-- Ini konten view -->
                        <ul class="list-group list-group-horizontal" style="text-align:center">
                        <div class="card" style="width:200px">
                        <img class="card-img-top" src="https://image.freepik.com/free-vector/profile-icon-male-avatar-hipster-man-wear-headphones_48369-8728.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">John Doe</h4>
                            <p class="card-text">Some example text.</p>
                        
                            <a href="#" class="btn btn-primary"> Data Admin</a>
                        </div>
                        
                        </div>
                        <div class="card" style="width:200px">
                        <img class="card-img-top" src="https://image.freepik.com/free-vector/profile-icon-male-avatar-hipster-man-wear-headphones_48369-8728.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">John Doe</h4>
                            <p class="card-text">Some example text.</p>
                        
                            <a href="#" class="btn btn-primary"> Data Admin</a>
                        </div>
                        </div>
                        </ul>

                      
                        

                        @yield('konten')

                        <br/>
                        <br/>
                        <hr/>

                        <footer>
                            <p style="text-align:center" Codefee @ 2019 </p>
                        </footer>

                </div>
		    </div>
	</div>
    

     <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>