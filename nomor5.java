public class nomor5 {
    public static void main(String[] args) {
        System.out.println(belanja(16, 40000));
    }
    public static int belanja (int tanggal, int uang){
        int bonus=0;
        int mie=uang/2500;
        if(tanggal%2==1){
           if (mie >= 3){
               for(int i=3;i<mie;i+=3){
                   bonus=bonus+1;                
               }
               if(tanggal%5==0){
                   if(bonus%2==0){
                   bonus=bonus*10;
                }else{
                   bonus=bonus*5;
                }    
               }
               mie=mie+bonus;
           }
        } else {
            if (mie >= 4){
               for(int i=4;i<=mie;i+=4){
                   bonus=bonus+1;                
               }
               if(tanggal%5==0){
                   if(bonus%2==0){
                   bonus=bonus*10;
                }else{
                   bonus=bonus*5;
                }    
               }
               mie=mie+bonus;
           }
        }
        return mie;
        
    }
}

