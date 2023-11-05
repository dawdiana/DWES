if __name__ == '__main__': 

    import random

    opc = "" #opción señalada por el usuario
    jugada = "" #jugada del usuario
    jugada2 = "" #jugada del programa
    contador = 1 #contador de partidas
    cPu = 0 #contador de puntos del usuario
    cPm = 0 #contador de puntos del programa

    opciones = ["Piedra", "Papel", "Tijera"] #lista de opciones para generar respuestas aleatorias


    def convertir_opcion(op): #se le pasa la opción escogida por el usuario
        if op == "a":
            jug = "Piedra"
        elif op == "b":
            jug = "Papel"
        else:
            jug = "Tijera" 
         
        return jug #devuelve a que jugada equivale la opción


    while contador < 5: # el código se ejecuta mientras que el contador de partidas no llegue a cinco

        print("{Partida número " + str(contador)+"}")

        #Pedimos que el usuario escoja una opción
        opc = input("Piedra, papel, o tijera. Saca lo que quieras de la papelera: \n a. Piedra\n b. Papel\n c. Tijera\n Jugada =  ")

        #Validamos la opción
        while opc not in ("a","b","c"):
             print("\n[[Opción no válida!!]]\n")
             opc = input("Piedra, papel, o tijera. Saca lo que quieras de la papelera: \n a. Piedra\n b. Papel\n c. Tijera\n Jugada =  ")

        jugada = convertir_opcion(opc) #convertimos su opción en una jugada
        jugada2 = random.choice(opciones) #el programa genera otra jugada random


        if jugada == jugada2: #si jugada y jugada dos son iguales, hay un empate
             print("\n[ Parece que hay un empate ]\n")
        elif jugada == "Tijera" and jugada2 == "Papel" or jugada == "Piedra" and jugada2 == "Tijera" or jugada =="Papel" and jugada2=="Piedra":
            print("\n[ Has ganado, "+ jugada + " gana a "+ jugada2 + " ]\n") #en cualquiera de los casos donde gane el usuario, este gana un punto
            cPu = cPu + 1
        else:
            print("\n[ Has perdido, " + jugada +" pierde contra " + jugada2 + " ]\n") #si las jugadas no son iguales y el usuario no gana, la máquina consigue el punto
            cPm = cPm + 1


        contador = contador + 1 #el contador de partidas se incrementa



    #al terminar las cinco partidas, si el usuario tiene más puntos que la máquina, gana
    if cPu > cPm:
        print("{Has ganado!!} ")
    elif cPu == cPm: #si los dos tienen los mismos puntos, se muestra que ha sido un empate
        print("{Parece que habéis empatado}") #si el usuario tiene menos puntos, se muestra que ha perdido
    else: 
        print("{Has perdido por "+ str(cPm - cPu) + " punto/s, por pringado}")


        