<body>
    <div>
        <h2 class="text-center">Menú actualizar</h2>
        <input id="indice" type="text" placeholder="INDICE">
        <button id="enviar">OK</button>
        <div class="container-fluid">
           <div class="row">
               <div class="col-lg-6">
                   <a href="/InPlanet/appointments/edit"><div class="con">APPOINTMENTS</div></a>
               </div>
               <div class="col-lg-6">
                   <a href="/InPlanet/cities/edit"><div class="con">CITIES</div></a>
               </div>
               <div class="col-lg-6">
                   <a href="/InPlanet/clients/edit"><div class="con">CLIENTS</div></a>
               </div>
               <div class="col-lg-6">
                   <a href="/InPlanet/contracts/edit"><div class="con">CONTRACTS</div></a>
               </div>
               
               <div class="col-lg-6">
                   <a href="/InPlanet/departments/edit"><div class="con">DEPARTMENTS</div></a>
               </div>
               <div class="col-lg-6">
                   <a href="/InPlanet/employees/edit"><div class="con">EMPLOYEES</div></a>
               </div>
               <div class="col-lg-6">
                   <a href="/InPlanet/InternetServices/edit"><div class="con">INTERNET</div></a>
               </div>
               <div class="col-lg-6">
                   <a href="/InPlanet/modems/edit"><div class="con">MODEMS</div></a>
               </div>
               
               <div class="col-lg-6">
                   <a href="/InPlanet/payements/edit"><div class="con">PAYEMENTS</div></a>
               </div>
               <div class="col-lg-6">
                   <a href="/InPlanet/people/edit"><div class="con">PEOPLE</div></a>
               </div>
               <div class="col-lg-6">
                   <a href="/InPlanet/plans/edit"><div class="con">PLANS</div></a>
               </div>
               <div class="col-lg-6">
                   <a href="/InPlanet/typeofemployees/edit"><div class="con">T.Empl</div></a>
               </div>
               <div class="col-lg-6">
                   <a href="/InPlanet/users/edit"><div class="con">USERS</div></a>
               </div>
           </div>
            
        </div>
    </div>
    <a href="../admin" id="return">Regresar</a>
    <style>
        input{
            margin-left: 5%;
            max-width: 80%;
        }
        button{
            display: block;
            width: 5%;
            margin-left: 85%;
            margin-top: -60px;
        }
        #return{
            color: #236AC1;
            font-size: 18px;
            margin-left: 90%;
            text-align: right;
        }
        li{
            list-style: none;
        }
        div a{
            text-align: center;
            color: white;
        }
        div a:hover{
            color: white;
        }
       .con{
            background: #7DCD3E;
            margin: 2% 10%;
            padding: 2%;
            padding-right: 11%;
            width: 100px;
            float: left;
            transition: all 0.6s ease;
        }
        .con:hover{
            background: #EE3830;
            transition: all 0.6s ease;
            cursor: pointer;
        }
    </style>
    <script>
        alert("sasd");
        
        var c;
        $('button').click(function(){
            if($('#indice').val()==""){
                alert("Escriba un indice")
            }
            else{                
                if($('#indice').val()/$('#indice').val()==1){
                    c=$('#indice').val();      
                }
                else{
                    alert("Escriba un número, no letras")
                }
            }
        });
        $('div a').each(function(){
            var numero=prompt("Escriba el indice del usuario a modificar: ");
        });
    </script>
</body>
