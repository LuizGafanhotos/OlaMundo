using System;

class Base{

    public static void Main(){
        byte c2 = 0;
        int valor = 11;
        int[] n = new int[5];
        try{
            do{
                n[c2] = valor;
                ++valor;
                ++c2;
                Console.WriteLine(n[c2]);
            }while(c2 <= 4);
        }catch(Exception e){
            Console.WriteLine("Houve um erro grave.....");
        }
        

        byte c = 0;
        do{
            Console.WriteLine(c + ") Ola mundo");
            c++;
        }while(c <= 5);

        Console.WriteLine("FIM");
        Console.WriteLine(calc(5,3));

        leia_num();
    }
    
    static int calc(int n1, int n2){
        int matho = n1 + n2;
        return matho;
    }

    static void leia_num(){
        int v1,v2,res;
        Console.WriteLine("Digite 2 valores: ");
        v1= Convert.ToInt32(Console.ReadLine());
        v2 = Convert.ToInt32(Console.ReadLine());
        res = v1 + v2; 
        Console.WriteLine("A soma de {0} e {1} é igual a {2}", v1, v2, res);
    }
}