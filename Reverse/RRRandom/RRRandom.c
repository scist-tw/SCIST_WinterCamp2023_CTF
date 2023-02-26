#include <stdio.h>
#include <stdlib.h>
#include <time.h>

char Flag[] = "SCIST{FAKE_FLAG}";
char out[] = { 72, 158, 35, 91, 56, 139, 66, 248, 175, 73, 13, 109, 91, 247, 105, 138, 59, 174, 123, 28, 175, 67, 171, 218, 14, 17};
int main()
{
    int i, n;
    time_t t;

    n = sizeof(Flag) / sizeof(char);

    srand(5);

    for( i = 0 ; i < n ; i++ ) {
          //printf("%c", Flag[i] ^ (rand() % 256));
    }
    puts("Encrypt This");
    for( i = 0 ; i < sizeof(out) / sizeof(char); i++)
        printf("%d ", out[i]);
    return(0);
}