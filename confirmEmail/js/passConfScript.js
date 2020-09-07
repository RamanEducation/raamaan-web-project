let time=300;
let timerId=setTimeout(function timeCalculate () {
    if(time==0){
        location.replace("timesUp.html");
    }
    let min=Math.floor(time/60);
    let sec=time%60;
    let toBeWrite= (Math.floor(min/10)%10).toString()+(min%10).toString()+":"+(Math.floor(sec/10)%10).toString()+(sec%10).toString();
    document.getElementById("clock").innerHTML=toBeWrite;
    time--;
    setTimeout(timeCalculate,1000);
},1000);







