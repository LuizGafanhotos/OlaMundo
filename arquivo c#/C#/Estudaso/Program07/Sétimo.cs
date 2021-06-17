using System;

class estrutura{
    static void Main(){
        int a = 1;
        int b = 10;
        bool valor;
        //Estrutura if
        if (a < b){
            Console.WriteLine("Esse valor é menor que outro");
            valor = true;
        }else{
            Console.WriteLine("Esse valor é maior que outro");
            valor = false;
        }
    }
}