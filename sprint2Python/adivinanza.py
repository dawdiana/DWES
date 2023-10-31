if __name__ == '__main__': 

#LISTA DE DICCIONARIOS
   
 lista_diccionarios = [  
    {
        "Adivinanza": "Oro parece, plata no es.",
        "Opciones": 
        """a. Es L
b. Es el amor de mi vida
c. Es un plátano""",
        "Correcto" : "c"
    },

    {
        "Adivinanza": "La luna y el sol la llevan, pero en el aire no la ves, ¿Qué es?",
        "Opciones": 
        """a. Gravedad
b. La letra L
c. Una marioneta""",
        "Correcto" : "b"
    },

    {
        "Adivinanza": "Tengo agujas y no sé coser, tengo números y no sé leer.",
        "Opciones": 
        """a. Un pescado matemático 
b. Un reloj
c. Mis amigos""",

        "Correcto": "b"
    }
]


#Contador de puntos
contador = 0

for i in lista_diccionarios:
        print("")
        print("Adivina adivinanza:")
        print(i.get("Adivinanza")) #invocar a una variable de un diccionario desde una lista
        print("")
        print(i.get("Opciones"))
        respuesta=input("¿Qué es? ")
        
        if(respuesta.lower()!="a" and respuesta.lower()!="b" and respuesta.lower()!="c"):
            while (respuesta.lower()!="a" and respuesta.lower()!="b" and respuesta.lower()!="c"): #pillar las respuestas en lowerCase
                print("[Lee mejor las opciones y vuelve a contestar]")
                respuesta=input("¿Qué es? ")

        if (respuesta!=i.get("Correcto")):
            contador = contador - 5
            print("")
            print("Era la " + i.get("Correcto") + " tont@ :P")
        else:
            contador = contador + 10
            print("")
            print("Muy bien!!")
            print("")


print("Tu puntuación es de ", contador, " puntos.") #si pongo + en vez de , se concatena 

