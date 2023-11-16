class BanglaConverter
{
    private static $bn = ["১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০"];
    private static $en = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];
    private static $en_months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    private static $en_short_months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
    private static $bn_months = ['জানুয়ারী', 'ফেব্রুয়ারী', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'অগাস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর'];

    private static $en_days = ['Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];
    private static $en_short_days = ['Sat', 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri'];
    private static $bn_short_days = ['শনি', 'রবি', 'সোম', 'মঙ্গল', 'বুধ', 'বৃহঃ', 'শুক্র'];
    private static $bn_days = ['শনিবার', 'রবিবার', 'সোমবার', 'মঙ্গলবার', 'বুধবার', 'বৃহস্পতিবার', 'শুক্রবার'];

    private static $en_times = ['am', 'pm'];
    private static $en_times_uppercase = ['AM', 'PM'];
    private static $bn_times = ['পূর্বাহ্ন', 'অপরাহ্ন'];

    public static function bn2en($number)
    {
        return str_replace(self::$bn, self::$en, $number);
    }

    public static function en2bn($number)
    {
        return str_replace(self::$en, self::$bn, $number);
    }

    public static function convert($text)
    {
        // Convert Numbers
        $text = str_replace(self::$en, self::$bn, $text);

        // Convert Months
        $text = str_replace(self::$en_months, self::$bn_months, $text);
        $text = str_replace(self::$en_short_months, self::$bn_months, $text);

        // Convert Days
        $text = str_replace(self::$en_days, self::$bn_days, $text);
        $text = str_replace(self::$en_short_days, self::$bn_short_days, $text);

        // Convert Times
        $text = str_replace(self::$en_times, self::$bn_times, $text);
        $text = str_replace(self::$en_times_uppercase, self::$bn_times, $text);

        return $text;
    }
}

// Example usage:
echo BanglaConverter::convert("১2 February 2023"); // Output: ১২ ফেব্রুয়ারী ২০২৩

?>