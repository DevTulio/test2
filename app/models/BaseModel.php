<?php 

	class BaseModel extends Eloquent
	{

		public static function validate($inputs)
		{

			return Validator::make($inputs,static::$rules);
		}

	}



 ?>