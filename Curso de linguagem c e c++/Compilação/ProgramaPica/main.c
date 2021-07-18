#include <stdio.h>
#include <stdlib.h>
#include <ctype.h>

int main()
{


    char c;
    printf("Digite uma letra minuscula: \n");
    scanf("%c", &c);
    if (c >= 'a'){
        printf("A letra que voce digitou em maiuscula > %c <", toupper(c));
    }else{
        printf("A letra que voce digitou em minuscula > %c <", tolower(c));
    }
    return 0;
}
