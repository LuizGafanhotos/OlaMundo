#include <stdio.h>
#include <stdlib.h>

int main()
{
    int x = 0;
    int y = 0;
    printf("Informe a qnt de X que vc deseja repetir a instrucao \n");
    scanf("%i",&y);

    while (x < y){
        printf("%i\n", x * 10);
        x += 1;
    }
}
