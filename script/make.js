let makers = ["BMW","Audi","Mercedes-Benz","Tayota"];
let models = {"BMW":["125","315","335","435","518","535","M2","M3","M4","M5","M6","X5 M","X6 M"],"Audi":["80","90","100","200","A1","A2","A3","A4","A5","A6","A7","A8","Cabriolet","S4","S5","S6","S7","S8"],"Mercedes-Benz":["A","A","A","A","A","A","A","A","A","A","A","A","A","A","A","A","A","A","A","A"],"Tayota":["A","A","A","A","A","A","A","A","A","A","A","A","A","A","A","A","A"]};

let maker = document.querySelector("#maker");
let cbc = document.querySelector("#model");


for(let i=0; i<makers.length; i++){
    let option = document.createElement("option");
    option.text = makers[i];
    document.querySelector('#maker').appendChild(option);
}

function f(){
    document.querySelector("#model").disabled = false;
    let item = document.getElementById("maker").value;
    
    let opt = cbc.querySelectorAll("option");
    for(let i=0;i<opt.length;i++){
        opt[i].remove();   
    
    }
    for(let i =0; i<models[item].length; i++){
        let model = document.createElement("option");
        let val = document.getElementById("maker").value;
        model.textContent = models[val][i];
        document.querySelector('#model').appendChild(model);
    }
    
}

document.querySelector("#maker").addEventListener("change",f);

