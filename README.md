# PC Shop

Regisztrációs, Login felületes böngészhető Online PC bolt megrendelések feldolgozásával, teljes admin felülettel, eladói és felhasználói felülettel.

4 adatbázis tábla. (users, items, orders, completed_orders)

Felhasználói felület: Megrendelés leadásához szükséges a regisztráció, ezután kap egy userID-t a rendelő, így tudja feldolgozni az adatbázis a megrendelést, és hozzákötni a termékhez.

Eladói felület: Tud hozzáadni számítógépet a bolthoz, valamint a sajátját törölni/módosítani.

Admin felület: PC hozzáadása, összes PC szerkesztése, felhasználók módosítása, összes megrendelés kezelése. 

PC hozzáadása esetén a felhasználó számára jelzi, hogy övé-e a gép.
Admin felül tudja írni a felhasználó permissionjét, így tud módosítani a hozzáférési szinten.
Megrendelés esetén bekerül a termék az orders táblába, ahol látható a megrendelő ID-je, a termék ID-je.
Admin által készként jelölés esetén a rendelés átkerül a completed_orders táblába, törlés esetén törlődik az orders táblából.

