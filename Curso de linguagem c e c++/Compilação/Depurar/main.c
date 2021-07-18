#include <stdio.h>
#include <stdlib.h>
int main()
{
    printf("Digite um numero 1: \n");

    char c;
    c = getchar();

    if (c == '1'){
        printf("O caractere digitado esta correto.. \n");
    }else{
        printf("O caractere digitado esta errado.. \n");
        printf("O valor: %c \n",c);
    }

    return 0;
}
