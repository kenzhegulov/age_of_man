class Age {
	
	public static function calculate_age($birthday_timestamp) {
        $age = date('Y') - date('Y', $birthday_timestamp);
        if (date('md', $birthday_timestamp) > date('md')) {
          $age--;
        }
        return $age;
    }	
	
}