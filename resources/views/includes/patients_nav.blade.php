
    @if (isset($idnav))

      <div class="row">
        <div class="col-sm-12">
          <ul class="nav nav-pills bgtra">
            <li><a href="{{ url($routes['patients']."/$idnav") }}"> {{ Lang::get('aroaden.profile') }} </a></li>
            <li><a href="{{ url($routes['patients']."/$idnav/record") }}"> {{ Lang::get('aroaden.record') }} </a></li>
            <li><a href="{{ url($routes['patients']."/$idnav/file") }}"> {{ Lang::get('aroaden.files') }} </a></li>
            <li><a href="{{ url($routes['patients']."/$idnav/odontogram") }}"> {{ Lang::get('aroaden.odontogram') }} </a></li>
            <li><a href="{{ url($routes['budgets']."/$idnav") }}"> {{ Lang::get('aroaden.budgets') }} </a></li>
            <li><a href="{{ url($routes['invoices']."/$idnav") }}"> {{ Lang::get('aroaden.invoices') }} </a></li>
          </ul>
          <hr>
        </div>
      </div>

    @endif