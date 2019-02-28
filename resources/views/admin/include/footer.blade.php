<footer class="footer">
    <div class="container-fluid">
        <nav class="float-left">
            <ul>
                <li>
                    <a href="{{ URL::to('/') }}">
                        Buzanom
                    </a>
                </li>
                <li>
                    <a href="{{ URL::to('/about') }}">
                        About Us
                    </a>
                </li>
                <li>
                    <a href="{{ URL::to('/termsandconditions') }}">
                        Terms & Conditions
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright float-right">
            &copy; 2019 , secured with laravel by <a href="{{ URL::to('/termsandconditions') }}" target="_blank">Buzanom</a> for a better services.
        </div>
    </div>
</footer>
