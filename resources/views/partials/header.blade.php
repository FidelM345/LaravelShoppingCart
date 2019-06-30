<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Larashop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">

          <ul class="navbar-nav ml-auto">
           
                <li class="nav-item">
                <a class="nav-link" href="{{route('view-cart')}}">
                  
                  <span class="badge badge-primary">{{Session::has('cart')?Session::get('cart')->totalQty:''}}</span>
                   <i class="fa fa-shopping-cart"></i> Shopping Cart</a>
                </li>

                <li class="nav-item dropdown ">  

                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user"></i> User Account 
                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Login</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something </a>
                </div>
              
            </li>
          </ul>
        </div>
      </nav>