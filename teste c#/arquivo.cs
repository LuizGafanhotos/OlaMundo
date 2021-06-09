using System;

class Base{
    void arquivo(int n1, int n2){
        return n1 + n2;
    }


    public static void Main(){
        byte c = 0;
        int soma = arquivo(4,4);
        do{
            Console.WriteLine(c + ") Ola mundo");
            c++;
        }while(c <= 5);

        Console.WriteLine(soma);
    }
}