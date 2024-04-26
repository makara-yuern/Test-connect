# exam-programmer-0024

## Instructions

Requirements
- Accept a command line argument
- The argument is an integer.
- The program converts the argument to English phrases.
Example:
    Command: php ./num_to_eng.php 1234
    Output: one thousand, two hundreds and thirty-four
- Put a hyphen ‘-’ between the last digit and the last 2 digits.
- Put ‘and’ between the ‘hundred’ and the last 2 digits.
- Put a comma ‘,’ after ‘thousand’.
- Put ‘s’ after thousand if it’s plural.
- Put 's' after hundred if it’s plural.
- The argument should be equal or greater than 0, and less than 10,000. (0-9999)
- If the argument doesn’t meet the above condition, show an error message in stdout.
- Manage the code history by Git.
- (Optional) Prepare docker configuration to run the program.
- Make a README.md that describes how to run the program.
- Don’t use any library including the required feature. You must make the code by yourself.

This program can be run through with php-cli via the command below

```console
foo@bar:~$ php numberToEnglish.php [argv]

```

`NOTE:` Replace the `[argv]` with your own prefered numbers between `1-9999`.
