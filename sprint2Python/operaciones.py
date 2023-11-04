#Definir cuatro operaciones básicas (suma, resta, división, multiplicación)

# FUNCIONES - ponemos esta parte aquí arriba para que las funciones se puedan exportar
def func_suma (a,b): #SUMA
    return  a + b

def func_resta (a,b): #RESTA
    return a - b

def func_mul (a,b): #MULTIPLICACIÓN
    return  a * b

def func_div (a,b): #DIVISIÓN
    try:
        return a / b
    except ZeroDivisionError:
       return print("\n[Error - División por cero]")

if __name__ == '__main__': #Evita que el código se ejecute desde un archivo externo

        
    # VARIABLES
    resultado = 0

    op1 =  int(input("Escribe el primer número: "))
    op2 = int(input("Escribe el segundo número: "))

    # INDICAR TIPO DE OPERACIÓN
    print("Escribe el tipo de operación: ")
    opc = input(" a. Suma \n b. Resta \n c. Multiplicación \n d. División \n Tipo: ")

    # COMPROBAR OPERACIÓN VÁLIDA
    while(opc.lower() not in ("a","b","c","d")):
        print("Opción incorrecta!")
        opc = input("a. Suma \n b. Resta \n c. Multiplicación \n d. División \n Tipo: ")

    # ASIGNAR RESULTADO
    if opc == "a":
        resultado = func_suma(op1,op2)

    elif opc == "b":
        resultado = func_resta(op1,op2)
    elif opc == "c":
        resultado = func_mul(op1,op2)
    else:
        resultado = func_div(op1,op2)
    
    # CONVERTIR INT EN STRING
    result = str(resultado)

    #IMPRIMIR RESULTADO
    print("\n{Resultado: " + result+ "}")

    