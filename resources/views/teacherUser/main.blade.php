<!DOCTYPE html>
<html>
  <head>

    <title>Inicio Maestro</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">

    <style>
    .sidebar { /*Estilo para barra lateral*/
        position: fixed;
        width: 20%; 
        height: 100%; 
        float: left; 
        background-color: #030303d7;
        display: flex;
        flex-direction: column;
        color: #ffffff
    }

    .sidebar-list1 { /*Primera parte de la barra lateral*/
        width: 100%; 
        flex-grow: 1; 
    }

    .sidebar-list2 { /*Segunda secciones de la barra lateral*/
        width: 100%; 
        flex-grow: 1; 
    }

    .sidebar-line { /*Una línea para separar las dos secciones de la barra lateral*/
        width: 100%; 
        border-bottom: 1px solid rgba(255, 255, 255, 0.082); 
    }

    .sidebar-bottom { /*La zona donde viene el log out o el log in, dependiendo si esta dentro o fuera de la cuenta*/
        width: 100%; 
        flex-grow: 1;
        position: absolute; 
        bottom: 0;
        padding-bottom: 20px; 
    }   

    .main-content { /*Todo lo que viene fuera de la barra lateral*/
        position: fixed;
        width: 80%; 
        height: 100%;
        margin-left: 20%; 
        overflow-y: auto;
        background-color: #0303034d;
      }

    .rectangle-container {
        display: flex;
        justify-content: center;
    }

    .rectangle {
        width: 300px;
        height: 250px;
        margin: 15px;
        border: 2px solid black;
        background-color: white;
        border-radius: 4px;
    }

    .title {
        background-color: lightgray;
        text-align: center;
        padding: 10px;
    }

    .list {
        margin: 10px;
    }

    .separation {
        border-top: 1px solid gray;
        padding-top: 10px;
        margin: 10px;
    }


    </style>
 
  </head>

  <body>

    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="sidebar">
                <div class="sidebar-list1">
                    <div style="margin:10px">
                    </div>
                </div>
                <div class="sidebar-line"></div>
                <div class="sidebar-list2">
                </div>
                <div class="sidebar-bottom">
                    <p>Bienvenido {{ auth()->user()->name }}</p>
                    <a href="#" style="color: white">Cerrar sesión</a>
                </div>
            </div>

            <div class="main-content">

        </div>
    </div>

  </body>
</html>