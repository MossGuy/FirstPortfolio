function updateOutputs(message, image) {
    prog_talen_output1.innerText = message;
    prog_talen_output2.innerText = message;
    prog_logo1.src = image;
    prog_logo2.src = image;
}

let prog_talen = document.getElementById("prog_talen");
let prog_talen_output1 = document.getElementById("prog_talen_output1");
let prog_talen_output2 = document.getElementById("prog_talen_output2");
let prog_logo1 = document.getElementById("cool_changing_logo1");
let prog_logo2 = document.getElementById("cool_changing_logo2");
let dummy_select = document.getElementById("dummy_select");

const default_text = `
    Dit is maar de default tekst hoor, niet al te bijzonder
    
    ( ͡° ͜ʖ ͡°)
    `;
const html_kennis = `
    Ik kan comfortabel werken met de basis elementen van HTML. Ik kan HTML combineren met verschillende
    programmeertalen om leuke en interactieve web elementen te creëren.
`;
const css_kennis = `
    Ik kan goed onderscheid maken in het gebruik van classes en selectors. Verder heb ik kennis met Flexbox, Grids en CSS variabelen.

    Ik maak gebruik van %, vh, vw en rem en px. Mijn keuze over wanneer ik een van deze eenheden gebruik heeft nog geen methode.
`;
const bootstrap_kennis = `
    Ik kan prima overweg met de basis functionaliteiten van Bootstrap, in combinatie met mijn eigen CSS.

    Geafanceerde functies zoals toasts, accordions en navbar collapse kan ik alleen aan de hand van code voorbeelden.
`;
const php_kennis = `
    Ik heb al veel ervaring met PHP, in samenwerking met HTML en SQL via PDO. Ik kan goed werken met functies, sessions en arrays.
    Het maken van een DBConfig is nog wat lastig te onthouden haha.
`;
const javascript_kennis = `
    Ik heb nog maar een basis kennis met Javascript. Ik kan werken met gewone en async functies,  eventlisteners, classes en API's.
    Dit leuke element is ook gemaakt Javascript :)
`;
const mysql_Kennis = `
    Ik kan basis databases maken en onderhouden aan de hand van code voorbeelden voor de syntax.

    Daarnaast heb ik kennig over geavanceerde select statements,
    maar met een grote hoeveelheid functies en weinig oefening is ook dit lastig te onthouden.
    
    Laten we het maar niet hebben over joins... thx!
`;
const CSharp_kennis = `
    C# is voor mij nog wat lastig. Ik heb een basis kennis over classes, methods, constructors en erving.
    
    Om complexe programma's te maken die veel classes bevatten moet ik altijd even mijn weg vinden.
    Dit zorgd ervoor dat ik er langer over doe om C# programma's te bouwen.
`;

prog_talen.addEventListener('change', () => {
    dummy_select.innerHTML = `<option value="idk">${prog_talen.options[prog_talen.selectedIndex].text}</option>`;
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