<?php

    namespace App\Session;

    class User{

        /**
         * metodo responsavel por iniciar a sessao dentro da aplicacao
         * @return boolean
         */
        private static function init(){
            return session_status() !== PHP_SESSION_ACTIVE ? session_start() : true;
        }

        /**
         * metodo responsvael por criar a sessao dde lohin do usaurio
         * @param string $name
         * @param string $email
         */
        public static function login($name,$email){
            //inicia a sessao do aplicativo
            self::init();
           //define a sessao do usuairoi
            $_SESSION['user'] = [
                'name' => $name,
                'email' =>$email
            ];
        }

        /**
         * metodo para verificar se ha uma sessao iniciada
         * @return boolean
         */
        public static function isLogged(){
            //inicia a sessao do aplicativo
            self::init();

            return isset($_SESSION['user']);
        }

        /**
         * pipipopopo
         * @return array
         */
        public static function getInfo(){
            //inicia a sessao do aplicativo
            self::init();

            return $_SESSION['user'] ?? [];
        }

    }

?>