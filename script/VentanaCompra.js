function payBuy(){
    var body=document.querySelector("body");
    var item=document.querySelector("item");
    var panel= document.createElement("div");
    var ventana= document.createElement("section");
    body.appendChild(panel);
    panel.appendChild(ventana);
    seccion=document.querySelector("div section");
    div=document.querySelector("body div");
    div.setAttribute("id","pantalla");
    seccion.setAttribute("id","ventana");
    pantalla=document.querySelector("#pantalla");
    pantalla.style.width=""+screen.width+"px";
    pantalla.style.height=""+screen.height+"px"
    pantalla.style.backgroundColor="rgba(0,0,0,0.1)";
} 

