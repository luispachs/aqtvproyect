function payBuy(imagen1="camarax.jpg",nombre="camara X",precio=35000,descripcion="Es una camara"){

    var seccion=document.createElement("seccion");
    var imagen=document.createElement("img");
    var contenido=document.createElement("div");
    var datos=document.createElement("P");
    var cerrar=document.createElement("i");
    var agregarCarrito=document.createElement("i");
    var comprar=document.createElement("i");
    //definicion de id y clases
    cerrar.setAttribute("class","fas fa-times");
    agregarCarrito.setAttribute("class","fas fa-shopping-cart");
    comprar.setAttribute("class","fas fa-money-bill");
    datos.setAttribute("id","datos");
    contenido.setAttribute("id","contenido");
    seccion.setAttribute("id","ventanaCompra");
    imagen.setAttribute("id","imagen");
    imagen.setAttribute("src","../resource/"+imagen1);
    // finalizacion de definicion de atributps
    datos.innerHTML="<strong>Nombre: </strong>"+nombre+"<br><strong>Precio: </strong>"+precio+"<br><Strong>Descripcion: </strong>"+descripcion+"";
    document.body.appendChild(seccion);
    seccion.appendChild(contenido);
    seccion.appendChild(imagen);
    seccion.appendChild(cerrar);
    seccion.appendChild(agregarCarrito);
    seccion.appendChild(comprar);
    contenido.appendChild(datos);

// eventos en botones
  //cerrar.addEventListener("click",closeWindow()); 
} 
function closeWindow(){ 
    var pantalla=document.getElementById("pantalla");
    pantalla.remove();
    
}

