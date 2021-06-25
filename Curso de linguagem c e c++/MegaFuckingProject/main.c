#include <stdio.h>
#include <stdlib.h>

int main()
{
    int iJ,iI;
    iJ = 17;
    iI = 60;

    int idade;
    printf("Digite a idade de uma \"pessoa\": \n");
    scanf("%i",&idade);

    if (idade <= iJ){
        printf("A idade informada e de um jovem ");
    }else{
        if (idade >= iI){
            printf("A informada e de uma pessoa idosa");
        }else{
            if ((idade > iJ)&&(idade < iI)){
                printf("A idade informada e de uma pessoa de meia-idade");
            }
        }
    }
    return 0;
}
