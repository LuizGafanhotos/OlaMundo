using System;

class Orochi{
    static void Main(){
        int v1,v2,soma;
        string nome;

        Console.WriteLine("Digite o primeiro valor:  ");
        v1=int.Parse(Console.ReadLine());
        Console.WriteLine("Digite outro valor: ");
        v2=int.Parse(Console.ReadLine());
        soma=v1+v2;
        Console.WriteLine("O resultado de {0} + {1} é igual a {2}",v1,v2,soma);
    }
}