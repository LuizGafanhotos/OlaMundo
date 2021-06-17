using System;

class Enumeradores{

    enum DiaSemana{Domingo,segunda,terca,quarta,quinta,sexta,sabado};
    static void Main(){
        DiaSemana dia = (DiaSemana)1;

        Console.Write(dia);
    }
}