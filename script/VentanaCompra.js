function payBuy(imagen1="camarax.jpg",nombre="camara xi",precio=35000,descripcion="Es una camara",id=2){
    var seccion=document.createElement("seccion");
    var imagen=document.createElement("img");
    var contenido=document.createElement("div");
    var datos=document.createElement("P");
    var cerrar=document.createElement("em");
    var cant=document.createElement("input");
    var agregarCarrito=document.createElement("em");
    var comprar=document.createElement("em");
    //definicion de id y clases
    cerrar.setAttribute("class","fas fa-times");
    agregarCarrito.setAttribute("class","fas fa-shopping-cart");
    comprar.setAttribute("class","fas fa-money-bill");
    datos.setAttribute("id","datos");
    contenido.setAttribute("id","contenido");
    seccion.setAttribute("id","ventanaCompra");
    imagen.setAttribute("id","imagen");
    imagen.setAttribute("src","../resource/"+imagen1);
    cant.setAttribute("id","cantidad");
    cant.setAttribute("type","number");
    cant.value=1;

    // finalizacion de definicion de atributps
    datos.innerHTML="<strong>Nombre: </strong>"+nombre+"<br><strong>Precio: </strong>"+precio+"<br><Strong>Descripcion: </strong>"+descripcion+"";
    document.body.appendChild(seccion);
    seccion.appendChild(contenido);
    seccion.appendChild(imagen);
    seccion.appendChild(cerrar);
    seccion.appendChild(agregarCarrito);
    seccion.appendChild(comprar);
    seccion.appendChild(cant);
    contenido.appendChild(datos);

// eventos en botones
  cerrar.addEventListener("click",function(){
    var name="carrito="
    var quitar=document.getElementById("ventanaCompra");
    document.body.removeChild(quitar);
  }); 
  agregarCarrito.addEventListener("click",function(){
    document.cookie=""+id+"="+document.getElementById("cantidad").value+"; max-age=3600*24*30*12; path=/";
    var quitar=document.getElementById("ventanaCompra");
    document.body.removeChild(quitar);
 
  });
  comprar.addEventListener("click",function(){
   
    document.cookie=""+id+"="+document.getElementById("cantidad").value+"; max-age=3600*24*30*12;path=/;domain=localhost";
    var cookie=document.cookie;
    var datosCookie=cookie.split(";");
    var lista= new Array(datosCookie.length);
    for(var i=0;i<datosCookie.length;i++){
      var d=datosCookie[i];
      var index=d.indexOf("=");
      var nameCookie=d.substring(0,index);
      var valueCookie=d.substring(index+1,d.length);
      console.log(nameCookie,valueCookie);
      var datoLista= new Array(2);
      datoLista[0]=nameCookie;
      datoLista[1]=valueCookie;
      lista.push(datoLista);

    }
    console.log(lista);
    
    var quitar=document.getElementById("ventanaCompra");
    document.body.removeChild(quitar);
    location="../pages/confirmarCompra.html";
  });
}
