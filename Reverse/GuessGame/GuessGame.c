#include <unistd.h>
#include <sys/types.h>
#include <sys/stat.h>
#include <fcntl.h>
#include <stdio.h>
#include <stdlib.h>
#include <limits.h>

char Flag[] = {0, 43, 40, 63, 56, 20, 48, 51, 0, 18, 7, 55, 50, 26, 60, 55, 32, 1, 51, 38, 10};
char Xor[] = {83, 104, 97, 108, 108, 111, 119, 70, 101, 97, 116, 104, 101, 114};
int main() {
    int c;
    FILE *fp;
    fp = fopen("/dev/urandom", "rb");
    c = fgetc(fp);
    fclose(fp);
    int guess;
    c %= 256;
    puts("Guess Number:");
    scanf("%d", &guess);
    if(c == guess) {
        puts("Flag:");
        for(int i = 0; i < sizeof(Flag) / sizeof(char); i++) {
            printf("%c", Flag[i] ^ Xor[i % (sizeof(Xor) / sizeof(char))]);
        }
    }
    else {
        printf("Real Number is: %d", c);
    }
}