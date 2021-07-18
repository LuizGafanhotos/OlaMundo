#include <stdio.h>
#include <stdlib.h>

int main()
{
    //integer %i ou %d
    //float/ double %f
    //char %c
    //string %s

    //%u módulo de um número
    //%p endereço de memória
    //%e ou %E para imprimir numeros com notação específica
    //%% para imprimir somente um sinal de porcentagem

    int count = 1;
    while (count <= 10){
        printf("%i) o valor \n", count);
        count += 1;
    }
    printf("-------------------------- \n");
    int num1,num2,soma,sub,mult,rest,div;
    char esco;
    num1 = 15;
    num2 = 5;

    soma = num1 + num2;
    sub = num1 - num2;
    mult = num1 * num2;
    div = num1 / num2;
    rest = num1 % num2;

    printf("O que ira preferir?\n");
    printf("a) somar \n");
    printf("b) subtrair \n");
    printf("c) multiplicar \n");
    printf("d) dividir e mostrar o resultado \n");
    printf("e) dividir e mostrar o resto da divisao \n");
    printf("$:>");
    scanf("%c",&esco);
    //A parte de escolha
    if (esco == 'a'){
        printf("%i",soma);

    }else if (esco == 'b'){
        printf("%i", sub);

    }else if (esco == 'c'){
        printf("%i",mult);

    }else if (esco == 'd'){
        printf("%i",div);

    }else if (esco == 'e'){
        printf("%i",rest);
    }
    system("pause");
    return 0;
}
