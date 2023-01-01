$('.boton').click(function(){
    $(".popup").css("visibility","visible");
    
})
$(".logo").click(function(){
    $(".popup").css("visibility","hidden");
})

// boton registrar
$(".boton1").click(function(){ 
    if(typeof($(".nombre")).val()!=='string'){
        alert()
    }
    // console.log(typeof($(".nombre").val()));
})





function validar(nombre) {    
    let input = document.getElementById("campo").value;//no deja concatenarse con "'"+campo+"'"
    let input1 = document.getElementById("campo");
    localStorage.setItem("name",input);
    if(!input1.checkValidity()) {
      alert('Solo debe ingresar letras en la sección de nombre');
    }
  }

  if (typeof(Storage) !== "undefined") {
    // Store
    // localStorage.setItem("lastname", "Smith");
    // Retrieve
    document.getElementById("campo").innerHTML = localStorage.getItem("name");
  } else {
    document.getElementById("campo").innerHTML = "Sorry, your browser does not support Web Storage...";
  }


 




