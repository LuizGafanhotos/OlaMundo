using System;

class OI{
    static void Main(){
        int divid,divis,quo,res;
        divid = 10;
        divis = 5;
        quo = dividir(divid,divis, out res);

        Console.WriteLine("{0}/ {1}:quociente = {2} e o resto  = {3}", divid, divis,quo,res);

    } 
    static int dividir(int dividendo, int divisor, out int resto){
        int quociente;
        resto = dividendo % divisor;
        quociente = dividendo / divisor;
        return quociente;
    }
}