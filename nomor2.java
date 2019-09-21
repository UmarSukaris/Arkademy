public class nomor2 {
    public static void main(String[] args) {
    String a = "@wakwaw";
    String b = "poEtri";
    String c = "tiara";
    String d = "p@ssW0rd99";
    String e = "C0d3YourFuture!#";
    System.out.println(b + " "+validation_Username(b));
    System.out.println(d + " "+validation_Password(d));
    }

private static boolean validation_Username(final String USERNAME_Arg){
    boolean result = false;
    try {
        if (USERNAME_Arg != null){
            final String MIN_LENGHT="5";
            final String MAX_LENGHT="9";
            final String LOWER_CASE = "(?=.*[a-z])";
            
            final String MIN_MAX_CHAR = ".{" + MIN_LENGHT + "," + MAX_LENGHT + "}";
            
            final String PATTERN = LOWER_CASE+ MIN_MAX_CHAR;
            result = USERNAME_Arg.matches(PATTERN);
        }
    }catch (Exception ex){
        result=false;
    }
        return result;
}
    
private static boolean validation_Password(final String PASSWORD_Arg){
    boolean result = false;
    try {
        if (PASSWORD_Arg!=null) {
            //_________________________
            //Parameteres
            final String MIN_LENGHT="10";
            final String MAX_LENGHT="10";
            final boolean SPECIAL_CHAR_NEEDED=true;

            //_________________________
            //Modules
            final String ONE_DIGIT = "(?=.*[0-9])";  //(?=.*[0-9]) a digit must occur at least once
            final String LOWER_CASE = "(?=.*[a-z])";  //(?=.*[a-z]) a lower case letter must occur at least once
            final String UPPER_CASE = "(?=.*[A-Z])";  //(?=.*[A-Z]) an upper case letter must occur at least once
            final String MIN_MAX_CHAR = ".{" + MIN_LENGHT + "," + MAX_LENGHT + "}"; 
            final String SPECIAL_CHAR= "(?=.*[@#$%^&+=])"; //(?=.*[@#$%^&+=]) a special character must occur at least once
            //_________________________
            //Pattern
            //String pattern = "(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=])(?=\\S+$).{8,}";
            final String PATTERN = ONE_DIGIT + LOWER_CASE + UPPER_CASE + SPECIAL_CHAR + MIN_MAX_CHAR;
            //_________________________
            result = PASSWORD_Arg.matches(PATTERN);
            //_________________________
        }    

    } catch (Exception ex) {
        result=false;
    }

    return result;
}



}
