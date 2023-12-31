<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jalur extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'jalurs';

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
    protected $fillable = ['nama_jalur', 'harga', 'gunungs_id'];
}
