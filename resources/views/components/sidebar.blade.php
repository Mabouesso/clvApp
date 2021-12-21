<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="card bg-dark">
      <div class="card-body bg-dark box-profile">
        <div class="text-center">
          <img class="profile-user-img img-fluid img-circle" src="{{asset('images/user.png')}}" alt="Photo de profil de l'utilisateur">
        </div>

        <h3 class="profile-username text-center ellipsis"><font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;"></font></font>
        </h3>

        <p class="text-muted text-center"><font style="vertical-align: inherit;">
        <font style="vertical-align: inherit;"> </font></font></p>

        <ul class="list-group list-group-unbordered mb-3">
          <li class="list-group-item">
            <a href="#" class="d-flex align-items-center"> <i class="fa fa-lock pr-2"> Mot de passe </i></a>
          </li>
          <li class="list-group-item">
            <a href="#" class="d-flex align-items-center"> <i class="fa fa-user pr-2"> Mon profil </i></a>
          </li>
        </ul>

        <a class="btn btn-primary btn-block" href=" " onclick="">
            Déconnexion
        </a>

        <form id="" action="" method="POST" class="d-none">
            @csrf
        </form>
      </div>
      <!-- /.card-body -->
    </div>
  </aside>
