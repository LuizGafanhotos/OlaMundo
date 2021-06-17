using System;

class Orienta{
    static void Main(){
        int tempo=0;
        char Escolha;

         Inicio: //A label que vai retornar a escolha caso a pessoa aperte S

        Console.WriteLine("Tempo de Brasil para Estados Unidos em horas.");
        Console.WriteLine("Escolha uma letra \n(c) Carro;\n(o) Ônibus;\n(a) Avião;");

        Escolha=Char.Parse(Console.ReadLine());

        switch(Escolha){
            case 'c':
                tempo = 96;
                Console.WriteLine("O tempo é de: " +tempo+ " horas");
                break;
            case 'o':
                tempo = 72;
                Console.WriteLine("O tempo é de: " +tempo+ " horas");
                break;
            case 'a':
                tempo = 48;
                Console.WriteLine("O tempo é de: " +tempo+ " horas");
                break;
            default:
                tempo = 1;
                break;
        }
        if (tempo < 3){
            Console.WriteLine("Transporte indisponível");
        }
        escolha: //A label que vai retornar a escolha caso a pessoa aperte outra letra
        Console.Write("Deseja escolher outro trasporte[s/n][S/N]?");
        Escolha=Char.Parse(Console.ReadLine());

        if (Escolha == 's' | Escolha == 'S'){
            goto Inicio; //Vai retornar ao início do Programa
            Console.Clear();//vai limpar o console
        }else if (Escolha == 'n' | Escolha == 'N'){
            Console.WriteLine("Fim do PRograma!"); //vai finalizar o programa
        }else{
            goto escolha; //Vai retornar para a escolha do sim ou não
        }
    }
}