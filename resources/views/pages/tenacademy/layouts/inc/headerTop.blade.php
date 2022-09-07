<div class="header-top">
    <div class="auto-container">
        <div class="clearfix">

            <!-- Top Left -->
            <div class="top-left pull-left clearfix">

                <!-- Info List -->
                <ul class="info-list">
                    <li><span>Call Us:</span><a href="tel:+123-456-7890"> +1 (800) 123-4567</a></li>
                    <li><span>Email Us:</span><a href="mailto:info@yourcompany.com"> info@yourcompany.com</a></li>
                </ul>

            </div>

            <!-- Top Right -->
            <div class="top-right pull-right clearfix">
                <!-- Login Nav -->
                @if (auth()->user())
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                        Log Out
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @else
                    <ul class="login-nav">
                        @if (Route::has('login'))
                            <li>
                                <a href="{{ route('login') }}">Log In</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li>
                                <a href="{{ route('register') }}">Register</a>
                            </li>
                        @endif

                    </ul>
                @endif
            </div>

        </div>
    </div>
</div>
