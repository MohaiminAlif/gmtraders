<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>G.M. Traders</title>
  
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
  margin-left: 105rem;
  z-index: 2;
  background: rgba(255, 255, 255, 0.05);
  box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
  box-shadow: inset 1px 1px 0.12px rgba(255, 255, 255, 0.4),
    1px 1px 3px rgba(0, 0, 0, 0.1);
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  border-radius: 10px;
  border: 1px solid rgba(255, 255, 255, 0.18);

  animation: move 5s ;
  background-clip: padding-box;
}

h1 {
  position: absolute;
  z-index: 3;
  font-size: 200px;
  letter-spacing: 15px;
  color: black;
  width: 1000px;
  
}

h2 {
  position: absolute;
  z-index: 4;
  font-size: 25px;
  letter-spacing: 12px;
  color: black;
  background-color: white;
  -webkit-text-stroke-width: .5px;
  -webkit-text-stroke-color: white;
  
}

@keyframes move {
  0% {
    transform: translateX(-110rem);
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



</head>
<body>
<a href="http://" target="_blank" rel="noopener noreferrer">
<div id="card">
</div></a>
<h1>G.M. TRADERS</h1>
<h2>Your Source of Quality Bags for Clothing</h2>

<div id="circle"></div>
<div id="rect"></div>


  
</body>
</html>