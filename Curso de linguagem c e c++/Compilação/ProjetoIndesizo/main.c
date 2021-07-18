#include <stdio.h>
#include <stdlib.h>

int main()
{
    float nota1, nota2, nota3, nota4, media;
    nota1 = nota2 = nota3 = nota4 = media;

    printf("==============Media escolar 1.0================\n\n");

    printf("Digite sua primeira nota do 1°bimestre: \n");
    scanf("%f",&nota1);
    printf("Digite sua segunda nota do 2°bimestre: \n");
    scanf("%f", &nota2);
    printf("Digite sua segunda nota do 3°bimestre: \n");
    scanf("%f", &nota3);
    printf("Digite sua segunda nota do 4°bimestre: \n");
    scanf("%f", &nota4);

    media = (nota1 + nota2 + nota3 + nota4) / 4;

    printf("Sua media foi %.2f \n\n", media);
    if (media >= 7){
        printf("Logo voce foi aprovado");
    }else{
        printf("Logo voce foi reprovado");
    }

    return 0;
}
