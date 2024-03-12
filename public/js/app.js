const tiltElement = document.getElementById('tilt-element');

document.addEventListener('mousemove', (e) => {
    const x = (window.innerWidth / 2 - e.pageX) / -80;
    const y = (window.innerHeight / 2 - e.pageY) / 80;

    tiltElement.style.transform = `rotateX(${y}deg) rotateY(${x}deg)`;
});

// Reset the tilt when the mouse leaves the element
tiltElement.addEventListener('mouseleave', () => {
    tiltElement.style.transform = 'rotateX(0) rotateY(0)';
});




function expandElement() {
    const titleElement = document.getElementById('tilt-element');
            titleElement.innerHTML = `
               

                
            <h1 class="text-midddle text-black">GM Traders</h1>
            <p class="text-midddle text-black">We bring you the best quality bags</p>


                <form method="POST" action="{{ route('login') }}">
                    @csrf
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
   


// function expandElement() {
//     const tiltElement = document.getElementById('tilt-element');
    
//     tiltElement.style.width = '600px'; // Double the width
//     tiltElement.style.height = '400px'; // Double the height

//     // Add two input fields and two buttons
//     const input1 = document.createElement('input');
//     input1.type = 'text';
//     input1.placeholder = 'Input 1';

//     const input2 = document.createElement('input');
//     input2.type = 'text';
//     input2.placeholder = 'Input 2';

//     const input3 = document.createElement('input');
//     input2.type = 'text';
//     input2.placeholder = 'Input 2';

//     const input4 = document.createElement('input');
//     input2.type = 'text';
//     input2.placeholder = 'Input 2';

//     tiltElement.appendChild(input1);
//     tiltElement.appendChild(input2);
//     tiltElement.appendChild(input3);
//     tiltElement.appendChild(input4);
// }

