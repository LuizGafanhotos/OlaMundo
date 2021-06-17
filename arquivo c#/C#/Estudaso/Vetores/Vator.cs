using System;

class Jade{
    static void Main(){
        //int n1,n2,n3,n4;
        int[,] n=new int[3,5];
        //int[] num=new int[3]{55,77,99};


        n[0,0] = 10;
        n[0,1] = 20;
        n[0,2] = 30;
        n[0,3] = 40;

        Console.WriteLine("O que temos aqui" + n[0,2]);
    }
}