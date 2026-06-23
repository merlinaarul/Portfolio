# Portfolio XML / RDFa - Merlina ARUL

Ce portfolio a ete realise dans le cadre du cours de Web semantique.

## Fichiers principaux

- `index.html` : version francaise du portfolio.
- `en.html` : version anglaise.
- `ta.html` : version tamoule.
- `css/style.css` : mise en page creative inspiree des portfolios editoriaux.
- `js/main.js` : petit script de confort, sans traduction automatique.
- `data/content.xml` : textes structures en XML.
- `data/content.dtd` : grammaire du fichier XML.
- `RDFA_EXPLICATION.md` : explication des annotations RDFa.
- `php/index.php` : exemple bonus de controleur PHP, non utilise sur GitHub Pages.

## Choix pour les langues

Le changement de langue ne se fait pas automatiquement. Chaque langue correspond a une page HTML differente.

- Francais : `index.html`
- Anglais : `en.html`
- Tamoul : `ta.html`

Cette organisation permet de montrer clairement qu'il existe trois versions du portfolio.

## Web semantique

Les annotations RDFa sont directement dans le HTML avec les vocabulaires :

- Dublin Core (`dc`) pour decrire le document ;
- FOAF (`foaf`) pour decrire la personne ;
- Schema.org (`schema`) en complement pour quelques informations de profil.

## Tester localement

Depuis le dossier du projet :

```bash
python3 -m http.server 8000
```

Puis ouvrir :

```text
http://localhost:8000/index.html
```

## GitHub Pages

GitHub Pages peut afficher directement les fichiers HTML, CSS et JavaScript.
Le fichier PHP est fourni uniquement comme bonus et ne sera pas execute sur GitHub Pages.
