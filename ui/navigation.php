<nav class="navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
                <img src="{% static 'images/logow.png' %}" width="30" height="30" alt="">
              </a>
                <a class="navbar-brand" href="#">iNgage</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
          
                <div class="collapse navbar-collapse" id="navbarsExample02">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="/home/">Home <span class="sr-only">(current)</span></a>
                    </li>
                   
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Pollution 
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="/humidity/">Humidity</a>
                          <a class="dropdown-item" href="#">Water</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="/total-pollution/">Total Pollution</a>
                        </div>
                      </li>
                  </ul>
                  
                        <button class="btn btn-outline-success my-2 my-sm-0" type="button" onclick="logout()">Log Out</button>
                
                </div>
              </nav>