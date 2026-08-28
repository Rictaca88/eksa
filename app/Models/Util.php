<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Util extends Model
{
  use HasFactory;

  static public function versql($sql, $op)
  {
    if ($op === 1) {
      echo "<br />SQL->$sql<br />";
      die();
    }
  }
}
