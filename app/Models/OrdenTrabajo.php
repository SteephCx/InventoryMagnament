<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class OrdenTrabajo extends Model
{
    protected $table = 'ordentrabajo';
    protected $primaryKey = 'id_NumeroOrden';
    protected $fillable = [
        'Empresa',
        'FechaRecepcion',
        'NumeroRecibido',
        'Cotizacion',
        'RequeridoPor',
        'Tj',
        'Especificaciones',
        'Estatus',
        'Responsable',
        'Operacion',
        'PO',
        'Notas',
        'Cantidad',
        'Documento'
    ];
}

/*
 $table->id();
            $table->integer('NumeroOrden');
            $table->string('Empresa');
            $table->date('FechaRecepcion');
            $table->integer('NumeroRecibido');
            $table->integer('Cotizacion');
            $table->string('RequeridoPor');
            $table->string('Tj');
            $table->string('Especificaciones');
            $table->timestamps(); */
