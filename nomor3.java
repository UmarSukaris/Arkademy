public class nomor3 {
 
    static int handshake(int n) {
    if (n == 0)  
        return 0; 
    else
        return (n - 1) + handshake(n - 1);  
} 
  
// Driver Code 
public static void main (String[] args)  
{ 
    int n = 6; 
    System.out.print(handshake(n)); 
} 
}