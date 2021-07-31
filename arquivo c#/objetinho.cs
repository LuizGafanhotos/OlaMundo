using System;

public class Jogador{
    public int energia;
    public bool vivo;

    public Jogador(){
        energia = 100;
        vivo = true;
    }
}
class Basinha{
    static void Main(){
        Jogador j1 = new Jogador();
        Jogador j2 = new Jogador();
        Jogador j3 = new Jogador();

        Console.WriteLine("Energia do jogador 1: {0}",j1.energia);
        Console.WriteLine("Energia do jogador 2: {0}", j2.energia);
        Console.WriteLine("Energia do jogador 3: {0}", j3.energia);
    }
}