

function add() {

            var verificar=true;
           var expRegNombre=/^[A-Za-zأأ�أأأأأأ�أ�أ­أ�أ�\s]+$/;
           var expRegContraseña=/^[A-Za-z0-9]+$/;
           var expRegEmail=/^[_a-zA-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;
           
           var nombre = document.getElementById("nombre");
           var contraseña = document.getElementById("contraseña");
           var email = document.getElementById("email");
           var celular = document.getElementById("celular");
          
           var checkbox=document.getElementById("checkbox");
   
  if (nombre.value == "" ) {
            alert("Escriba un nombre");
            nombre.focus();
            
            verificar=false;
            }
           else if(!expRegNombre.exec(nombre.value)){
              alert("el nombre no es valido");
              nombre.focus();
            verificar=false;
            }

           else if (contraseña.value == "" ) {
            alert("Esciba una contraseña");
            contraseña.focus();
            
            verificar=false;
            }
             else if(!expRegContraseña.exec(contraseña.value)){
              alert("la contraseña no es valida");
              contraseña.focus();
            verificar=false;
            }
            else if (email.value == "" ) {
            alert("Esciba un e-mail");
            email.focus();
            
            verificar=false;
            }
            else if(!expRegEmail.exec(email.value)){
              alert("el E-mail no es valido");
              email.focus();
              verificar=false;
            }
          
           
            
            
             else if(verificar==true){
                llenar();
              regenerateTable();
              
            }           
}
var enviar = function(e){
  if(!add()){
    alert("Rellene todos los campos");
  }
}
frm.addEventListener("submit",enviar);







function Registrar(){

  window.location="Registro.php";
}