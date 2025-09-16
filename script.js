var fullnameId = document.getElementById("fullname");
var emailId = document.getElementById("email");
var mobileId = document.getElementById("mobile");
var countryId = document.getElementById("country");
var cityId = document.getElementById("city");
var chant_commitmentId = document.getElementById("chant_commitment");
var preffer_languageId = document.getElementById("preffer_language");

window.onload = function () {
    const payload = {};

    fetch("action.php?action=get-country", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify(payload),
    })
        .then((response) => {
            if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
            }
            return response.json();
        })
        .then((data) => {
            populateCountrySelect(data);
        })
        .catch((error) => {
            console.error("Fetch Error:", error);
            // alert('Failed to load country data. Please try again later.');
        });

    fetch("action.php?action=get-dropdown-lables", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify(payload),
    })
        .then((response) => {
            if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
            }
            return response.json();
        })
        .then((data) => {
            console.log("Dropdown Labels:", data);

            populateCommitOptions(data.labels);
        })
        .catch((error) => {
            console.error("Fetch Error:", error);
            // alert('Failed to load country data. Please try again later.');
        });
};

function populateCommitOptions(data) {
    const volunteerSelect = document.getElementById("volunteer");
    volunteerSelect.innerHTML = "";
    // Add default option
    const volunteerdefaultOption = document.createElement("option");
    volunteerdefaultOption.value = "";
    volunteerdefaultOption.textContent =
        "Would you like to do volunteer service in temple?*";
    volunteerSelect.appendChild(volunteerdefaultOption);
    // Ensure data.countries exists and is an array
    if (Array.isArray(data.volunteer)) {
        data.volunteer.forEach((volunteer) => {
            const option = document.createElement("option");
            option.value = volunteer.value;
            option.textContent = volunteer.label;
            volunteerSelect.appendChild(option);
        });
    }

    const progressSelect = document.getElementById("progress");
    progressSelect.innerHTML = "";
    // Add default option
    const progressdefaultOption = document.createElement("option");
    progressdefaultOption.value = "";
    progressdefaultOption.textContent =
        "Would you like to progress spiritually?*";
    progressSelect.appendChild(progressdefaultOption);
    // Ensure data.countries exists and is an array
    if (Array.isArray(data.progress)) {
        data.progress.forEach((progress) => {
            const option = document.createElement("option");
            option.value = progress.value;
            option.textContent = progress.label;
            progressSelect.appendChild(option);
        });
    }

    const chantSelect = document.getElementById("chant_commitment");
    chantSelect.innerHTML = "";
    // Add default option
    const chantdefaultOption = document.createElement("option");
    chantdefaultOption.value = "";
    chantdefaultOption.textContent =
        "Will you chant everyday 108 times Hare Krishna Mahamantra?*";
    chantSelect.appendChild(chantdefaultOption);
    // Ensure data.countries exists and is an array
    if (Array.isArray(data.chant)) {
        data.chant.forEach((chant) => {
            const option = document.createElement("option");
            option.value = chant.value;
            option.textContent = chant.label;
            chantSelect.appendChild(option);
        });
    }

    const gitaSelect = document.getElementById("gita_class");
    gitaSelect.innerHTML = "";
    // Add default option
    const gitadefaultOption = document.createElement("option");
    gitadefaultOption.value = "";
    gitadefaultOption.textContent =
        "Would you like to join Online Gita Classes?*";
    gitaSelect.appendChild(gitadefaultOption);
    // Ensure data.countries exists and is an array
    if (Array.isArray(data.gita)) {
        data.gita.forEach((gita) => {
            const option = document.createElement("option");
            option.value = gita.value;
            option.textContent = gita.label;
            gitaSelect.appendChild(option);
        });
    }
}

function populateCountrySelect(data) {
    const countrySelect = document.getElementById("country");
    countrySelect.innerHTML = "";

    // Add default option
    const defaultOption = document.createElement("option");
    defaultOption.value = "";
    defaultOption.textContent = "Select Country";
    countrySelect.appendChild(defaultOption);

    // Ensure data.countries exists and is an array
    if (Array.isArray(data.countries)) {
        data.countries.forEach((country) => {
            const option = document.createElement("option"); // ← this line was missing
            option.value = country.COUNTRY_ID;
            option.textContent = country.COUNTRY_NAME;
            if (country.COUNTRY_ID === 101) {
                option.selected = true;
            }
            countrySelect.appendChild(option);
        });
    }
}

function registerAgain(regId) {
    window.location.href = `/krishnashraya/chanters-club/confirmation`;
}
