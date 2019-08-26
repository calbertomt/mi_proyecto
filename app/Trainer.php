<?php

namespace proyPrueba;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
	/*
	 *Especificarle a Laravel que campos se pueden actualizar de nuestro modelo
	 *
	 */
	protected $fillable = ['name', 'slug', 'avatar'];


    /**
     * Customizing The Key Name
     * Implicit Binding
	 * Get the route key for the model.
	 *
	 * @return string
	 */
	public function getRouteKeyName()
	{
	    return 'slug';
	}
}
