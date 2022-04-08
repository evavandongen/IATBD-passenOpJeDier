<article class="navbar__wrapper">

    <section class="navbar">
        <figure class="navbar__logo">
            <a href="/dashboard">
                <img src="../img/logo.png" alt="logo">
            </a>
        </figure>
        
        <section class="navbar__buttons">
            <a class="btn navbar__buttons-account" href="/account">
                <span class="material-icons u-noselect">
                    person
                </span> 
                <span class="navbar__buttons-account-name"> {{$thisuser->name}} </span>
            </a>

            @if ($thisuser->role == "Admin")
                <a class="btn navbar__buttons-admin" href="/admin">
                    <span class="material-icons u-noselect">
                        admin_panel_settings
                    </span> 
                </a>
            @endif

            <form method="POST" action="{{route('logout')}}">
                @csrf
            
                <a class="btn navbar__buttons-logout" :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    logout
                </a>
            </form>
    
        </section>

    </section>

</article>