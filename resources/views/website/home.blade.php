@extends('website.header') @section('title', 'G.M. TRADERS | Home') 

@section('content') 

<style>

body {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 97.33vh;
  background-image: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%);
  font-family: sans-serif;
}

#card {
  width: 200px;
  height: 400px;
  z-index: 2;
  background: rgba(255, 255, 255, 0.05);
  box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
  box-shadow: inset 1px 1px 0.12px rgba(255, 255, 255, 0.4),
    1px 1px 3px rgba(0, 0, 0, 0.1);
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  border-radius: 10px;
  border: 1px solid rgba(255, 255, 255, 0.18);

  animation: move 5s ease-in-out infinite;
  background-clip: padding-box;
}

h1 {
  position: absolute;
  z-index: 1;
  font-size: 200px;
  letter-spacing: 15px;
  color: #fff;
}

@keyframes move {
  0% {
    transform: translateX(-200px);
  }
  50% {
    transform: translateX(200px);
  }
  100% {
    transform: translateX(-200px);
  }
}

#rect {
  top: 30px;
  width: 100px;
  height: 100px;
  background: rgba(255, 255, 255, 0.1);
  box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
  box-shadow: inset 1px 1px 0.12px rgba(255, 255, 255, 0.4),
    1px 1px 3px rgba(0, 0, 0, 0.1);
  backdrop-filter: blur(4px);
  -webkit-backdrop-filter: blur(4px);
  border-radius: 10px;
  border: 1px solid rgba(255, 255, 255, 0.18);
  position: absolute;
}

#circle {
  bottom: 100px;
  left: calc(100vw / 3);
  width: 50px;
  height: 50px;
  background: rgba(255, 255, 255, 0.1);
  box-shadow: inset 1px 1px 0.12px rgba(255, 255, 255, 0.4),
    1px 1px 3px rgba(0, 0, 0, 0.1);
  backdrop-filter: blur(4px);
  -webkit-backdrop-filter: blur(4px);
  border-radius: 50%;
  border: 1px solid rgba(255, 255, 255, 0.18);
  position: absolute;
}

</style>

{{--

<div class="home-hero">
  <div class="heroContainer home-hero1">
    <div class="home-container01">
      <h1 class="heading1"> G.M. TRADERS  </h1>
      <h1 class="heading1"> Your Source of Quality Bags for Clothing</h1>
      <span class="home-hero-sub-heading bodyLarge">
        <span>
          
            <span> Leading Manufacturer and Supplier of Plastic Bags </span>

        </span>
      </span>
      <div class="home-btn-group">
        <button class="buttonFilled">Explore Our Products</button>
        <button class="buttonFlat">Learn More&nbsp;→</button>
      </div>
    </div>
  </div>
</div>
--}}


<div id="card">
</div>
<h1>HELLO</h1>
<div id="circle"></div>
<div id="rect"></div>

@endsection