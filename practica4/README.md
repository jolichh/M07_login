# PRÀCTICA 4 - LOGIN AMB PHP I MYSQL

- El tractament serà:
  - Si la consulta retorna un resultat:
    - Si el rol és estudiant; mostrarà per pantalla: el nom, cognom, email

    - Si el rol és professor, mostrarà el nom i cognom del professor i mostrarà la informació de tots els usuaris de les BBDD.

  - En el cas de que no sigui correcte:
    - Tornarà a la pàgina de login i apareixerà un error de “Login incorrecte”.

- Haureu de crear i fer servir una funció per fer la consulta de tots els usuaris quan el rol és professor.
- Les constants de la connexió s'haurà de fer servir a través d’un fitxer extern dbConf.php
- S’haurà de fer servir el try, catch en l’arxiu de connexió.
- Les vistes (del la pàgina login, la pàgina inserció de dades i la pàgina de mostra de dades) s’hauran de posar en una carpeta de nom vistes.
