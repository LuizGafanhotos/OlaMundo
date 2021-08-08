using System;

class Jogador{
    public int energia;
    public bool vivo;
    public string nome;
    
    public Jogador(string n){
        energia = 100;
        vivo = true;
        nome = n;
    }
    ~Jogador(){
        Console.WriteLine("Jogador {0} foi destrido",nome);
    }
}
class Base{
    static void Main(){
        string nome1;
        Console.WriteLine("Digite o nome do jogador 1: ");
        nome1 = Console.ReadLine();
        Jogador j1 = new Jogador(nome1);
        Jogador j2 = new Jogador("Théo");

        Console.WriteLine("O nome do jogador 1: {0}", j1.nome);
    }
}