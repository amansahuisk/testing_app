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
    const chantSelect = document.getElementById("chant_commitment");
    chantSelect.innerHTML = "";
    // Add default option
    const chantdefaultOption = document.createElement("option");
    chantdefaultOption.value = "";
    chantdefaultOption.textContent = "Do you chant regularly?";
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

    const languageSelect = document.getElementById("preffer_language");
    languageSelect.innerHTML = "";
    // Add default option
    const languagedefaultOption = document.createElement("option");
    languagedefaultOption.value = "";
    languagedefaultOption.textContent = "Preffered Language";
    languageSelect.appendChild(languagedefaultOption);
    // Ensure data.countries exists and is an array
    if (Array.isArray(data.language)) {
        data.language.forEach((language) => {
            const option = document.createElement("option");
            option.value = language.value;
            option.textContent = language.label;
            languageSelect.appendChild(option);
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

function submitForm(e) {
    e.preventDefault();

    console.log("Form submitted");

    document.getElementById("submitButton").disabled = true;
    document.getElementById("submitButton").innerHTML = "Submitting...";

    var isValid = true;
    document.getElementById("fullnameError").textContent = "";
    // document.getElementById("cityError").textContent = "";
    document.getElementById("emailError").textContent = "";

    if (fullnameId.value.trim() === "") {
        document.getElementById("fullnameError").textContent =
            "Full Name is required.";
        fullnameId.focus();
        isValid = false;
    } else {
        document.getElementById("fullnameError").textContent = "";
    }

    var mobileValue = mobileId.value.trim();
    var mobileRegex = /^[6-9]\d{9}$/;

    function allDigitsSame(str) {
        return /^(\d)\1{9}$/.test(str);
    }
    if (!mobileRegex.test(mobileValue)) {
        document.getElementById("mobileError").textContent =
            "Mobile number must be 10 digits";
        mobileId.focus();
        isValid = false;
    } else if (allDigitsSame(mobileValue)) {
        document.getElementById("mobileError").textContent =
            "Mobile number cannot have all digits the same.";
        mobileId.focus();
        isValid = false;
    } else {
        document.getElementById("mobileError").textContent = "";
    }

    if (
        emailId.value.trim() !== "" &&
        !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailId.value.trim())
    ) {
        document.getElementById("emailError").textContent =
            "Please enter a valid email address.";
        emailId.focus();
        isValid = false;
    } else {
        document.getElementById("emailError").textContent = "";
    }

    if (!countryId.value || countryId.value === "") {
        // document.getElementById("countryError").textContent =
        ("Country is required.");
        countryId.focus();
        isValid = false;
    } else {
        // document.getElementById("countryError").textContent = "";
    }

    if (cityId.value.trim() === "") {
        // document.getElementById("cityError").textContent = "City is required.";
        alert("City is required.");
        cityId.focus();
        isValid = false;
    } else {
        // document.getElementById("cityError").textContent = "";
    }

    if (!chant_commitmentId.value || chant_commitmentId.value === "") {
        document.getElementById("chant_commitmentError").textContent =
            "Chant commitment is required.";
        chant_commitmentId.focus();
        isValid = false;
    } else {
        document.getElementById("chant_commitmentError").textContent = "";
    }

    if (!preffer_languageId.value || preffer_languageId.value === "") {
        document.getElementById("preffer_languageError").textContent =
            "Language is required.";
        preffer_languageId.focus();
        isValid = false;
    } else {
        document.getElementById("preffer_languageError").textContent = "";
    }

    if (!isValid) {
        e.preventDefault(); // Prevent form submission
        setTimeout(() => {
            document.getElementById("submitButton").disabled = false;
            document.getElementById("submitButton").innerHTML =
                "Submit Registration";
        }, 2000);
        return;
    } else {
        const payload = {
            fullname: fullnameId.value,
            mobile: mobileId.value,
            email: emailId.value,
            country: countryId.value,
            city: cityId.value,
            chant_commitment: chant_commitmentId.value,
            language: preffer_languageId.value,
        };

        fetch("action.php?action=chanters-club-registration", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(payload),
        })
            .then((response) => response.json())
            .then((res) => {
                REGID = res.REGID ? res.REGID : "";
                registerAgain(REGID);
            })
            .catch((error) => {
                console.error("Error:", error);
            });
        setTimeout(() => {
            document.getElementById("submitButton").disabled = false;
            document.getElementById("submitButton").innerHTML =
                "Join Now";
        }, 2000);
    }
}

function registerAgain(regId) {
    window.location.href = `/krishnashraya/chanters-club/confirmation.php?regId=${btoa(
        regId
    )}`;
}
