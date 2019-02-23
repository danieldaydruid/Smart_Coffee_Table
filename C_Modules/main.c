/********************************************************************************
* Project Name: Simulated Unix Shell (Project 2)                                *
* Project Participants: Matthew Killoran and                                    *
* Project Date: October 9, 2018                                                 *
* Project Notes: No problems to report -                                        * 
*                                                                               *
********************************************************************************/
#include <stdio.h>
#include <string.h>
#include <stdlib.h>
#include <stdbool.h>
#include <ctype.h>
#include <unistd.h>
#include <sys/wait.h>

#define MAX 200
#define HISTORY_BUFFER_SIZE 100
#define MAX_NUMBER_OF_PARAMS 8

//Global history buffer integer index
int keep_track_of_commands = 0;
//Arguments to command line
char *args[MAX];
//Linked list history buffer Node definition
typedef struct Node {
  char history_attribute[MAX];
  int value;
  struct Node * next;
} node_t;

//Function declarations
void user_input_is_h(int index, char buffer[2][HISTORY_BUFFER_SIZE]);
int return_index(int index, char user_input[], char exit_condiiton[]);
void history_buffer_linked_list(node_t ** head, char user_input[]);
void print_history_buffer(node_t * head);
void run_shell(node_t * head, char user_input[]);
void print_immediate_history(node_t * head, bool duplicate);
void parse_user_command(char *cmd, char **params);\

//Main Function
int main(void) {
  //Initialize head of the linked list to NULL
  node_t * head = NULL;
  //Allocate the requisite amount of memory for the head node
  head = malloc(sizeof(node_t));
  //Declaration of user_input variable
  char user_input[MAX];
  //Initialize index to 0
  int index = 0;
  //Main shell function call
  run_shell(head, user_input);
  
  return 0;
}
/********************************************************************************
* Function Name: run_shell()                                                    *
* Function Purpose: The main shell simulation function of the program           *
* Last-Modified Log: October 2, 2018                                            *
* Notes: Fixed the wait(&status) call -                                         * 
*                                                                               *
********************************************************************************/
void run_shell(node_t * head, char user_input[]) {
  //Relevant shell variable declarations
  char user_input_copy[MAX];
  char exit_condiiton[MAX];
  char store_previous_command[MAX];
  bool is_amp_present = false;
  //Loop through the shell until the exit condition is met
  while(strcmp(user_input, exit_condiiton) != 0) {
    int status;
    strcpy(user_input, "");
    printf("\nosh> ");

    //Gets user input
    fgets(user_input, MAX, stdin);
    //Replace newline with null character
    char *temp;
    temp = strchr(user_input,'\n');   //Get the pointer to char token
    *temp = '\0';
    //Handles the ampersand command, changes boolean check value based on result.
    char *temporary;
    temporary = strchr(user_input, '&');
    if (temporary) {
        user_input[strlen(user_input)-2] = '\0';
        is_amp_present = true;
    }

    //Program exit command handling, for exiting the shell simulation immediately
    if(strcmp(user_input, "home") == 0) {
        strcpy(user_input, "curl -d '' http://192.168.0.13:8060/keypress/home");
    }
    if(strcmp(user_input, "left") == 0) {
        strcpy(user_input, "curl -d '' http://192.168.0.13:8060/keypress/left");
    }
    if(strcmp(user_input, "right") == 0) {
        strcpy(user_input, "curl -d '' http://192.168.0.13:8060/keypress/right");
    }
    //Backs up user_input

    strcpy(user_input_copy, user_input);
    parse_user_command(user_input_copy, args);

    if(strcmp(user_input, "exit") == 0) {
        return;
    }
    //Checks for whether !! is  on the command line
    if(strcmp(user_input, "!!") == 0 && keep_track_of_commands == 0) {
        printf("No commands in history.\n");
        continue;
    }
    else if(strcmp(user_input, "!!") == 0 && keep_track_of_commands > 0) {
        strcpy(user_input, store_previous_command);
        strcpy(user_input_copy, user_input);
        parse_user_command(user_input_copy, args);

        printf("%s\n", store_previous_command);
    }
    //Checks for whether !n is  on the command line
    else if (isdigit(*strtok(user_input, "!")) > 0) {
            node_t * current = head;
            bool found = false;
            char *token;
            token = strtok(user_input, "!");
            //Searching the history buffer for the specific command interested based on integer comparison
            while (current != NULL) {
                if (atoi(token) == current->value) {
                    found = true;
                    strcpy(user_input, current->history_attribute); // Inserting history in the first position
                    strcpy(user_input_copy, user_input);
                    parse_user_command(user_input_copy, args);
                    break;
                }
                //Sets the current pointer to the pointer's next connected node
                current = current->next;
            }
    }
    //Forks a child process
    pid_t pid;
    pid = fork();
    //Checks process id value
    if(pid < 0) {
        fprintf(stderr, "Fork Failed.");
        return;
    }
    else if(pid == 0) {
        if(strcmp(user_input, "!!") == 0 && keep_track_of_commands > 0) {
            strcpy(user_input, store_previous_command);
            parse_user_command(user_input, args);
            //Calls execvp() if the user_input is a valid Unix shell command
            execvp(args[0], args);
            //Returns the value of execvp() and checks for the validity
            int value_of_exec = execvp(args[0], args);
            if(value_of_exec == -1) {
                exit(0);
            }
        }
        //Checks for the proper n value based on user input (!n)
        else if (isdigit(*strtok(user_input, "!")) > 0) {
            node_t * current = head;
            bool found = false;
            //Tokenizes user_input for parsing
            char *token;
            token = strtok(user_input, "!");
            while (current != NULL) {
                if (atoi(token) == current->value) {
                    found = true;
                    strcpy(user_input, current->history_attribute); // Inserting history in the first position
                    parse_user_command(user_input, args);
                    break;
                }
                    current = current->next;
            }
        }
        //Conditions that checks for !n, if so, runs previous user commands
        else if (strcmp(user_input, "!!") != 0 && keep_track_of_commands > 0) {
            //Tokenizes user_input string
            char *token;
            char dummy_string[MAX];
            char user_input_extra[MAX];
            strcpy(user_input_extra, user_input);
            token = strtok(user_input_extra, "!");
            //Checks for the proper integer value based on user_input (!n)
            if(isdigit(*token) != 0) {
                //Parses and compares the tokenized user_input string
                strcpy(dummy_string, "!");
                strcat(dummy_string, token);
                if(strcmp(dummy_string, user_input) == 0) {
                  node_t * current = head;
                  bool found = false;
                  while (current != NULL) {
                    if (atoi(token) == current->value) {
                      found = true;
                      strcpy(user_input, current->history_attribute); // Inserting history in the first position
                      parse_user_command(user_input, args);
                      break;
                    }
                    current = current->next;
                  }
                }
                //Error handling for incorrect user_input
                else {
                  parse_user_command(user_input, args);
                  printf("Not a valid command, please try again\n");
                }
            }
            int value_of_exec = execvp(args[0], args);
            //Checks value of the execute function call
            if(value_of_exec == -1) {
                exit(0);
            }
        }
        //Calls execvp() if the command is a valid Unix command
        else {
            execvp(args[0], args);
            int value_of_exec = execvp(args[0], args);
            if (value_of_exec == -1) {
                exit(0);
            }
        }
    }
        //Parent process
    else {
        if (is_amp_present == false) {
            wait(&status);
        }
    }
        //Checks for user_input not equal to history
        if (strcmp(user_input, "history") != 0) {
            //Tokenizes the user_input variable for parsing
            char *token;
            char user_input_extra[MAX];
            strcpy(user_input_extra, user_input);
            token = strtok(user_input_extra, "!");
            if(isdigit(*token)) {
                if(keep_track_of_commands+1 == atoi(token) || keep_track_of_commands+1 < atoi(token) || atoi(token) == 0) {
                    printf("No such command in history.\n");
                    continue;
                }
            }
            strcpy(store_previous_command, user_input);
            history_buffer_linked_list(&head, user_input);
        }
        //Checks for user_input equal to history and, if so, prints the last 9 commands of the history buffer
        if (strcmp(user_input, "history") == 0) {
            print_history_buffer(head);
        }
    }
    //Indicates the end of the shell simulation
    printf("\nexit_condiiton is: %s", exit_condiiton);
}
/********************************************************************************
* Function Name: void parse_user_command()                                      *
* Function Purpose: Tokenize the user input string for purposes of execvp call  *
* Last-Modified Log: October 8, 2018                                            *
* Notes: Modified function arguments - Matt Killoran                            * 
*                                                                               *
********************************************************************************/
void parse_user_command(char *cmd, char **params) {
    int i;
    for (i = 0; i < MAX_NUMBER_OF_PARAMS; i++) {
        params[i] = strsep(&cmd, " ");
        if (params[i] == NULL) {
            break;
        }
    }
    return;
}
/********************************************************************************
* Function Name: history_buffer_linked_list()                                   *
* Function Purpose: Initializes and stores the history buffer in a linked list  *
* Last-Modified Log: September 29, 2018                                         *
* Notes: Renamed token variable -                                               * 
*                                                                               *
********************************************************************************/
void history_buffer_linked_list(node_t ** head, char user_input[]) {
  //Tokenizes the user_input for history buffer parsing
  char *token;
  char user_input_extra[MAX];
  strcpy(user_input_extra, user_input);
  token = strtok(user_input_extra, "!");
  if(isdigit(*token)) {
    if(keep_track_of_commands+1 == atoi(token) || keep_track_of_commands+1 < atoi(token) || atoi(token) == 0) {
      printf("No such command in history.\n");
      return;
    }
  }
  keep_track_of_commands = keep_track_of_commands + 1;
  node_t * new_node;
  //Allocates necessary size for new node of linked list history buffer
  new_node = malloc(sizeof(node_t));
  //Creates the new linked list history buffer element
  strcpy(new_node->history_attribute, user_input);
  new_node->value = keep_track_of_commands;
  new_node->next = *head;
  *head = new_node;
}
/********************************************************************************
* Function Name: print_history_buffer()                                         *
* Function Purpose: Prints the elements of the linked list history buffer       *
* Last-Modified Log: September 29, 2018                                         *
* Notes: Fixed limit to history buffer output                                   * 
*                                                                               *
********************************************************************************/
void print_history_buffer(node_t * head) {
    node_t * current = head;
    int count = 0;
    //Traverses the history buffer linked list and prints the last 9 entries
    while (current != NULL && count < 10 && current->value > 0) {
        printf("%d %s\n", current->value, current->history_attribute);
        current = current->next;
        count = count + 1;
    }
}
