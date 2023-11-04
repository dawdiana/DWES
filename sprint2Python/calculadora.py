if __name__ == '__main__': 

    import operaciones #importamos operaciones.py
    from operaciones import func_suma, func_resta, func_div, func_mul   #importamos funciones

    resultado = 0
    repetir = True #variable booleana para repetir
    r = ""

    while repetir == True: #mientras que repetir sea cierto, ejecutamos el código una y otra vez

        op1 = int(input("Escribe el primer operando: "))
        op2 = int(input("Escribe el segundo operando: "))
        
        print("Escribe el tipo de operación: ")
        opc = input(" a. Suma \n b. Resta \n c. Multiplicación \n d. División \n Tipo: ")

        while(opc.lower() not in ("a","b","c","d")): #nos aseguramos de que la opción indicada por el usuario sea correcta 
            print("Opción incorrecta!\n") #sino le avisamos de que es incorrecta
            opc = input("a. Suma \n b. Resta \n c. Multiplicación \n d. División \n Tipo: ")

        if opc == "a": #según su respuesta se usará una función de operaciones.py u otra para calcular el resultado
            resultado = func_suma(op1,op2)
        elif opc == "b":
            resultado = func_resta(op1,op2)
        elif opc == "c":
            resultado = func_mul(op1,op2)
        else:
            resultado = func_div(op1,op2)

        result = str(resultado) #convertimos el int resultado en un string

        print("{Resultado: " + result + "}")    


        r = input("\n\n¿Quieres realizar otra operación? (s/n): ")  #preguntamos si el usuario quiere repetir

        while r not in ("s","n"): #nos aseguramos de que solo se pillen las respuestas 's' y 'n'
          print("Opción incorrecta!\n")
          r = input("\n\n¿Quieres realizar otra operación? (s/n): ") #en caso de que la respuesta no sea 's' ni 'n', volvemos a preguntar

        if r.lower()=="n": #si la respuesta es n, no repetimos el bucle
            repetir = False
        else:
            repetir = True #en caso contrario, repetir es true y repetimos
            
        print("") 



