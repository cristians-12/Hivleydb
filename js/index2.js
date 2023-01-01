document.getElementById("buscar").placeholder="Hola "+localStorage.getItem("name")+" que deseas buscar?";  

$(document).ready(function () {

  let abrir = document.getElementById("abrir");

  function openp(){
    document.getElementById("popupadd").style.display="block";
  }

  function close(){
    document.getElementById("popupadd").style.display="none";
  }

  document.getElementById("btnclose").addEventListener("click",close)
  document.getElementById("abrir").addEventListener("click",openp)

  $(".popupadd1 #btncerrar").click(function(){
    $(".popupadd1").hide();
  })

  $(".seccion").click(function(){
    $(".popupadd1").show();
    let nose = $("input",this).val();
    AjaxReq(nose);
    })

$(".popupadd1 #btnborserv").click(function(){
  let id = $("input", this).val();
  deleteAjax(id);
})

//----------------------funciones------------------------------------
    
    function AjaxReq(id){
      // alert("Se ejecutará ajax, la id es:"+id);
    $.ajax({
      type: "POST",
      url: "ajax.php",
      data: {ident:id},
        // dataType: "json",
      success: function (resp) {
        // alert("La id es:"+id);
        // console.log("Se envió "+resp);
        let escribir = document.getElementById("popup2");
          escribir.innerHTML = resp;
        },
      error: function(error,estado){
       console.log(error,estado);
      }
      });
      return
    }

    function deleteAjax(id){
      console.log(id);
    }
});
// Fin document ready
