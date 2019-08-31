<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('img/icon.png') }}" class="img-logo" alt="">
        </a>

        <form action="#" class="form-inline my-2 my-lg-0 mr-auto">
            <div class="input-group">
                <input type="text" class="form-control dashboard-search" placeholder="Cari orang / postingan" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    
        <div class="content-desktop">
            <ul class="navbar-nav mr-auto">
                
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-comment-dots"></i> 
                        <span class="notif-1">33</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-bell"></i>
                        <span class="notif-1">21</span>
                    </a>
                </li>
                <!-- 
                <li class="nav-item">
                    <a href="#" class="nav-link btn btn-sm btn-outline-secondary my-2 my-lg-0 mr-3">
                            <i class="fas fa-plus mr-2"></i> Post
                    </a>
                </li> -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ asset('img/profile.jpg') }}" class="img-profile-sm" alt=""> Hi Wildan
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>