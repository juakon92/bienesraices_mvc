<?php

namespace Model;

class Vendedor extends ActiveRecord {
    protected static $tabla = 'vendedores';
    protected static $columnas_db = ['id','nombre','apellido','telefono'];

    public $id;
    public $nombre;
    public $apellido;
    public $telefono;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
    }

    public function validar() {

        if(!$this->nombre) {
            self::$errores[] = "Debes añadir un nombre";
        }

        if(!$this->apellido) {
            self::$errores[] = "Debes añadir un apellido";
        }

        if(!$this->telefono) {
            self::$errores[] = "Debes añadir un teléfono";
        }

        if(!preg_match('/[0-9]{9}/',$this->telefono)) {
            self::$errores[] = "Formato no válido";
        }

        return self::$errores;
    }
}