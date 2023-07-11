# Comment faire des search & replace dans la database

Avec la commande SQL update et le mot clé replace()

```sql
UPDATE table SET champ = REPLACE(champ, 'ancienne-chaine', 'nouvelle-chaine')
```

Pour les tables oshop :

```sql
update category set picture = replace(picture, 'assets/images/', 'https://benoclock.github.io/S06-images/')
update product set picture = replace(picture, 'assets/images/', 'https://benoclock.github.io/S06-images/')
```
