import java.io.File;
import java.io.FileNotFoundException;
import java.util.Scanner;

public class Main {

    public static void main(String[] args) throws FileNotFoundException {
        // write your code here
        File file = new File("data.txt");
        Scanner scan = new Scanner(file);
        int n = Integer.parseInt(scan.nextLine());
        String[] string = new String[n];
        int i =0;
        while (scan.hasNext()){
            string[i]=(scan.nextLine());
            i++;
        }
        String[] array = Correlation(string);
        for(String s: array){

            System.out.printf("");

        }
    }
    /*
        Complete the following method. Helper methods can be added to help...
     */
    public static String[] Correlation(String[] grades){

        return grades;
    }
}
