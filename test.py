string = list(input())
length = len(string)
while string != sorted(string):
    for i in range(length - 1):
        if string[i] > string[i + 1]:
            string[i + 1], string[i] = string[i], string[i + 1]
print(''.join(string))
    