<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    //definisikan nama table
    protected $table = 'Pengajuan';

    //definisikan primaryKey utk tabel
    protected $primaryKey = 'NIK';

    //to use a non-incrementing or a non-numeric primary key set to false
    public $incrementing = false;

    //pemformatan pada tanggal
    //protected $dateFormat = 'U';

    
}
