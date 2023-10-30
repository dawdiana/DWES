
print("Adivina adivinanza:")
print("Oro parece, plata no es.")
print("")
print("a. Es L")
print("b. Es el amor de mi vida")
print("c. Es un plátano")
print("")
print("¿Qué es?")
print("")
respuesta = input()

#Mirar que solo acepte respuestas como a, b o c
while respuesta !="c" and respuesta !="a" and respuesta !="b":
    print("")
    print ("Aprende a leer y contesta bien >:(")
    print("¿Qué es?") 
    print("")
    respuesta = input()
    print("")

if respuesta != "c":
    print("Eres tonto?, era la c.")
    print("")
else:
    print("Muy bien!!")