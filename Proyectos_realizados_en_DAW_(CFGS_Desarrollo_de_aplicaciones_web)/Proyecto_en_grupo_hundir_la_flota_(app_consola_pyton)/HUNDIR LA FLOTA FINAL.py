#FUNCIONES

def rellenarAgua(mapa):
    for i in range(0,10):
        filas =[f"{i+1} ","~~","~~","~~","~~","~~","~~","~~","~~","~~","~~"]
        mapa.append(filas)

def rellenarNiebla(mapa):
    for i in range(0,10):
        filas =[f"{i+1} ","**","**","**","**","**","**","**","**","**","**"]
        mapa.append(filas)

def print_mapa(mapa):
    for i in range(len(mapa)):
        print ('\n')
        for y in range(len(mapa[i])):
            print(mapa[i][y], end="  ")

def print_principal():
    print (" ----------------------------------------------------")
    print (" I   !!!!!Bienvenido querido usuario!!!!!           I")
    print (" I  Vas a jugar a hundir la flota,que emocion.      I")
    print (" I  Mucha suerte en tu aventura acuatica            I")
    print (" I  Como diria un gran profesor ¡¡¡animo chicos !!! I")
    print (" ----------------------------------------------------")  

def print_menu():
    print('\n\n*************MENU*************')
    print('* 1.-INSTRUCCIONES ***********')
    print('* 2.-JUGAR *******************')
    print('* 3.-SALIR *******************')
    print('******************************')

def print_mapa_p1():
    print ("\n*****************************************************")
    print ("* Ahora mismo estas viendo el mapa del P1(jugador1) *")
    print ("* Este mapa contiene la informacion del mapa del P1 *")
    print ("*   Es decir donde has colocado tus barcos :DD      *")
    print ("*****************************************************")
    
def print_mapa_p1_niebla():
    print ("\n****************************************************************************")
    print ("* Ahora mismo estas viendo el mapa de niebla de guerra del P1(jugador1)    *")
    print ("* Este mapa contiene la informacion del mapa del P2                        *")
    print ("* Como puedes observar no se ve nada mas que una densa niebla de guerra(*) *")
    print ("* Solo podras descifrar lo que hay en su tablero si disparas a ciegas      *")
    print ("* Cada vez que dispares a alguna posicion del mapa de niebla desbloquearas *")
    print ("* su contenido, mucha suerte marinero de agua dulce arrrrrrr               *")
    print ("****************************************************************************")

def print_mapa_p2():
    print ("\n*****************************************************")
    print ("* Ahora mismo estas viendo el mapa del P2(jugador2) *")
    print ("* Este mapa contiene la informacion del mapa del P2 *")
    print ("*   Es decir donde has colocado tus barcos :DD      *")
    print ("*****************************************************")

def print_mapa_p2_niebla():
    print ("\n****************************************************************************")
    print ("* Ahora mismo estas viendo el mapa de niebla de guerra del P2(jugador2)    *")
    print ("* Este mapa contiene la informacion del mapa del P1                        *")
    print ("* Como puedes observar no se ve nada mas que una densa niebla de guerra(*) *")
    print ("* Solo podras descifrar lo que hay en su tablero si disparas a ciegas      *")
    print ("* Cada vez que dispares a alguna posicion del mapa de niebla desbloquearas *")
    print ("* su contenido, mucha suerte marinero de agua dulce arrrrrrr               *")
    print ("****************************************************************************")

def print_mapa(a):
    for i in range(len(a)):
        print ('\n')
        for y in range(len(a[i])):
            print(a[i][y], end="  ")

def colocar_barcos(jnumero):
    tamaño=2
    if (jnumero==1):
        b='R'
        print("JUGADOR 1")
    else:
        b='V'
        print("JUGADOR 2")
    for i in range (0,9):
        nombre=f'{b}{i+1}'
        if (nombre==f'{b}5'):
            tamaño=3
        elif (nombre==f'{b}7'):
            tamaño=4
        elif (nombre==f'{b}9'):
            tamaño=5
        if (jnumero==1):    
            colocar_barco(tamaño, nombre, p1_mapa)
            print("\n")
            print_mapa(p1_mapa)
            print("\n")
        else:
            colocar_barco(tamaño, nombre, p2_mapa)
            print("\n")
            print_mapa(p2_mapa)
            print("\n")

def colocar_barco(tamaño, nombre, jugador_mapa):
    colocadoCorrectamente = False
    while colocadoCorrectamente == False:
        colocar_barco_fila = int(input(f"Dime en que fila quieres colocar el barco {nombre} de {tamaño} piezas "))
        colocar_barco_columna = int(input(f"Dime la columna donde quieres colocar el barco {nombre} de {tamaño} piezas "))
        colocar_barco_v_h = input("Quieres colocar horizontal H o vertical V: ")
        if colocar_barco_v_h == "H":
            for i in range(tamaño):
                if colocar_barco_fila>10 or colocar_barco_columna+i>10:
                    print("problema, te sales de los limites")
                    break
                elif jugador_mapa[colocar_barco_fila][colocar_barco_columna+i] != "~~":
                    print("no puedes colccar el barco asi")
                    break
                elif i==tamaño-1:
                    colocadoCorrectamente = True
                    for i in range(tamaño):
                        jugador_mapa[colocar_barco_fila][colocar_barco_columna+i] = nombre
        if colocar_barco_v_h == "V":
            for i in range(tamaño):
                if colocar_barco_fila+i>10 or colocar_barco_columna>10:
                    print("problema, te sales de los limites")
                    break
                elif jugador_mapa[colocar_barco_fila+i][colocar_barco_columna] != "~~":
                    print("no puedes colccar el barco asi")
                    break
                elif i==tamaño-1:
                    colocadoCorrectamente = True
                    for i in range(tamaño):
                        jugador_mapa[colocar_barco_fila+i][colocar_barco_columna] = nombre

def hundido(a,b,f,c,barco):
    global vidas1
    global vidas2
    cont=0
    num=barco[1]
    for i in range(len(a)):
        for j in range(len(a[i])):
            if (a[i][j]==barco):
                cont=cont+1
    if (cont==0):
        for i in range(len(a)):
            for j in range(len(a[i])):
                if (a[i][j]==f'T{num}'):
                    a[i][j]='X '
                    b[i][j]='X '
        if (turno%2!=0):
            vidas1=vidas1-1
        else:
            vidas2=vidas2-1
            
def ataque(a,b):
    f=int(input('\nIntroducir número de fila: '))
    c=int(input('\nIntroducir número de columna: '))
    if (a[f][c]!='~~'):
        num=a[f][c][1]
        barco=a[f][c]
        print(num)
        if (a[f][c]==f'R{num}' or a[f][c]==f'V{num}'):
            a[f][c]=f'T{num}'       
            b[f][c]=f'T{num}'
        hundido(a,b,f,c,barco)        
    else:
        b[f][c]='~~'

#VARIABLES

turno=1
vidas1=9
vidas2=9
opcion=0
p1_mapa = [[" ", " 1", " 2", " 3", " 4", " 5", " 6", " 7", " 8", " 9", " 10"]]        
p2_mapa = [[" ", " 1", " 2", " 3", " 4", " 5", " 6", " 7", " 8", " 9", " 10"]] 
p1_nievla = [[" ", " 1", " 2", " 3", " 4", " 5", " 6", " 7", " 8", " 9", " 10"]]
p2_nievla = [[" ", " 1", " 2", " 3", " 4", " 5", " 6", " 7", " 8", " 9", " 10"]]

#PROGRAMA PRINCIPAL

rellenarAgua(p1_mapa)
p1_mapa[10][0]="10"
rellenarAgua(p2_mapa)
p2_mapa[10][0]="10"
rellenarNiebla(p1_nievla)
p1_nievla[10][0]="10"
rellenarNiebla(p2_nievla)
p2_nievla[10][0]="10"
print_principal()    
while (opcion!=3):
    print_menu()
    opcion=int(input('\nIntroducir numero de opcion: '))    
    if (opcion==1):
        print_mapa(p1_mapa)
        print_mapa_p1()
        print('\n')
        print_mapa(p2_mapa)
        print_mapa_p2()
        print('\n')
        print_mapa(p1_nievla)
        print_mapa_p1_niebla()
        print('\n')
        print_mapa(p2_nievla)
        print_mapa_p1_niebla()
        print('\n')
    if (opcion==2):
        colocar_barcos(1)
        colocar_barcos(2)
        while (vidas1!=0 and vidas2!=0):
            if (turno%2!=0):
                print_mapa(p2_nievla)    
                print_mapa(p1_mapa)
                ataque(p2_mapa,p2_nievla)
            else:
                print_mapa(p1_nievla)
                print_mapa(p2_mapa)
                ataque(p1_mapa,p1_nievla)
            turno=turno+1
            
        
