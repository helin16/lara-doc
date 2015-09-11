<?php
namespace App\Entities\System\Auth;

use App\Entities\BaseEntityAbstract;

class Session extends BaseEntityAbstract
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'sessions';
}
