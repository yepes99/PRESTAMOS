<?php

    class vistasModelo{

        /*-----------Modelo obtener vistas----------------- */
        protected static function obtener_vistas_modelo ($vistas){
            $listaBlanca=[];
            if(in_array($vistas,$listaBlanca)){
                if(is_file("./vistas/contenidos/".$vistas."-view.php")){// (/.) porque estamos en index.php entonces hay que entrar a la carpeta vistas
                    $contenido="./vistas/contenidos/".$vistas."-view.php";
                }else{
                    $contenido="404";
                }
            }elseif($vistas=="login" || $vistas="index"){
                $contenido="login";
            }else{
                $contenido="404";
            }
            return $contenido;
        }
    }