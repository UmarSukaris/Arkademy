import java.io.FileWriter;
import java.io.IOException;
import java.util.ArrayList;
import java.util.LinkedHashMap;
import java.util.Map;
 
import org.json.JSONArray;
import org.json.JSONObject;
import org.json.JSONString;
 
public class nomor1{
    
    public static void main( String[] args )
    {
        parsingJsonstatic();
    }

    private static void parsingJsonstatic() {
        ArrayList<String> listhobbies = new ArrayList<String>();
        listhobbies.add("membaca");
        listhobbies.add("joging");
        listhobbies.add("futsal");

        
        //membuat object json
        JSONObject getProfile = new JSONObject();
        getProfile.put("Name", "Muhammad Umar");//String
        getProfile.put("Age", 26);//Number
        getProfile.put("Address", "Bojongsoang, Bandung");
        getProfile.put("hobbies", new JSONArray(listhobbies));
        
        Map m = new LinkedHashMap(4); 
        m.put("School", "Telkom University"); 
        m.put("Year in", "2012"); 
        m.put("Year out", "2019"); 
        m.put("Major", "Information System");
        
        getProfile.put("list_school", m);
        
        JSONArray ja = new JSONArray(); 
          
        m = new LinkedHashMap(2); 
        m.put("skill_name", "Communication Skill"); 
        m.put("level", "advanced"); 
          
        // adding map to list 
        ja.put(m);
          
        m = new LinkedHashMap(2); 
        m.put("skill_name", "Data Analysis"); 
        m.put("level", "advanced"); 
          
        // adding map to list 
        ja.put(m); 
        
        m = new LinkedHashMap(2); 
        m.put("skill_name", "Business Process Analysis"); 
        m.put("level", "Expert"); 
          
        // adding map to list 
        ja.put(m); 
        
        m = new LinkedHashMap(2); 
        m.put("skill_name", "Software Development"); 
        m.put("level", "Beginner"); 
          
        // adding map to list 
        ja.put(m);
        
        getProfile.put("skills", ja);
        getProfile.put("intersest_in_coding", true);//boelan
         
        JSONObject ProfileObject = new JSONObject();
        ProfileObject.put("Biodata", getProfile);
         
         
        //Add employees to list
        JSONArray array = new JSONArray();
        array.put(ProfileObject);
         
        //Write JSON file
        try (FileWriter file = new FileWriter("pofile.json")) {
 
            file.write(array.toString());
            file.flush();
            file.close();
 
        } catch (IOException e) {
            e.printStackTrace();
        }
    }
   
}
