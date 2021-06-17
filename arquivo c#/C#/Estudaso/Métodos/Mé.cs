using System;

class Aula24{
    static void Main(){
        String Escolha;
        Console.WriteLine("Temos 2 opções simples aqui:");
        Console.WriteLine("-----------------------------");
        Console.WriteLine("A) Testar a leitura de String");
        Console.WriteLine("B) sair");
        Escolha = Console.ReadLine();
        
        if (Escolha == "A"){
            Banco();
        }else{
            Console.WriteLine("Saindo");
        }

    }
    static void Banco(){
        String nome;
        bool isString;
        Console.WriteLine("Digite seu nome");
        nome = Console.ReadLine();

        if (nome == "Ola mundo"){
            Console.WriteLine("Ola mundo? ");
            
        }else{
            Console.WriteLine("Obrigado por ter escrevido seu nome: " + nome);
            
        }

    }
    
}