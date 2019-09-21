package soal;
    public class nomor4{

     public static void main(String []args){
         meth();
     }
     public static int meth(){
         int row, column, first_no = 0, second_no = 1, sum = 1;

        //Taking noOfRows value from the user
        row = 3;
        column =4;

        for (int i = 1; i <= row; i++) {
            for (int j = 1; j <= column; j++) {
                if (i == 1 && j == 1) {
                System.out.printf("%"+(row)+"d\t",second_no);
                continue;
         }
         System.out.printf(" %d ", sum);

         //Computes the series
         sum = first_no + second_no;
         first_no = second_no;
         second_no = sum;
      }
      System.out.println("");
   }
   return 0;
}
}