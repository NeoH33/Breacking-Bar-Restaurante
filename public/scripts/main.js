function fun_change(){
                //Leer el valor actual
                var nom = document.getElementById("nomb").value.toUpperCase();
                var ap = document.getElementById("apell").value.toUpperCase();
                //Asignar el nuevo valor
                document.getElementById("nomb").value = nom;
                document.getElementById("apell").value = ap;
}
