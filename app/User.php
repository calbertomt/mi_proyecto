<?php

namespace proyPrueba;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public function roles(){
        return $this->belongsToMany('proyPrueba\Role');
    }

    /*
     *authorizedRoles() funcion la cual va a desencadenar todo el proceso de validaciones de roles
     */
    public function authorizedRoles($roles){
        if ($this->hasAnyRole($roles)) {
            return true;
        }
        abort(401, 'This action is Unauthorized');
    }

    /*
     *hasAnyRole() funcion la cual permita iterar entre muchos roles, Recibe un arreglo de roles o un arreglo
     */
    public function hasAnyRole($roles){
        if(is_array($roles)){
            foreach ($roles as $role) {
                if($this->hasRole($role)){
                    return true;
                }
            }
        }else{
            if($this->hasRole($roles)){
                return true;
            }
        }
        return false;
    }
    /*Funcion para Validar si mi usuario tiene el rol por el que estamos preguntando*/
    public function hasRole($role){
        /*Si mi modelo actual, el cual es mi usuario, dentro de su relación con roles,
         *donde le vamos a pasar el nombre de ese rol, pues existe.
         *si existe que nos mande el primero que encuentre
         *Para este momento estamos solo validando que mi usuario tenga ese rol validado o relacionado
         *Pero un usurio puede tener muchos roles lo cual significa se puede recibir bastantes roles
         *Para esto hay que preparar una funcion la cual permita iterar entre roles, osea un arreglo de roles 
         *hasAnyRole()
         */
        if($this->roles()->where('name', $role)->first()){
            return true;
        }
        return false;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
