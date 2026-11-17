
let params = new URLSearchParams(window.location.search);
let method = params.get("method");

let conT = document.getElementById("conT");
let conI = document.getElementById("conI");

let contacts = {
    email: [
        "support@salile.org",
        "manager@salile.org",
        "customerservice@salile.org",
        "opportunity@salile.org"
    ],
    phone: [
        "Customer Service: Coming soon",
        "Support: Coming soon",
        "Management: Coming soon",
        "Opportunities: Coming soon"
    ],
    fax: [
        "Customer Service Fax: Coming soon",
        "Management Fax: Coming soon"
    ],
    telegram: [
        "@SalileArtOfficial",
        "@SalileOpportunityOfficial",
        "@SalileArtistsOfficial"
    ],
    facebook: [
        "Salile Art",
        "Salile Support",
        "Salile Customer Service",
        "Salile Opportunities"
    ],
    instagram: [
        "@SalileArt",
        "@SalileSupport",
        "@SalileArtists",
        "@SalileOfficial"
    ]
};

if (method && contacts[method]) {
    conT.textContent = method.toUpperCase();
    conI.textContent = "";

    for (let info of contacts[method]) {
        let p = document.createElement("p");
        p.textContent = info;
        conI.appendChild(p);
    }
} else {
    conT.textContent = "Contact Information";
    conI.textContent = "Please select a contact method from CONTACT US.";
}
