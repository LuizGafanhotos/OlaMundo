using System;

class Aulinha{
    static void Main(){
        int num = 50;
        dobrar(ref num);
        Console.WriteLine("O numero: " + num);
    }
    static void dobrar(ref int valor){
        valor *= 2;
    }
}