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


const kennisData = {
    html: {
        text: `
            Ik kan comfortabel werken met de basis elementen van HTML. Ik kan HTML combineren met verschillende programmeertalen om leuke en interactieve web elementen te creëren.
            
            Ik kan mijn websites gestructureerd opbouwen. Later heb ik geleerd om naast header, nav en footer ook met main en section te werken.
        `,
        img: "./afbeeldingen/prog_talen/HTML5.png"
    },
    css: {
        text: `
            Ik kan goed onderscheid maken in het gebruik van classes en selectors. Verder heb ik kennis met Flexbox, Grids en CSS variabelen.
    
            Ik maak gebruik van %, vh, vw en rem en px.
    
            Media queries kan ik toepassen aan de hand van codevoorbeelden voor de syntax. 
        `,
        img: "./afbeeldingen/prog_talen/CSS3.png"
    },
    bootstrap: {
        text: `
            Het is even een tijdje geleden sinds ik echt heb gewerkt met Bootstrap. Een groot gedeelte waar ik vroeger comfortabel mee kon werken ben ik ongetwijfeld verleerd. 
            Tegenwoordig pas ik Bootstrap vaak toe voor de icons. 
    
            Geavanceerde functies zoals toasts, accordions en navbar collapse kan ik alleen aan de hand van codevoorbeelden.
        `,
        img: "./afbeeldingen/prog_talen/Bootstrap5.png"
    },
    php: {
        text: `
            PHP is momenteel mijn lievelingsprogrammeertaal!
    
            Ik heb al veel ervaring met PHP, in samenwerking met HTML en SQL via PDO. Ik kan goed werken met functies, sessions en associative arrays.
            
            Het maken van een DBConfig is nog wat lastig te onthouden haha.
        `,
        img: "./afbeeldingen/prog_talen/PHP.png"
    },
    javascript: {
        text: `
            Ik heb een basiskennis van JavaScript. Ik kan werken met gewone en async functies, event listeners en API's.
            Dit leuke element is ook gemaakt met JavaScript :)
        `,
        img: "./afbeeldingen/prog_talen/Javascript.png"
    },
    mysql: {
        text: `
            Ik kan basisdatabases maken en onderhouden aan de hand van codevoorbeelden voor de syntax.
    
            Daarnaast heb ik kennis over geavanceerde SELECT-statements,
            maar met een grote hoeveelheid functies en weinig oefening is dit lastig te onthouden.
            
            Laten we het maar niet hebben over JOINS... thx!
        `,
        img: "./afbeeldingen/prog_talen/MySQL.png"
    },
    "c#": {
        text: `
            C# is momenteel mijn minst favoriete programmeertaal. 
    
            Ook met C# heb ik vanuit school en stage kennis opgebouwd, maar het leren van deze taal heeft me de meeste tijd gekost in verhouding met andere talen die ik heb geleerd.
    
            Een paar dingen waar ik ervaring mee heb zijn methods, constructors, overerving en verschillende datatypes.
            Ook heb ik een tijdje met ASP.NET gewerkt, maar ik vind dat framework echt helemaal niks.
            Ik vind de bestandsstructuur super groot, en ik werk toch liever met XAMPP en Visual Studio Code :p
        `,
        img: "./afbeeldingen/prog_talen/Csharp.png"
    },
    git: {
        text: `
            Ik heb wel eens de applicatieversie geprobeerd van Git, maar ik vind de command terminal fijner om mee te werken.
    
            Ik ben bekend met het concept van branches. Vaak maak je voor een functie een branch, maar voor solo-projectjes ga ik daar wat generieker mee om. 
            De branches voor dit project zijn:
            • content_updates
            • db_users
            • file_structure_tweaks
            • main (de master branch)
            • style_tweaks
    
            Ook met GitHub kan ik prima werken :)
        `,
        img: "./afbeeldingen/prog_talen/Git.png"
    }
};


prog_talen.addEventListener('change', () => {
    const keuze = prog_talen.value.toLowerCase();
    const data = kennisData[keuze] || { 
        text: `
            Dit is maar de default tekst hoor, niet al te bijzonder
            
            ( ͡° ͜ʖ ͡°)
        `,
        img: "./afbeeldingen/duck.gif"
    };
    updateOutputs(data.text, data.img);
});
