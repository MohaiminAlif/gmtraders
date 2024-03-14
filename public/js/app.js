
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
   



