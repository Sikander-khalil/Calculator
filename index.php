<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
<style>
    *{

        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: consolas;
    }

     body{

        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: white;

     }

     .dark{
        background: black;

     }

     .calculator{

        position: relative;
        width: 340px;
        border-radius: 20px;
        padding: 20px;
        box-shadow: 15px 15px 20px rgba(0,0,0,0.1), -15px -15px 20px #fffb;
     }

.dark .calculator{

    background: purple;
    box-shadow: 15px 15px 20px rgba(0,0,0,0.25), -15px -15px 20px rgba(255,255,255,0.1);

}

     .calculator .buttons{

        position: relative;
        display: grid;
     }

     .calculator .buttons #value{
        position: relative;
        grid-column: span 4;
        user-select: none;
        overflow: none;
        width: 100%;
        text-align: end;
        color: blue;
        height: 100px;
        line-height: 100px;
        box-shadow: 5px 5px 10px rgba(0,0,0,0.1),
    -5px -5px 10px #fff,
    inset 5px 5px 10px rgba(0,0,0,0.1);
        border-radius: 10px;
        margin-bottom: 12px;
        padding: 0 20px;
        font-size: 2em;
        font-weight: 500;
     }
     .dark .calculator .buttons #value{
       
        color: #eee;

    box-shadow: inset 15px 15px 20px rgba(0,0,0,0.5), inset -15px -15px 20px rgba(255,255,255,0.1);

     }

     .calculator .buttons span{
        
        position: relative;
        padding: 10px;
        box-shadow:  5px 5px 10px rgba(0,0,0,0.1), -5px -5px -20px #fff;
        margin: 10px;
        cursor: pointer;
        user-select: none;
        min-width: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #666;
        border: 2px solid #edf1f4;
        box-shadow: 5px 5px 10px rgba(0,0,0,0.1), -5px -5px 10px #fff;
        border-radius: 10px;



     }

    .dark .calculator .buttons span{
        color: white;
        border: 2px solid purple;
        box-shadow: 5px 5px 10px rgba(0,0,0,0.25), -5px -5px 10px purple;

     }

     .calculator .buttons span#Clear{

        grid-column: span 2;
        background: red;
        color: white;
        border: 2px solid #edf1f4;

     }
     .calculator .buttons span#plus{

grid-row: span 2;
background: green;
color: white;
border: 2px solid #edf1f4;

}
.calculator .buttons span#equal{

grid-row: span 2;
background: blue;
color: white;
border: 2px solid #edf1f4;

}


.calculator .buttons span#Clear:active,
.calculator .buttons span#plus:active,
.calculator .buttons span#equal:active{

    box-shadow: 5px 5px 10px rgba(0,0,0,0.1),
    -5px -5px 10px #fff,
    inset 5px 5px 10px rgba(0,0,0,0.1);


}

.togglebutton{

    position: fixed;
    top: 10px;
    right: 20px;
    width: 20px;
    height: 20px;
    background: purple;
    border-radius: 50%;
    cursor: pointer;
    border: 2px solid #edf1f4;
    box-shadow: 5px 5px 10px rgba(0,0,0,0.1),
    -5px -5px 10px #fff;

}


</style>
</head>
<body>
    <div class="togglebutton"></div>
    <div class="calculator">

    <div class="buttons">
        <h2 id="value">123</h2>

        <span id="Clear">Clear</span>
         <span>/</span>
          <span>*</span>
           <span>7</span>
            <span>8</span>
             <span>9</span>
              <span>-</span>
              <span>4</span>
              <span>5</span>
              <span>6</span>
              <span id="plus">+</span>
              <span>1</span>
              <span>2</span>
              <span>3</span>
              <span>0</span>
              <span>00</span>
              <span>.</span>
              <span id="equal">=</span>
</div>
<script>
    let buttons = document.querySelector(".buttons");
    let span = document.querySelectorAll("span");
    let value = document.getElementById("value");
    let togglebtn = document.querySelector(".togglebutton");
    let body = document.querySelector("body");
    for(let i=0; i<span.length; i++){

        span[i].addEventListener("click",function(){

            if(this.innerHTML == "="){
                value.innerHTML = eval(value.innerHTML);

            }else{
                if(this.innerHTML == "Clear"){
                    value.innerHTML = "";
                }else{
                    value.innerHTML += this.innerHTML;
                }
            }
        })
    }

    togglebtn.onclick = function(){

        body.classList.toggle('dark');

    }
</script>
</body>
</html>