<div class="upper-bar">
    <div class="container">
        <div class="row">

            <div class="col-12 col-lg-8 footer-ph">
                <p class="upper-bar-desc"><i class="far fa-envelope"></i> <a class="mail"
                        href="mailto:info@egncda.com">info@egncda.com</a></p>
            </div>

            <div class="col-lg-2">
                <a class="btn btn-primary" href="{{ route('redeemyourpoints') }}">Redeem Your Points</a>
            </div>


            @if (!Auth::guest())
            <div class="col-lg-2">

                <span class="upper-bar-logout">
                    <i class="fas fa-edit"></i>
                    <a class="" href="{{ route('profile') }}">
                        Edit Profile
                    </a>

                </span>
            </div>


            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>
            @endif
        </div>
    </div>
</div>