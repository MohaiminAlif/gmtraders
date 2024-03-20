<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}"> <!-- CSRF token meta tag -->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ 'GM Traders' }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <!-- Style -->
    
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
   

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    
   
</head>
<body>

    <div class="tilt-container">
        <div class="tilt-element" id="tilt-element">
           
            <h1 class="text-midddle text-black">GM Traders</h1>
            <p class="text-midddle text-black">We bring you the best quality bags</p>
    
            

            @guest
                @if (Route::has('login'))
                     <button class="login-button" onclick="expandElement()">Log In</button>
                     @endif

                     @if (Route::has('register'))
                         
                         <a href="{{ route('register') }}"><button class="signup-button">Register</button></a>
                        
                @endif

                @else
                

                    <h3 class="user">User: {{ Auth::user()->name }}</h3>

                    <button class="dashboard-button"><a href="{{ route('dashboard') }}">
                        Dashboard
                    </a></button> 
                    
                    <button class="logout-button"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a></button>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
         

            @endguest
            
   
        </div>
 
    </div>

    
</body>

<script>
        // Set data attribute to store the route URL
        // document.getElementById('dynamic-form-container').setAttribute('data-route', '{{ route('login') }}');
        
        // Call the generateDynamicForm function from dynamic-form.js
        generateDynamicForm('dynamic-form-container');



        // Function to get CSRF token from meta tag
        function getCsrfToken() {
            return document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        }

       
        function expandElement() {
        const titleElement = document.getElementById('tilt-element');
            titleElement.innerHTML = `
               

                
            <h1 class="text-midddle text-black">GM Traders</h1>
            <p class="text-midddle text-black">We bring you the best quality bags</p>


                <form method="POST" action="{{ route('login') }}">
                    <input type="hidden" name="_token" value="${getCsrfToken()}"> <!-- CSRF token input field -->
                    <label for="inp" class="inp">

                    <input type="email" name="email" class="input-field" @error('email') is-invalid @enderror" name="email" placeholder="Email" required autocomplete="email" autofocus>

                    <input type="password" name="password" class="input-field" placeholder="Password" required>

                    <input type="submit" class="login" value="Login">
                    <p class="cancel-link"><a href="">Back</a></p>
                
                    </label>
                </form>

              
                
                
            `;

            const tiltElement = document.getElementById('tilt-element');
            tiltElement.style.width = '600px';
            tiltElement.style.height = '400px';


}


    const tiltElement = document.getElementById('tilt-element');

    document.addEventListener('mousemove', (e) => {
        const x = (window.innerWidth / 2 - e.pageX) / 80;
        const y = (window.innerHeight / 2 - e.pageY) / 50;

        tiltElement.style.transform = `rotateX(${y}deg) rotateY(${x}deg)`;
    });

    // Reset the tilt when the mouse leaves the element
    tiltElement.addEventListener('mouseleave', () => {
        tiltElement.style.transform = 'rotateX(0) rotateY(0)';
    });

</script>
</html>