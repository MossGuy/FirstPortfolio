function updateOutputs(message, image) {
    prog_talen_output1.innerText = message;
    prog_talen_output2.innerText = message;
    prog_logo1.src = image;
    prog_logo2.src = image;
}

const prog_talen = document.getElementById("prog_talen");
const prog_talen_output1 = document.getElementById("prog_talen_output1");
const prog_talen_output2 = document.getElementById("prog_talen_output2");
const prog_logo1 = document.getElementById("cool_changing_logo1");
const prog_logo2 = document.getElementById("cool_changing_logo2");

const default_text = `
    Dit is maar de default tekst hoor, niet al te bijzonder
    
    ( ͡° ͜ʖ ͡°)
    `;
const html_kennis = `
    Ik kan comfortabel werken met de basis elementen van HTML. Ik kan HTML combineren met verschillende programmeertalen om leuke en interactieve web elementen te creëren.
    
    Ik kan mijn websites gestructureerd opbouwen. Later heb ik geleerd om naast header, nav en footer ook met main en section te werken.
`;
const css_kennis = `
    Ik kan goed onderscheid maken in het gebruik van classes en selectors. Verder heb ik kennis met Flexbox, Grids en CSS variabelen.

    Ik maak gebruik van %, vh, vw en rem en px.

    Media queries kan ik toepassen aan de hand van codevoorbeelden voor de syntax. 
`;
const bootstrap_kennis = `
    Het is even een tijdje geleden zinds ik echt heb gewerkt met bootstrap, een groot gedeelte waar ik vroeger convertabel mee kon werken ben ik ongetwijfeld verleerd. 
    Tegenwoordig pas ik Bootstrap vaak toe voor de icons. 

    Geafanceerde functies zoals toasts, accordions en navbar collapse kan ik alleen aan de hand van code voorbeelden.
`;
const php_kennis = `
    PHP is momenteel mijn lievelings programmeertaal!

    Ik heb al veel ervaring met PHP, in samenwerking met HTML en SQL via PDO. Ik kan goed werken met functies, sessions en associative arrays.
    
    Het maken van een DBConfig is nog wat lastig te onthouden haha.
`;
const javascript_kennis = `
    Ik heb een basis kennis met Javascript. Ik kan werken met gewone en async functies, eventlisteners en API's.
    Dit leuke element is ook gemaakt Javascript :)
`;
const mysql_Kennis = `
    Ik kan basis databases maken en onderhouden aan de hand van code voorbeelden voor de syntax.

    Daarnaast heb ik kennis over geavanceerde select statements,
    maar met een grote hoeveelheid functies en weinig oefening is dit lastig te onthouden.
    
    Laten we het maar niet hebben over joins... thx!
`;
const CSharp_kennis = `C# is momenteel mijn mist favoriete programmeertaal. 

    Ook met C# heb ik vanuit school en stage kennis opgebouwd, maar het leren van deze taal heb ik het meeste tijd voor moeten besteden in verhouding met andere talen die ik heb geleerd.

    een paar dingen waar ik ervaring mee heb zijn methods, constructors, erving en verschillende data types.
    Ook heb ik een tijdje met ASP.NET gewerkt, maar ik dat framework echt helemaal niks.
    Ik vind de bestandsstructuur super groot, en ik werk toch liever met XAMPP en Visual Studio Code :p

`;

prog_talen.addEventListener('change', () => {
    switch (prog_talen.value) {
        case "html":
            updateOutputs(html_kennis, "./afbeeldingen/prog_talen/HTML5.png");
            break;
        case "css":
            updateOutputs(css_kennis, "./afbeeldingen/prog_talen/CSS3.png");
            break;
        case "bootstrap":
            updateOutputs(bootstrap_kennis, "./afbeeldingen/prog_talen/Bootstrap5.png");
            break;
        case "php":
            updateOutputs(php_kennis, "./afbeeldingen/prog_talen/PHP.png");
            break;
        case "javascript":
            updateOutputs(javascript_kennis, "./afbeeldingen/prog_talen/Javascript.png");
            break;
        case "mysql":
            updateOutputs(mysql_Kennis, "./afbeeldingen/prog_talen/MySQL.png");
            break;
        case "c#":
            updateOutputs(CSharp_kennis, "./afbeeldingen/prog_talen/Csharp.png");
            break;
        default:
            updateOutputs(default_text, "./afbeeldingen/duck.gif");
    }
});