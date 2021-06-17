#include <stdio.h>

int ctrl[3][3];
char imp[3][3];
int ctrlf(int l1,int c1,int l2,int c2)
{
    int cti,ctj,chp1=0,chp2=0,chv=0,cmp;

    --l1; --c1; --l2; --c2;
    ctrl[l1][c1] = 1; imp[l1][c1] = 'X';
    ctrl[l2][c2] = 2; imp[l2][c2] = 'O';

    for(cti=0;cti<3;cti++){
        for(ctj=0;ctj<3;ctj++){
            if(ctrl[cti][ctj] == 1){
               ++chp1;
            }
            if(ctrl[cti][ctj] == 2){
               ++chp2;
            }
            if(ctrl[cti][ctj] == 0){
               chv = 1;
            }
        }
        if (chp1 == 3)
            return 1;
        if (chp2 == 3)
            return 2;
        chp1 = 0;
        chp2 = 0;
    }//checagem linha

    for(cti=0;cti<3;cti++){
        for(ctj=0;ctj<3;ctj++){
            if(ctrl[ctj][cti] == 1){
               ++chp1;
            }
            if(ctrl[ctj][cti] == 2){
               ++chp2;
            }
        }
        if (chp1 == 3)
            return 1;
        if (chp2 == 3)
            return 2;
        chp1 = 0;
        chp2 = 0;
    }//checagem coluna

    for(cti = 0;cti<3;cti++){
            if(ctrl[cti][cti] == 1){
               ++chp1;
            }
            if(ctrl[cti][cti] == 2){
               ++chp2;
            }
    }
    if (chp1 == 3)
            return 1;
    if (chp2 == 3)
            return 2;
    chp1 = 0;
    chp2 = 0;
    // checagem diag. principal

    for(cti=0;cti<3;cti++){
        for(ctj=0;ctj<3;ctj++){
            if(cti + ctj == 2){
            if(ctrl[cti][ctj] == 1){
               ++chp1;
            }
            if(ctrl[cti][ctj] == 2){
               ++chp2;
            }
            }
        }
    }
    if (chp1 == 3)
            return 1;
    if (chp2 == 3)
            return 2;
        chp1 = 0;
        chp2 = 0;
    //checagem diag. sec.



 if (chv == 0){
     return 3;
 }


return 0;
}

impjogo()
{

 int impi, impj;
  system("cls");
 for(impi=0;impi<3;impi++){
    for(impj=0;impj<3;impj++){
       printf("%c ",imp[impi][impj]);
    }
    printf("\n");
 }
}

int central()
{
 int i,j,j1l,j1c,j2l,j2c,result;
 for(i=0;i<3;i++){
     for(j=0;j<3;j++){
        ctrl[i][j] = 0;
        imp[i][j] = '*';
     }
 }
 do{
    impjogo();
    printf("==Jogador 1==\n");
    printf("Linha: ");
    scanf("%d",&j1l);
    printf("Coluna: ");
    scanf("%d",&j1c);
    printf("==Jogador 2==\n");
    printf("Linha: ");
    scanf("%d",&j2l);
    printf("Coluna: ");
    scanf("%d",&j2c);
    result =  ctrlf(j1l,j1c,j2l,j2c);
 }while(result == 0);
 impjogo();
 if (result == 1){
    puts("JOGADOR 1 GANHOU");
 }
 if (result == 2){
    puts("JOGADOR 2 GANHOU");
 }
 if (result == 3){
    puts("VELHA...");
 }
 return 1;
}

main()
{
  while(central()==0){

  }
}
