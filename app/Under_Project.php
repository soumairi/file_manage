<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Under_Project extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'under__projects';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description', 'is_ftp', 'emplacement', 'ftp_host', 'ftp_user', 'ftp_pwd', 'ftp_mode', 'project_id'];

    /**
     * A Under Project may be given various roles.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany('App\Role', 'under_project_role');
    }
}
