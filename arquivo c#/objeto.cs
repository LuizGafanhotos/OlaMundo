using System;

public class Jogador{
    public int energia;
    public bool vivo;

}
class Base{
    static void Main(){
        Jogador j = new Jogador();
        j.energia = 31;
        j.vivo = true;
        Console.WriteLine(j.energia);
        if (j.vivo == true){
            Console.WriteLine("Ele está ativo");
        }else{
            Console.WriteLine("Ele está desativado");
        }
    }
}