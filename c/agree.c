#include <stdio.h>

int main() {
  char choice;

  printf("Are you agree?\n");
  scanf(" %c", &choice);

  if (choice == 'y' || choice == 'Y') {
    printf("Agree");
  } else if (choice == 'n' || choice == 'N') {
    printf("Not Agree");
  } else {
    printf("Invalid input.");
  }

  return 0;
}
