using System;

class Daniel{
    static void Main(){
        int id;
        Console.WriteLine("Digite sua idade");
        id  = int.Parse(Console.ReadLine());
        if (id < 18 || id < 19){
            Console.WriteLine("Você é jovem");
        }else{
            Console.WriteLine("Você é velho");
        }
    }
}