#include <stdio.h>
#include <stdlib.h>
#include <string.h>
//variaves fodas para a chave de criptografia|
char CHAVE[] = "AbCdE123";            //     |
int TAM_CHAVE = strlen(CHAVE);        //     |
//--------------------------------------------
//VETOR DE PICA PAU + GARDIÕES DAS GALAXIAS = PICA DAS GALAXIAS|
char TEXTO[100000];
int TAM_TEXTO = 100000;
//--------------------------------------------------------------
bool Criptografar(){
	return true;
}
void Recebe_texto(char tipo[]){
	char meme[TAM_TEXTO];
	char palse;
	FILE *arquivo;
	char word[100];  
	if (strcmp(tipo,"msg") == 0){
		printf("\n\n Receber a texto para criptografar\n\n");
		printf("\n\n Digite o texto: \n\n");
		gets(meme);
		if (strlen(meme) <= TAM_TEXTO){
			printf("\n\n texto recebido com sucesso");
			printf("\n\nCriptografando o texto...\n\n");
			
			if (Criptografar()){
				printf("\n\n criptografia feita com sucesso!!\n\n");
				printf("\n\n Precione enter para abrir o local do arquivo\n\n");
				scanf("%c", &palse);
				setbuf(stdin,NULL);
				system("explorer C:\\Users\\renata\\Documents\\criptonita\\arquivos ");
			}else{
				printf("\n\n tentativa de criptografia foi falha :( \n\n");
			}
		}else{
			printf("\n\n ERRO!! O tamanho do texto excede o limine no tamanho do caractere");
		}
		
		system("pause");
	}else if (strcmp(tipo , "arquivo") == 0){
		printf("\n\n Instruçoes para importar o arquivo criptografado \n\n");
		printf("\n\n 1 - Renomeie o arquivo para 'origial.txt' \n\n");
		printf("\n\n 2 - Copie o arquivo para a pasta que sera aberta a seguir \n\n");
		printf("\n\n 3 - feche o explorador de arquivo e retorne a aplicaçao");
		
		printf("\n\n\n Precione enter para abrir a pasta");
		scanf("%c", &palse);
		system("explorer C:\\Users\\renata\\Documents\\criptonita\\arquivos_originais\\");
		printf("\n\nprecione enter apos colar o arquivo na pasta...\n\n");
		printf("\n\n Importando os arquivos...\n\n");
		
		arquivo = fopen("C:\\Users\\renata\\Documents\\criptonita\\arquivos_originais\\original.txt" , "r");
		if (arquivo == NULL){
			printf("\n\n houve um erro apos importaçao de arquivo \n\n");
		}else{
			while(!feof(arquivo)){
				fscanf(arquivo , "%s", word);
				strcat(meme," ");
				strcat(meme, word);
				
				
			}
			//codigo reaproveitado
			if (strlen(meme) <= TAM_TEXTO){
			printf("\n\n texto recebido com sucesso");
			printf("\n\nCriptografando o texto...\n\n");
			
			if (Criptografar()){
				printf("\n\n criptografia feita com sucesso!!\n\n");
				printf("\n\n Precione enter para abrir o local do arquivo\n\n");
				scanf("%c", &palse);
				setbuf(stdin,NULL);
				system("explorer C:\\Users\\renata\\Documents\\criptonita\\arquivos ");
			}else{
				printf("\n\n tentativa de criptografia foi falha :( \n\n");
			}
		}else{
			printf("\n\n ERRO!! O tamanho do texto excede o limine no tamanho do caractere");
		}
		
		system("pause");
	 	}
	}else{
		printf("\n\n houve um erro ao receber o texto \n\n :(");
		system("pause");
	}
}
void Receber_arquivo(){
	
}
void Menu_Criptografar(){
	int opcao;
	system("cls");
	printf("\n\t criptografia de dados");
	printf("\n\n Criptografar um texo ou arquivo");
	printf("\n\n 1 - Digitar um texto");
	printf("\n\n 2 - Importar arquivo de texto (txt)");
	printf("\n\n 3 - Voltar ao menu principal ");
	printf("\n\n Informe a opcao desejada meu consagrado: ");
	scanf("%d",&opcao);
	setbuf(stdin,NULL);
	switch(opcao){
		case 1:
			system("cls");
			Recebe_texto("msg");
			break;
		case 2:
			system("cls");
			Recebe_texto("arquivo");
			break;
		case 3:
			break;
		default:
			printf("Opcao invalida, tente novamente....");
	}
}
void Menu(){
	while(1){
		int opcao;
		system("cls");
		printf("\n\t criptografia de dados");
		printf("\n\n 1 - Criptografar um texto ou arquivo");
		printf("\n\n 2 - Receber um arquivo");
		printf("\n\n 3 - Sair");
		printf("\n\n Informe a opcao desejada: ");
		scanf("%d",&opcao);
		setbuf(stdin,NULL);
		switch(opcao){
			case 1:
				system("cls");
				Menu_Criptografar();
				break;
			case 2:
				system("cls");
				Receber_arquivo();
				break;
			case 3:
				printf("\n\n finalizando em...");
				system("pause");
				exit(0);
				break;
			default:
				printf("opcao invalida, tente novamente.....");
		}
			
	
	
	}
	
	
		
}
int main() {
	Menu();
	
	return 0;
}
