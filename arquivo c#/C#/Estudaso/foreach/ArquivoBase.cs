using System;

class Senhor{
    static void Main(){
        int[] dados = new int[5]{11,22,33,44,55};
        /*
        for(int i = 0; i<dados.Length;i++){
            Console.WriteLine("Possisão " + dados[i]);
        }
        */
        foreach(int n in dados){
            Console.WriteLine(n);
        }
    }
}