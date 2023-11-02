if __name__ == '__main__': 

#Definir cuatro operaciones básicas (suma, resta, división, multiplicación)

    resultado = 0

    op1 =  int(input("Escribe el primer número: "))
    op2 = int(input("Escribe el segundo número: "))

    print("Escribe el tipo de operación: ")
    opc = input(" a. Suma \n b. Resta \n c. Multiplicación \n d. División \n Tipo: ")

    while(opc.lower() not in ("a","b","c","d")):
        print("Opción incorrecta!")
        opc = input("a. Suma \n b. Resta \n c. Multiplicación \n d. División \n Tipo: ")



    if opc.lower() == "a":
        resultado = op1 + op2

    elif opc.lower() == "b":
        resultado = op1 - op2

    elif opc.lower() == "c":
        resultado = op1 * op2

    else:
        try:
            resultado = op1 / op2
        except ZeroDivisionError:
            print("[Error - División por cero]")
        
    result = str(resultado)

    print("Resultado: " + result)