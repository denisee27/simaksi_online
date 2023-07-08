<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gunung extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'gunungs';

     /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nama', 'poto_gunung', 'deskripsi'];
}
