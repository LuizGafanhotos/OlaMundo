using System;

class Base{

    public static void Main(){
        byte c = 0;
        int valor = 11;
        int[] n = new int[5];
        do{
            n[c] = valor;
            valor++;
            c++;
        }while(c <= 4);
        Console.WriteLine(n);

        byte c = 0;
        do{
            Console.WriteLine(c + ") Ola mundo");
            c++;
        }while(c <= 5);

        Console.WriteLine("FIM");
    }
}